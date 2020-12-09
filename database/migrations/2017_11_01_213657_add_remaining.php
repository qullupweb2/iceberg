<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemaining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_consumptions', function (Blueprint $table) {
            $table->enum('last_saved_type', [
                'system', 'user'
            ])->default('system');
            $table->decimal('remaining')->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_consumptions', function (Blueprint $table) {
            $table->dropColumn('last_saved_type');
            $table->dropColumn('remaining');
        });
    }
}
