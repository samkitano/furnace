<?php

use Illuminate\Database\Seeder;

class SubfamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subfamilies')->truncate();

        // PLACAS
        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'Aglomerado';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'Contraplacado';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'MDF';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'HDF';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'Valcrhomat';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'OSB';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'Fenólico';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 1;
        $model->name = 'Platex';
        $model->save();

        // ORLAS
        $model = new \App\Subfamily();
        $model->family_id = 2;
        $model->name = 'Com cola';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 2;
        $model->name = 'Sem Cola';
        $model->save();

        // FERRAGENS
        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Dobradiças';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Corrediças';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Puxadores';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Niveladores';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Deslizadores';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Pés de cozinha';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Rodapé de cozinha';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 3;
        $model->name = 'Suportes de prateleira';
        $model->save();

        // MADEIRAS
        $model = new \App\Subfamily();
        $model->family_id = 4;
        $model->name = 'Carvalho';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 4;
        $model->name = 'Faia';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 4;
        $model->name = 'Nogueira';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 4;
        $model->name = 'Pinho';
        $model->save();

        // TINTAS
        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Esmalte';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Diluente';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Verniz';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Tapa-poros';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Sub-capa';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Velatura';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Lixa';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Pigmento';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 5;
        $model->name = 'Copos mistura';
        $model->save();

        // CADEIRAS
        $model = new \App\Subfamily();
        $model->family_id = 6;
        $model->name = 'Próprias';
        $model->save();

        $model = new \App\Subfamily();
        $model->family_id = 6;
        $model->name = 'Fornecidas';
        $model->save();

    }
}
