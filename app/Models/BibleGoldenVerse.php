<?php

namespace App\Models;

use App\Services\BibleFragmentParser\Parser;
use Illuminate\Database\Eloquent\Model;

class BibleGoldenVerse extends Model
{

    public function getParsedFragmentAttribute()
    {
        return Parser::parse($this->fragment);
    }

    public function getChapterAttribute()
    {
        return Parser::parse($this->fragment)->chapter;
    }

    public function getVerseFromAttribute()
    {
        return Parser::parse($this->fragment)->verseFrom;
    }

    public function getVerseToAttribute()
    {
        return Parser::parse($this->fragment)->verseTo;
    }
}
