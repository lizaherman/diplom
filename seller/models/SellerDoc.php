<?php namespace Ipag\Seller\Models;

use Lovata\Buddies\Models\User;
use Lovata\Shopaholic\Models\Offer;
use Model;

class SellerDoc extends Model
{
    public $table = 'ipag_seller_docs';

    public $fillable = [
        'user_id',
        'offer_id',
        'customerable_id',
        'customerable_type',
        'template_id',
        'side_act',
        'treasurer',
        'individually',
    ];

    public $cached = [
        'user_id',
        'offer_id',
        'customerable_id',
        'customerable_type',
        'template_id',
        'side_act',
        'treasurer',
        'individually',
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];

    public $hasOne = [
        'user'          => [
            User::class,
            'key' => 'user_id'
        ],
        'template'      => [
            SellerTemplate::class,
            'key'   => 'template_id'
        ],
        'offer'         => [
            Offer::class,
            'key'   => 'offer_id'
        ]

    ];

    public $morphTo = [
      'customerable'    => []
    ];

    public $attachOne = [
        'doc_packs'  => 'System\Models\File'
    ];
}
