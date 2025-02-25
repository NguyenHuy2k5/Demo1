@extends('admin.master')
@section('title')
  Huy Store | Add
@endsection
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
                <form method="post" action="{{route('product.store')}}">
                  @csrf
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tên </label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tuổi </label>
                      <input
                        type="text"
                        class="form-control"
                        id="age"
                        name="age"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Địa chỉ </label>
                      <input
                        type="text"
                        class="form-control"
                        id="address"
                        name="address"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Trạng thái </label>
                      <input
                        type="text"
                        class="form-control"
                        id="status"
                        name="status"
                        aria-describedby="emailHelp"
                      />
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