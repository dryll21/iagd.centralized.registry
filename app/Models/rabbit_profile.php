<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rabbit_profile extends Model
{
    use HasFactory;
    protected $table ='rabbit_profile';
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
        'rabbitgallery',
        'infotab',
        'info',
        'animal_name',
        'eyecolor',
        'color',
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
        'yoastwpseocontentscore',
        'rabbitcertificatetab',
        'rabbitcertificate',
        'certificate',
        'pedigreechartonofftab',
        'pedigreechartonoff',
        'pedigreeonoff',
        'firstgendogtab',
        'firstgendog',
        'firstgen',
        'firstgenmalesidetab',
        'firstgenmaleside',
        'gen2ma',
        'gen3mb1',
        'gen3mb2',
        'hide4thgenm',
        'gen4mc1',
        'gen4mc2',
        'gen4mc3',
        'gen4mc4',
        'hide5thgenm',
        'firstgenfemalesidetab',
        'firstgenfemaleside',
        'gen2fa',
        'gen3fb1',
        'gen3fb2',
        'hide4thgenf',
        'gen4fc1',
        'gen4fc2',
        'gen4fc3',
        'gen4fc4',
        'hide5thgenf',
        'wpoldslug',
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
