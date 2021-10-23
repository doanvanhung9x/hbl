<?php

namespace Modules\Post\Entities;

use Modules\Support\Eloquent\TranslationModel;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PostTranslation extends TranslationModel
{
    use HasSlug;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
