<?php namespace Ipag\Seller\Models;

use Lovata\Buddies\Models\User;
use Model;
use October\Rain\Database\Traits\Validation;

class SellerData extends Model
{
    use Validation;

    public $table = 'ipag_seller_data';

    public $rules = [
        'user_name'         => 'required|max:150',
        'user_address'      => 'required|max:150',
        'user_phone'        => 'required|max:20',
        'email'             => 'required|email',
        'passport'          => 'required|max:15',
        'passport_date'     => 'required',
        'passport_organ'    => 'required'
    ];

    public $attributeNames = [
        'user_name'         => 'ipag.seller::lang.field.user_name',
        'user_address'      => 'ipag.seller::lang.field.user_address',
        'user_phone'        => 'ipag.seller::lang.field.user_phone',
        'email'             => 'ipag.seller::lang.field.email',
        'passport'          => 'ipag.seller::lang.field.passport',
        'passport_date'     => 'ipag.seller::lang.field.passport_date',
        'passport_organ'    => 'ipag.seller::lang.field.passport_organ'
    ];

    public $fillable = [
        'user_id',
        'user_name',
        'user_address',
        'user_phone',
        'email',
        'passport',
        'passport_date',
        'passport_organ',
        'agreement',
    ];

    public $cached = [
        'user_id',
        'user_name',
        'user_address',
        'user_phone',
        'email',
        'passport',
        'passport_date',
        'passport_organ',
        'agreement',
    ];

    public $dates = [
      'created_at', 'updated_at', 'passport_date'
    ];

    public $hasOne = [
        'user' => [
            User::class,
            'key' => 'user_id'
        ]
    ];

    public $morphMany = [
      'sellerDocs'   => [
          SellerDoc::class,
          'name'    => 'customerable'
      ]
    ];
}



