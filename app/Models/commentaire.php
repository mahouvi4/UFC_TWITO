<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    use HasFactory;
    protected $com1 = "commentaires";
    protected $com2 = [];

    public function prof(){
        return $this->belongsTo(professeur::class,'id_prof','id');
    }

    
    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }


    public function publication(){
        return $this->belongsTo(publication::class,'id_publication','id');
    }

    public function responsive(){
        return $this->hasMany(responx_comment::class,'id_commentaire','id');
    }


}