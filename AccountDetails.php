<?php
class AccountDetails{
    
    private $accountHolderName;
    private $accountNumber;
    private $contactNumber;
    private $email;
    private $branchName;
    private $currentBalance;
    private $accountType;  

    public function __construct($accountHolderName, $accountNumber, $contactNumber, $email, $branchName, $currentBalance, $accountType) {

      $this->accountHolderName = $accountHolderName;
      $this->accountNumber = $accountNumber;
      $this->contactNumber = $contactNumber;
      $this->email = $email;
      $this->branchName = $branchName;
      $this->currentBalance = $currentBalance;
      $this->accountType = $accountType;
      
    }

    public function getAccountHolderName() 
    {
      return $this->accountHolderName;
    }

    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    public function getContactNumber() 
    {
      return $this->contactNumber;
    }

    public function getEmail() 
    {
      return $this->email;
    }

    public function getBranchName() 
    {
      return $this->branchName;
    }

    public function getCurrentBalance() 
    {
      return $this->currentBalance;
    }

    public function getAccountType() 
    {
      return $this->accountType;
    }

}

?>
