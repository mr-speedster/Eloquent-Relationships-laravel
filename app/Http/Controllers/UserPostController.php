<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function userPostData(Request $request)
    {
        $userName=$request->post('user_name');
        $postName=$request->post('post_name');
        $users=new UserModel();
        $users->name=$userName;
        $users->post_name=$postName;
        $users->save();
    }

    public function postData(Request $request)
    {
        $userId=$request->post('user_name');
        $postName=$request->post('post_name');
        $postDisc=$request->post('disc');
        
        $users=new UserModel();
        $posts=new PostModel();

        $posts->user_id=UserModel::where('post_name',$postName)->first();
        $posts->post_id=$userId;
        $posts->post_name=$postName;
        $users->save();
    }
}
