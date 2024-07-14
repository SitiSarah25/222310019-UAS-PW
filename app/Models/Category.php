<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function reports()
    {
        return $this->hasMany(Report::class, 'id_kategori_bencana');
    }
}
