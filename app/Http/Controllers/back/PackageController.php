<?php

namespace App\Http\Controllers\back;

use App\Models\Package;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePackageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.package.index',[
            'packages' => Package::with('Category')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.package.create', [
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PackageRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('image');
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        $file->storeAs('back', $fileName, 'public');

        $data['image'] = $fileName;
        $data['slug'] = Str::slug($data['name']);

        Package::create($data);

        return redirect(url('admin/packages'))->with('success', 'Package has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.package.show',[
            'package' => Package::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.package.update', [
            'package' => Package::findOrFail($id),
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs('back/', $fileName, 'public');

            Storage::disk('public')->delete('back/' . $request->oldImg);
            $data['image'] = $fileName;
        } else {
            $data['image'] = $request->oldImg;
        }

        
        $data['slug'] = Str::slug($data['name']);

        Package::findOrFail($id)->update($data);

        return redirect(url('admin/packages'))->with('success', 'Package has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Package::findOrFail($id);
        Storage::disk('public')->delete('back/' . $data->image);
        $data->delete();

        return response()->json(['message' => 'Package has been deleted']);
    }
}
