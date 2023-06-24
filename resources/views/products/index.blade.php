@extends('layouts.app')

@section('main')
<div class="d-flex justify-content-between">
    <h5> <i class="bi bi-journal-richtext"></i> Product Details</h5>
    <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
</div>

<div class="col-md-12 table-responsive mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Iamge</th>
                <th>Product Name</th>
                <th>M.R.P</th>
                <th>Selling Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)

            <tr>
                @php
                $index = ($products->currentPage() - 1) * $products->perPage() + $loop->iteration;
                @endphp
                {{-- <td>{{$loop->iteration}}</td> --}}
                <td>{{$index}}</td>
                <td><img src="products/{{ $product->image }}" alt="Product"
                        style="width: 50px; height: 50px; object-fit: contain;">
                </td>
                <td><a href="products/show/{{$product->id}}">{{ $product->name }}</a></td>
                <td>Rs.{{ $product->mrp }}</td>
                <td>Rs.{{ $product->price }}</td>
                <td>
                    <a href="products/edit/{{$product->id}}" class="btn btn-warning btn-sm"><i
                            class="bi bi-pencil-square"></i></a>
                    <a href="products/delete/{{$product->id}}"
                        onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-sm"><i
                            class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
@endsection