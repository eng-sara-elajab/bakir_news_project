<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'name' => 'Test 1',
            'email' => 'test1@gmail.com',
            'address' =>'Address 1',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 2',
            'email' => 'test2@gmail.com',
            'address' =>'Address 2',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 3',
            'email' => 'test3@gmail.com',
            'address' =>'Address 3',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 4',
            'email' => 'test4@gmail.com',
            'address' =>'Address 3',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 5',
            'email' => 'test5@gmail.com',
            'address' =>'Address 5',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 6',
            'email' => 'test6@gmail.com',
            'address' =>'Address 6',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 7',
            'email' => 'test7@gmail.com',
            'address' =>'Address 7',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 8',
            'email' => 'test8@gmail.com',
            'address' =>'Address 8',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 9',
            'email' => 'test9@gmail.com',
            'address' =>'Address 9',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 10',
            'email' => 'test10@gmail.com',
            'address' =>'Address 10',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 11',
            'email' => 'test11@gmail.com',
            'address' =>'Address 11',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 12',
            'email' => 'test12@gmail.com',
            'address' =>'Address 12',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 13',
            'email' => 'test13@gmail.com',
            'address' =>'Address 13',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 14',
            'email' => 'test14@gmail.com',
            'address' =>'Address 14',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
        DB::table('messages')->insert([
            'name' => 'Test 15',
            'email' => 'test15@gmail.com',
            'address' =>'Address 15',
            'content' => 'The little cat is majoring in physics in the capital of Byterland. A piece of sad news comes to him these days:
            his mother is getting ill.',
        ]);
    }
}
