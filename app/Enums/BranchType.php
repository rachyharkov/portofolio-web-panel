<?php

namespace App\Enums;

enum BranchType: string {
    case HEAD_BRANCH = 'HEAD BRANCH';
    case SUB_BRANCH = 'SUB BRANCH';
}