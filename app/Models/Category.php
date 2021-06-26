<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Category extends Model
{
    use HasFactory;
    protected $table = "categorys";
    public function documents()
    {
        return $this->hasMany(Document::class, 'category_id', 'id');
    }
}
