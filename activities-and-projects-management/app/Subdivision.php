<?php
/**
 * Created by PhpStorm.
 * User: nkalla
 * Date: 11/04/18
 * Time: 11:49
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    protected $table = 'subdivisions';

    protected $fillable = ['code','name','head_quarter', 'division'];
}