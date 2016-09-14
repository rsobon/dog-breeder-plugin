<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederDogs6 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->string('father', 255)->nullable();
            $table->string('mother', 255)->nullable();
            $table->string('f_grandfather', 255)->nullable();
            $table->string('f_grandmother', 255)->nullable();
            $table->string('m_grandfather', 255)->nullable();
            $table->string('m_grandmother', 255)->nullable();
            $table->string('ff_grandfather', 255)->nullable();
            $table->string('ff_grandmother', 255)->nullable();
            $table->string('fm_grandfather', 255)->nullable();
            $table->string('fm_grandmother', 255)->nullable();
            $table->string('mf_grandfather', 255)->nullable();
            $table->string('mf_grandmother', 255)->nullable();
            $table->string('mm_grandfather', 255)->nullable();
            $table->string('mm_grandmother', 255)->nullable();
            $table->dropColumn('parent_male');
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->dropColumn('father');
            $table->dropColumn('mother');
            $table->dropColumn('f_grandfather');
            $table->dropColumn('f_grandmother');
            $table->dropColumn('m_grandfather');
            $table->dropColumn('m_grandmother');
            $table->dropColumn('ff_grandfather');
            $table->dropColumn('ff_grandmother');
            $table->dropColumn('fm_grandfather');
            $table->dropColumn('fm_grandmother');
            $table->dropColumn('mf_grandfather');
            $table->dropColumn('mf_grandmother');
            $table->dropColumn('mm_grandfather');
            $table->dropColumn('mm_grandmother');
            $table->text('parent_male')->nullable();
        });
    }
}
