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
                'password' => 'fpt21036',
            ],
            [
                'student_id' => 2,
                'student_email' => 'hoangckhg123@gmail.com',
                'password' => 'fpt12345',
            ],
            [
                'student_id' => 3,
                'student_email' => 'dinhquanganh87@gmail.com',
                'password' => 'fpt49758',
            ],
            [
                'student_id' => 4,
                'student_email' => 'nguyenmanhkien@gmail.com',
                'password' => 'fpt86175',
            ],
            [
                'student_id' => 5,
                'student_email' => 'dinhcongbangsad@gmail.com',
                'password' => 'fpt55578',
            ],
            [
                'student_id' => 6,
                'student_email' => 'tavanminhbot@gmail.com',
                'password' => 'fpt68925',
            ],
        ]);

        DB::table('staff_account')->insert([
            [
                'staff_id' => 1,
                'staff_email' => 'hoangluongviet2003@gmail.com',
                'password' => 'staffedu485',
                'level' => 2,
            ],
            [
                'staff_id' => 2,
                'staff_email' => 'khanhbanguyen2003@gmail.com',
                'password' => 'staffedu789',
                'level' => 2,
            ],
            [
                'staff_id' => 3,
                'staff_email' => 'anhquangdinh2000@gmail.com',
                'password' => 'staffedu696',
                'level' => 2,
            ],
            [
                'staff_id' => 4,
                'staff_email' => 'kienmanhnguyen2003@gmail.com',
                'password' => 'staffedu123',
                'level' => 2,
            ],
            [
                'staff_id' => 5,
                'staff_email' => 'bangcongdinh2003@gmail.com',
                'password' => 'staffedu753',
                'level' => 2,
            ],
            [
                'staff_id' => 1,
                'staff_email' => 'minhvanta2003@gmail.com',
                'password' => 'staffedu852',
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
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subtitle' => 'Web design & development courses for beginner',
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
                'subtitle' => 'Programing basic C for beginner',
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
                'subtitle' => 'Game developer C#, C for beginner',
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
                'subtitle' => 'App design, layout, color and character basic',
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
                'subtitle' => 'Strategies to master marketing for beginner',
                'image' => 'cat-5.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Tester',
                'description' => '',
                'title' => '',
                'subtitle' => 'Basic about test program & tool can use for fresher',
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
                'subtitle' => 'Web design & development courses for beginner',
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
                'subtitle' => 'Web design & development courses for beginner',
                'image' => 'cat-8.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Security',
                'description' => '',
                'title' => '',
                'subtitle' => 'Web protected',
                'image' => 'cat-9.jpg',
                'time' => 12,
                'price' => 150,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Security',
                'description' => '',
                'title' => '',
                'subtitle' => 'Internet Security',
                'image' => 'cat-10.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Manage',
                'description' => '',
                'title' => '',
                'subtitle' => 'Computer system management',
                'image' => 'cat-11.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Software',
                'description' => '',
                'title' => '',
                'subtitle' => 'Upgrade and update the app',
                'image' => 'cat-12.jpg',
                'time' => 12,
                'price' => 210,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Hardware',
                'description' => '',
                'title' => '',
                'subtitle' => 'Basic knowledge of hardware',
                'image' => 'cat-13.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'course_name' => 'Hardware',
                'description' => '',
                'title' => '',
                'subtitle' => 'Advanced knowledge of hardware',
                'image' => 'cat-14.jpg',
                'time' => 12,
                'price' => 190,
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
                'subject_name' => 'Web Design',
                'description' => '',
                'image' => 'cat-1.jpg',
                'course_id' => 1,
             ],
            [
                'id' => 2,
                'subject_name' => 'Development',
                'description' => '',
                'image' => 'cat-2.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 3,
                'subject_name' => 'Game Design',
                'description' => '',
                'image' => 'cat-3.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 4,
                'subject_name' => 'App Design',
                'description' => '',
                'image' => 'cat-4.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 5,
                'subject_name' => 'Marketing',
                'description' => '',
                'image' => 'cat-5.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 6,
                'subject_name' => 'Research',
                'description' => '',
                'image' => 'cat-6.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 7,
                'subject_name' => 'Content Writing',
                'description' => '',
                'image' => 'cat-7.jpg',
                'course_id' => 1,
            ],
            [
                'id' => 8,
                'subject_name' => 'SEO',
                'description' => '',
                'image' => 'cat-8.jpg',
                'course_id' => 1,
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
