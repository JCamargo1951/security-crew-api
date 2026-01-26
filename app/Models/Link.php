<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory, HasUuids, HasSlug;

    protected $fillable = [
        'title',
        'url',
        'shortener_url',
        'visibility',
        'password',
        'expires_at',
        'user_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->usingLanguage('es');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
