<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAzylalfaDogbreederDogs extends Migration
{
    public function up()
    {
        Schema::create('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->date('birth');
            $table->string('titles')->nullable();
            $table->text('description')->nullable();
            $table->date('published_at')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sort_order')->nullable();
            $table->string('father', 255)->nullable();
            $table->string('mother', 255)->nullable();
            $table->string('f_father', 255)->nullable();
            $table->string('f_mother', 255)->nullable();
            $table->string('m_father', 255)->nullable();
            $table->string('m_mother', 255)->nullable();
            $table->string('ff_father', 255)->nullable();
            $table->string('ff_mother', 255)->nullable();
            $table->string('fm_father', 255)->nullable();
            $table->string('fm_mother', 255)->nullable();
            $table->string('mf_father', 255)->nullable();
            $table->string('mf_mother', 255)->nullable();
            $table->string('mm_father', 255)->nullable();
            $table->string('mm_mother', 255)->nullable();


        });
    }
    
    public function down()
    {
        Schema::dropIfExists('azylalfa_dogbreeder_dogs');
    }
}
