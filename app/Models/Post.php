<?php

namespace App\Models;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


/**
 * Class Post
 * @package App\Model
 * @property $id
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
class Post extends Model
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
