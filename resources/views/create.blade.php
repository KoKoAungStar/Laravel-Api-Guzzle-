@extends('layout.app')
@section('content')
<div class="container">
    <h2>Insert new item</h2>
    <form action="/request" method="post">
        @csrf
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" name="text" id="text" placeholder="Enter Text">    
        </div>
        <div class="form-group">
            <label for="text">Body</label>
            <input type="text" name="body" id="body" class="form-control" placeholder="Enter Body">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection