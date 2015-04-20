<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products',function(Blueprint $table){
           $table->foreign('id')
                    ->references('id')
                    ->on('product_types')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('products',function(Blueprint $table){
            $table->dropForeign('products_id_foreign');
        });
	}

}
