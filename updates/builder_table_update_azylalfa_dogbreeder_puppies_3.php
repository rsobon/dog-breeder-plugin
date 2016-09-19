<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederPuppies3 extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->date('published_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->dropColumn('published_at');
        });
    }
}
