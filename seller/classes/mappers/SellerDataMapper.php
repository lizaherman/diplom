<?php namespace Ipag\Seller\Classes\Mappers;

use Ipag\Seller\Classes\Requests\SellerData;
use Ipag\Seller\Models\SellerData as Customer;
use Log;
use Lovata\Buddies\Models\User;

class SellerDataMapper
{
    public function handle(SellerData $data, User $user) {
        try {
            Customer::createOrUpdate(
                ['user_id'              => !empty($user) ? $user->id : null],
                [
                    'user_name'         => $data->getUserName(),
                    'user_address'      => $data->getUserAddress(),
                    'user_phone'        => $data->getUserPhone(),
                    'email'             => $data->getUserEmail(),
                    'passport'          => $data->getPassport(),
                    'passport_date'     => $data->getDatePassport(),
                    'passport_organ'    => $data->getAuthorityPassport(),
                    'agreement'         => true,
                ]
            );

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
