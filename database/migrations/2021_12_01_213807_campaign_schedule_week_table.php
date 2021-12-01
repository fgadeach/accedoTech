<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CampaignScheduleWeekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('headcount');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('schedule_week_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('schedule_week_id')->references('id')->on('schedule_weeks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_schedule');
    }
}
