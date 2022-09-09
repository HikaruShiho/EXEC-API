<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;

/*
|----------------------------------------------------
| ユーザー関係
|----------------------------------------------------
*/
Route::prefix('user')->group(function () {
    //ユーザー新規登録
    Route::post('/', [UserController::class, 'create']);
    //ログイン時の本人確認
    Route::get('/{uid}', [UserController::class, 'show']);
});

/*
|----------------------------------------------------
| 店舗関係
|----------------------------------------------------
*/
Route::prefix('gym')->group(function () {
    //全店舗取得
    Route::get('/', [GymController::class, 'index']);
    //店舗別の設置マシン取得
    Route::get('/{gym_id}', [GymController::class, 'show']);
});

/*
|----------------------------------------------------
| 予約関係
|----------------------------------------------------
*/
Route::prefix('reservation')->group(function () {
    //予約新規登録
    Route::post('/', [ReservationController::class, 'create']);
    //予約中のマシン取得
    Route::get('/{user_id}/{gym_id}', [ReservationController::class, 'show']);
    //予約の取り消し
    Route::put('/{reservation_id}', [ReservationController::class, 'update']);
    //予約状況確認（予約中マシンがない場合）
    Route::get('/status/{gym_id}/{machine_id}', [ReservationController::class, 'getReservationStatus']);
    //次の予約があるかどうかの確認
    Route::get('/{reservation_id}/{gym_id}/{machine_id}', [ReservationController::class, 'nextReservationExists']);
    //予約状況取得（予約中マシンがある場合）
    Route::get('/reserved/{reservation_id}/{gym_id}/{machine_id}', [ReservationController::class, 'getReservedStatus']);
});
