<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    protected $lik = "likes";
    protected $lok = "[]";


    public function prof(){
        return $this->belongsTo(professeur::class,'id_prof','id');
    }

    
    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }


    public function publication(){
        return $this->belongsTo(publication::class,'id_publication','id');
    }
}
