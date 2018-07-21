@extends('layouts.admin')
@section('content')
  <h1>{{$product->name}}</h1>
  <br />
  <p><strong>Original Price : </strong> {{$product->price}}</p>
  <p><strong>Discount : </strong> {{$product->getFormalDiscount()}}</p>
  <p><strong>Discounted Price : </strong> {{$product->getDiscountedPrice()}}</p>
  <p><strong>Brand : </strong> {{$product->brand->name}}</p>
  <p><strong>Category : </strong> {{$product->category->name}}</p>
  <p><strong>Subcategory : </strong> {{$product->subcategory->name}}</p>
  <p><strong>Featured : </strong> {{$product->is_featured?'Yes':'No'}}</p>
  <p><strong>Description : </strong> {{$product->description}}</p>
  <strong>Features : </strong>
  <ul>
    @foreach($product->features as $feature)
      <li class="small"><strong>$feature->name</strong> $feature->value</li>
    @endforeach
  </ul>
  <p><strong>Images : </strong></p>
  @for($i=1;$i<=$product->image_count;$i++)
    <img src="{{'images/products/' . $product->id . "_" . $i}}"  alt=""/><br />
  @endfor
@endsection
@section('footer')
@endsection