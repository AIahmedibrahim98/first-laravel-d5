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
        Schema::table('testing', function (Blueprint $table) {
            $table->string('status', 5000)->after('role');
            $table->dropColumn('long_name');
            $table->text('name')->unique()->change();
            // $table->renameColumn('xxxxxx','name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testing', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->text('long_name')->nullable();
        });
    }
};
