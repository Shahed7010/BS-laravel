<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->select(['Name', 'Id', 'Number'])
            ->withCount('items')
            ->with('children')
            ->get();

        return view('category', compact('categories'));
    }

    public function categoryItem()
    {
        $categories = Category::query()
            ->select(['Name', 'Id', 'Number'])
            ->withCount('items')
            ->orderBy('items_count', 'desc')
            ->get();

        return view('category_item', compact('categories'));
    }
}
