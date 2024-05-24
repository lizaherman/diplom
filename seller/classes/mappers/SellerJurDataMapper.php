<?php namespace Ipag\Seller\Classes\Mappers;

use Exception;
use Ipag\Seller\Classes\Requests\SellerJurData;
use Log;
use Lovata\Buddies\Models\User;
use Ipag\Seller\Models\SellerJurData as JurCustomer;

class SellerJurDataMapper
{
    public function handle(SellerJurData $jurData, User $user)
    {
        try {
            JurCustomer::createOrUpdate(
                ['user_id'                  => !empty($user) ? $user->id : null],
                [
                    'organization'          => $jurData->getOrganization(),
                    'director'              => $jurData->getDirector(),
                    'director_last_name'    => $jurData->getDirectorLastName(),
                    'director_name'         => $jurData->getDirectorName(),
                    'director_middle_name'  => $jurData->getDirectorMiddleName(),
                    'customer'              => $jurData->getCustomer(),
                    'document'              => $jurData->getDocument(),
                    'company_address'       => $jurData->getCompanyAddress(),
                    'unp'                   => $jurData->getUnp(),
                    'bank_account'          => $jurData->getBankAccount(),
                    'bank_name'             => $jurData->getBank(),
                    'bank_address'          => $jurData->getBankAddress(),
                    'bank_bik'              => $jurData->getBik(),
                    'company_phone'         => $jurData->getPhone(),
                    'company_email'         => $jurData->getEmail(),
                    'agreement'             => true
                ]
            );
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
