@extends('layout.app')
@section('content')
<div class="container">
    <h2>Edit item</h2>
    <form action="/request/{{$item->id}}" method="post">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" name="text" id="text" placeholder="Enter Text" value="{{$item->text}}">    
        </div>
        <div class="form-group">
            <label for="text">Body</label>
            <input type="text" name="body" id="body" class="form-control" placeholder="Enter Body" value="{{$item->body}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection