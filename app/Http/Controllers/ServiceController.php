<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.dashboard.services.index', compact('services'));
    }


    public function trashed_message()
    {
        $services = Service::onlyTrashed()->get(); // Fetch trashed categories

        return view('admin.dashboard.services.trashed', ['services' => $services]);
    }

    public function restore($id)
    {
        $services = Service::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $services->restore();

        return redirect()->back()->with('success', 'Category restored successfully');
    }

    public function forceDelete($id)
    {
        $services = Service::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $services->forceDelete();

        return redirect()->route('admin.service.trashed')->with('success', 'Category deleted permanently');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->title_service;

        $this->validate($request, [
            'title_service' => 'required|min:3',
            'content_service' => 'required',
            'image_service' => 'mimes:png,jpg',
        ]);

        if ($request->hasFile('image_service')) {
            $file = $request->file('image_service');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/service', $fileName);
        }

        Service::create([
            'title_service' => $request->title_service,
            'content_service' => $request->content_service,
            'image_service' => $fileName,
        ]);


        return redirect()->route('admin.service.index')->with(['status' => 'Service ' . $name . ' Added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.dashboard.services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.dashboard.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $name = $service->title_service;

        // Validate the request
        $request->validate([
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the validation rules as needed
            // Add other validation rules for other fields if necessary
        ]);

        // Handle file upload
        if ($request->hasFile('image_service')) {
            $file = $request->file('image_service');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->move('uploads/service', $fileName);

            // Delete the old image if it exists
            if ($service->image_service) {
                // Check if the file exists before deleting
                if (Storage::exists($service->image_service)) {
                    Storage::delete($service->image_service);
                }
            }

            // Save the new image path
            $service->image_service = $fileName;
        }

        // Update the rest of the category details
        $service->update($request->except('image_service'));

        return redirect()->route('admin.service.index')->with(['status' => 'Service ' . $name . ' Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $name = $service->title_service;
        $service->delete();
        return redirect()->route('admin.service.index')->with(['status' => 'Service ' . $name . ' Deleted Successfully']);
    }
}
