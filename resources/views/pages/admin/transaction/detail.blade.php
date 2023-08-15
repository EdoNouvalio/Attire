@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaction {{ $item->user->name }}</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>{{ $item->product_package->title }}</td>
                </tr>
                <tr>
                    <th>Buyer</th>
                    <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Total Transaction</th>
                    <td>${{ $item->transactions_total }}</td>
                </tr>
                <tr>
                    <th>Status Transanction</th>
                    <td>{{ $item->transactions_status }}</td>
                </tr>
                <tr>
            </table>
        </div>
    </div>

    </div>
@endsection