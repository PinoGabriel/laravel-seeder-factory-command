@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row p-3 justify-content-center">

            @foreach ($products as $item)
                <div id="card-visible" class="col-3 rounded-4 text-center my-3 py-4">
                    <h2 class="p-3" style="color: {{ $item->category->color }}">
                        {{ $item->category->label }}
                    </h2>
                    <div class="card-body p-3">
                        <h1 class="card-text my-4">$ {{ $item->price }}</h1>
                        <h5 class="card-title my-4">{{ $item->name }}</h5>
                        <a href="{{ route('products.show', $item->id) }}" class="btn btn-primary mb-2">Get Started</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
