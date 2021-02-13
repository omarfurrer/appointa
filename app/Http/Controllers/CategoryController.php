<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        SEOTools::setTitle($category->meta_title);
        SEOTools::setDescription($category->meta_description);
        SEOMeta::setKeywords($category->meta_keywords);

        return view('categories.show', compact('category'));
    }
}
