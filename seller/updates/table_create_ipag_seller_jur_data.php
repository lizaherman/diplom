<?php namespace Ipag\Seller\Updates;

use October\Rain\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateIpagSellerJurData extends Migration
{
    const TABLE_NAME = 'ipag_seller_jur_data';

    public function up()
    {
        if (Schema::hasTable(self::TABLE_NAME)) {
            return;
        }

        Schema::create(self::TABLE_NAME, function (Blueprint $obTable) {
            $obTable->engine = 'InnoDB';
            $obTable->increments('id');
            $obTable->integer('user_id');
            $obTable->string('organization');
            $obTable->string('director');
            $obTable->string('director_last_name');
            $obTable->string('director_name');
            $obTable->string('director_middle_name');
            $obTable->string('customer');
            $obTable->string('document');
            $obTable->string('company_address');
            $obTable->string('unp');
            $obTable->string('bank_account');
            $obTable->string('bank_name');
            $obTable->string('bank_address');
            $obTable->string('bank_bik');
            $obTable->string('company_phone');
            $obTable->string('company_email');
            $obTable->boolean('agreement')->default(0);

            $obTable->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
