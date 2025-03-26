<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = max(0, $balance); // Баланс не может быть отрицательным
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "Сумма для депозита должна быть положительной.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Недостаточно средств или некорректная сумма.\n";
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setBalance($balance) {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            echo "Баланс не может быть отрицательным.\n";
        }
    }
}

// Пример использования:
$account = new BankAccount("12345678", 500);
$account->deposit(200);
$account->withdraw(100);
echo "Баланс: " . $account->getBalance() . "\n";