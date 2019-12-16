<?php

use Illuminate\Database\Seeder;

class VatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vats')->truncate();

        $model = new \App\Vat();
        $model->tax = 23;
        $model->save();
    }
}
