<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.dashboard.comments.index', compact('comments'));
    }


    public function trashed_message()
    {
        $comments = Comment::onlyTrashed()->get(); // Fetch trashed categories

        return view('admin.dashboard.comments.trashed', ['comments' => $comments]);
    }

    public function restore($id)
    {
        $comments = Comment::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $comments->restore();

        return redirect()->back()->with('success', 'Comment restored successfully');
    }

    public function forceDelete($id)
    {
        $comments = Comment::onlyTrashed()->findOrFail($id); // Retrieve the trashed category by its ID
        $comments->forceDelete();

        return redirect()->route('admin.comment.trashed')->with('success', 'Comment deleted permanently');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->comment_user;

        $this->validate($request, [
            'comment_title' => 'required|min:3',
            'comment_content' => 'required',
            'comment_users' => 'required',
            'comment_image' => 'mimes:png,jpg',
        ]);

        if ($request->hasFile('comment_image')) {
            $file = $request->file('comment_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/comments', $fileName);
        }

        Comment::create([
            'comment_title' => $request->comment_title,
            'comment_content' => $request->comment_content,
            'comment_users' => $request->comment_users,
            'comment_image' => $fileName,
        ]);


        return redirect()->route('admin.comment.index')->with(['status' => 'comment ' . $name . ' Added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('admin.dashboard.comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('admin.dashboard.comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $name = $comment->comment_title;

        // Validate the request
        $request->validate([
            'comment_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('comment_image')) {
            $file = $request->file('comment_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->move('uploads/comments', $fileName);

            // Delete the old image if it exists
            if ($comment->comment_image) {
                // Check if the file exists before deleting
                if (Storage::exists($comment->comment_image)) {
                    Storage::delete($comment->comment_image);
                }
            }

            // Save the new image path
            $comment->comment_image = $fileName;
        }

        // Update the rest of the category details
        $comment->update($request->except('comment_image'));

        return redirect()->route('admin.comment.index')->with(['status' => 'comment ' . $name . ' Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $name = $comment->comment_title;
        $comment->delete();
        return redirect()->route('admin.comment.index')->with(['status' => 'comment ' . $name . ' Deleted Successfully']);
    }
}
