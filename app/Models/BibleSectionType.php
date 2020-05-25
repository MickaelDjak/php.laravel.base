<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleSectionType extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'code';
}
