<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog(Request $request) {
        $incomingFields = $request->validate([
            'blogtitle' => 'required',
            'blogcontent' => 'required',

        ]);

        $incomingFields['blog_title'] = strip_tags($incomingFields['blogtitle']);
        $incomingFields['blog_content'] = strip_tags($incomingFields['blogcontent']);
        $incomingFields['user_id'] = auth()->id();
        Blog::create($incomingFields);
        return redirect('/');
    }

    public function editBlog(Blog $blog) {
        if (auth()->user()->id !== $blog['user_id']) {
            return redirect('/');
        }

        return view('blog.edit', ['blog' => $blog]);
    }

    public function updateBlog(Blog $blog, Request $request) {
        if (auth()->user()->id !== $blog['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
             'blogtitle' => 'required',
             'blogcontent' => 'required',
        ]);

        $incomingFields['blog_title'] = strip_tags($incomingFields['blogtitle']);
        $incomingFields['blog_content'] = strip_tags($incomingFields['blogcontent']);

        $blog->update($incomingFields);
        return redirect('/');
    }

    public function deleteBlog(Blog $blog) {
        if (auth()->user()->id === $blog['user_id']) {
            $blog->delete();
        }
        return redirect('/');
    }

    public function showAllBlogs(Blog $blog) {
        $data['blogs'] = $blogs = Blog::paginate(25);
        return view('welcome', $data);
    }
}
