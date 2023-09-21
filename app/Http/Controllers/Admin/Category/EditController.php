<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }
}
