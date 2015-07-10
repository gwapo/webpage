@extends('template')
@section('content')
<H5>Update Info</H5>
{!! Form::model($guestlist,['method' => 'PATCH','route'=>['guestlists.update',$guestlist->id]]) !!}
@include('guestlist._widget')
<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@endsection
