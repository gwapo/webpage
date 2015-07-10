@extends('template')
@section('content')
<h1>Register </h1>
   {!! Form::open(['url' => 'guestlists']) !!}
   @include('guestlist._widget')

   <div class="form-group">
       {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
   </div>
   {!! Form::close() !!}


   @endsection
