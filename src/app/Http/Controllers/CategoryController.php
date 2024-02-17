<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('confirm', compact('categories'));
    }
    
    public function store(ContactRequest $request)
    {
    $category = $request->only(['content']);
    Category::create($category);
    return view('thanks');
    }
}
