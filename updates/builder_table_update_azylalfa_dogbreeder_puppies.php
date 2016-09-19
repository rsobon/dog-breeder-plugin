<?php namespace AzylAlfa\Dogbreeder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAzylalfaDogbreederPuppies extends Migration
{
    public function up()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->renameColumn('content', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('azylalfa_dogbreeder_puppies', function($table)
        {
            $table->renameColumn('description', 'content');
        });
    }
}
