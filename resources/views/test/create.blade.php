@extends('test.base') <!-- Extend the 'base' layout -->

@section('title', 'Create un article') <!-- Define content for the 'title' yield section -->

@section('content')
<form action="" method="post">
    @csrf
    <input type="text" name="title" value="article demo">
    <textarea name="content" >content</textarea>
    <button>Enregistrer</button>
</form>

@endsection

