<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;

    public static function newCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->save();
    }

    public static function updateCategory($request,$category){
        $category->name = $request->name;
        $category->save();
    }

    public static function deleteCategory($category){
        $category->delete();
    }
}
