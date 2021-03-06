<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropFoundationIdColumnInVolunteerafteractivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteerafteractivities', function (Blueprint $table) {
            //
            $table->dropColumn('foundation_id');
            $table->string('activity_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('volunteerafteractivities', function (Blueprint $table) {
            //
        });
    }
}
