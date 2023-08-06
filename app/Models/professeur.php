<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class professeur extends Model
{
    use HasFactory;
    use softDeletes;

    protected $prof = "professeurs";
    protected $praf = [];

    public function ufc(){
        return $this->belongsTo(ufc::class,'id_ufc','id');
    }
    
}
