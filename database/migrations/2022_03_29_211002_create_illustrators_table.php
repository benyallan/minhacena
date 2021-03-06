<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustrators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('cpf');
            $table->date('birthday');
            $table->string('state');
            $table->string('city');
            $table->string('portfolio')->nullable();
            $table->string('socialMedias')->nullable();
            $table->timestamp('unlocked_at')->nullable();
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
        Schema::dropIfExists('illustrators');
    }
}
