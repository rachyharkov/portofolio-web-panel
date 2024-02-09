<?php

namespace App\Enums;

enum InvoiceStatus: string {
    case UNPAID = 'UNPAID';
    case PAID = 'PAID';
    case OVERDUE = 'OVERDUE';
    case VOID = 'VOID';
    case REFUND = 'REFUND';
    case PARTIALLY_PAID = 'PARTIALLY_PAID';
    case PARTIALLY_REFUND = 'PARTIALLY_REFUND';
    case PARTIALLY_OVERDUE = 'PARTIALLY_OVERDUE';
    case PARTIALLY_VOID = 'PARTIALLY_VOID';
    case CANCELLED = 'CANCELLED';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case EXPIRED = 'EXPIRED';
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case SUSPENDED = 'SUSPENDED';
    case TERMINATED = 'TERMINATED';
    case DELETED = 'DELETED';
    case ARCHIVED = 'ARCHIVED';
}