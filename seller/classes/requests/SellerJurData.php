<?php namespace Ipag\Seller\Classes\Requests;

class SellerJurData
{
    private $organization;
    private $director;
    private $directorLastName;
    private $directorName;
    private $directorMiddleName;
    private $customer;
    private $document;
    private $companyAddress;
    private $unp;
    private $bankAccount;
    private $bank;
    private $bankAddress;
    private $bik;
    private $phone;
    private $email;
    private $agreement;

    /**
     * @param array $inputArray
     */
    public function __construct(array $inputArray)
    {
        $this->organization         = empty($inputArray['org_name']) ?? $inputArray['org_name'];
        $this->director             = empty($inputArray['director']) ?? $inputArray['director'];
        $this->directorLastName     = empty($inputArray['d-last-name']) ?? $inputArray['d-last-name'];
        $this->directorName         = empty($inputArray['d-name']) ?? $inputArray['d-name'];
        $this->directorMiddleName   = empty($inputArray['d-middle-name']) ?? $inputArray['d-middle-name'];
        $this->customer             = empty($inputArray['customer']) ?? $inputArray['customer'];
        $this->document             = empty($inputArray['document']) ?? $inputArray['document'];
        $this->companyAddress       = empty($inputArray['address']) ?? $inputArray['address'];
        $this->unp                  = (empty($inputArray['unp']) || !$this->validateUnp($inputArray['unp'])) ?? $inputArray['unp'];
        $this->bankAccount          = empty($inputArray['account']) ?? $inputArray['account'];
        $this->bank                 = empty($inputArray['bank']) ?? $inputArray['bank'];
        $this->bankAddress          = empty($inputArray['bank_address']) ?? $inputArray['bank_address'];
        $this->bik                  = empty($inputArray['bik']) ?? $inputArray['bik'];
        $this->phone                = empty($inputArray['phone']) ?? $inputArray['phone'];
        $this->email                = empty($inputArray['email']) ?? $inputArray['email'];
        $this->agreement            = empty($inputArray['agreement']) ?? $inputArray['agreement'];
    }

    /**
     * @return bool|mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return bool|mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @return bool|mixed
     */
    public function getDirectorLastName()
    {
        return $this->directorLastName;
    }

    /**
     * @return bool|mixed
     */
    public function getDirectorName()
    {
        return $this->directorName;
    }

    /**
     * @return bool|mixed
     */
    public function getDirectorMiddleName()
    {
        return $this->directorMiddleName;
    }

    /**
     * @return bool|mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return bool|mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return bool|mixed
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * @return bool|mixed
     */
    public function getUnp()
    {
        return $this->unp;
    }

    /**
     * @return bool|mixed
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @return bool|mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return bool|mixed
     */
    public function getBankAddress()
    {
        return $this->bankAddress;
    }

    /**
     * @return bool|mixed
     */
    public function getBik()
    {
        return $this->bik;
    }

    /**
     * @return bool|mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return bool|mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool|mixed
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    private function validateUnp($unp)
    {
        return preg_match('%^\d{9}$%', $unp);
    }

}
