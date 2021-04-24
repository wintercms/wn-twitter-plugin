<?php namespace Winter\Twitter\Updates;

use Db;
use Winter\Storm\Database\Updates\Migration;

class ConvertData extends Migration
{
    public function up()
    {
        Db::table('system_settings')->where('item', 'rainlab_twitter_settings')->update(['item' => 'winter_twitter_settings']);
    }

    public function down()
    {
        Db::table('system_settings')->where('item', 'winter_twitter_settings')->update(['item' => 'rainlab_twitter_settings']);
    }
}
