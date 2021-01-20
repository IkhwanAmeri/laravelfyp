@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Product</h1>
    
    <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control col-md-12" name="name">
                </div>
                <div class="form-group">
                    <label for="bname">Price</label>
                    <input type="text" class="form-control col-md-12" name="bname">
                </div>
                <div class="form-group">
                    <label for="description">Qty</label>
                    <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    
</div>
@endsection
