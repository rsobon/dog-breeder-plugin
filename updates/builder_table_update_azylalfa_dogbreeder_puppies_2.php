<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederPuppies2 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
