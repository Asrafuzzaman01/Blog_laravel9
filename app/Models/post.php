<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // use HasFactory;
    public function user(){

       return $this->belongsTo(user::class);

    }
    public function category(){

        return $this->belongsTo(category::class, 'cat_id');
 
     }
}
