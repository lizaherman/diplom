<?php namespace Ipag\Seller\Updates;

use Seeder;

class SeedIpagSellerTemplates extends Seeder
{
    public $array = [
      [
          'code'        => 'document.act.one_side.individual',
          'template'    => 'act_1_side_indiv'
      ],
      [
          'code'        => 'document.act.one_side.jur',
          'template'    => 'act_1_side_jur'
      ],
        [
            'code'      => 'document.act.two_side.individual',
            'template'  => 'act_2_side_indiv'
        ],
        [
            'code'      => 'document.act.two_side.jur.pd',
            'template'  => 'act_2_side_indiv'
        ],
    ];

    public function run()
    {

    }
}
