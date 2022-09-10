<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * 予約の新規追加
     * @param  request {gym_id, machine_id, is_canceled}
     * @return object $reservation
     */
    public function create(Request $request)
    {
        $reservation = Reservation::create([
            'gym_id' => $request["gym_id"],
            'machine_id' => $request["machine_id"],
            'user_id' => $request["user_id"],
            'is_canceled' => 0,
        ]);
        return $reservation;
    }

    /**
     * 予約中のマシン取得
     * @param  int $user_id
     * @param  int $gym_id
     * @return object $reservation
     */
    public function show($user_id, $gym_id)
    {
        $reservation = Reservation::with("machine")
            ->where([
                ["user_id", "=", $user_id],
                ["gym_id", "=", $gym_id],
                ["start_at", "=", null],
            ])
            ->orderByDesc('created_at')
            ->first();
        return $reservation;
    }

    /**
     * 次の予約があるかどうかの確認
     * @param  int $reservation_id
     * @param  int $gym_id
     * @param  int $machine_id
     * @return object|null
     */
    public function nextReservationExists($reservation_id, $gym_id, $machine_id)
    {
        $reservation = Reservation::where([
            ["id", ">", $reservation_id],
            ["gym_id", "=", $gym_id],
            ["machine_id", "=", $machine_id],
            ["start_at", "=", null],
            ["is_canceled", "=", 0],
        ])->first();
        return $reservation;
    }

    /**
     * マシン別のステータス取得
     * @param  int $gym_id
     * @param  int $machine_id
     * @return int $count
     */
    public function getReservationStatus($gym_id, $machine_id)
    {
        $count = Reservation::where([
            ["gym_id", "=", $gym_id],
            ["machine_id", "=", $machine_id],
            ["start_at", "=", null],
            ["is_canceled", "=", 0],
        ])->count();
        return $count;
    }

    /**
     * 予約中マシンのステータス取得
     * @param  int $reservation_id
     * @param  int $gym_id
     * @param  int $machine_id
     * @return int $count
     */
    public function getReservedStatus($reservation_id, $gym_id, $machine_id)
    {
        $count = Reservation::where([
            ["id", "<", $reservation_id],
            ["gym_id", "=", $gym_id],
            ["machine_id", "=", $machine_id],
            ["start_at", "=", null],
            ["is_canceled", "=", 0],
        ])->count();
        return $count;
    }

    /**
     * 予約をキャンセル
     * @param  int $reservation_id
     * @return int $update_count
     */
    public function reservationCancel($reservation_id)
    {
        $update_count = Reservation::where("id", "=", $reservation_id)
            ->update(['is_canceled' => 1]);
        return $update_count;
    }

    /**
     * チェックイン
     * @param  int $reservation_id
     * @return object $reservation
     */
    public function checkIn($reservation_id)
    {
        $reservation = Reservation::where("id", "=", $reservation_id)
            ->update(['start_at' => date("Y-m-d H:i:s")]);
        return $reservation;
    }

    /**
     * チェックアウト
     * @param  int $reservation_id
     * @return object $reservation
     */
    public function checkOut($reservation_id)
    {
        $reservation = Reservation::where("id", "=", $reservation_id)
            ->update(['end_at' => date("Y-m-d H:i:s")]);
        return $reservation;
    }
}
