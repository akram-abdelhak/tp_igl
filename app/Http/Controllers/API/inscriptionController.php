<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\inscription ; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Resources\absence as inscriptionResource ;
use Validator;

class inscriptionController extends Controller
{
    /**
     * aficher l inscription 
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return inscriptionResource::collection(inscription::where('etudiant_id',Auth::user()->id )->get()) ;
    }



     /**
     * Store a new inscription 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id ; 

        $validator = Validator::make($request->all(), [ 
    
            'firstName' =>  ['required', 'string', 'max:255'], 
            'lastName' =>  ['required', 'string', 'max:255'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:inscriptions'], 
            'matricule' =>['required' , "string","min:6"] ,
            'Numero' => ['required','string','size:10' ],
            'codepostal' => ['required','numeric'] , 
            'AnnéeEude' => ['string'] , 
            'address' => ['required', 'string'] ,
            'file1'=>['required' ] , 
            'file2'=>['required' ] , 
            'city' => ['required', 'string'] ,
            'photo'=>['required','image'] , 
        ]);

    if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['etudiant_id' ]= $id  ; 
        $file_name1 = 'file1_user'.$id ; 
        $path = $request->file('file1')->move(public_path("/") ,$file_name1) ;
        $url1 = url('/' , $file_name1) ; 
        $input['file1'] = $url1 ; 
        $file_name2 = 'file2_user'.$id ; 
        $path = $request->file('file2')->move(public_path("/") ,$file_name2) ;
        $url2 = url('/' , $file_name2) ; 
        $input['file2'] = $url2; 
        $photo = 'photo_user'.$id ; 
        $path = $request->file('photo')->move(public_path("/photos") ,$photo) ;
        $url = url('/photos' , $photo) ; 
        $input['photo'] = $url; 
        $ins = inscription::create($input); 
        $success ="Votre inscription à été bien entregistrée" ;
        return response()->json(['status'=>$success , 'url du fichier 1'=>$url1 , 'url du fichier 2'=>$url2 ,'url de la photo'=>$url] , 200 ) ; 
        
    }

   
    /**
     * upload files .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadFile($id)
    { if($id==1 ) {
        return response()-> download(public_path('file1.pdf'),'fichier1') ; 
    }else {
        return response()-> download(public_path('file2.pdf'),'fichier2') ; 
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
