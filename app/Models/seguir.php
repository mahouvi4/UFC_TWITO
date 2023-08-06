<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguir extends Model
{
    use HasFactory;
    protected $seg = "publications";
    protected $sag = [];

    public function prof(){
        return $this->belongsTo(professeur::class,'id_prof','id');
    }

    
    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    
}
