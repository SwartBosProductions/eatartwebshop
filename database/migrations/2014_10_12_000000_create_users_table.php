<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * BOSMA NOTES:
     * Timestamps takes care of created/updated_at
     * ForeignId's commented out for now because tables don't exist yet.
     * Still need reference to user_id for created/updated/deleted_by. Do we really need this? Repro-man will do most of the creating/updating and deleting anyways...
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
            $table->string('house_num', 45);
            $table->string('postal_code', 7);
            $table->string('city');
            // $table->foreignId('role_id')->constrained();
            // $table->foreignId('usergroups_id')->constrained();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('deleted_by');
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
