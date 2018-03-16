<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_statuses', function (Blueprint $table) {
            $table->char('id', 1);
            $table->primary('id');
            $table->string('name');            
            $table->timestamps();
        });

        DB::table('product_statuses')->insert([
            ['id' => 'A', 'name' => 'Activo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 'I', 'name' => 'Inactivo', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_statuses');
    }
}
