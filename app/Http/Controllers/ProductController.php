<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return response()->json($products);     
    }
    public function getProduct($id){
  
        $product  = Product::find($id);
  
        return response()->json($product);
    }
    public function createProduct(Request $request)
    {
        $product=Product::create($request->all());
        return response()->json($product);
    }

    public function updateProduct(Request $request, $id)
    {
        $product=Product::find($id);
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->save();
        return response()->json($product);
        
    }
    public function deleteProduct($id){
        $product  = Product::find($id);
        $product->delete();
        return response()->json('deleted');
    }
   
}
?>