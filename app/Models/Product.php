<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product;

    public static function newProduct($request){
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->quantity = $request->quantity;
        self::$product->save();
    }

    public static function updateProduct($request,$product){
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
    }

    public static function deleteProduct($product){
        $product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
