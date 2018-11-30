<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create12771ModelMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12771_model_members', function (Blueprint $table) {
             $table->increments('id');
            $table->String('nama');
            $table->String('email');
            
            $table->String('password');
			$table->String('macAdress');
       
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
        Schema::dropIfExists('12771_model_members');
    }
}
