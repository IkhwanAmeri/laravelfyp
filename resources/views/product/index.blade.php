@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product</h1>
    
    <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Product</th>
                    <td>Price</th>
                    <td>Quantity</th>
                    <td>Action</th>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('create') }}" class="btn btn-primary">Add Product</a>
        </div>
        </div>
    </div>
    
</div>
@endsection
