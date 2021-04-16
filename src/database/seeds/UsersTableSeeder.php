<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();

        //
        $users = [
            [
            'name' => '大石芙羽',
            'age'  => 23,
            'station' => '五香駅',
            'hobby' => 'カラオケ・筋トレ',
            'good_at' => '動画の倍速視聴・歌',
            'motivation' => '習慣作り・目標の細分化',
            ],
            [
            'name' => '竹内悠斗',
            'age'  => 22,
            'station' => '蕨',
            'hobby' => 'ゲーム・料理',
            'good_at' => '水泳',
            'motivation' => '目的と承認',
            ]
            ];

            foreach($users as $user){
                \App\User::create($user);
            }



    }
}
