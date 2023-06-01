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
    `id` int(11) NOT N
    `name` varchar(100
    `user_type` tinyin
    `email` varchar(10
    `password` varchar
    `business_name` va
    `description` text
    `image_url` varcha
    `contact_number` v
    `country` varchar(
    `city` varchar(50)
    `post_code` varcha
    `address` varchar(
    `created_at` times
    `updated_at` times
    `deleted_at` times
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_type');
            $table->string('email')->unique();
            $table->sting('business_name');
            $table->sting('description');
            $table->string('image_url');
            $table->string()
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
