<?php namespace Ipag\Seller\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateIpagSellerTemplates extends Migration
{
    const TABLE_NAME = 'ipag_seller_templates';

    public function up()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            return;
        }

        Schema::create(self::TABLE_NAME, function (Blueprint $obTable) {
            $obTable->engine = 'InnoDB';
            $obTable->increments('id');
            $obTable->string('code');
            $obTable->longText('templates');
            $obTable->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
