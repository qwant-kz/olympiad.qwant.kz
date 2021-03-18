<?php

namespace App\Exports;

use App\Models\UserInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserInfoExport implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings():array{
        return [
            'Id',
            'Full Name',
            'Email',
            'City',
            'School',
            'Applied time'
        ];
    }
    public function collection()
    {
        //return UserInfo::all();
        return collect(UserInfo::get());
    }
}
