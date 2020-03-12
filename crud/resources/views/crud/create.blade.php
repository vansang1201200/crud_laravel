@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New crud</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('crud.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Họ :</strong>
          <input type="text" name="ho" class="form-control" placeholder="họ">
        </div>
        <div class="col-md-12">
          <strong>Tên :</strong>
          <textarea class="form-control" placeholder="Tên" name="ten" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('crud.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
