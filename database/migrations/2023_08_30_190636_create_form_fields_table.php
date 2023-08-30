<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId("form_id")->constrained()->onDelete('cascade');
            $table->string('type')->comment('text, textarea, select, check');
            $table->string('name')->nullable();
            $table->string('field_id');
            $table->string('label');
            $table->string('help_text')->nullable();
            $table->boolean('dynamic')->default(false);
            $table->json('options')->nullable();
            $table->boolean('notify')->default(false);
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
        Schema::dropIfExists('form_fields');
    }
}
