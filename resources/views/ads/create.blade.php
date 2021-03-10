@extends('layouts.layout')

@section('content')
<div class="wrapper create-ad">
<h1>Create new ad</h1>
<form action="{{ route('ads.index') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" id="title" name="title">

    <label for="type">Chose ad type:</label>
    <select name="type" id="type">
        <option value="Flat">Flat</option>
        <option value="House">House</option>
        <option value="Appartment">Appartment</option>
    </select>
    <label for="adress">Adress</label>
    <input type="textbox" id="adress" name="adress">
    <input type="hidden"  name="status" value="true">
    <input type="file" name="img">
    <input type="submit" value="post ad">
</form>
</div>
@endsection

