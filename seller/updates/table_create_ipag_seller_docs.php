<?php namespace Ipag\Seller\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateIpagSellerDocs extends Migration
{
    const TABLE_NAME = 'ipag_seller_docs';

    public function up()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            return;
        }

        Schema::create(self::TABLE_NAME, function (Blueprint $obTable) {
            $obTable->engine = 'InnoDB';
            $obTable->increments('id');
            $obTable->integer('user_id');
            $obTable->integer('article_id');
            $obTable->integer('customerable_id');
            $obTable->string('customerable_type');
            $obTable->integer('template_id');
            $obTable->tinyInteger('side_act');
            $obTable->boolean('treasurer')->default(0);
            $obTable->boolean('individually')->default(0);
            $obTable->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}

