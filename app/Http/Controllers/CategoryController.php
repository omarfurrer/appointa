<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMediation()
    {
        return view('categories.show');
    }
}
