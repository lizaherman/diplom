<?php namespace Ipag\Seller\Components;

use AuthHelper;
use Cms\Classes\ComponentBase;
use Exception;
use Input;
use Ipag\Seller\Classes\Mappers\SellerDataMapper;
use Ipag\Seller\Classes\Mappers\SellerJurDataMapper;
use Ipag\Seller\Classes\Requests\SellerData;
use Ipag\Seller\Classes\Requests\SellerJurData;

class FormatSellerDocPack extends ComponentBase
{
    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
    }

    /**
     * @throws Exception
     */
    public function onSaveFormData()
    {
        $user = AuthHelper::getUser();

        if (empty($user)) return;

        $inputArray = Input::all();

        if (empty($inputArray) || !$inputArray['agreement']) {
            return;
        }

        if ($inputArray['form'] === 'jur_form') {
            $data        = new SellerJurData($inputArray);
            /** @var SellerJurDataMapper $mapper */
            $mapper      = app(SellerJurDataMapper::class);

        } elseif ($inputArray['form'] === 'simple_form') {
            $data        = new SellerData($inputArray);
            /** @var SellerDataMapper $mapper */
            $mapper      = app(SellerDataMapper::class);
        } else {
            return;
        }

        foreach ($data as $value) {
            if (empty($value)) {
                return;
            }
        }

        $mapper->handle($data, $user);
        return;
    }

    public function onFormDocPack()
    {
        $user = AuthHelper::getUser();

        if (empty($user)) return;

        $inputArray = Input::all();

        if (empty($inputArray)) {
            return;
        }


    }
}
