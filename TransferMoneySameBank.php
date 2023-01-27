<?php
include_once('connection.php');
include_once('Transaction.php');
include_once('TransactionLog.php');

class TransferMoneySameBank extends Transaction {

    public function transferMoney(TransactionLog $transactionLog){

        $account  = new Account();

        $this->withdraw($transactionLog);
        $this->deposit($transactionLog);

        $this->logTransactionDetails($transactionLog);

    }

    //deposit function
    public function deposit(TransactionLog $transactionLog)
    {
        
        $ToAccountNumber = $transactionLog->getToAccountNumber();

        $sql = mysqli_query($con, "SELECT current_balance FROM accounts WHERE account_number='$ToAccountNumber' ");

        $row = mysqli_fetch_assoc($sql);

        $retriveCurrentBalance = $row['current_balance'];

        $currentBalanceInAccount = $retriveCurrentBalance += $transactionLog->getAmount();

        //sql query to update current balance in db

        $sql2 = mysqli_query($con, "UPDATE account SET current_balance='$currentBalanceInAccount' WHERE account_number='$ToAccountNumber')");

        return $sql2;

    }

}

$mysqli -> close();
?>