<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Category;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();

        return view('admin.dashboard.index', ['messages' => $messages]);
    }

    public function trashed_message()
    {
        $messages = Message::onlyTrashed()->get(); // Fetch trashed messages

        return view('admin.dashboard.trashed', ['messages' => $messages]);
    }

    public function restore($id)
    {
        $message = Message::onlyTrashed()->findOrFail($id);
        $message->restore();

        return redirect()->route('admin.dashboard.trashed')->with('success', 'Message restored successfully');
    }

    public function forceDelete($id)
    {
        $message = Message::onlyTrashed()->findOrFail($id);
        $message->forceDelete();

        return redirect()->route('admin.dashboard.trashed')->with('success', 'Message deleted permanently');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'companyname' => 'nullable|max:255',
            'name' => 'required|min:5',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|min:11',
            'address' => 'required',
            'message' => 'required',
            'photo.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'companyname' => $request->companyname,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
            'created_at' => $request->date('Y-m-d H-i-s'),
        ];




        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $img) {
                $extension = $img->getClientOriginalExtension();
                $name = time() . '_' . uniqid() . '.' . $extension;
                $img->move(public_path('Uploads'), $name);
                $data['photo'] = $name;
            }
        };

        Message::create($data);


        return redirect()->back()->with(['message' => 'Your request was added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message, $id)
    {
        $message = Message::find($id);
        // @dd($message);
        return view('admin.dashboard.show', compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message, $id)
    {

        $message = Message::find($id);
        $message->delete();
        return redirect()->back()->with(['message' => 'Deleted Succesfully']);
    }
}
