<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\Request;
use stdClass;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data= new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully!');
//  in this version we should use with in the message
    }

   public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfully!');
    }

    public function view_product($id = null){
        $category=category::all();
        $sizes = Size::all();
        $data= [];
        $data['category'] = $category;
        $data['sizes'] = $sizes;
        if($id){
            $data['id'] = $id;
        }
        return view('admin.product', $data);
}
// this line improves scalability and efficiency of the code as it uses eager loading
// Eager loading allows you to load the related categories for all products in a single query,
// rather than making a separate query for each product. To do this, you can use the with() method like this:
//     This will retrieve all the products and their associated categories in a single query,
//     rather than making a separate query for each product.

public function add_product(Request $request){
    $request->validate([
        // Validation rules for the form fields
        'title' => 'required|max:255',
        'description' => 'required',
        'category_id' => 'required|integer',
        'price' => 'required|numeric',
        'discount_price' => 'nullable|numeric',
        'size' => "nullable|array",
        "size.*" => "exists:sizes,id"
        // 'sizes' => 'required',
        // Other validation rules
     ]);

     // Create new product record
     if($request->has('id')){
         $product = Product::findOrFail($request->id);
     }else{
        $request->validate([
            'image' => 'required',
        ]);
     $product = new Product;
     }
     $product->title = $request->title;
     $product->description = $request->description;
     $product->category_id = $request->category_id;
     $product->price = $request->price;
     $product->discount_price = $request->discount_price;
    // $product->title=$request->product;
    // $product->description=$request->product;
    // $product->category_id=$request->product;
    // $product->price=$request->product;
    // $product->discount_price=$request->product;
     $product->save();
     if($request->has('id')){
        $product->sizes()->detach();
     }
     foreach($request->size as $size){
         $product->sizes()->attach($size);
     }
     // Create new product_image record
     $productImage = new ProductImage;
     if (!empty($request->image)) {
        $file =$request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.' . $extension;
        $file->move(public_path('uploads/'), $filename);
    }
     $productImage->image =  'public/uploads/'.$filename;
     $productImage->product_id = $product->id;
     $productImage->save();

    //  // Create new product_size record
    //  $productSize = new ProductSize;
    //  $productSize->sizes = $request->input('sizes');
    //  $productSize->product_id = $product->id;
    //  $productSize->save();
     return redirect()->back()->with('message', 'Product added successfully!');
}

public function retrieve_product() {
    $products = Product::with(['category','sizes'])->get();
    return view('admin.viewProduct',['products'=>$products]);
}


}














// public function add_product(Request $request){

// }
// return view('admin.product');


// $data = Cache::remember('categories', $minutes, function () {
//     return Product::with('category')->get();
// });

// Use a cache to store the data: If you expect a high volume of traffic to your application,
//  you can use a cache to store the data and reduce the load on your database.
//  For example, you can use the Laravel cache system like this:
//  This will store the data in the cache for the specified number of minutes and
//   return it when it is requested again within that time period.
//  This can help reduce the load on your database and improve performance.

