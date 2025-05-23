<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannedIp extends Model
{
    use HasFactory;

    protected $table = 'banned_ips';

    protected $fillable = [
        'ip',
        'active',
    ];
}
