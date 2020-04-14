@extends('layouts.admin')
@section('content')
<form action="#">
    <div class="form-group">
        <label for="email">Title</label>
        <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Content</label>
        <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
