<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * BOSMA NOTES:
     * Timestamps takes care of created/updated_at, softDeletes of deleted_at.
     * ForeignId's commented out for now because tables don't exist yet.
     * created/updated/deleted_by will be integers, in models/controllers/validation we will check this works properly (the authenticated user who does the CUD'ing).
     * :BOSMA NOTES
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('insertion', 45)->nullable();
            $table->string('last_name', 100);
            $table->date('birthday');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('street');
            $table->string('house_num', 5);
            $table->string('house_num_addition', 5)->nullable();
            $table->string('postal_code', 7);
            $table->string('city');
            $table->string('country')->default('Nederland');
            // $table->foreignId('role_id')->constrained();
            // $table->foreignId('usergroups_id')->constrained();

            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
