<?php namespace Lovata\Seller\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class TableUpdateIpagSellerData extends Migration
{
    const TABLE_NAME = 'ipag_seller_data';

    public function up()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'passport_date')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function(Blueprint $obTable)
        {
            $obTable->string('user_name');
            $obTable->dateTime('passport_date')->change();
        });
    }

    public function down()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'passport_date')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function($obTable)
        {
            $obTable->removeColumn('user_name');
            $obTable->string('passport_date')->change();
        });
    }
}

