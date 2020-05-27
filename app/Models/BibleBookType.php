<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleBookType extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'code';

    public function book()
    {
        return $this->hasMany(BibleBook::class, 'type_code', 'code');
    }
}
