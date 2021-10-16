@extends('layout')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div style="width:50% ; height:50%;" class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img style="width:200px; height:200px;" src="/image/{{ $product->image }}" alt="">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        {{-- <p>{{ $product->description }}</p> --}}
                        <p><strong>Weight: </strong> {{ $product->weight }}Kg</p>
                        {{-- <p><strong>id: </strong> {{ $product->id }}</p> --}}
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

