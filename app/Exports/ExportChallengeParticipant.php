<?php

namespace App\Exports;

use App\Models\ChallengeParticipant;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportChallengeParticipant implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return DB::getSchemaBuilder()->getColumnListing('challenge_participants');
    }

    public function collection()
    {
        return ChallengeParticipant::all();
    }
}
