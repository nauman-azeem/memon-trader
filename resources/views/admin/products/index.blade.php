@extends('layouts.admin')
@section('content')
  <h1>Products</h1>
  <a href="{{route('admin.products.create')}}" class="btn btn-success">Add New Product</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Description</th>
        <th>Featured</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @if($products)
        @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td><img height="50px" src="{{'images/products/' . $product->id . '_1.jpg'}}" alt="" class="img-responsive img-rounded"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price . " Rs."}}</td>
            <td>{{$product->getFormalDiscount()}}</td>
            <td>{{$product->brand->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->subcategory->name}}</td>
            <td>{{substr($product->description, 0, 50) . '...'}}</td>
            <td>{{$product->is_featured==1?'Yes':'No'}}</td>
            <td>{{$product->created_at->diffForHumans()}}</td>
            <td>{{$product->updated_at->diffForHumans()}}</td>
            <td><a href="{{route('admin.products.show', $product->id)}}" class="btn btn-primary btn-xs">SHOW</a><br /><a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-warning btn-xs">EDIT</a><br /><a href="{{route('admin.products.destroy', $product->id)}}" class="btn btn-danger btn-xs">DELETE</a></td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>
@endsection
@section('footer')
@endsection