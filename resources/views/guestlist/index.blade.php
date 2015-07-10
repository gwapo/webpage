@extends('template')
@section('content')

<a href="{{url('/guestlists/create')}}" class="btn btn-success">Register</a>

<table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>name</th>
         <th colspan="1">Actions</th>
     </tr>
     </thead>
     <tbody>

  @foreach ($guestlists as $guestlist)
    <tr>
        <td>{{ $guestlist->id }}</td>
        <td>{{ $guestlist->name }}</td>
        <td>
          <a href="{{route('guestlists.edit',$guestlist->id)}}" class="btn btn-warning">EDIT</a>
          |
          <a href="{{url('guestlists',$guestlist->id)}}">Show details</a>
          |
          {!! Form::open(['method' => 'DELETE', 'route'=>['guestlists.destroy', $guestlist->id]]) !!}
         {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </td>
    </tr>
  @endforeach
  </tbody>

   </table>
@endsection
