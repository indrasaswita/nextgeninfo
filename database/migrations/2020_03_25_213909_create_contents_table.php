<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TABLE contents(
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(32) NOT NULL,
                margin VARCHAR(16) NULL,
                padding VARCHAR(32) NULL,
                height TINYINT NULL,
                width TINYINT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP NULL
            );  
        ");

        DB::unprepared("INSERT INTO contents (name) VALUES ('singletext');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('singlebutton');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('video');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('quotes');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('paragraph');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('box');");
        DB::unprepared("INSERT INTO contents (name) VALUES ('card');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
