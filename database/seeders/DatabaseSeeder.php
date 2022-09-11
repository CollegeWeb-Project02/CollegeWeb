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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('user')->insert([
            [
                'id' => 1,
                'name' => 'College',
                'email' => 'College@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('feedback')->insert([
            [
                'id' => 1,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'content' => "After researching through articles and information about the school's facilities, I found this to be a modern and worthy school to attend."
            ],
            [
                'id' => 2,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'content' => "Modern facilities, good teacher, amazing goodchop!"
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'content' => "Oh my gosh, I can't wait to study at this school."
            ]
        ]);

        DB::table('major')->insert([
            [
                'id' => 1,
                'major_name' => 'Web Design',
                'unit_id' => 1
            ],
            [
                'id' => 2,
                'major_name' => 'Development',
                'unit_id' => 1
            ],
            [
                'id' => 3,
                'major_name' => 'Game Design',
                'unit_id' => 1
            ],
            [
                'id' => 4,
                'major_name' => 'App Design',
                'unit_id' => 3
            ],
            [
                'id' => 5,
                'major_name' => 'Marketing',
                'unit_id' => 2
            ],
            [
                'id' => 3,
                'major_name' => 'Research',
                'unit_id' => 3
            ],
            [
                'id' => 3,
                'major_name' => 'Content Writing',
                'unit_id' => 3
            ],
            [
                'id' => 3,
                'major_name' => 'SEO',
                'unit_id' => 2
            ],
        ]);

        DB::table('major_image')->insert([
            [
                'major_id' => 1,
                'image' => 'cat-1.jpg'
            ],
            [
                'major_id' => 2,
                'image' => 'cat-2.jpg'
            ],
            [
                'major_id' => 3,
                'image' => 'cat-3.jpg'
            ],
            [
                'major_id' => 4,
                'image' => 'cat-4.jpg'
            ],
            [
                'major_id' => 5,
                'image' => 'cat-5.jpg'
            ],
            [
                'major_id' => 6,
                'image' => 'cat-6.jpg'
            ],
            [
                'major_id' => 7,
                'image' => 'cat-7.jpg'
            ],
            [
                'major_id' => 8,
                'image' => 'cat-8.jpg'
            ],
        ]);

        DB::table('unit')->insert([
            [
                'id' => 1,
                'major_id' => 1,
                'unit_name' => 'A',
                'point1' => 8,
                'point2' => 8,
                'point3' => 8
            ],
            [
                'id' => 2,
                'major_id' => 1,
                'unit_name' => 'B',
                'point1' => 8,
                'point2' => 8,
                'point3' => 8
            ],
            [
                'id' => 3,
                'major_id' => 3,
                'unit_name' => 'C',
                'point1' => 8,
                'point2' => 8,
                'point3' => 8
            ],
            [
                'id' => 4,
                'major_id' => 2,
                'unit_name' => 'D',
                'point1' => 8,
                'point2' => 8,
                'point3' => 8
            ],
        ]);

        DB::table('student_class')->insert([
            [
                'id' => 1,
                'class_name' => 'T2109M',
                'major_id' => 1
            ],
            [
                'id' => 2,
                'class_name' => 'T2109A',
                'major_id' => 2
            ],
            [
                'id' => 3,
                'class_name' => 'T2109E',
                'major_id' => 3
            ],
        ]);

        DB::table('student')->insert([
            [
                'id' => 1,
                'student_name' => 'Andy Carroll',
                'student_dob' => '11/06/1995',
                'student_gender' => 'Female',
                'student_address' => '8 Ton That Thuyet, Ha Noi',
                'major_id' => 1,
                'class_id' => 1
            ],
            [
                'id' => 2,
                'student_name' => 'Cristiano Ronaldoski',
                'student_dob' => '05/02/1985',
                'student_gender' => 'Male',
                'student_address' => 'JW Marriott, Ha Noi',
                'major_id' => 1,
                'class_id' => 1
            ],
            [
                'id' => 3,
                'student_name' => 'Cristiano Ronaldic',
                'student_dob' => '11/06/1999',
                'student_gender' => 'Male',
                'student_address' => '7 Ton That Thuyet, Ha Noi',
                'major_id' => 2,
                'class_id' => 2
            ],
            [
                'id' => 4,
                'student_name' => 'Cristiano Ronaldini',
                'student_dob' => '11/06/1998',
                'student_gender' => 'Male',
                'student_address' => '6 Ton That Thuyet, Ha Noi',
                'major_id' => 3,
                'class_id' => 3
            ],
        ]);

        DB::table('benchmark')->insert([
            [
                'id' => 1,
                'major_id' => 1,
                'unit_id' => 1,
                'benchmark' => 24
            ],
            [
                'id' => 2,
                'major_id' => 1,
                'unit_id' => 2,
                'benchmark' => 23
            ],
            [
                'id' => 3,
                'major_id' => 3,
                'unit_id' => 3,
                'benchmark' => 27
            ]
        ]);

        DB::table('blog')->insert([
            [
                'user_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog-2.jpg',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog-4.jpg',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'image' => 'blog-5.jfif',
                'category' => 'MODEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog-6.jfif',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
        ]);

        DB::table('blogcomment')->insert([
            [
                'id' => 1,
                'user_id' => 3,
                'blog_id' => 1,
                'email' => 'ShaneLynch@gmail.com',
                'name' => 'Shane Lynch',
                'message' => 'Thanks! Your post is very helpful for me.'
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'blog_id' => 2,
                'email' => 'ShaneLynch@gmail.com',
                'name' => 'Shane Lynch',
                'message' => 'Thanks! Your post is very helpful for me.'
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'blog_id' => 3,
                'email' => 'ShaneLynch@gmail.com',
                'name' => 'Shane Lynch',
                'message' => 'Thanks! Your post is very helpful for me.'
            ],
            [
                'id' => 4,
                'user_id' => 3,
                'blog_id' => 4,
                'email' => 'ShaneLynch@gmail.com',
                'name' => 'Shane Lynch',
                'message' => 'Thanks! Your post is very helpful for me.'
            ],
        ]);
    }
}
