<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeParticipant extends Model
{
    use HasFactory;

    protected $table = 'challenge_participants';
    public $timestamps = false;

    protected $fillable = [
        'uid','device','browser','os','user_ip','created_date','source',
        'gameTry','encryptkey','nextClick','beginChallengeClick','sheikhFound',
        'locationConfirmed','name','email','age','mobile','fbshare','wtshare',
        'twshare','timeInSeconds','language',
    ];

}
