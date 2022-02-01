<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = SliderImage::all();
        return view('admin.slider.sliderImage', ['images'=>$images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.addSliderImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new SliderImage();
        $saving->name = $request->name;
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/slider'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->save();
        return redirect()->route('admin.sliderImage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = SliderImage::find($id);
        return view('admin.slider.editSliderImage', ['images'=>$images]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $saving = SliderImage::find($id);
        $saving->name = $request->name;
        if($request->has('img')){
            $destination = 'storage/images/slider/'.$saving->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/slider'), $filename);
            // request()->img->delete(public_path('storage/images/slider'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
    }
        $saving->save();
        return redirect()->route('admin.sliderImage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = SliderImage::find($id);
        $destination = 'storage/images/slider/'.$image->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $image->delete();
        return redirect()->route('admin.sliderImage');
    }
}
