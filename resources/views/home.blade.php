@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ $product['frontImage'] }}" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['brand'] }} - {{ $product['name'] }}</h5>
                    <p class="card-text">Price: ${{ $product['price'] }}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection




