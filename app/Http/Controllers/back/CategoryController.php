<?php

namespace App\Http\Controllers\back;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.category.category', [
            'categories' => Category::latest()->get()
        ]);
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('success', 'Category has been created');
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::findOrFail($id)->update($data);

        return back()->with('success', 'Category has been updated');
    }


    public function destroy(string $id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Category has been deleted');
    }
}
