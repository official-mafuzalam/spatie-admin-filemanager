<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('admin.image.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/' . date('d_m_Y')), $imageName);

        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }


    public function images_all()
    {

        $imagePath = public_path('images');
        $folderNames = array_diff(scandir($imagePath), ['.', '..']);

        $folders = [];

        foreach ($folderNames as $folderName) {
            $folderPath = $imagePath . '/' . $folderName;
            if (is_dir($folderPath)) {
                $images = array_diff(scandir($folderPath), ['.', '..']);

                $folders[] = [
                    'name' => $folderName,
                    'images' => $images,
                ];
            }
        }



        return view('admin.image.index', ['folders' => $folders]);


    }


    public function deleteImage($folder, $image)
    {
        $imagePath = public_path('images/' . $folder . '/' . $image);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // You might also want to remove the image record from your database here

        return back()->with('success-delete', 'Image deleted successfully.');
    }


    public function deleteFolder($folderName)
    {
        // Delete the folder and its contents
        $folderPath = public_path('images/' . $folderName);
        if (File::exists($folderPath)) {
            File::deleteDirectory($folderPath);
        }

        // You can also remove the folder from the database if necessary

        return redirect()->back()->with('success-delete', 'Folder deleted successfully');
    }


}
