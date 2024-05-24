<?php namespace Ipag\Seller\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateIpagSellerData extends Migration
{
    const TABLE_NAME = 'ipag_seller_data';

    public function up()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            return;
        }

        Schema::create(self::TABLE_NAME, function (Blueprint $obTable) {
            $obTable->engine = 'InnoDB';
            $obTable->increments('id');
            $obTable->integer('user_id');
            $obTable->string('user_address');
            $obTable->string('user_phone');
            $obTable->string('email');
            $obTable->string('passport');
            $obTable->timestamp('passport_date');
            $obTable->string('passport_organ');
            $obTable->boolean('agreement')->default(0);
            $obTable->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}


