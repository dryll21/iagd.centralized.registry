<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Obituary extends Model
{
    // use HasFactory;
    protected $table ='obituary_pets';
    protected $primaryKey = 'ob_id';
    protected $fillable = ['ob_id','iagd_no', 'animal_name','PetType','Date_of_death'];
}
