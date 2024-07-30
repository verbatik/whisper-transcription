<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('subscription_type')->nullable()->after('is_subscriber');
            $table->timestamp('subscription_ends_at')->nullable()->after('subscription_type');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['subscription_type', 'subscription_ends_at']);
        });
    }
};