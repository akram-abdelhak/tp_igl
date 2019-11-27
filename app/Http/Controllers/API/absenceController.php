<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Requests ; 
use App\Http\Resources\absence as absenceResource;
use App\absence;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use App\User; 
use Illuminate\Support\Facades\Session;



class absenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*retourner tt les absences de l étudiant connecté */

       return absenceResource::collection(absence::where('etudiant_id',Auth::user()->id )->get()) ;

    }


      /**
     * add justification .
     *
     * @return \Illuminate\Http\Response
     */
        public function addjustif(Request $request)
    {
        $id_abs  = request('id_abs') ; // id de l absence 
        $file_name = 'justification'.$id_abs ; 
        $path = $request->file('doc')->move(public_path("/") ,$file_name) ;
        $url = url('/' , $file_name) ; 
        absence::where('id',$id_abs)->update(['justificatif' => $url ]);
    
        return response()->json(['url'=>$url] , 200 ) ; 

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
