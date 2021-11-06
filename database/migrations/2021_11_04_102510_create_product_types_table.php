<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name')->nullable(false);
        });

        $data = [
            ['id'=>1,'type_name' => 'MB'],
            ['id'=>2,'type_name' => 'KG'],
            ['id'=>3,'type_name' => 'cm']
        ];

        foreach ($data as $datum) {
            \App\Models\ProductType::create($datum);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
}
