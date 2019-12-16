<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('titles')->truncate();

        $model = new \App\Title();
        $model->name = 'Mr.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Ms.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Dr.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Dra.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Sir';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Eng.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Arq.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Sr.';
        $model->save();

        $model = new \App\Title();
        $model->name = 'Sra.';
        $model->save();
    }
}
