<?php

namespace App\Utilities;

class Constant
{
    /*
    |-------------------------------------------
    |Các hằng số, role dùng chung toàn hệ thống
    |-------------------------------------------
    |
    |
    */

    //Order:
    const order_status_ReceiveOrders = 1;
    const order_status_Unconfirmed = 2;
    const order_status_Confirmed = 3;

    public static $order_status = [
        self::order_status_ReceiveOrders => 'Receive Orders',
        self::order_status_Unconfirmed=>'Unconfirmed',
        self::order_status_Confirmed=>'Confirmed',
    ];

    const user_level_host = 3;
    const user_level_teacher = 2;
    const user_level_student = 1;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_teacher => 'teacher',
        self::user_level_student => 'student',
    ];
}
