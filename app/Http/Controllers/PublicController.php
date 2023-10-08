<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Announcement;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PublicController extends Controller
{
    //

    public function welcome()
    {

        $announcement = announcement::where('status', 1)
            ->latest()
            ->first();

        $blogs = Blog::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('public.welcome', ['blogs' => $blogs, 'announcement' => $announcement]);

        // p($announcement);

    }

    public function about()
    {

        return view('public.about');

    }

    public function services()
    {

        return view('public.services');

    }

    public function polytechnic()
    {

        return view('public.products.polytechnic');

    }

    public function collage()
    {

        return view('public.products.collage');

    }

    public function school()
    {

        return view('public.products.school');

    }

    public function shop()
    {

        return view('public.products.shop');

    }

    public function ticket()
    {

        return view('public.products.ticket');

    }

    public function ecommerce()
    {

        return view('public.products.ecommerce');

    }

    public function custom()
    {

        return view('public.products.custom');

    }

    public function blog()
    {

        $blogs = Blog::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('public.blog', ['blogs' => $blogs]);

    }

    public function blog_single($id)
    {

        $blog = Blog::where('blog_id', $id)->first();

        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return view('public.blog_single', ['blog' => $blog, 'blogs' => $blogs]);

    }

    public function contactPage()
    {

        return view('public.contact');

    }

    public function contact(Request $request)
    {
        $email = $request['email'];

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'emailMessage' => $request['message'], // Rename the variable here
        ];

        Mail::send('mail.contact_details', $data, function ($message) use ($email) {
            $message->to($email)
                ->cc('support@friendsit.xyz') // Adding CC recipient
                ->subject('Important message received');
        });

    }

    public function subscribe(Request $request)
    {

        // Validate the email input
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('subscribers', 'email'),
            ],
        ]);

        // Check if the email already exists
        if (Subscriber::where('email', $request['email'])->exists()) {
            return redirect()->route('welcome')->with('error', 'Email is already subscribed.');
        }

        $subscriber = new Subscriber;
        $subscriber->email = $request['email'];
        $subscriber->save();

        session()->flash('success', 'You have subscribe successfully!');

        return redirect()->route('welcome');


    }

    public function privacy()
    {
        return view('public.privacy_policy');
    }

    public function missionVision()
    {

        return view('public.mission_vision');
    }


}
