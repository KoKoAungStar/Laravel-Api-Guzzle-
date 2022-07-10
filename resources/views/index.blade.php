@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Items</h2>
        @if (count($items) > 0)
            <div class="list-group">
                @foreach($items as $item)
                    <a href="/request/{{$item->id}}/edit" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-2">{{$item->text}}</h5>
                            <small>{{$item->created_at}}</small>
                        </div>
                        <form action="/request/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                        </form>
                        <p class="mb-1">{{$item->body}}</p>
                    </a>
                @endforeach
            </div>
        @else
            <p>No items yet.</p>
        @endif
    </div>
@endsection
