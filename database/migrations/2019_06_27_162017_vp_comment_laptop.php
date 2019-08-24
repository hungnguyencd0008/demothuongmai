<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpCommentLaptop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('vp_comment_laptop', function (Blueprint $table) {
         $table->increments('com_id');
         $table->string('com_email');
         $table->string('com_name');
         $table->text('com_contend');
         $table->integer('com_product')->unsigned();
         $table->foreign('com_product')
         ->references('prod_id')
         ->on('vp_products_laptop')
         ->onDelete('cascade');
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
        //
       Schema::dropIfExists('vp_comment_laptop');
   }
}
