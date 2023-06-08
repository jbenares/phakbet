<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_in', function (Blueprint $table) {
            $table->id();
            $table->string('sms_to')->nullable();
            $table->text('sms_text')->nullable();
            $table->string('sms_from')->nullable();
            $table->string('sms_timestamp')->nullable();
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
        Schema::dropIfExists('sms_in');
    }
};
