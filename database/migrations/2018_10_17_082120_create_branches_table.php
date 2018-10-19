<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
            $table->string('county');
            $table->string('city');
            $table->string('postcode');
            $table->string('telephone', 20);
            $table->string('fax', 20);
            $table->boolean('click_and_collect')->default(false);
            $table->decimal('latitude', 3, 8)->default(0);
            $table->decimal('longitude', 3, 8)->default(0);
            $table->boolean('available')->default(false);
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
        Schema::dropIfExists('branches');
    }
}
