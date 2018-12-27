<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompaniesManageV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('city_name')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('company_name')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('logo_url')->nullable();
            $table->timestamps();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('department_name')->nullable();
            $table->integer('company_id')->index();
            $table->integer('manage_id')->index();
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
        Schema::dropIfExists('departments');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('cities');

    }
}
