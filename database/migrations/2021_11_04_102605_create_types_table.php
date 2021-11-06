<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('value_name')->nullable(false);
            $table->unsignedInteger('product_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_types');
        });

        $data = [
            ['value_name' => 'Size','product_type_id'=>1],
            ['value_name' => 'Weight','product_type_id'=>2],
            ['value_name' => 'Height','product_type_id'=>3],
            ['value_name' => 'Width','product_type_id'=>3],
            ['value_name' => 'Length','product_type_id'=>3],
        ];

        foreach ($data as $datum) {
            \App\Models\Type::create($datum);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
