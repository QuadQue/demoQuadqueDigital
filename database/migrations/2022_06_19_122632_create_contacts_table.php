<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('finding_source');
            $table->string('name_field');
            $table->string('company_field');
            $table->string('email_field');
            $table->string('number_field');
            $table->string('message_field');
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
        Schema::dropIfExists('contacts');
    }
}
