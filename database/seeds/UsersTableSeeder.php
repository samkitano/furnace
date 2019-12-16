<?php

use Carbon\Carbon;
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
        \DB::table('users')->truncate();

        $model = new \App\User();
        $model->name = 'Sam Kitano';
        $model->email = 'sam.kitano@gmail.com';
        $model->password = bcrypt('secret');
        $model->email_verified_at = Carbon::now();
        $model->save();
    }
}
