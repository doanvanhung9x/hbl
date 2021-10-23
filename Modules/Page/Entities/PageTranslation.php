<?php

namespace Modules\Page\Entities;

use Modules\Support\Eloquent\TranslationModel;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PageTranslation extends TranslationModel
{
    use HasSlug;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'body', 'slug'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
