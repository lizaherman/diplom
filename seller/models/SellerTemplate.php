<?php namespace Ipag\Seller\Models;

use Model;

class SellerTemplate extends Model
{
    public $table = 'ipag_seller_templates';

    public $fillable = [
        'code',
        'templates'
    ];

    public $cached = [
        'code',
        'templates'
    ];

    public $hasMany = [
      'sellerDocs'  => [
          SellerDoc::class,
          'key' => 'template_id'
      ]
    ];
}
