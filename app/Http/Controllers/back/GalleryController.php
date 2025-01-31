<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('back.gallery.index', [
            'galleries' => Gallery::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'title' => 'required|string|max:255',
        'image_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('admin/galleries', 'public');

        Gallery::create([
            'title' => $data['title'],
            'image_path' => $imagePath,
        ]);

        return back()->with('success', 'Gallery has been created');   
 }

   public function update(Request $request, string $id)
{
    $gallery = Gallery::findOrFail($id); 

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image_path')) {
        if ($gallery->image_path && file_exists(storage_path('app/public/' . $gallery->image_path))) {
            unlink(storage_path('app/public/' . $gallery->image_path));
        }

        $data['image_path'] = $request->file('image_path')->store('galleries', 'public');
    }

    $gallery->update($data);

    return back()->with('success', 'Gallery has been updated successfully');
}


    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

    // Hapus file gambar jika ada
    if ($gallery->image_path && file_exists(storage_path('app/public/' . $gallery->image_path))) {
        unlink(storage_path('app/public/' . $gallery->image_path));
    }

    // Hapus data dari database
    $gallery->delete();

    return back()->with('success', 'Gallery has been deleted successfully');
    }
}
