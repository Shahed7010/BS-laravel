<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $table = 'item';

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'item_category_relations', 'ItemNumber', 'categoryId', 'Number', 'Id');
    }
}
