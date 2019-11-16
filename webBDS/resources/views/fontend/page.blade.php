@extends('fontend.home')
@section('content')

<div class="row">
        @foreach($products as $product)
        <div class="col-lg-4 col-md-1 mb-3">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset('img/house.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$product->id}}</a>
                </h4>
                <h5>${{$product->price}}</h5>
                <h5>{{$product->area}} m<sup>2</sup></h5>
                <h5>{{$product->address}}</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        {{ $products->links() }}

@endsection()
