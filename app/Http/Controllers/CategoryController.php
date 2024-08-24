<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::all();
        return view('admin.dashboard.categoryes.index', compact('categorys'));
    }

    public function trashed_message()
    {
        $categories = Category::onlyTrashed()->get();
        return view('admin.dashboard.categoryes.trashed', ['categories' => $categories]);
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return redirect()->back()->with('success', 'Category restored successfully');
    }

    public function forceDelete($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();
        return redirect()->back()->with('success', 'Category deleted permanently');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.categoryes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->category_name;

        $this->validate($request, [
            'category_name' => 'required|min:3',
            'category_price' => 'required|numeric',
            'category_description' => 'required',
            'category_quantity' => 'numeric',
            'category_image' => 'mimes:png,jpg',
        ]);

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/categories', $fileName);
        }

        Category::create([
            'category_name' => $request->category_name,
            'category_price' => $request->category_price,
            'category_description' => $request->category_description,
            'category_quantity' => $request->category_quantity,
            'category_image' => $fileName,
        ]);


        return redirect()->route('admin.categorys.index')->with(['status' => 'Category ' . $name . ' Added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.dashboard.categoryes.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.dashboard.categoryes.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $name = $category->category_name;

        // Validate the request
        $request->validate([
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the validation rules as needed
            // Add other validation rules for other fields if necessary
        ]);

        // Handle file upload
        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->move('uploads/categories', $fileName);

            // Delete the old image if it exists
            if ($category->category_image) {
                // Check if the file exists before deleting
                if (Storage::exists($category->category_image)) {
                    Storage::delete($category->category_image);
                }
            }

            // Save the new image path
            $category->category_image = $fileName;
        }

        // Update the rest of the category details
        $category->update($request->except('category_image'));

        return redirect()->route('admin.categorys.index')->with(['status' => 'Category ' . $name . ' Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $name = $category->category_name;
        $category->delete();
        return redirect()->route('admin.categorys.index')->with(['status' => 'Category ' . $name . ' Deleted Successfully']);
    }
}
