<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'page';

    protected $fillable = [
        'lang_id',
        'key',
        'name',
        'title',
        'slug',
        'description',
        'keywords',
    ];

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }

    public static function getTranslationContentByKeyAndLangCode($key, $code)
    {
        $lang = Lang::where('code', $code)->first();
        $page = Page::where('key', $key)->first();
        $translation = $page->getTranslation($lang);
        return $translation->content;
    }
}
