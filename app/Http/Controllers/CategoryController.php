<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $title = 'Category';
      $categories = Category::withCount('posts')->get();
      return view('admin.categories', compact('title','categories'));
    }

    public function addCategory()
    {
      $title = 'Add Category';
      return view('admin.add-category', compact('title'));
    }

    public function categoryPosts($id)
    {
        $category = Category::where('id', $id)->first();
        $categoryName = $category->name;
        $title = "$categoryName Category Posts";
        $posts = Post::where('category_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.category-posts', compact('title','posts'));
    }

    public function destroy($id)
    {
        
    }
}
