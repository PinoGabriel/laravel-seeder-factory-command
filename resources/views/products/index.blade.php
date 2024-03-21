@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row p-3 justify-content-center">

            @foreach ($products as $item)
                <div class="col-3 my-3">
                    <img src="{{ $item->image }}" class="card-img-top rounded-top-4" alt="{{ $item->name }}">
                    <div class="card-body rounded-bottom-4 p-3 border">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">$ {{ $item->price }}</p>
                        <div>
                            <p class="badge rounded-pill"
                                style="color: {{ $item->category->color }}; border: 1px solid {{ $item->category->color }}">
                                {{ $item->category->label }}</p>
                        </div>
                        <a href="{{ route('products.show', $item->id) }}" class="btn btn-primary mb-2">Show
                            details</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
