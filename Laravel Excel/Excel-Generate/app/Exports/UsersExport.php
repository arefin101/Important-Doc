<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Address;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutosize;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements FromCollection, WithMapping, WithHeadings, WithEvents
{
    use Exportable;

    private $fileName = 'users.xlsx';

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return([
        //     ['kiron', 'dotto@gmail.com']
        // ]);
        //return view('exports.users', ['users' => User::all()]);
        return User::with('address')->get();
        //dd($user);
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->password,
            $user->address->country
            //Date::dateTimeToExcel($user->id),
        ];
    }

    // public function headings(): array
    // {
    //     return [
    //         '#',
    //         'User',
    //         'Date',
    //     ];
    // }

    public function headings(): array
    {
        return [
           'id',
           'name',
           'email',
           'password',
           'country'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
               $event->sheet->getStyle('A1:E1')->applyFromArray([
                    'font' => [
                        'bold' =>true
                    ]
                ]);
            }
        ];
    }

}
