<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email','matricule','address' , 'Numero' , 'codepostal','city' ,'photo','file1','file2','etudiant_id','AnnéeEtude',
    ];
}
