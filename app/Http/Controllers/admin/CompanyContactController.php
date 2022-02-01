<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyContact;
use Illuminate\Http\Request;

class CompanyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = CompanyContact::all();
        return view('admin.company.companyContacts', ['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.addCompanyContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving = new CompanyContact();
        $saving->email = $request->email;
        $saving->phone_number = $request->phone_number;
        $saving->street_name = $request->street_name;
        $saving->postal_code = $request->postal_code;
        $saving->district = $request->district;
        $saving->state = $request->state;
        $saving->country = $request->country;
        $saving->save();
        return redirect()->route('admin.companyContact');
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
        $contact = CompanyContact::find($id);
        return view('admin.company.editCompanyContact', ['contact'=>$contact]);
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
        $saving = CompanyContact::find($id);
        $saving->email = $request->email;
        $saving->phone_number = $request->phone_number;
        $saving->street_name = $request->street_name;
        $saving->postal_code = $request->postal_code;
        $saving->district = $request->district;
        $saving->state = $request->state;
        $saving->country = $request->country;
        $saving->save();
        return redirect()->route('admin.companyContact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = CompanyContact::find($id);
        $delete->delete();
        return redirect()->route('admin.companyContact');
    }
}
