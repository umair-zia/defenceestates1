@extends('layouts.layout')

@section('content')
<div class="container">

You cannot access this page! This is for only ‘{{$role}}’”
<a href="{{route('login')}}">log in as {{$role}}</a>
</div>
@endsection
