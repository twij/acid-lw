<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoungeServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ssh_host');
            $table->integer('ssh_port');
            $table->string('ssh_user');
            $table->string('base_url');
            $table->string('public_url');
            $table->integer('user_count')->default(0);
            $table->integer('user_max')->default(50);
            $table->string('status')->default('active');
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
        Schema::dropIfExists('lounge_servers');
    }
}
