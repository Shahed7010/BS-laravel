<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->select(['Name', 'Id', 'Number'])
            ->with('items:Id,Number')
            ->with('children')
            ->get();

        return view('category', compact('categories'));
    }

    public function categoryItem()
    {
        $categories = Category::query()
            ->select(['Name', 'Id', 'Number'])
            ->with('items:Id,Number')
            ->get()
            ->each(fn ($cat) => $cat->items_count = count($cat->items))
            ->sortByDesc('items_count');

        return view('category_item', compact('categories'));
    }
}
