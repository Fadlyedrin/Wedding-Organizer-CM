<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
        return view('back.users.index', [
            'users' => User::orderByRaw("CASE WHEN role = 'admin' THEN 1 ELSE 2 END")->get()
        ]);
    }

    public function destroy(string $id){
        User::find($id)->delete();

        return back()->with('success', 'User has been deleted');
    }
}
