<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain');
            $table->string('type');
            $table->date('register');
            $table->date('exprires');
            $table->date('update');
            $table->string('dept');
            $table->string('emaildept');
            $table->string('manager');
            $table->string('emailregister');
            $table->text('nameserver');
            $table->string('provider');
            $table->text('note');
            $table->integer('status');
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
        Schema::drop('domain');
    }
}
