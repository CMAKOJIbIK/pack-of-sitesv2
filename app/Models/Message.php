<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed surname
 * @property mixed mail
 * @property mixed gmail
 * @property mixed message
 */
class Message extends Model
{
    use HasFactory;
}
