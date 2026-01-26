<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory, HasUuids;

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
}
