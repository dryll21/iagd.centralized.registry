<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class animals extends Model
{
    protected $table = 'iagd_list';
    protected $fillable = ['PetType', 'iagd_no'];
}
