<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "Administrator";
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = "User";
        $role_user->description = "Użytkownik";
        $role_user->save();

        $role_red = new Role();
        $role_red->name = "Editor";
        $role_red->description = "Redaktor";
        $role_red->save();
    }
}
