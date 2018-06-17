<?php

namespace App\Models\Traits;

class Orderable
{
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
