<?php
class TransactionLog {

    private $fromAccountNumber;
    private $toAccountNumber;
    private $toAccountHolderName;
    private $branchName;
    private $bankName;
    private $transferDate;
    private $amount;
    private $comment;
  
    public function __construct($fromAccountNumber, $toAccountNumber, $toAccountHolderName, $branchName, $bankName, $transferDate, $amount, $comment) {
      
      $this->fromAccountNumber = $fromAccountNumber;
      $this->toAccountNumber = $toAccountNumber;
      $this->toAccountHolderName = $toAccountHolderName;
      $this->branchName = $branchName;
      $this->bankName = $bankName;
      $this->transferDate = $transferDate;
      $this->amount = $amount;
      $this->comment = $comment;

    }

    public function getFromAccountNumber() 
    {
      return $this->fromAccountNumber;
    }

    public function getToAccountNumber()
    {
      return $this->toAccountNumber;
    }

    public function getToAccountHolderName() 
    {
      return $this->toAccountHolderName;
    }

    public function getBranchName() 
    {
      return $this->branchName;
    }

    public function getBankName() 
    {
      return $this->bankName;
    }

    public function getTransferDate() 
    {
      return $this->transferDate;
    }

    public function getAmount() 
    {
      return $this->amount;
    }

    public function getComment() 
    {
      return $this->comment;
    }

  }
    ?>