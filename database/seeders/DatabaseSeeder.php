<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('register')->insert([
            [
                'name' => 'Brush Nguyen',
                'dob' => '18/2/2004',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0979365456',
                'email' => 'maclain123@gmail.com',
                'avatar' => '',
                'password' => '',
                'course_id' => 1,
                'level' => null,
                'social_link' => '',
            ],

            [
                'name' => 'Khanh Nguyen',
                'dob' => '18/2/2004',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0987729543',
                'email' => 'khanhnbth2109011@fpt.edu.vn',
                'avatar' => '',
                'password' => '',
                'course_id' => 1,
                'level' => null,
                'social_link' => '',
            ],
]);

            DB::table('users')->insert([
            [
                'name' => 'Jane Maclain',
                'dob' => '12121212122000',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0979365456',
                'email' => 'maclain123@gmail.com',
                'avatar' => 'team-1.jpg',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 1,
                'course_id' => 1,
                'point' => null,
                'social_link' => '',
            ],
            [
                'name' => 'Justin Bieber',
                'dob' => '18902003',
                'address' => 'Me Tri - Thanh Xuan - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0965698251',
                'email' => 'Justin897@gmail.com',
                'avatar' => 'team-2.jpg',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => 1,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Pew Pewdipie',
                'dob' => '11022002',
                'address' => 'Phu Ly - Hoa Lac  - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0965789251',
                'email' => 'PewPew124@gmail.com',
                'avatar' => 'team-3.jpg',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => 1,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Mark Zuckerberg',
                'dob' => '04022002',
                'address' => 'Nguyen Hue - Bach Dang  - Ha Long',
                'achieve' => '',
                'description' => '',
                'phone'=>'0968789251',
                'email' => 'Zuckerberg123@gmail.com',
                'avatar' => 'team-4.jpg',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => 1,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'YiLongMa',
                'dob' => '08012003',
                'address' => 'Tuyen Thi - Van Lang  - Thai Nguyen',
                'achieve' => '',
                'description' => '',
                'phone'=>'0973989251',
                'email' => 'Yilongma123@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 5,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Elon Musk',
                'dob' => '28072002',
                'address' => 'Quang Trung - Thi Long  - Thai Binh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0973789251',
                'email' => 'Elonmusk23@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 6,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Bill Gates',
                'dob' => '30072000',
                'address' => 'Quan 1 - Thien Hoa  - Ho Chi Minh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0975989251',
                'email' => 'Billgates723@gmail.com',
                'avatar' => 'team-7.png',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 7,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Steve Jobs',
                'dob' => '30072002',
                'address' => 'Quan 7 - Thanh Xuan  - Ho Chi Minh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0975983651',
                'email' => 'Stevejobs723@gmail.com',
                'avatar' => 'team-8.png',
                'password' => Hash::make('123456'),
                'level' => 3,
                'status' => null,
                'class_id' => null,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Lee Byoung Chul',
                'dob' => '04052003',
                'address' => 'Quan 2 - Quan Hoa  - Ho Chi Minh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0975983431',
                'email' => 'Leebyoungchul723@gmail.com',
                'avatar' => 'team-9.png',
                'password' => Hash::make('123456'),
                'level' => 3,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Eiji Toyoda',
                'dob' => '21082004',
                'address' => 'Quan 3 - Van Doan  - Sai Gon',
                'achieve' => '',
                'description' => '',
                'phone'=>'0975983441',
                'email' => 'EijiToyoda223@gmail.com',
                'avatar' => 'team-10.png',
                'password' => Hash::make('123456'),
                'level' => 3,
                'status' => null,
                'class_id' => null,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],


            [
                'name' => 'Jayce Smith',
                'dob' => '12121212122000',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'smithjayce2000@gmail.com',
                'avatar' => 'team-1.jpg',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
                'course_id' => 2,
                'point' => null,
                'social_link' => '',
            ],
            [
                'name' => 'Johnson William',
                'dob' => '12121212122000',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'william12@gmail.com',
                'avatar' => 'team-2.jpg',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'David Mouse',
                'dob' => '12121212122000',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'mouse123@gmail.com',
                'avatar' => 'team-4.jpg',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],
            [
                'name' => 'Charlie Nguyen',
                'dob' => '12121212122000',
                'address' => 'Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'charlienguyen2003@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 2,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Luong Viet Hoang',
                'dob' => '18092002',
                'address' => 'Bach Dang - Ha Long',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'hoangviet2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Hoang Viet Luong',
                'dob' => '08192002',
                'address' => 'Ha Long - Bach Dang',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'hoangluong2002@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 6,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Hoang Thi Luong',
                'dob' => '08292002',
                'address' => 'Ha Mong - Phu Xuyen',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562162412',
                'email' => 'hoangvir2002@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Hoang Thi Mong',
                'dob' => '08192004',
                'address' => 'Ha Chau - Tho Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562412',
                'email' => 'monthi2004@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Mong Thi Giang',
                'dob' => '08092004',
                'address' => 'Ha Nam - Tay Tang',
                'achieve' => '',
                'description' => '',
                'phone'=>'09845562412',
                'email' => 'giangthi2004@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Cong Bang',
                'dob' => '08052004',
                'address' => 'Thai Binh - Tay Ninh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'bangdinh2004@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Quang Anh',
                'dob' => '28052000',
                'address' => 'Tho Phi - Tay Bac',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'anhdinh2000@gmail.com',
                'avatar' => 'team-7.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Viet Tung',
                'dob' => '28052003',
                'address' => 'Tu Xuyen - Trung Quoc',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552433',
                'email' => 'tungdinh2003@gmail.com',
                'avatar' => 'team-8.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Ly Thai To',
                'dob' => '28051999',
                'address' => 'An Nam - Dai Viet',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552453',
                'email' => 'toly1999@gmail.com',
                'avatar' => 'team-9.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Mai Ly',
                'dob' => '28052002',
                'address' => 'Bac Ninh - Ha Dong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984555753',
                'email' => 'maily2002@gmail.com',
                'avatar' => 'team-10.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 6,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Tran Minh Thu',
                'dob' => '28102002',
                'address' => 'Bac Ninh - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984554753',
                'email' => 'thutran2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 6,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Ly Minh Ha',
                'dob' => '21102003',
                'address' => 'Bac Nam - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254753',
                'email' => 'haly2003@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Ly Minh Anh',
                'dob' => '09102003',
                'address' => 'Bac Nam - Ha Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254793',
                'email' => 'anhminh2003@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Tran A Lua',
                'dob' => '09122003',
                'address' => 'Tay Nguyen - HongKong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254783',
                'email' => 'tranlua2003@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Thi Vu Bao',
                'dob' => '28062003',
                'address' => 'Bong Lai - Thien Gioi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254743',
                'email' => 'vubao2003@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 1,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Sinh Van Le',
                'dob' => '18092002',
                'address' => 'Bach Dang - Ha Long',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'sinhle2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Luon Van Phong',
                'dob' => '08192002',
                'address' => 'Ha Long - Bach Dang',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'phongluon2002@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Mac A Trac',
                'dob' => '08292002',
                'address' => 'Ha Mong - Phu Xuyen',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562162412',
                'email' => 'tracmac2002@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Thi Hoai',
                'dob' => '08192004',
                'address' => 'Ha Chau - Tho Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562412',
                'email' => 'hoaithi2004@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Van Dien',
                'dob' => '08092004',
                'address' => 'Ha Nam - Tay Tang',
                'achieve' => '',
                'description' => '',
                'phone'=>'09845562412',
                'email' => 'dienle2004@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Diep A Van',
                'dob' => '08052004',
                'address' => 'Thai Binh - Tay Ninh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'diepvan2004@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Van Phong',
                'dob' => '28052000',
                'address' => 'Tho Phi - Tay Bac',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'phongvan2000@gmail.com',
                'avatar' => 'team-7.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Thi Trang',
                'dob' => '28052003',
                'address' => 'Tu Xuyen - Trung Quoc',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552433',
                'email' => 'trangle2003@gmail.com',
                'avatar' => 'team-8.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 7,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Van A',
                'dob' => '28051999',
                'address' => 'An Nam - Dai Viet',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552453',
                'email' => 'avo1999@gmail.com',
                'avatar' => 'team-9.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Mai Van Linh',
                'dob' => '28052002',
                'address' => 'Bac Ninh - Ha Dong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984555753',
                'email' => 'linhvan2002@gmail.com',
                'avatar' => 'team-10.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Dieu Linh',
                'dob' => '28102002',
                'address' => 'Bac Ninh - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984554753',
                'email' => 'linhdieu2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 8,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vu Ngoc Quyen',
                'dob' => '21102003',
                'address' => 'Bac Nam - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254753',
                'email' => 'quyenvu2003@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Van Ha',
                'dob' => '09102003',
                'address' => 'Bac Nam - Ha Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254793',
                'email' => 'hadinh2003@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 8,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Mai Linh',
                'dob' => '09122003',
                'address' => 'Tay Nguyen - HongKong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254783',
                'email' => 'linhvo2003@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 9,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Vu Bao Ngoc',
                'dob' => '28062003',
                'address' => 'Bong Lai - Thien Gioi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254743',
                'email' => 'vubaonogc2003@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 2,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Tran Thu Sinh',
                'dob' => '18092002',
                'address' => 'Bach Dang - Ha Long',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'sinhthu2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Van Van Tai',
                'dob' => '08192002',
                'address' => 'Ha Long - Bach Dang',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'taivan2002@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Ong Thi Thuy Chi',
                'dob' => '08292002',
                'address' => 'Ha Mong - Phu Xuyen',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562162412',
                'email' => 'ongchi2002@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Thi Hoai Bao',
                'dob' => '08192004',
                'address' => 'Ha Chau - Tho Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562412',
                'email' => 'hoaithibao2004@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Van Dien Vien',
                'dob' => '08092004',
                'address' => 'Ha Nam - Tay Tang',
                'achieve' => '',
                'description' => '',
                'phone'=>'09845562412',
                'email' => 'dienlevan2004@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Diep A Nhu',
                'dob' => '08052004',
                'address' => 'Thai Binh - Tay Ninh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'diepnhu2004@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Thi Phong',
                'dob' => '28052000',
                'address' => 'Tho Phi - Tay Bac',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'phongThi2000@gmail.com',
                'avatar' => 'team-7.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Phan Thi Trang',
                'dob' => '28052003',
                'address' => 'Tu Xuyen - Trung Quoc',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552433',
                'email' => 'trangphan2003@gmail.com',
                'avatar' => 'team-8.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 7,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Van Xoai',
                'dob' => '28051999',
                'address' => 'An Nam - Dai Viet',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552453',
                'email' =>'xoaivo1999@gmail.com',
                'avatar' => 'team-9.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 8,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Mai Diep Linh',
                'dob' => '28052002',
                'address' => 'Bac Ninh - Ha Dong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984555753',
                'email' => 'linhdiep2002@gmail.com',
                'avatar' => 'team-10.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Bao Linh',
                'dob' => '28102002',
                'address' => 'Bac Ninh - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984554753',
                'email' => 'linhbao2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 6,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vu Ngoc Linh',
                'dob' => '21102003',
                'address' => 'Bac Nam - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254753',
                'email' => 'linhvu2003@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 7,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Viet Ha',
                'dob' => '09102003',
                'address' => 'Bac Nam - Ha Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254793',
                'email' => 'haviet2003@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vu Viet Quy',
                'dob' => '09122003',
                'address' => 'Tay Nguyen - HongKong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254783',
                'email' => 'quyvu2003@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 7,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Vu Bao Giong',
                'dob' => '28062003',
                'address' => 'Bong Lai - Thien Gioi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254743',
                'email' => 'vubaonogcgiong2003@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 3,
<<<<<<< HEAD
                'course_id' => 8,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Tran Minh Sinh',
                'dob' => '18092002',
                'address' => 'Bach Dang - Ha Long',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'sinhminh2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Van Van Tam',
                'dob' => '08192002',
                'address' => 'Ha Long - Bach Dang',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'tamvan2002@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 2,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Thi Thuy Chi',
                'dob' => '08292002',
                'address' => 'Ha Mong - Phu Xuyen',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562162412',
                'email' => 'ongchithuy2002@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Thi Thuy',
                'dob' => '08192004',
                'address' => 'Ha Chau - Tho Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'09855562412',
                'email' => 'thuyle2004@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Le Van Hoc',
                'dob' => '08092004',
                'address' => 'Ha Nam - Tay Tang',
                'achieve' => '',
                'description' => '',
                'phone'=>'09845562412',
                'email' => 'hocle2004@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Luong Viet Bai',
                'dob' => '08052004',
                'address' => 'Thai Binh - Tay Ninh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'baiviet2004@gmail.com',
                'avatar' => 'team-6.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Ngo Ba Kha',
                'dob' => '28052000',
                'address' => 'Tho Phi - Tay Bac',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552412',
                'email' => 'khaba2000@gmail.com',
                'avatar' => 'team-7.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Phan Thi Quyet',
                'dob' => '28052003',
                'address' => 'Tu Xuyen - Trung Quoc',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552433',
                'email' => 'quyetthi2003@gmail.com',
                'avatar' => 'team-8.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 6,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vo Le Xoai',
                'dob' => '28051999',
                'address' => 'An Nam - Dai Viet',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984552453',
                'email' =>'xoaile1999@gmail.com',
                'avatar' => 'team-9.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 7,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Mai Dinh Linh',
                'dob' => '28052002',
                'address' => 'Bac Ninh - Ha Dong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984555753',
                'email' => 'linhdinh2002@gmail.com',
                'avatar' => 'team-10.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 8,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Bao Dieu',
                'dob' => '28102002',
                'address' => 'Bac Ninh - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984554753',
                'email' => 'dieubao2002@gmail.com',
                'avatar' => 'team-1.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 9,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vu Ngoc Mong',
                'dob' => '21102003',
                'address' => 'Bac Nam - Ha Nam',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254753',
                'email' => 'mongvu2003@gmail.com',
                'avatar' => 'team-2.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 3,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Dinh Viet Thi',
                'dob' => '09102003',
                'address' => 'Bac Nam - Ha Linh',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254793',
                'email' => 'thidinh2003@gmail.com',
                'avatar' => 'team-3.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 4,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Vu Van Quy',
                'dob' => '09122003',
                'address' => 'Tay Nguyen - HongKong',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254783',
                'email' => 'quyvan2003@gmail.com',
                'avatar' => 'team-4.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 5,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],[
                'name' => 'Nguyen Vu Bao To',
                'dob' => '28062003',
                'address' => 'Bong Lai - Thien Gioi',
                'achieve' => '',
                'description' => '',
                'phone'=>'0984254743',
                'email' => 'vubaonogcto2003@gmail.com',
                'avatar' => 'team-5.png',
                'password' => Hash::make('123456'),
                'level' => 1,
                'status' => null,
                'class_id' => 4,
<<<<<<< HEAD
                'course_id' => 1,
=======
                'course_id' => null,
                    'point' => null,
>>>>>>> f710f7d78f02dddcf20b936002e40e4c4dfb3bfd
                'social_link' => '',
            ],

        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('feedback')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'name' => 'Nguyen Khanh',
                'content' => 'Good!',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => '',
                'rating' => 5,
            ],
        ]);


        DB::table('point')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'point' => 10,
            ],
        ]);

        DB::table('course')->insert([
            [
                'name' => 'Web Design',
                'description' => 'volle tupe e tomowa en Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga.',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Web design & development courses for beginner',
                'image' => 'cat-1.jpg',
                'time' => 12,
                'price' => 99,
                'discount' => 10,
            ],
            [
                'name' => 'Python Programming Bootcamp',
                'description' => 'Sunt aliquae tribulationes quae possunt esse sea kaleta kaleta kaleta, amet alain tormina alain et ut ribom, sadepssing et id ermud diam kasd labri kleita. O Deus, vitis sanctus sit rector, et mare est mare, Sed hoc verum est. Temporalis lubricating saccos cum dolore sedet cum diametro renum. Dim ut Dim Tim and others, invideo orbi dolore, stet non solum labore et dolore, sit Dim sed non ipsum. Dimitte illum ad tempus ut non-elastica tantum pupa',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Python Programming',
                'image' => 'cat-2.jpg',
                'time' => 6,
                'price' => 129,
                'discount' => 10,
            ],
            [
                'name' => '9+ Programming Tools & Languages',
                'description' => 'Sunt problemata quaedam quae kaleta kaleta mare possunt esse kaleta, amet alain tormina alain ac ut ribom, sadepssing et id ermud diam kasd labri kleita. O Deus, fac dominari vitem sanctam, et mare est mare, et hoc verum est. Temporaria lubricantia saccos cum dolore proportionales sunt diametro renis. Dim like dim tim and others, zelus mundi dolor, stet non solum labore et dolore, sit sed non ipsum. Relinque eam paulisper ut pupa inelastica tantum',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Tools & Languages',
                'image' => 'cat-3.jpg',
                'time' => 8,
                'price' => 105,
                'discount' => 10,
            ],
            [
                'name' => 'Career Mentorship Sessions (1:1)',
                'description' => 'Estas kelkaj problemoj, ke caleta caleta sea caleta, alain alain tormina alain alain malantaŭ la ripo, sadepssing kaj tiu ĉi ermudo Diam kasd labri kleita. Dio regis super la sankta vinberbranĉo, kaj la maro super la maro, kaj ĝi estas bela. Tempora hidropizio kun doloro proporcia al la diametro de la reno. Malforta, kiel la malespero de Tim kaj aliaj, la ĵaluzo de la mondo, ne nur la laboro kaj doloro, sed ne sin. En iu momento krom la rigida pupo',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Mentorship Sessions',
                'image' => 'cat-4.jpg',
                'time' => 6,
                'price' => 122,
                'discount' => 10,
            ],
            [
                'name' => 'Just-in-time Interviews',
                'description' => 'Ci sono alcuni problemi nel mare caldo, alain alain tomina alain alain dietro le costole, triste che in ermudo Diam kasd lips kleita. Dio regnò sulla santa vigna, e il mare sul mare, ed era bello. Paralisi temporanea con dolore corrispondente al diametro del rene. I deboli, come la disperazione di Tim e degli altri, linvidia del mondo, non solo lavorano e soffrono, ma non se stessi. A volte tranne una bambola forte',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Interviews',
                'image' => 'cat-5.jpg',
                'time' => 10,
                'price' => 143,
                'discount' => 10,
            ],
            [
                'name' => 'Career Essential Soft Skills Program',
                'description' => 'Kune mamwe matambudziko mugungwa rinodziya, kunze kwa tomina alain alain kuseri kwembabvu, zvinosuwisa mu ermudo Kunyarara kasd miromo kleita. Jehovha akatonga pamusoro pomunda wemizambiringa mutsvene, negungwa pamusoro pegungwa; Kuoma mitezo kwenguva pfupi nemarwadzo anoenderana nehupamhi hweitsvo. Vasina simba, sekuora mwoyo kwaTim nevamwe, godo renyika, kwete chete kushanda uye kutambura, asi kwete ivo pachavo. Dzimwe nguva kunze kwechidhori chakasimba',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => ' Essential Soft Skills',
                'image' => 'cat-6.jpg',
                'time' => 8,
                'price' => 178,
                'discount' => 10,
            ],
            [
                'name' => '25+ Industry-driven Case Studies',
                'description' => 'Ada beberapa masalah di laut yang hangat, alain alain tomina alain alain di balik tulang rusuk, sedihnya di ermudo Diam kasd lips kleita. Tuhan memerintah atas kebun anggur suci, dan laut di atas laut, dan itu indah. Kelumpuhan sementara dengan rasa sakit yang sesuai dengan diameter ginjal. Yang lemah, seperti keputusasaan Tim dan lain-lain, kecemburuan dunia, tidak hanya bekerja dan menderita, tetapi bukan diri mereka sendiri. Terkadang kecuali boneka yang kuat',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Industry-driven Case ',
                'image' => 'cat-7.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],
            [
                'name' => 'AI-powered Profile Builder',
                'description' => 'Ana masalah liyane ing segara anget, kajaba tomina alain alain konco iga, sayangé ing ermudo Silence kasd lambé kleita. Pangeran Yehuwah jumeneng ratu ing pakebonan anggur suci lan ing segara ing sagara; Lumpuh lan nyeri sauntara gumantung saka ukuran ginjel. Wong sing ringkih, kaya Tim Depresi lan liya-liyane, iri marang jagad iki, ora mung kerja lan nandhang sangsara, nanging ora awake dhewe. Kadhangkala mung boneka sing padhet',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Profile Builder',
                'image' => 'cat-8.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],
            [
                'name' => 'Career Bootcamp',
                'description' => 'V teplém moři jsou jiné problémy, kromě tomina alain alain za žebry, bohužel v ermudu Silence kasd kleita lips. Hospodin kraluje na svaté vinici a v moři mořském; Paralýza a dočasná bolest závisí na velikosti ledviny. Slabí lidé, jako Depression Team a další, závidí světu, nejen práci a utrpení, ale ne sami sobě. Někdy je to prostě pevná panenka',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Career Bootcamp',
                'image' => 'cat-9.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],
            [
                'name' => '1350 Hours of Learning',
                'description' => 'Secbalrasi jsou jiné problémy, kromě tomina alain alain za žebry, bohužel v ermudu Silence kasd kleita lips. Hospodin kraluje na svaté vinici a v moři mořském; Paralýza a dočasná bolest závisí na velikosti ledviny. Slabí lidé, jako Depression Team a další, závidí světu, nejen práci a utrpení, ale ne sami sobě. Někdy je to prostě pevná panenka',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => '1350 Hours of Learning beginner',
                'image' => 'cat-10.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],
            [
                'name' => 'Accredited by Institute of Analytics UK (IOA)',
                'description' => 'Има малко проблеми в топлото море, освен че Тумин Ален уморява Ален, за съжаление, тих при Armoud Qasd Kalita Bahir. Господ царува в светите лозя и в моретата. Парализа и временна болка в зависимост от размера на бъбреците. Екип Депресия и други слаби хора завиждат на света не само за работата и страданието, но и за себе си. Понякога е просто солидна марионетка.',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Institute of Analytics',
                'image' => 'cat-11.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],
            [
                'name' => 'Designed for Working Professionals',
                'description' => 'Jeg vil anklage ham for nonumiens forbannelse, at havets hav er havets hav. Gud, la helgenen være hersker over vintreet, havet er havet, men det er sant. Sadipscing sliter en stund, men la smerten ordne seg i tide. Diam som diam ingen tid, de misunner verden med smerte, ingen nonumy det står med fødsel, smerten rettferdig og være herskeren over diam, men ikke seg selv. La det være på tide at nonumy elitrs smerter bare er noen selv',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Designed for Working',
                'image' => 'cat-12.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
            ],

            [
                'name' => 'Masterclasses by Industry Experts',
                'description' => 'Eum nonumia accusamus ex, id sea erant sea sea. Deus, vitis sanctus sit rector, mare est mare, Sed verum est. Dolore tempus sadipscing elitr, sed dolor tempor consetetur. Diam ut diam nulla tempor, no diam praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Sit tempor ut praesent luptatum zzril delenit augue duis dolore te feugait aliqua',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Masterclasses',
                'image' => 'cat-13.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],
            [
                'name' => 'High-performance Coaching (1:1)',
                'description' => 'Vi anklager ham for nittitallet, at de var sjø sjø sjø. Gud, vær hersker over det hellige vintreet, havet er havet, men det er sant. Tidens smerte er trist, men smerten vil ordne seg med tiden. Diam som diam det er ingen tid, ingen diam tilstede den sørgede zzril utsletter motstanderen av de to smertene, ingen lett ting har blitt gjort mot deg. La det være en tid da den sørgelige zzril utsletter motstanderen av de to sorgene',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'performance Coaching',
                'image' => 'cat-14.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],
            [
                'name' => 'Industry Readiness Assessments',
                'description' => 'Re mo qosa ka lilemo tse mashome a robong, hore e ne e le leoatle la leoatle. Modimo, e be mmusi wa morara o halalelang, lewatle ke lewatle, empa ke nnete. Bohloko ba nako ke bo bohloko, empa bohloko bo tla rarolloa ka nako. Diam as diam ha ho na nako, ha ho diam e teng zzril e llang e hlakola mohanyetsi oa mahlaba a mabeli, ha ho ntho e bonolo e entsoeng ho uena. E ke e be nako eo zzril ea masoabi a hlakolang mohanyetsi oa mahlomola a mabeli.',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Industry Readiness',
                'image' => 'cat-15.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],
            [
                'name' => 'University of Arizona Alumni Status',
                'description' => 'Lo accusiamo degli anni Novanta, che erano mare mare mare. Dio, sii il sovrano della santa vite, il mare è il mare, ma è vero. Il dolore del tempo è triste, ma col tempo si risolverà. Diam come diam non cè tempo, nessun diam presente il pianto zzril spazza via lavversario delle due pene, nessuna cosa facile ti è stata fatta. Che sia un tempo in cui il lugubre zzril spazzi via lavversario dei due dolori',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Alumni Status',
                'image' => 'cat-16.png',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],
            [
                'name' => 'Exclusive Job Opportunities Portal',
                'description' => 'Eum nonaginta accusamus, qui erant maritimi. Deus, sanctae vitis rector, mare est mare, Sed verum est. Tristique tempus dolor, sed tempor ipsum soluta id. Diam as diam nec tempus, no diam praesent clamor zzril rapit adversarium poenis duo, nulla facilis sit te. Sit tempus, cum duorum dolorum lucubriosus zzril rapit adversarium',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Opportunities Portal',
                'image' => 'cat-17.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],
            [
                'name' => 'Game Design',
                'description' => 'full tupe e tomowa og Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga.',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Game developer C#, C for beginner',
                'image' => 'cat-18.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
            ],

            [
                'name' => 'App Design',
                'description' => 'zuru tupe e tomowa na Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Ọ bụrụ na ịgaghị ahụ Mushukha Durg, ị ga-adị mma.',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'App design, layout, color and character basic',
                'image' => 'cat-19.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],
            [
                'name' => 'Personalised Industry Session',
                'description' => 'Við sökum hann um níutíu sem voru sjómenn. Guð, höfðingi hins heilaga vínviðar, hafið er hafið, en það er satt. Því miður var tíminn sár, en hann leystist í tíma. Diam sem diam né tími, enginn diam núverandi grátur zzril hrifsar andstæðinginn með tveimur refsingum, enginn mun vera auðvelt fyrir þig. Látum tíma vera þegar ógnvekjandi sársauki tveggja sársauka hrifsar andstæðinginn',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Personalised Industry',
                'image' => 'cat-20.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],
            [
                'name' => '30+ Live Learning Sessions',
                'description' => 'Nonaginta qui erant piscatores accusamus. Deus, sanctae vitis princeps, mare est mare, sed verum est.Donec tempus dolor lorem, sed tempus ex. Diam sem diam nec tempor, no diam current cry zzril imprimit adversarium with two punishments, nemo facilis nam te. Tempus sit, cum duorum dolorum terrificus dolor tenet adversarium',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Live Learning',
                'image' => 'cat-21.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],
            [
                'name' => 'Support is available all days for 24 hours',
                'description' => 'Við ákærum þá níutíu sem voru sjómenn. Guð, höfðingi hins heilaga vínviðar, hafið er hafið, en það er satt. Þangað til sársauka, en tíminn út. Diam sem diam nor tempor, no diam current cry zzril heillar andstæðinginn með tveimur refsingum, enginn er auðveldur fyrir þig. Það er tími þegar hræðilegur sársauki tveggja sársauka heldur andstæðingnum',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Support is available ',
                'image' => 'cat-22.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],
            [
                'name' => 'Ethical Foundations',
                'description' => 'Matou te tu’ua’ia le to’aivasefulu sa fai faiva. Le Atua, le perenise o le vine paia, o le sami o le sami, ae e moni. Seia oo i le taimi o le tiga, ae o le taimi e malolo ai. Diam sem diam or tempor, leai se tagi i le taimi nei e faagaeetia ai le fili i faasalaga e lua, e leai se tasi e faigofie mo oe. E i ai le taimi e taofia ai e le fili le tiga matautia o tiga e lua',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Ethical Foundations',
                'image' => 'cat-23.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],
            [
                'name' => 'Ethics in Data',
                'description' => 'Culpamur nonaginta qui piscabantur. Deus, sancta vitis princeps, maris sed verax. Donec tempus dolor sed tempus ornare. Diam sem diam vel tempor, nullam nunc ut inimicum duobus suppliciis, nemo facile. Tempus est, cum inimicus duos dolores premit gravissimus dolor',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Ethics in Data',
                'image' => 'cat-24.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
            ],

            [
                'name' => 'Marketing',
                'description' => 'Matou te tu’ua’ia le to’aivasefulu sa fagogota. Le Atua, le perenise o le vine paia, ae faamaoni i le sami. Ae paga lea, ua oo i le taimi e faanoanoa ai, ae ua oo i le taimi e teuteu ai. Sei ou tau atu ia te oe, sei ou tau atu mo sina taimi, ae o lea ua leai se tasi e fai ma fili e lua faasalaga, e leai se tasi e faigofie. E i ai le taimi e oomi ai e le fili ni tiga se lua, o le tiga sili ona leaga',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Strategies to master marketing for beginner',
                'image' => 'cat-25.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Ethics in Modelling',
                'description' => 'Culpamur nonaginta qui piscabantur. Sacrae fidiculae Princeps Deus, Sed verus maris. Donec tempus luctus est, sed ornare ipsum tempus ut. Dico ad tempus, nunc duobus caedibus nullus est inimicus, nemo facile. Est tempus, quo duos dolores hostes urget, gravissimum dolorem',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Ethics in Modelling',
                'image' => 'cat-26.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Capstone Project 2',
                'description' => 'Jó Isten, a szent völgy vezetője, de hű a tengerhez. Sajnos szomorú idő van, de ideje díszíteni. , mondom egy darabig, de senkinek sem könnyű. Amikor az ellenség két fájdalmat sürget, van egy nap, egy fájdalom',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Capstone Project 2',
                'image' => 'cat-27.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Structured Problem Solving',
                'description' => 'Ya Tuhan, pemimpin lembah suci, tapi setia pada laut. Sayangnya, ini adalah waktu yang menyedihkan, tetapi inilah saatnya untuk mendekorasi. , saya katakan untuk sementara, tapi itu tidak mudah bagi siapa pun. Ketika musuh mendesak dua rasa sakit, ada satu hari, satu rasa sakit',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Structured Problem Solving',
                'image' => 'cat-28.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Data Storytelling',
                'description' => 'Ya Tuhan, pesinan lembah suci, tapi setia pada laut. Alas, ini adalah waktu yang saddens, tepai inina saatnya untuk mendekorasi. , saya katakan untuk semanta, tapi itu tidak mudah bagi siapa pun. Ketika musuh durg dua rasa sakit, ada satu hari, satu rasa sakit',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Data Storytelling',
                'image' => 'cat-29.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Framework to DS/ML Solution Building Strategy',
                'description' => 'tukhan, urutan lebak suchi, tapi satia ka lout. Duh, abdi saddans waktos, tepai ina satnya jadi geulis. , Kuring ngabejaan manehna yen, tapi teu gampang pikeun saha. Nalika Mushukha Durg Dua nyeri, aya hiji poé, hiji nyeri',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Framework to DS/ML Solution Building Strateg',
                'image' => 'cat-30.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Building Data Architecture',
                'description' => 'Тухан, Building Data Architectureға адал. О, мен уақытты saddans, tepai ina satnya әдемі болу үшін. , Мен оған айтамын, бірақ бұл ешкімге оңай емес. Мушуха дург дуа ауырса, күн бар, ауырады',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Building Data Architecture',
                'image' => 'cat-31.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Tester',
                'description' => 'vile mfululizo wa mabonde, mwaminifu kwa Lu. Oh, mimi saddans wakati, tepai ina satnya nzuri. , namwambia, lakini si rahisi kwa mtu yeyote. Ikiwa Mushukha durg dua huumiza, jua lipo, linaumiza',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Basic about test program & tool can use for fresher',
                'image' => 'cat-32.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to MLOps',
                'description' => 'slík röð af dölum, trygg við Lu. Ó, ég saddans tíma, tepai hefur góða satnya. , segi ég honum, en það er ekki auðvelt fyrir neinn. Ef Mushukha durg dua særir, þá er sólin þar, það er sárt',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'BIntroduction to MLOpsasic about test program & tool can use for fresher',
                'image' => 'cat-33.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to Data and Model Lifecycle',
                'description' => 'serangkaian lembah, setia kepada Lu. Oh, saya sedih kali, tepai memiliki satnya yang bagus. , saya katakan padanya, tapi itu tidak mudah bagi siapa pun. Jika Mushukha durg dua sakit, matahari ada, sakit',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Introduction to Data and Model Lifecycle',
                'image' => 'cat-34.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Lexical Processing',
                'description' => 'egy sor völgy, hűséges Lu-hoz. Ó, szomorú idők vagyok, de jó szatnya van. , mondtam neki, de senkinek sem könnyű. Ha Mushukha durg dua beteg, ott van a nap, fáj',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Basic Lexical Processing',
                'image' => 'cat-35.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Syntactic Processing',
                'description' => 'serangkaian lembah yang setia kepada Lu. Oh, aku sedih kali, tapi ada satnya bagus. , saya katakan padanya, tapi itu tidak mudah bagi siapa pun. Jika Mushukha durg doa sakit, matahari ada, sakit',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Basic about test Syntactic Processing',
                'image' => 'cat-36.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Semantic Processing',
                'description' => 'a Lu-hoz hű völgyek sorozata. Ó, néha szomorú vagyok, de vannak jó időszakok. , mondtam neki, de senkinek sem könnyű. Ha a Mushukha Durg Prayer beteg, ott van a nap, fáj',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Semantic Processing design & development courses for beginner',
                'image' => 'cat-37.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Content Writing',
                'description' => 'serangkaian lembah yang setia kepada Lu. Oh, terkadang aku sedih, tapi ada saat-saat menyenangkan. , saya katakan padanya, tapi itu tidak mudah bagi siapa pun. Kalau Sholat Mushukha Durg sakit, ada matahari, sakit',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Content Writing',
                'image' => 'cat-38.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to Attention Mechanism',
                'description' => 'a Lu-hoz hű völgyek sorozata. Ó, néha szomorú vagyok, de vannak szép idők. , mondtam neki, de senkinek sem könnyű. Ha a Mushukha Durg ima beteg, van nap, fáj',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Introduction to Attention Mechanism beginner',
                'image' => 'cat-39.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Advanced Language Models: BERT, GPT',
                'description' => 'sok völgy hűséges Lu-hoz. Ó, néha fáj, de vannak jó idők. , mondtam neki, de senkinek sem könnyű. Ha a Mushukha Durg ima beteg, vannak napok, fáj',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Web Advanced Language Models: BERT, GPT',
                'image' => 'cat-40.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to Neural Networks',
                'description' => 'ọtụtụ ndagwurugwu na-eguzosi ike n’ihe nye Lu. Oh, mgbe ụfọdụ ọ na-afụ ụfụ, mana enwere oge dị mma. , Agwara m ya, ma ọ dịghịrị onye ọ bụla mfe. Ọ bụrụ na ekpere Mushukha Durg na-arịa ọrịa, enwere ụbọchị, ọ na-ewute ya',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Introduction to Neural Networks for beginner',
                'image' => 'cat-41.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'CNN',
                'description' => 'molte valli sono fedeli a Lu. Oh, a volte fa male, ma ci sono dei bei momenti. , gli ho detto, ma non è facile per nessuno. Se la preghiera Mushukha Durg è malata, ci sono giorni, fa male',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Web CNN for beginner',
                'image' => 'cat-42.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
            ],
            [
                'name' => 'SEO',
                'description' => 'sok völgy hűséges Lu-hoz. Ó, ez néha fáj, de vannak szép idők. , mondtam neki, de senkinek sem könnyű. Ha a Mushukha Durg ima beteg, vannak napok, fáj',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Web design SEO',
                'image' => 'cat-43.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'RNN',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'RNN design & development courses for beginner',
                'image' => 'cat-44.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'Computer Vision',
                'description' => 'teljes tupe e tomowa és Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga.',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Computer Vision & development courses for beginner',
                'image' => 'cat-45.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'Best practices for Effective Communication',
                'description' => 'Margir dalir eru tryggir Lou. Ó, það er stundum sárt, en það eru góðir tímar. , sagði ég honum, en það er ekki auðvelt fyrir neinn. Ef Mushukha Durg bæn er sjúk, það eru dagar, það er sárt',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Best practices for Effective Communication courses for beginner',
                'image' => 'cat-46.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'Capstone Project',
                'description' => 'Wiele dolców jest lojalnych wobec Lou. Och, czasami boli, ale są dobre czasy. , powiedziałem mu, ale nikomu to nie jest łatwe. Jeśli modlitwa Mushukha Durg jest chora, są dni, boli',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Capstone Project courses for beginner',
                'image' => 'cat-47.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to Cloud',
                'description' => 'Margir dalir eru tryggir Lou. Ó, það er stundum sárt, en það eru góðir tímar. , sagði ég honum, en það er ekki auðvelt fyrir neinn. Ef Mushukha Durg bænin er sjúk, þá eru dagar, það er sárt',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Introduction to Cloud & development courses for beginner',
                'image' => 'cat-48.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
            ],
            [
                'name' => 'Security',
                'description' => 'Dużo pieniędzy jest lojalnych wobec Lou. Och, czasami to boli, ale są też dobre czasy. , powiedziałem mu, ale nikomu to nie jest łatwe. Jeśli modlitwa Mushukha Durg jest chora, są dni, boli',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Web protected',
                'image' => 'cat-49.jpg',
                'time' => 12,
                'price' => 150,
                'discount' => null,
            ],
            [
                'name' => 'Elastic Provision Services of Cloud and Setting up Cloud',
                'description' => 'Много пари са лоялни към Лу. О, понякога боли, но има и хубави моменти. , казах му, но на никого не му е лесно. Ако молитвата Mushukha Durg е болна, има дни, боли',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Elastic Provision Services of Cloud ',
                'image' => 'cat-50.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
            ],
            [
                'name' => 'Introduction to HDFS',
                'description' => 'Dużo pieniędzy jest lojalnych wobec Lou. Och, czasami boli, ale są też dobre czasy. , powiedziałem mu, ale nikomu to nie jest łatwe. Jeśli modlitwa Mushukha Durg jest chora, są dni, boli',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Computer Introduction to HDFS',
                'image' => 'cat-51.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
            ],
            [
                'name' => 'Software',
                'description' => 'E tele tupe e faamaoni ia Lou. Oi, e tiga i nisi taimi, ae e iai foi taimi lelei. , na ou fai atu ai ia te ia, ae e le faigofie mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Upgrade and update the app',
                'image' => 'cat-52.jpg',
                'time' => 12,
                'price' => 210,
                'discount' => null,
            ],
            [
                'name' => 'Hardware',
                'description' => 'volle tupe e tomowa en Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga.',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Basic knowledge of hardware',
                'image' => 'cat-53.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
            ],
            [
                'name' => 'Hive Querying',
                'description' => 'teljes tupe e tomowa és Lou. Oi, e tiga i nisi taime, ae e iai foi taime lelei. , na u fai atu ai ia te ia, ae le zoli mo se tasi. Afai e maʻi le tatalo Mushukha Durg, e iai aso, e tiga.',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Advanced knowledge of hardware',
                'image' => 'cat-54.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
            ],
        ]);

            DB::table('classes')->insert([
            [
                'id' => 1,
                'course_id' => 1,
                'user_id' => 1,
                'classes_name' => 'T2109',
                'status' => 1,
            ],

            [
                'id' => 2,
                'course_id' => 1,
                'user_id' => 2,
                'classes_name' => 'T2110',
                'status' => 1,
            ],
            [
                'id' => 3,
                'course_id' => 1,
                'user_id' => 3,
                'classes_name' => 'T2111',
                'status' => 1,
            ],
            [
                'id' => 4,
                'course_id' => 1,
                'user_id' => 4,
                'classes_name' => 'T2112',
                'status' => 1,
            ],
        ]);


        DB::table('blog')->insert([
            [
                'id' => 1,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-1.jpg',
                'image1' => 'carousel-2.jpg',
                'image2' => 'blog-11.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
                'id' => 2,
                'staff_id' => 1,
                'title' => 'Stet clita kasd gubergren, zzril delinit augue duis painait nulla facilita',
                'subtitle' => 'Es ist ein Schmerz im Arsch',
                'image' => 'blog-2.jpg',
                'image1' => 'carousel-3.jpg',
                'image2' => 'blog-9.jpg',
                'content1' => 'Aliquam sit amet magna quam. Magna praesent ibidem. Nunumy sane mundus desolabitur et magnus mundus magno labore. Illum tristique accusamus et s
                               anctum. Earum ut invidunt ut Klita dolor sit. Diam Mare nullum Mare Takimata est Sanctu
                               s Diam Kasd Gubergren, Takimata Sancta Takimata est Sanctus Diam Kasd Kasd Gubergren..',
                'content2' => 'Tristis est voluptas, sed invidia non est temporalis.
                            Sancta Rebu erigitur. Sed accusatio stetit
                            Sanctus mundi, kasd duo dolores et dolores. Duo sancti eam amabunt et operabuntur pro ea.
                            Fiet, sed erit tantum pars, et erit dolor
                            mi, ne sit diam. Dolor erat ipsum dolor non zelus.',
                'content3' => 'Labore et odio torquet, odit cum voluptate, sanctus, sanctus.
                            Clita dolor sit kasd diam takimata nur diam lorem sed. Volo eam reprehendere. Vitae non magna dolor
                            In tempore Rebum perficietur, opus sacrum, sed Nonumy Diam multo magis erit. Sed sit tempor faucibus, ullamcorper mi
                            Is in funere zkril interfuit et duorum tristium hominum propagationem delevit. Adipiscing consectetuer, sed diam praesent luptatum zzril delenit augue sit amet
                            Dolore perpetua sadipscing cum. Clit dolore ipsum dolor sit. Sed zelus dorsi dolor kasd gubergren
                            Molestiae erat, sed magna erat. Penitus regitur ab eirmod kasd
                            Et bis see kasd clita ipsum et takimata kasd diam sit amet nisi aliquam erat.
                             cum labore et dolore multum se regunt, si eos cum dolore et labore et voluptate gravant.
                             . Ipse nos operari simul vult. Eos ut est magni ut rem.',
                'content4' => 'Von Arbeit und Hass durchdrungen, will er hassen, heilig, heilig. Clita tut Kasd weh
                               diam kasd kasd diam kasd gubergren, aber diam kasd takimata der Schmerz des Lebens wird nicht kritisieren.
                               amet diam praesent luptatum zzril delenit ague duis vorhanden luptatum zzril delenit ague duis
                               diam kasd kasd diam kasd gubergren, aber diam kasd takimata der Schmerz des Lebens wird nicht kritisieren
                               Dolore perpetua sadipscing cum. Clit dolore ipsum dolor sit. Sed zelus dorsi dolor kasd gubergren
                               .',
                'tag' => '',
            ],
            [
                'id' => 3,
                'staff_id' => 1,
                'title' => 'Haufinyane tjena, ka linako tse ling ha ho hlokahale hore u tsamaee',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-4.jpg',
                'image1' => 'carousel-4.jpg',
                'image2' => 'blog-7.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
                'id' => 4,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-3.jpg',
                'image1' => 'carousel-1.jpg',
                'image2' => 'blog-12.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
                'id' => 5,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-5.jpg',
                'image1' => 'carousel-5.jpg',
                'image2' => 'blog-10.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
                'id' => 6,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-6.jpg',
                'image1' => 'carousel-6.jpg',
                'image2' => 'blog-8.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
            'id' => 7,
            'staff_id' => 1,
            'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
            'subtitle' => 'Est dolor lorem et ea',
            'image' => 'blog-13.jpg',
            'image1' => 'carousel-5.jpg',
            'image2' => 'blog-10.jpg',
            'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
            'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
            'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
            'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
            'tag' => '',
            ],
            [
                'id' => 8,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-14.jpg',
                'image1' => 'carousel-4.jpg',
                'image2' => 'blog-13.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ],
            [
                'id' => 9,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'subtitle' => 'Est dolor lorem et ea',
                'image' => 'blog-15.jpg',
                'image1' => 'carousel-1.jpg',
                'image2' => 'blog-14.jpg',
                'content1' => 'Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.',
                'content2' => 'Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.',
                'content3' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.',
                'content4' => 'Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat.',
                'tag' => '',
            ]
        ]);

        DB::table('subject')->insert([
            [
                'id' => 1,
                'name' => 'Web Design',
                'description' => '',
                'image' => 'cat-1.jpg',
                'course_id' => 1,
             ],
            [
                'id' => 2,
                'name' => 'Development',
                'description' => '',
                'image' => 'cat-2.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Game Design',
                'description' => '',
                'image' => 'cat-3.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'App Design',
                'description' => '',
                'image' => 'cat-4.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Marketing',
                'description' => '',
                'image' => 'cat-5.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Research',
                'description' => '',
                'image' => 'cat-6.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Content Writing',
                'description' => '',
                'image' => 'cat-7.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'SEO',
                'description' => '',
                'image' => 'cat-8.jpg',
                'course_id' => 1,
            ],
        ]);
    }
}
