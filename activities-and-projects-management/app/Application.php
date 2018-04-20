<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $table = 'applications';

    protected $fillable = [ 'b_id',
        'divison', 'subdivision', 'village',
        'applicant','namerepresentative0', 'emailrepresentative0', 'telrepresentative0',
        'namerepresentative1', 'emailrepresentative1', 'telrepresentative1','namerepresentative2', 'emailrepresentative2', 'telrepresentative2',
        'description', 'matricule', 'created_at', 'updated_at',
    ];

}
