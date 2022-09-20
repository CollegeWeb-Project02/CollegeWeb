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

        DB::table('student')->insert([
            [
                'id' => 1,
                'stu_name' => 'Nguyen Khanh',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => '',
                'status' => '1',
            ]
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//        DB::table('user')->insert([
//            [
//                'id' => 1,
//                'name' => 'College',
//                'email' => 'College@gmail.com',
//                'password' => Hash::make('123456'),
//                'avatar' => null,
//                'level' => 0,
//                'description' => null,
//            ],
//            [
//                'id' => 2,
//                'name' => 'admin',
//                'email' => 'admin@gmail.com',
//                'password' => Hash::make('123456'),
//                'avatar' => null,
//                'level' => 0,
//                'description' => null,
//            ],
//            [
//                'id' => 3,
//                'name' => 'Shane Lynch',
//                'email' => 'ShaneLynch@gmail.com',
//                'password' => Hash::make('123456'),
//                'avatar' => 'avatar-0.png',
//                'level' => 1,
//                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
//            ],
//            [
//                'id' => 4,
//                'name' => 'Brandon Kelley',
//                'email' => 'BrandonKelley@gmail.com',
//                'password' => Hash::make('123456'),
//                'avatar' => 'avatar-1.png',
//                'level' => 1,
//                'description' => null,
//            ],
//            [
//                'id' => 5,
//                'name' => 'Roy Banks',
//                'email' => 'RoyBanks@gmail.com',
//                'password' => Hash::make('123456'),
//                'avatar' => 'avatar-2.png',
//                'level' => 1,
//                'description' => null,
//            ],
//        ]);

        DB::table('feedback')->insert([
            [
                'student_id' => 1,
                'name' => 'Nguyen Khanh',
                'content' => 'Good!',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => '',
                'rating' => 5,
            ],
        ]);

        DB::table('stu_account')->insert([
            [
                'student_id' => 1,
                'student_email' => 'nguyenkhanh08112003@gmail.com',
                'password' => '',
            ],
            [
                'student_id' => 2,
                'student_email' => '',
                'password' => '',
            ],
            [
                'student_id' => 3,
                'student_email' => '',
                'password' => '',
            ],
        ]);

        DB::table('staff_account')->insert([
            [
                'staff_id' => 1,
                'staff_email' => 'hoangluongviet2003@gmail.com',
                'password' => '123',
                'level' => 2,
            ],
            ]);

        DB::table('stu_classes')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'classes_id' => 1,
            ],
        ]);

        DB::table('point')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
                'point' => 10,
            ],
        ]);

        DB::table('stu_course')->insert([
            [
                'student_id' => 1,
                'course_id' => 1,
            ],
        ]);

        DB::table('course')->insert([
            [
                'course_name' => 'Web Design',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-1.jpg',
                'time' => 6,
                'price' => 99,
                'discount' => 10,
                'status' => 1,
            ],

            [
                'course_name' => 'Development',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-2.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
                'status' => 1,
            ],

            [
                'course_name' => 'Game Design',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-3.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
                'status' => 1,
            ],

            [
                'course_name' => 'App Design',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-4.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
                'status' => 1,
            ],

            [
                'course_name' => 'Marketing',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-5.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Research',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-6.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Content Writing',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-7.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'SEO',
                'description' => '',
                'title' => '',
                'subtitle' => '',
                'image' => 'cat-8.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
                'status' => 1,
            ],
        ]);

        DB::table('classes')->insert([
            [
                'id' => 1,
                'classes_name' => 'T2109',
                'status' => 1,
            ],

            [
                'id' => 2,
                'classes_name' => 'T2110',
                'status' => 1,
            ],
            [
                'id' => 3,
                'classes_name' => 'T2111',
                'status' => 1,
            ],
            [
                'id' => 4,
                'classes_name' => 'T2112',
                'status' => 1,
            ],
        ]);

        DB::table('classes_staff')->insert([
            [
                'classes_id' => 1,
                'staff_id' => 1,
                'course_id' => 1,
            ],
        ]);

        DB::table('staff')->insert([
            [
                'id' => 1,
                'name' => 'Christine Juzang',
                'social_link' => '',
                'level' => 1,
                'email' => 'juzangchrist98@gmail.com',
                'skill' => 'Professor',
                'description' => '',
                'education' => 'Senior of Intelligent Technology in UTC',
                'achieve' => '',
                'avatar' => 'team-2.jpg',
                ],

                [
                'id' => 2,
                'name' => 'Maclain Emilia',
                'social_link' => '',
                'level' => 1,
                'email' => 'emiliamc@gmail.com',
                'skill' => 'Developer',
                'description' => '',
                'education' => 'Senior of Intelligent Technology in UTC',
                'achieve' => '',
                'avatar' => 'team-3.jpg',
                ],

                [
                'id' => 3,
                'name' => 'Jane Smith',
                'social_link' => '',
                'level' => 1,
                'email' => 'janesmith12@gmail.com',
                'skill' => 'Developer',
                'description' => '',
                'education' => 'Senior of Intelligent Technology in UTC',
                'achieve' => '',
                'avatar' => 'team-1.jpg',
                ],

                [
                'id' => 4,
                'name' => 'Richard Nguyen',
                'social_link' => '',
                'level' => 1,
                'email' => 'richard98@gmail.com',
                'skill' => 'Website Developer',
                'description' => '',
                'education' => 'Senior of Intelligent Technology in UTC',
                'achieve' => '',
                'avatar' => 'team-4.jpg',
            ],
        ]);

        DB::table('staff_course')->insert([
            [
                'staff_id' => 1,
                'course_id' => 1,
            ]
        ]);


        DB::table('blog')->insert([
            [
                'id' => 1,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'image' => 'blog-1.jpg',
                'content' => '',
                'tag' => '',
            ],
            [
                'id' => 2,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'image' => 'blog-2.jpg',
                'content' => '',
                'tag' => '',
            ],
            [
                'id' => 3,
                'staff_id' => 1,
                'title' => 'Vero ipsum sea justo dolore eirmod amet dolor tempor lorem',
                'image' => 'blog-3.jpg',
                'content' => '',
                'tag' => '',
            ],
        ]);

        DB::table('comment')->insert([
            [
                'id' => 1,
                'blog_id' => 1,
                'name' => 'Nguyen Khanh',
                'position' => 'Developer',
                'content' => '',
                'avatar' => '',
            ],
            [
                'id' => 2,
                'blog_id' => 1,
                'name' => 'Dinh Quang Anh',
                'position' => 'Professor',
                'content' => '',
                'avatar' => '',
            ],
            [
                'id' => 3,
                'blog_id' => 1,
                'name' => 'Luong Viet Hoang',
                'position' => 'Back-end Developer',
                'content' => '',
                'avatar' => '',
            ],
            [
                'id' => 4,
                'blog_id' => 1,
                'name' => 'Ta Duy Linh',
                'position' => 'Game Developer',
                'content' => '',
                'avatar' => '',
            ]
        ]);
    }
}
