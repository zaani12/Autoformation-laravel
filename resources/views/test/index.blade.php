@extends('test.base') <!-- Extend the 'base' layout -->

@section('title', 'Title') <!-- Define content for the 'title' yield section -->

@section('content')
    <h1>Welcome to My Page</h1>

    {{"te<strong>st</strong>"}} <br>
    <?="te<strong>st</strong>" ?>
@endsection

