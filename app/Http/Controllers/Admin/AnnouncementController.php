<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Announcement;

class AnnouncementController extends Controller
{

    public function announcementPage()
    {
        $announce = announcement::all();
        return view('admin.announcement.index', ['announce' => $announce]);
    }

    public function announcementAddPage()
    {
        $announce = new announcement;

        $title = "New Announcement Data";
        $url = url('admin/announcement_add');

        return view('admin.announcement.create', ['announce' => $announce, 'title' => $title, 'url' => $url]);
    }

    public function announcementAdd(Request $request)
    {
        $announce = new announcement;

        $announce->message = $request['message'];
        $announce->link = $request['link'];
        $announce->save();

        return to_route('admin.announcementPage')->with('success', 'New announcement added successfully.');

    }

    public function announcement_edit($id)
    {
        $announce = announcement::find($id);

        $title = "Update Announcement Data";
        $url = url('admin/announce_update') . "/" . $id;

        return view('admin.announcement.create', ['announce' => $announce, 'title' => $title, 'url' => $url]);

    }

    public function announcement_update(Request $request, $id)
    {
        $announce = announcement::find($id);

        $announce->message = $request['message'];
        $announce->link = $request['link'];
        $announce->save();

        return to_route('admin.announcementPage')->with('success', 'Announcement update successfully.');

    }

    public function announcement_delete($id)
    {
        $announce = announcement::find($id)->delete();

        return back()->with('success-delete', 'Announcement deleted successfully.');

    }

    public function announcement_status($status, $id)
    {
        $announce = announcement::find($id);
        if ($announce) {

            $announce->update(['status' => $status]);

            if ($status == 1) {
                return back()->with('success', 'Announcement published successfully.');
            } else {
                return back()->with('success', 'Announcement draft successfully.');
            }

        } else {

            return back()->with('success-delete', 'Announcement not found.');

        }

    }

    public function subscribers()
    {

        $subscribers = Subscriber::all();

        return view('admin.subscriber.index', ['subscribers' => $subscribers]);

    }


}