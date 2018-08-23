@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="row">

        <form enctype="multipart/form-data" action="/dir/upload" method="POST">
            <h1>Upload your file</h1>
            <input type="file" name="file"></input><br>
            <input type="radio" name="privacy" value="1"> Public
            <input type="radio" name="privacy" value="0"> Private<br>
            <input type="submit" value="Upload"></input>

        </form>

    </div>

@endsection

