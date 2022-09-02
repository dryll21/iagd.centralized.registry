<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parrot_profile extends Model
{
    use HasFactory;

    protected $table ='parrot_profile';
    protected $fillable = [
        'ID',
        'Title',
        'Content',
        'Excerpt',
        'Date',
        'PetType',
        'Permalink',
        'ImageURL',
        'ImageTitle',
        'ImageCaption',
        'ImageDescription',
        'ImageAltText',
        'ImageFeatured',
        'AttachmentURL',
        'a3pvcactivated',
        'infotab',
        'info',
        'animal_name',
        'eyecolor',
        'colors',
        'markings',
        'dateofbirth',
        'locationdetails',
        'gender',
        'height',
        'weight',
        'owner',
        'coowner',
        'Breeding_Institutions',
        'iagd_no',
        'generalinformationtab',
        'generalinformation',
        'age',
        'nameofsire',
        'nameofdam',
        'breed',
        'yoastwpseoestimatedreadingtimeminutes',
        'Status',
        'AuthorID',
        'AuthorUsername',
        'AuthorEmail',
        'AuthorFirstName',
        'AuthorLastName',
        'Slug',
        'Format',
        'Template',
        'Parent',
        'ParentSlug',
        'Order_no',
        'CommentStatus',
        'PingStatus',
        'PostModifiedDate'
    ];


}
