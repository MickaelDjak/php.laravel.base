<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Preaching
 * @package App\Models
 *
 * @property  $id
 * @property  $title
 * @property  $preview_text
 * @property  $detail_text
 * @property  $image
 * @property  $audio_url
 * @property  $author_id
 * @property  $status
 * @property  $slug
 * @property  $created_at
 * @property  $updated_at
 */
class Preaching extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'maxLength' => 50,
                'maxLengthKeepWords' => true,
            ]
        ];
    }
}
