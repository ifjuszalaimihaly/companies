<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
	        $table->charset = "utf8";
	        $table->collation = "utf8_hungarian_ci";
            $table->increments("id")->unsigned();
            $table->string("name")->unique();
            $table->string("email")->unique();
            $table->string("logo")->nullable();
            $table->string("website")->nullable();
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
        Schema::table('companies', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
