<?php

namespace App\Exports;

use App\Models\ChallengeParticipant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportChallengeParticipant implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id', 'next click','begin challenge click','sheikh found',
            'location confirmed','name','email','age','mobile','fbshare','wtshare',
            'twshare','time in seconds','language',
        ]; 
    }

    public function collection()
    {
        return ChallengeParticipant::whereNotNull('mobile')
            ->orWhereNotNull('email')
            ->select('id', 'nextClick','beginChallengeClick','sheikhFound',
            'locationConfirmed','name','email','age','mobile','fbshare','wtshare',
            'twshare','timeInSeconds','language')
            ->get();
    }
}
