<?php namespace Ipag\Seller\Classes\Requests;

class SellerData
{
    private $userName;
    private $userAddress;
    private $userPhone;
    private $userEmail;
    private $passport;
    private $datePassport;
    private $authorityPassport;


    public function __construct(array $inputArray)
    {
        $this->userName             = empty($inputArray['name']) ?? $inputArray['name'];
        $this->userAddress          = empty($inputArray['address']) ?? $inputArray['address'];
        $this->userPhone            = empty($inputArray['phone']) ?? $inputArray['phone'];
        $this->userEmail            = empty($inputArray['email']) ?? $inputArray['email'];
        $this->passport             = empty($inputArray['passport']) ?? $inputArray['passport'];
        $this->datePassport         = empty($inputArray['p-date']) ?? $inputArray['p-date'];
        $this->authorityPassport    = empty($inputArray['p-authority']) ?? $inputArray['p-authority'];
    }

    /**
     * @return bool|mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return bool|mixed
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * @return bool|mixed
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @return bool|mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @return bool|mixed
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @return bool|mixed
     */
    public function getDatePassport()
    {
        return $this->datePassport;
    }

    /**
     * @return bool|mixed
     */
    public function getAuthorityPassport()
    {
        return $this->authorityPassport;
    }

}
