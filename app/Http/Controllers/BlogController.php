<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy("created_at", "DESC")->paginate(10); // default value 15
        
        return view("blog.index", [
            "blogs" => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string"
        ]);

        $data["user_id"] = 1; // Assuming a static user ID

        Blog::create($data);

        return to_route("blog.index")->with("success", "Blog created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view("blog.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view("blog.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
