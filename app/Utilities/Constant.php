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

    // Register status
    const student_register_done = 1;
    const student_register_not_done = 0;
    public static $student_register_status = [
        self::student_register_done => 'Paid',
        self::student_register_not_done => 'Unpaid'
    ];

    // Class status

    const class_full = 0;
    const class_available = 1;
    public static $class_status = [
        self::class_full => 'Full',
        self::class_available => 'Available'
    ];
}
