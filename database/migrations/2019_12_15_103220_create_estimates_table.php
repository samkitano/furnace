<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id');
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->mediumText('notes')->nullable();
            $table->unsignedInteger('deadline')->nullable();
            $table->float('untaxed', 8, 2)->default(0);
            $table->unsignedInteger('vat')->default(1);
            $table->float('shipping', 8, 2)->default(0);
            $table->float('total', 8, 2)->default(0);
            $table->float('tax', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
