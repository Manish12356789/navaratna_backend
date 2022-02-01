<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PanchakarmaTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PanchakarmaTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = PanchakarmaTypes::all();
        return view('admin.panchakarma.panchakarma', ['types'=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.panchakarma.addPanchakarma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new PanchakarmaTypes();
        $saving->title = $request->title;
        $saving->description = $request->description;        
       
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/panchakarma'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
        $saving->save();
        return redirect()->route('admin.panchakarma');
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
        $panchakarma = PanchakarmaTypes::find($id);
        return view('admin.panchakarma.editPanchakarma', ['panchakarma'=>$panchakarma]);
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
        $saving = PanchakarmaTypes::find($id);
        $saving->title = $request->title;
        $saving->description = $request->description;        
        if($request->has('img')){
            $destination = 'storage/images/panchakarma/'.$saving->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        if(request()->img){
            $filename = time() . '.' . request()->img->getClientOriginalExtension();
            request()->img->move(public_path('storage/images/panchakarma'), $filename);
            $saving->image = $filename;
        }else
        {
            $saving->image = 'file';
        }
    }
        $saving->save();
        return redirect()->route('admin.panchakarma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = PanchakarmaTypes::find($id);
        $destination = 'storage/images/panchakarma/'.$image->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $image->delete();
        return redirect()->route('admin.panchakarma');
    }
}
