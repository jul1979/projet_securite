<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commits', function (Blueprint $table) {
       /*     `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `repository_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commits_repository_id_foreign` (`repository_id`),
  CONSTRAINT `commits_repository_id_foreign` FOREIGN KEY (`repository_id`) REFERENCES `repositories` (`id`)*/

            $table->bigIncrements('id');
            $table->text('message');
            $table->date('date');
            $table->unsignedBigInteger('repository_id');
            $table->foreign('repository_id')->references('id')->on('repositories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commits');
    }
}
