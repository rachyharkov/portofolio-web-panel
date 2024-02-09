<?php

namespace App\Enums;

enum PaymentMethodType: string {
    case CASH = 'CASH';
    case BANK_TRANSFER = 'BANK TRANSFER';
    case E_MONEY = 'E-MONEY';
    case CREDIT_CARD = 'CREDIT CARD';
    case DEBIT_CARD = 'DEBIT CARD';
    case VIRTUAL_ACCOUNT = 'VIRTUAL ACCOUNT';
    case QRIS = 'QRIS';
    case CRYPTO_CURRENCY = 'CRYPTO CURRENCY';
}