@extends('layouts.cart')

@section('title')
    Cart
@endsection

@section('content')
<!-- box icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- styles  -->
    <link rel="stylesheet" href="{{ url('frontend/style/cart.css') }}">
    <link rel = "stylesheet" href = "{{ url('frontend/libraries/bootstrap/css/bootstrap.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <!-- HEADER  -->
    <header>
        <!-- NAV  -->
        <div class="nav container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "/">
                <img src = "{{ url('frontend/images/shopping-bag-icon.png') }}" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">Attire</span>
            </a>
            <!-- CART ICON  -->
            <i class='bx bx-shopping-bag' id="cart-icon"></i>

            <!-- CART  -->
            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>

                <!-- CONTENT  -->
                <div class="cart-content">


                </div>

                <!-- TOTAL   -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                <!-- BUY BUTTON  -->
                <button type="button" class="btn-buy">Buy Now</button>
                <!-- CART CLOSE  -->
                <i class='bx bx-x' id="cart-close"></i>
            </div>
        </div>
    </header>


    <!-- SHOP SECTION  -->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>

        <!-- CONTENT  -->
        <div class="shop-content">
            <!-- BOX 1 -->
            <div class="product-box">
                <img src="{{ url('frontend/images/c_formal_gray_shirt.png') }}" alt="" class="product-img">
                <h2 class="product-title">Gray Shirt</h2>
                <span class="product-price">$200</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 2 -->
            <div class="product-box">
                <img src="{{ url('frontend/images/c_shirt-girl.png') }}" alt="" class="product-img">
                <h2 class="product-title">Shirt Nevada</h2>
                <span class="product-price">$350</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 3 -->
            <div class="product-box">
                <img src="{{ url('frontend/images/kaos.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">Eiger</h2>
                <span class="product-price">$250</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 4 -->
            <div class="product-box">
                <img src="{{ url('frontend/images/hoodie.jpg') }}" alt="" class="product-img">
                <h2 class="product-title">Hoodie Eiger</h2>
                <span class="product-price">$300</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>

    <!-- link js  -->
    <script src="{{ url('frontend/script/cart.js') }}"></script>
@endsection