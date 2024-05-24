<?php namespace Ipag\Seller\Models;

use Lovata\Buddies\Models\User;
use Model;
use October\Rain\Database\Traits\Validation;

class SellerJurData extends Model
{
    use Validation;

    public $table = 'ipag_seller_jur_data';

    public $rules = [
        'organization'          => 'required|max:150',
        'director'              => 'required|max:50',
        'director_last_name'    => 'required|max:30',
        'director_name'         => 'required|max:30',
        'director_middle_name'  => 'required|max:30',
        'customer'              => 'required|max:150',
        'document'              => 'required|max:150',
        'company_address'       => 'required|max:150',
        'unp'                   => 'required|digits:9',
        'bank_account'          => 'required|max:20',
        'bank_name'             => 'required|max:30',
        'bank_address'          => 'required|max:30',
        'bank_bik'              => 'required|max:30',
        'company_phone'         => 'required|max:20',
        'company_email'         => 'required|email',
    ];

    public $attributeNames = [
        'organization'          => 'ipag.seller::lang.field.organization',
        'director'              => 'ipag.seller::lang.field.director',
        'director_last_name'    => 'ipag.seller::lang.field.director_last_name',
        'director_name'         => 'ipag.seller::lang.field.director_name',
        'director_middle_name'  => 'ipag.seller::lang.field.director_middle_name',
        'customer'              => 'ipag.seller::lang.field.customer',
        'document'              => 'ipag.seller::lang.field.document',
        'company_address'       => 'ipag.seller::lang.field.company_address',
        'unp'                   => 'ipag.seller::lang.field.unp',
        'bank_account'          => 'ipag.seller::lang.field.bank_account',
        'bank_name'             => 'ipag.seller::lang.field.bank_name',
        'bank_address'          => 'ipag.seller::lang.field.bank_address',
        'bank_bik'              => 'ipag.seller::lang.field.bank_bik',
        'company_phone'         => 'ipag.seller::lang.field.company_phone',
        'company_email'         => 'ipag.seller::lang.field.company_email',
    ];

    public $fillable = [
        'user_id',
        'organization',
        'director',
        'director_last_name',
        'director_name',
        'director_middle_name',
        'customer',
        'document',
        'company_address',
        'unp',
        'bank_account',
        'bank_name',
        'bank_address',
        'bank_bik',
        'company_phone',
        'company_email',
        'agreement'
    ];

    public $cached = [
        'user_id',
        'organization',
        'director',
        'director_last_name',
        'director_name',
        'director_middle_name',
        'customer',
        'document',
        'company_address',
        'unp',
        'bank_account',
        'bank_name',
        'bank_address',
        'bank_bik',
        'company_phone',
        'company_email',
        'agreement'
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
    ];
}
