<?php
include_once('connection.php');
include_once('Transaction.php');
include_once('TransactionLog.php');

class TransferMoneyOtherBank extends Transaction {

    public function transferMoney(TransactionLog $transactionLog){

    $this->withdraw($transactionLog);
    $this->deposit($transactionLog);

    $this->logTransactionDetails($transactionLog);

   }

   //deposit function

    public function deposit(TransactionLog $transactionDetails)
    {
        // Call other bank service to transfer money
    }



}

$mysqli -> close();
?>