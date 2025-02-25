@extends('admin.master')
@section('title')
  Huy Store | List
@endsection
@section('content')
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            
              <!--begin::Col-->
              <div class="card mb-4">
                <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Trạng thái </th>
                        <th>Địa chỉ </th>
                        <th>Trạng thái</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($accounts as $account)
                      <tr class="align-middle">
                        <td>{{$account->id}}</td>
                        <td>{{$account->name}}</td>
                        <td>
                          {{$account->age}}
                        </td>
                        <td>{{$account->address}}</td>
                        <td>
                          @if ($account->status==1)
                          <span class="badge rounded-pill text-bg-info">Đang đi làm</span>
                          @else
                          <span class="badge rounded-pill text-bg-light">Nghi</span>
                        @endif
                      </td>
                      <td>
                      <a href="{{ route('product.edit', ['id' => (int) $account->id]) }}" type="button">Edit</a>
                      <a href="{{ route('product.delete', ['id' => (int) $account->id]) }}" type="button">Delete</a>

                      </td>

                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
  
            
            <!--end::Row-->
            <!--begin::Row-->
            
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
@endsection
