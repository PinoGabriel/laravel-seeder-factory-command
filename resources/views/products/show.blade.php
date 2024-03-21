@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="row">
            <p>{{ $product->description }}</p>
        </div>

        <div class="row">
            <h3 style="color: {{ $product->category->color }}">{{ $product->category->label }}</h3>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Torna alla sezione Prodotti</a>

    </div>
@endsection
