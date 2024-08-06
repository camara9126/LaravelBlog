<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddStatusToArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->boolean('status')->default(true); // true pour actif, false pour inactif
        });
    }

    public function down()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}

