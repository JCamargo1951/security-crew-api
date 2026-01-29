<?php
namespace App\Actions\Links;

use App\Interfaces\Links\CreatesLinks;
use App\Models\Link;

class CreateLink implements CreatesLinks
{
    public function handle(array $data): Link
    {
        return Link::create([
            'title' => $data['title'],
            'url' => $data['url'],
            'shortener_url' => $data['shortener_url'],
            'visibility' => $data['visibility'],
            'expires_at' => $data['expires_at'],
            'user_id' => $data['user_id'],
        ]);
    }
}