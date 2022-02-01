@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">User Contact Messages</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Contacts</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Contact of {{$contact->name}}</h4>
                <form class="form-sample" action="{{ route('admin.contact.update', ['id'=>$contact->id]) }}" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9">
                                <input id="name" name="name" type="text" value="{{$contact->name}}" required class="form-control" />
                              </div>
                            </div>
                          </div>
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" id="email" value="{{$contact->email}}" required class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                              <label for="subject" class="col-sm-3 col-form-label">Subject</label>
                              <div class="col-sm-9">
                                <input type="subject" name="subject" id="subject" value="{{$contact->subject}}" required class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label for="message" class="col-sm-3 col-form-label">Message</label>
                              <div class="col-sm-9">
                                <textarea name="message" id="message" required class="form-control" > {{$contact->message}}</textarea>
                              </div>
                            </div>
                          </div>
                    </div>
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection