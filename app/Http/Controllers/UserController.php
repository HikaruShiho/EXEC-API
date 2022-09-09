<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 新規ユーザー登録
     * @param  Request $request
     * @return object $user
     */
    public function create(Request $request)
    {
        $user = User::create([
            'uid' => $request['uid'],
        ]);
        return $user;
    }

    /**
     * 特定のユーザーを取得
     * @param  string $uid
     * @return object
     */
    public function show($uid)
    {
        return User::where("uid", $uid)->first();
    }
}
