<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleSection extends Model
{
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(BibleSectionType::class, 'code', 'type_code');
    }
}
