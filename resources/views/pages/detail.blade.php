@extends('layouts.detail')

@section('title')
    Detail Product
@endsection

@section('content')
<header>
    <!-- nav -->
    <div class="nav container">
        <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "/">
            <img src = "{{ url('frontend/images/shopping-bag-icon.png') }}" alt = "site icon">
            <span class = "text-uppercase fw-lighter ms-2">Attire</span>
        </a>
        <!-- cart icon -->
        <i class='bx bx-shopping-bag' id="cart-icon"></i>
    </div>
</header>

<section id="prodetails" class="section-p1">
    @if ($item->galleries->count())   
    <div class="single-pro-image">  
        <img src="{{ Storage::url($item->galleries->first()->image) }}" width="100% "  id="MainImg" alt="" srcset="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ Storage::url($item->galleries->first()->image) }}" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>
    @endif

    <div class="single-pro-details">
        <h4>{{ $item->title }}</h4>
        <h2>${{ $item->price }}</h2>
        <input type="number" value="1">
        @auth
        {{-- <form action="{{ route('cart_process', $item->id) }}" method="POST">
            @csrf
            <button class="btn btn-primary mt-2" type="submit">
                Add To Cart
            </button>
        </form> --}}
        <a href = "{{ route('cart') }}" class = "btn btn-primary mt-2">Add To Cart</a>

        @endauth
        @guest
            <a href = "{{ route('login') }}" class = "btn btn-primary mt-2">Login To Buy</a>
        @endguest
        <h4>Product Details</h4>
        <span>{!! $item->about !!}</span>
    </div>
</section>
@endsection