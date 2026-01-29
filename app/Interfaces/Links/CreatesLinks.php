<?php

namespace App\Interfaces\Links;

use App\Models\Link;

interface CreatesLinks
{
    public function handle(array $data): Link;
}
