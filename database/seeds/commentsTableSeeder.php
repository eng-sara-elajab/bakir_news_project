<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'is_active' => '0',
            'auther' => 'محمد علي',
            'email' => 'comment1@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
        DB::table('comments')->insert([
            'is_active' => '1',
            'auther' => 'احمد محمد',
            'email' => 'comment2@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
        DB::table('comments')->insert([
            'is_active' => '0',
            'auther' => 'عمر ادم',
            'email' => 'comment1@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
        DB::table('comments')->insert([
            'is_active' => '1',
            'auther' => 'احمد محمد',
            'email' => 'comment2@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
        DB::table('comments')->insert([
            'is_active' => '0',
            'auther' => 'محمد علي',
            'email' => 'comment1@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
        DB::table('comments')->insert([
            'is_active' => '1',
            'auther' => 'عمر ادم',
            'email' => 'comment2@email.com',
            'body' => 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما',
            'post_id' => rand(1,8)
        ]);
    }
}
