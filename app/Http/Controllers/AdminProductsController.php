<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminProductsController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('admin.products.index', compact('products'));
  }

  public function create()
  {
    return view('admin.products.create');
  }

  public function store(CreatePostRequest $request)
  {
    //
  }

  public function show($id)
  {
    $product = Product::findOrFail($id);
    return view('admin.products.show', compact('product'));
  }

  public function edit($id)
  {
    return view('admin.products.edit');
  }

  public function update(EditPostRequest $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}