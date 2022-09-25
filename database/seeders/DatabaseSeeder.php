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

        DB::table('users')->insert([
            [
                'name' => 'Jane Maclain',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => 'team-1.jpg',
                'password' => '123456',
                'level' => 1,
                'status' => '1',
                'social_link' => '',
            ],
            [
                'name' => 'Jayce Smith',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => 'team-3.jpg',
                'password' => '123456',
                'level' => 2,
                'status' => '1',
                'social_link' => '',
            ],
            [
                'name' => 'Johnson William',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => 'team-2.jpg',
                'password' => '123456',
                'level' => 2,
                'status' => '1',
                'social_link' => '',
            ],
            [
                'name' => 'David Mouse',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => 'team-4.jpg',
                'password' => '123456',
                'level' => 2,
                'status' => '1',
                'social_link' => '',
            ],
            [
                'name' => 'Charlie Nguyen',
                'dob' => '12121212122000',
                'address' => 'Thanh Cao - Thanh Oai - Ha Noi',
                'achieve' => '',
                'description' => '',
                'phone'=>'098162162412',
                'email' => 'nguyenkhanh08112003@gmail.com',
                'avatar' => 'team-1.jpg',
                'password' => '123456',
                'level' => 2,
                'status' => '1',
                'social_link' => '',
            ],
        ]);

        DB::table('register')->insert([
            [
                'name' => 'Dinh Quang Anh',
                'dob' => '12121212122000',
                'address' => '',
                'achieve' => '',
                'phone' => '',
                'email' => '',
            ]
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

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
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 1,
                'subtitle' => 'Web design & development courses for beginner',
                'image' => 'cat-1.jpg',
                'time' => 6,
                'price' => 99,
                'discount' => 10,
                'status' => 1,
            ],

            [
                'name' => 'Development',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Programing basic C for beginner',
                'image' => 'cat-2.jpg',
                'time' => 18,
                'price' => 240,
                'discount' => 15,
                'status' => 1,
            ],

            [
                'name' => 'Game Design',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 3,
                'subtitle' => 'Game developer C#, C for beginner',
                'image' => 'cat-3.jpg',
                'time' => 12,
                'price' => 299,
                'discount' => null,
                'status' => 1,
            ],

            [
                'name' => 'App Design',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'App design, layout, color and character basic',
                'image' => 'cat-4.jpg',
                'time' => 18,
                'price' => 200,
                'discount' => null,
                'status' => 1,
            ],

            [
                'name' => 'Marketing',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Strategies to master marketing for beginner',
                'image' => 'cat-5.jpg',
                'time' => 24,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Tester',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Basic about test program & tool can use for fresher',
                'image' => 'cat-6.jpg',
                'time' => 18,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Content Writing',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Web design & development courses for beginner',
                'image' => 'cat-7.jpg',
                'time' => 12,
                'price' => 199,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'SEO',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 8,
                'subtitle' => 'Web design & development courses for beginner',
                'image' => 'cat-8.jpg',
                'time' => 12,
                'price' => 240,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Security',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 7,
                'subtitle' => 'Web protected',
                'image' => 'cat-9.jpg',
                'time' => 12,
                'price' => 150,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Security',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 6,
                'subtitle' => 'Internet Security',
                'image' => 'cat-10.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Manage',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 4,
                'subtitle' => 'Computer system management',
                'image' => 'cat-11.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Software',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 2,
                'subtitle' => 'Upgrade and update the app',
                'image' => 'cat-12.jpg',
                'time' => 12,
                'price' => 210,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Hardware',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 5,
                'subtitle' => 'Basic knowledge of hardware',
                'image' => 'cat-13.jpg',
                'time' => 12,
                'price' => 190,
                'discount' => null,
                'status' => 1,
            ],
            [
                'name' => 'Hardware',
                'description' => 'Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet',
                'title' => '',
                'subject_id' => 6,
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
