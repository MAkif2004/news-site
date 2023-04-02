<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (empty(Auth::user()->is_admin) || Auth::user()->is_admin === 0) {
            return redirect('/home');
        }
        $posts = Post::get();
        return view('upload.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (empty(Auth::user()->is_admin) || Auth::user()->is_admin === 0) {
            return redirect('/home');
        }
        return view('upload.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Create a new post and associate it with the user and image
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;
        $image = Image::create($requestData);

        $post = new Post([
            'title' => $requestData['name'],
            'description' => $requestData['desc'],
            'user_id' => $userId,
            'image_id' => $image->id,
        ]);

        // Save the post
        $post->save();

        return redirect('upload')->with('flash_message', 'Image Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
