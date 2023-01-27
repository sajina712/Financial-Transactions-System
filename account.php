<?php

include_once('connection.php');

class Account {

   //create account

    public function createAccount(AccountDetails $accountDetails) {
      
        $AccountHolderName = $accountDetails->getAccountHolderName();
        $AccountNumber = $accountDetails->getAccountNumber();
        $ContactNumber = $accountDetails->getContactNumber();
        $Email = $accountDetails->getEmail();
        $BranchName = $accountDetails->getBranchName();
        $CurrentBalance = $accountDetails->getCurrentBalance();
        $AccountType = $accountDetails->getAccountType();


        $result=  mysqli_query($con, "INSERT INTO account(account_holder_name, account_number, contact_number, email, branch_name, current_balance, account_type) 
        VALUES('$AccountHolderName', '$AccountNumber', '$ContactNumber', '$Email', '$BranchName', '$CurrentBalance', '$AccountType')");

       return $result;


    }

    //get all accounts 

    public function showAccounts(){
        
        $sql = mysqli_query($con, " SELECT * FROM accounts ");
        $result = mysqli_fetch_assoc($sql);
          // Display All account Records
        

        return $result;

      }

    //get the balance of a specific account

    public function showbalance($accountNumber){
        
        $sql = mysqli_query($con, "SELECT current_balance FROM accounts WHERE account_number='$accountNumber' ");
        $row = mysqli_fetch_assoc($sql);

        $DisplayCurrentBalance =  $row['current_balance'];
										
        return $DisplayCurrentBalance;
      }


} // end account class

$mysqli -> close();
  



