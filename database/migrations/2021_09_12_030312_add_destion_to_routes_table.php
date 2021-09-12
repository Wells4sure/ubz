<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestionToRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->bigInteger('origin_id')->after('name')->unsigned();
            $table->foreign('origin_id')->references('id')->on('destinations');
            $table->bigInteger('destination_id')->after('name')->unsigned();
            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->dropForeign('routes_origin_id_foreign');
            $table->dropColumn('origin_id');            
            $table->dropForeign('routes_destination_id_foreign');
            $table->dropColumn('destination_id');
        });
    }
}
