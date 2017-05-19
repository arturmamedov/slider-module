<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTranslatableFieldsToSlidesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slider__slides', function (Blueprint $table) {
            $table->string('title')->nullable()->default(null)->after('page_id');
            $table->string('caption')->nullable()->default(null)->after('title');
            $table->string('url')->nullable()->default(null)->after('caption');
            $table->string('uri')->nullable()->default(null)->after('url');
            $table->tinyInteger('active')->unsigned()->nullable()->default(null)->after('uri');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slider__slides', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('caption');
            $table->dropColumn('url');
            $table->dropColumn('uri');
            $table->dropColumn('active');
        });
    }

}
