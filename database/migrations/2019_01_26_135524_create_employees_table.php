<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
	        $table->charset = "utf8";
        	$table->collation = "utf8_hungarian_ci";
            $table->increments("id")->unsigned();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->integer("company_id",false,true);
            $table->foreign("company_id")->references('id')->on("companies");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
