@extends('layouts.admin')

@section('content')
    
<div class="content-wrapper">
    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Message from Users</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> User Name </th>
                    <th> User Email </th>
                    <th> Subject </th>
                    <th> Message </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($contacts as $contact)
                  <tr>
                    <td>
                      <span>{{$contact->name}}</span>
                    </td>
                    <td> {{$contact->email}} </td>
                    <td> {{$contact->subject}} </td>
                    <td>  {{$contact->message}} </td>
                    <td>
                      <a href="{{route('admin.contact.destroy')}}"><i class="remove mdi mdi-close-box"></i></a>
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