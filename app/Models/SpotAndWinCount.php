<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotAndWinCount extends Model
{
    use HasFactory;

    protected $table = 'spot_and_win_count';
    public $timestamps = false;

    protected $fillable = [
        'uid','device','browser','os','user_ip','created_date','source',
        'gameTry','encryptkey','nextClick','beginChallengeClick','sheikhFound',
        'locationConfirmed','name','email','age','mobile','fbshare','wtshare',
        'twshare','timeInSeconds','language',
    ];

}
