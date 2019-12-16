<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('families')->truncate();

        $model = new \App\Family();
        $model->name = 'Placas';
        $model->description = 'Placas';
        $model->save();

        $model = new \App\Family();
        $model->name = 'Orlas';
        $model->description = 'Orlas e folhas';
        $model->save();

        $model = new \App\Family();
        $model->name = 'Ferragens';
        $model->description = 'Dobradiças, Puxadores, Corrediças, Acessórios, etc.';
        $model->save();

        $model = new \App\Family();
        $model->name = 'Madeiras';
        $model->description = 'Madeira maciça';
        $model->save();

        $model = new \App\Family();
        $model->name = 'Tintas';
        $model->description = 'Primários, Esmaltes, Vernizes, Diluentes, Lixas';
        $model->save();

        $model = new \App\Family();
        $model->name = 'Cadeiras';
        $model->description = 'Cadeiras, Cadeirões';
        $model->save();
    }
}
