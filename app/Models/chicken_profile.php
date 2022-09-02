<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chicken_profile extends Model
{
    use HasFactory;
    protected $table ='chicken_profile';
    protected $fillable = [
        'ID',
        'Title',
        'Permalink',
        'ImageURL',
        'ImageTitle',
        'ImageFeatured',
        'animal_name',
        'eyecolor',
        'colors',
        'markings',
        'dateofbirth',
        'gender',
        'height',
        'weight',
        'owner',
        'coowner',
        'Breeding_Institutions',
        'iagd_no',
        'generalInformationTab',
        'generalInformation',
        'age',
        'nameofsire',
        'nameofdam',
        'breed',
        'colorOfFeet',
        'typeOfComb',
        'nameOfCock',
        'nameOfHen',
        'Slug',
        'CommentStatus',
        'PingStatus',
        'PostModifiedDate',
        'locationdetails',
        'PetType'
    ];
}
