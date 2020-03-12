@extends('layouts.app')
@section('content')
    <div class="container" >
        <div class="row">
            <div class= "col-md-10">
                 <h2>Crud anh khánh</h2>
            </div>
            <div class="col-sm-2">
                  <a class="btn btn-sm btn-success" href="{{route('crud.create',)}}"> Create new crud</a>
           </div>
        </div>
    {{-- @if ($message = section::get('success'))
         <div class="alert alert-success">
             <p>{{$message}}</p>

         </div>
    @endif --}}

    <table class="table table-hover table-sm">
        <tr>
            <th width = "50px"><b>id</b> </th>
            <th width = "300px">Ho</th>
            <th>Ten</th>
            <th width = "180px">Actison </th>
        </tr>
        @foreach ($cruds as $crud)
        <tr>
            <td><b> {{++$i}}.</b></td>
            <td>{{$crud->ho}}</td>
            <td>{{$crud->ten}}</td>
            <td>
                <form action="{{route('crud.destroy',$crud->id)}}" method="POST">
                <a class="btn btn-sm btn-success" href="{{route('crud.show',$crud->id)}}"> Show</a>
                <a class="btn btn-sm btn-success" href="{{route('crud.edit',$crud->id)}}"> Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
{!! $cruds->links() !!}
    </div>

@endsection
