<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function children()
    {
        return $this->belongsToMany(Category::class, 'catetory_relations', 'ParentcategoryId', 'categoryId', 'Id', 'Id')
            ->with('items:Id,Number')
            ->with('children');
    }
    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_category_relations', 'categoryId', 'ItemNumber', 'Id', 'Number');
    }
}
