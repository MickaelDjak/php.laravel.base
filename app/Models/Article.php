<?php

namespace App\Models;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


/**
 * Class Article
 * @package App\Model
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $title
 * @property $overview
 * @property $text
 * @property $image
 * @property $audio
 * @property $video
 * @property $slides
 * @property $type
 * @property $author_id
 * @property $status
 * @property $slug
 */
class Article extends Model
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
