<?php

namespace App\Enums;

enum PaymentMethodCurrency: string {
    case IDR = 'IDR';
    case USD = 'USD';
    case EUR = 'EUR';
    case GBP = 'GBP';
    case JPY = 'JPY';
    case AUD = 'AUD';
    case CAD = 'CAD';
    case CHF = 'CHF';
    case CNY = 'CNY';
    case SGD = 'SGD';
    case BTC = 'BTC';
    case ETH = 'ETH';
}