<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CustomizedProduct;

class CustomizedProductController extends Controller
{
    public function save(Request $request)
    {
        // Validate the request data
        $request->validate([
          'imageData' => 'required|image'
        ]);

        // Save the image data to the database
        $customizedProduct = new CustomizedProduct();
        $customizedProduct->image_data = $request->imageData;
        $customizedProduct->save();

        return response()->json(['success' => true]);
    }
}
