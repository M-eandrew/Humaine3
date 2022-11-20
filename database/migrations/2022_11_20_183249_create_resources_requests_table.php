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
        Schema::create('resources_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('camp')->nullable();
            $table->string('duedate')->nullable();
            $table->string('resourcecategory')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
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
        Schema::dropIfExists('resources_requests');
    }
};
