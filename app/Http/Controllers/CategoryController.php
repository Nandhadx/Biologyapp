<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required|max:50',
            'Description' => 'nullable',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function edit(Request $request)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $request->validate([
            'CategoryName' => 'required|max:50',
            'Description' => 'nullable',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }


    public function delete(Request $request, Category $category)
    {
        // var_dump($request->id);exit();
        try {
            $category = Category::findOrFail($request->id);
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting category: ' . $e->getMessage());
            return redirect()->route('categories.index')->with('error', 'An error occurred while deleting the category.');
        }
    }

}
