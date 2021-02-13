<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use SEO;
use SEOMeta;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        SEO::setTitle($category->meta_title);
        SEO::setDescription($category->meta_description);
        SEOMeta::setKeywords($category->meta_keywords);

        return view('categories.show', compact('category'));
    }
}
