<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;

/**
 * Class Events
 * @package App\Model
 * @property $created_at
 * @property $updated_at
 * @property $title
 * @property $preview_text
 * @property $detail_text
 * @property $image
 * @property $author_id
 * @property $status
 * @property $slug
 */
class Event extends Model
{
    use Sluggable;
    use Taggable;

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
