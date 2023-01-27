<?php
include_once('connection.php');

require_once 'TransactionLog.php';

class Transaction {

    // withdraw function

    public function withdraw(TransactionLog $transactionLog)
    {
        $FromAccountNumber = $transactionLog->getFromAccountNumber();

       //sql query get current balance 
        $sql = mysqli_query($con, "SELECT current_balance FROM accounts WHERE account_number='$FromAccountNumber' ");
  
            $row=mysqli_fetch_row($sql);

        $retriveCurrentBalance = $row['current_balance'];

        $currentBalanceInAccount = $retriveCurrentBalance - $transactionLog->getAmount();

        //sql query to update current balance in db
     
        $sql2 = mysqli_query($con, "UPDATE account SET current_balance='$currentBalanceInAccount' WHERE account_number='$FromAccountNumber')");
        
       return $sql2;
    }

    public function logTransactionDetails(TransactionLog $transactionLog) {

        $FromAccountNumber = $transactionLog->getFromAccountNumber();
        $ToAccountNumber = $transactionLog->getToAccountNumber();
        $ToAccountHolderName = $transactionLog->getToAccountHolderName();
        $BranchName = $transactionLog->getBranchName();
        $BankName = $transactionLog->getBankName();
        $TransferDate = $transactionLog->getTransferDate();
        $Amount = $transactionLog->getAmount();
        $Comment = $transactionLog->getComment();

        $sql = mysqli_query($con, "INSERT INTO transaction(from_account_number, to_account_number, to_account_holder_name, to_bank, to_branch, transfer_date, amount, comment) 
        VALUES('$FromAccountNumber', '$ToAccountNumber','$ToAccountHolderName', '$BankName', '$BranchName', '$TransferDate', '$Amount', '$Comment')");

        return $sql;
    }

    //get all account transactions sorted by comment in alphabetical order.
    public function getTransactionDetailsSortedByComment() {

        $sql = mysqli_query($con, "select * from transaction where order by comment ASC");

        $result = mysqli_fetch_assoc($sql);

        return $result;
    
    }

    // get all account transactions sorted by date.
    public function getTransactionDetailsSortedByDate() {

        $sql = mysqli_query($con, "select * from transaction where order by date ASC ");

        $result = mysqli_fetch_assoc($sql);

        return $result;
    
    }
}


?>