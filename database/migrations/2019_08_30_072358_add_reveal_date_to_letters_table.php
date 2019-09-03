<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRevealDateToLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letters', function (Blueprint $table) {
            //
            $table -> datetime('show_letter_date') -> nullable();
            $table -> datetime('hide_letter_date') -> nullable();
            $table -> string('receiver_name') -> nullable();
            $table -> string('password') -> nullable();
            $table -> string('url') -> nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letters', function (Blueprint $table) {
            //
            $table -> dropColumn('show_letter_date');
            $table -> dropColumn('hide_letter_date');
            $table -> dropColumn('receiver_name');
            $table -> dropColumn('password');
            $table -> dropColumn('url');

        });
    }
}
