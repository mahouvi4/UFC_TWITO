<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responx_comment extends Model
{
    use HasFactory;
    protected $rep1 = "responx_comments";
    protected $rep2 = [];

    public function prof(){
        return $this->belongsTo(professeur::class,'id_prof','id');
    }

    
    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }


    

}