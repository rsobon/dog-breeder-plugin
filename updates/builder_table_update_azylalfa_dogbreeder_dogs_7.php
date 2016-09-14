<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederDogs7 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
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
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_dogs', function($table)
        {
            $table->dropColumn('f_father');
            $table->dropColumn('f_mother');
            $table->dropColumn('m_father');
            $table->dropColumn('m_mother');
            $table->dropColumn('ff_father');
            $table->dropColumn('ff_mother');
            $table->dropColumn('fm_father');
            $table->dropColumn('fm_mother');
            $table->dropColumn('mf_father');
            $table->dropColumn('mf_mother');
            $table->dropColumn('mm_father');
            $table->dropColumn('mm_mother');
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
        });
    }
}
