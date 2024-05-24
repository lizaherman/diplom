<?php namespace Lovata\Seller\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class TableUpdateLovataArticles extends Migration
{
    const TABLE_NAME = 'lovata_good_news_articles';

    public function up()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'event_date')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function(Blueprint $obTable)
        {
            $obTable->dateTime('event_date')->nullable();
        });
    }

    public function down()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'event_date')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function($obTable)
        {
            $obTable->dropColumn('event_date');
        });
    }
}
