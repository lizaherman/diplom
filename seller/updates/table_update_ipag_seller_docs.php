<?php namespace Lovata\Seller\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class TableUpdateIpagSellerDocs extends Migration
{
    const TABLE_NAME = 'ipag_seller_docs';

    public function up()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'offer_id')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function(Blueprint $obTable)
        {
            $obTable->renameColumn('article_id', 'offer_id');
        });
    }

    public function down()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'offer_id')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function($obTable)
        {
            $obTable->renameColumn('offer_id', 'article_id');
        });
    }
}
