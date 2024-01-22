@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($product->count() > 0)
                @foreach ($product as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $item->title }}</td>
                        <td class="align-middle">{{ $item->price }}</td>
                        <td class="align-middle">{{ $item->p_code }}</td>
                        <td class="align-middle">{{ $item->desc }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="gridcell" aria-label="Basic Example">
                                <a href="" type="button" class="btn btn-secondary">Detail</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger m-0">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
