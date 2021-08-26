<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class UsersImport implements 
    //ToModel, 
    ToCollection,
    SkipsOnError, 
    WithHeadingRow,
    WithValidation, 
    SkipsOnFailure,
    //WithBatchInserts,
    WithChunkReading,
    ShouldQueue
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            $user = User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make('password')
            ]);
            $user->address()->create([
                'country' => $row['country']
            ]);
        }
    }

    // public function onError(Throwable $e)
    // {
        
    // }

    public function rules(): array
    {
        return [
            '*.email' => ['email', 'unique:users,email']
        ];
    }

    // public function batchSize(): int
    // {
    //     return 1000;
    // }

    public function chunkSize(): int
    {
        return 1000;
    }

}
