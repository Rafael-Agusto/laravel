<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'judul'     => $row[0],
            'slug'    => $row[1], 
            'user_id'    => $row[2], 
            'isi' => $row[3],
            'created_at' => $row[4],
            'updated_at' => $row[5],
        ]);
    }
}
