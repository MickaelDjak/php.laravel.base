<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleBook extends Model
{
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(BibleBookType::class, 'type_code', 'code');
    }

    public function verses()
    {
        return $this->hasMany(BibleVerse::class, 'book_code', 'code');
    }
}
