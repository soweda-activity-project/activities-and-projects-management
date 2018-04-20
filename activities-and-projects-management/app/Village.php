<?php
/**
 * Created by PhpStorm.
 * User: nkalla
 * Date: 11/04/18
 * Time: 14:37
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';

    protected $fillable = ['code','name', 'division', 'divisionname', 'subdivision', 'subdivisionname', 'latitude', 'longitude','created_at', 'updated_at'];

}