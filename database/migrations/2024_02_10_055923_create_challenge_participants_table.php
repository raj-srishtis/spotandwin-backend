<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateChallengeParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('uid')->default(0);
            $table->string('device', 25)->nullable();
            $table->string('browser', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->string('user_ip', 25)->nullable();
            $table->timestamp('created_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('source', 50)->nullable();
            $table->integer('gameTry')->default(0);
            $table->string('encryptkey', 50)->nullable();
            $table->integer('nextClick')->default(0);
            $table->integer('beginChallengeClick')->default(0);
            $table->integer('sheikhFound')->default(0);
            $table->integer('locationConfirmed')->default(0);
            $table->string('name', 40)->charset('utf8')->nullable();
            $table->string('email', 40)->nullable();
            $table->string('age', 10)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->integer('fbshare')->default(0);
            $table->integer('wtshare')->default(0);
            $table->integer('twshare')->default(0);
            $table->integer('timeInSeconds')->default(0);
            $table->string('language', 10)->nullable();
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
        Schema::dropIfExists('challenge_participants');
    }
}
