<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LocalizationSouvenirs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('souvenirs', function (Blueprint $table) {
            $table -> string('name_ro')->nullable();
            $table -> text('description_ro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('souvenirs', function (Blueprint $table) {
            $table->dropColumn(['name_ro', 'description_ro']);
        });
    }
}
