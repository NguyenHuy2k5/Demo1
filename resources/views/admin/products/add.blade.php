@extends('admin.master')
@section('content')
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <!--begin::Quick Example-->
              <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header"><div class="card-title">Quick Example</div></div>
                <!--end::Header-->
                <!--begin::Form-->
                <form>
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                      />
                      <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="input-group mb-3">
                      <input type="file" class="form-control" id="inputGroupFile02" />
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                  </div>
                  <!--end::Body-->
                  <!--begin::Footer-->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  <!--end::Footer-->
                </form>
                <!--end::Form-->
              </div>
              <!--end::Quick Example-->
              <!--begin::Input Group-->
                
            </div>
            <!--end::Col-->
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>

@endsection