@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Company Contacts</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Company</a></li>
          <li class="breadcrumb-item active" aria-current="page">contacts</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Company Contact Details</h4>
                @if ($contacts->count() < 1)                    
                  <a href="{{route('admin.companyContact.add')}}" class="btn btn-success">Add New</a>
                  @endif

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Country</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Postal Code</th>
                        <th>Street Name</th>
                        <th>Email </th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->country}}</td>
                                <td>{{$contact->state}}</td>
                                <td>{{$contact->district}}</td>
                                <td>{{$contact->postal_code}}</td>
                                <td>{{$contact->street_name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone_number}}</td>
                                <td>
                                  <a href="{{route('admin.companyContact.edit', ['id'=>$contact->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.companyContact.destroy', ['id'=>$contact->id])}}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
