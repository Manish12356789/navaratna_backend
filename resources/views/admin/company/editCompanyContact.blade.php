@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Company Contacts</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">contacts</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Company Contact Details</h4>
                <form class="form-sample" action="{{ route('admin.companyContact.update', ['id'=>$contact->id]) }}" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" id="email" value="{{$contact->email}}" required class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                              <input id="phone" name="phone" type="number" value="{{$contact->phone}}" required class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                 
                  <p class="card-description"> Address </p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label for="street" class="col-sm-3 col-form-label">Street Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="street" id="street" value="{{$contact->street_name}}" required class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label id="district" class="col-sm-3 col-form-label">District</label>
                        <div class="col-sm-9">
                          <input type="text" name="district" value="{{$contact->district}}" required id="district" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="postal" class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                          <input type="number" name="postal" value="{{$contact->postal}}" required id="postal"  class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                          <input type="text" name="state" value="{{$contact->state}}" required id="state" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="country" class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                          <select name="country" id="country" value="{{$contact->country}}" class="form-control">
                            <option>Nepal</option>
                            <option>India</option>
                            <option>China</option>
                            <option>Pakistan</option>
                          </select>
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