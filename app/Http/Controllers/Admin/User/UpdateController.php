<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, User $user)
    {
        $data=$request->validated();
        $user->update($data);
        return view('admin.users.show',compact('user'));
    }
}
