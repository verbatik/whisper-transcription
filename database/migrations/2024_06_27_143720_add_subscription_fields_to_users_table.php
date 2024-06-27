<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubscriptionFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'is_subscriber')) {
                $table->boolean('is_subscriber')->default(false);
            }
            if (!Schema::hasColumn('users', 'generations_reset_at')) {
                $table->timestamp('generations_reset_at')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_subscriber', 'generations_reset_at']);
        });
    }
}