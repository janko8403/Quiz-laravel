<?php

namespace App\Imports;

use App\User;
use App\Role;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Mail;

class UsersImport implements ToCollection
{

    private const pass = 'test123';

    public function collection(Collection $rows)
    {
        $role_user = Role::where('name', 'User')->first();

        foreach ($rows as $row) {
            if(!empty($row[0])) {
                if(empty( User::where('email', $row[0])->first() )) {
                    $user = User::create([
                        'email' => $row[0],
                        'password' => \Hash::make(self::pass),
                        'email_verified_at' => date("Y-m-d H:i:s")
                    ]);

                    $user->roles()->attach($role_user);
                    $user->save();
                }
            }
        }
    }

}
