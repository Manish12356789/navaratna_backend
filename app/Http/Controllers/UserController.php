<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\CompanyContact;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\PanchakarmaTypes;
use App\Models\Service;
use App\Models\Treatment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $about = AboutUs::get();
        // dd($about);
        $services = Service::all();
        // dd($services);
        return view('welcome', compact('about', 'services'));
    }

    public function about()
    {
        $about = AboutUs::get();
        return view('about', compact('about'));
    }

    public function service($id)
    {
        $service = Service::find($id);
        return view('service', compact('service'));
    }

    public function panchakarma()
    {
        $types = PanchakarmaTypes::all();
        return view('panchakarma', ['types'=>$types]);
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        $categories = GalleryCategory::all();
        return view('gallery', ['galleries'=>$galleries, 'categories'=>$categories]);
    }

    public function gallery_filter($id)
    {
        $galleries = Gallery::where('category_id', $id)->get();
        $categories = GalleryCategory::all();
        return view('gallery', ['galleries'=>$galleries, 'categories'=>$categories]);
    }

    public function contact()
    {
        $contact = CompanyContact::get();
        return view('contact', compact('contact'));
    }

    public function save_contact(Request $request)
    {
        $saving = new Contact();
        $saving->name = $request->name;
        $saving->email = $request->email;
        $saving->phone = $request->phone;
        $saving->message = $request->message;
        $saving->save();
        return redirect()->route('home');
    }

    public function treatment($id)
    {
        $treatment = Treatment::find($id);
        return view('treatment', ['treatment'=>$treatment]);
    }
}
