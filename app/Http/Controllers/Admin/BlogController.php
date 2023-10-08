<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //


    public function add_blogPage()
    {
        $blog = new Blog;
        $title = "Add New Blog";
        $url = url('admin/add_blog');

        return view('admin.blog.create', ['blog' => $blog, 'title' => $title, 'url' => $url]);
    }


    public function add_blog(Request $request)
    {

        $user = Auth::user();

        $blog = new Blog;

        $blog->blog_id = uniqid();
        $blog->title = $request['title'];
        $blog->img_link = $request['img_link'];
        $blog->content = $request['content'];
        $blog->keyword = $request['keyword'];
        $blog->author = $request['author'];
        $blog->author_link = $request['author_link'];
        $blog->date = $request['date'];
        $blog->inserter_name = $user->name;
        $blog->inserter_email = $user->email;
        $blog->save();

        return to_route('admin.blog_allPage')->with('success', 'New blog added successfully.');

        // echo "<pre>";
        // print_r($user->name);
        // print_r($user->email);
        // echo "</pre>";
    }

    public function blog_allPage()
    {

        $blogs = Blog::all();

        return view('admin.blog.index', ['blogs' => $blogs]);

    }

    public function blog_edit($id)
    {

        $blog = Blog::find($id);

        $title = "Update Blog Data";
        $url = url('admin/blog_update') . "/" . $id;

        return view('admin.blog.create', ['blog' => $blog, 'title' => $title, 'url' => $url]);

        // echo '<pre>';
        // print_r($blog->toArray());

    }

    public function blog_update($id, Request $request)
    {
        $user = Auth::user();

        $blog = Blog::find($id);

        $blog->title = $request['title'];
        $blog->img_link = $request['img_link'];
        $blog->content = $request['content'];
        $blog->keyword = $request['keyword'];
        $blog->author = $request['author'];
        $blog->author_link = $request['author_link'];
        $blog->date = $request['date'];
        $blog->inserter_name = $user->name;
        $blog->inserter_email = $user->email;
        $blog->save();

        // return back()->with('success', 'New blog added successfully.');
        return redirect(route('admin.blog_allPage'))->with('success', 'Update blog data successfully.');

        // echo '<pre>';
        // print_r($request->toArray());

    }

    public function blog_delete($id)
    {

        $blog = Blog::find($id)->delete();

        return back()->with('success-delete', 'Blog deleted successfully.');

        // echo '<pre>';
        // print_r($blog->toArray());

    }

    public function blog_status($status, $id)
    {

        $blog = Blog::find($id);
        if ($blog) {

            $blog->update(['status' => $status]);
            if ($status == 1) {
                return back()->with('success', 'Blog published successfully.');
            } else {
                return back()->with('success', 'Blog draft successfully.');
            }

        } else {

            return back()->with('success-delete', 'Blog not found.');

        }

    }

}