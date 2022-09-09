<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * 特定のユーザーを取得
     * @param string Firebase $uid
     * @return object
     */
    public function index()
    {
        return Gym::with('prefecture')->get();
    }

    /**
     * ジムに設置されているマシンを取得
     * @param int $gym_id
     * @return object
     */
    public function show($gym_id)
    {
        return Gym::with('machines')->find($gym_id);
    }
}
