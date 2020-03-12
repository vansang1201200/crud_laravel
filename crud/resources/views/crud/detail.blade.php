@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Crud</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Họ : </strong> {{$crud->ho}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Tên : </strong> {{$crud->ten}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('crud.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
