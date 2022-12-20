<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_user = Role::where('name', 'User')->first();
        $role_red = Role::where('name', 'Editor')->first();

        $admin = new User();
        $admin->email = "admin@admin.pl";
        $admin->password = bcrypt('cm84JS43');
        $admin->email_verified_at = date("Y-m-d h:i:s");
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->email = "pawel@pawel.pl";
        $user->password = bcrypt('test123');
        $user->email_verified_at = date("Y-m-d h:i:s");
        $user->save();
        $user->roles()->attach($role_user);
        
        $red = new User();
        $red->email = "agata@redaktor.pl";
        $red->password = bcrypt('agata123@!76$');
        $red->email_verified_at = date("Y-m-d h:i:s");
        $red->save();
        $red->roles()->attach($role_red);

        $red2 = new User();
        $red2->email = "adomagala@pepco.eu";
        $red2->password = bcrypt('adomagala@!76$');
        $red2->email_verified_at = date("Y-m-d h:i:s");
        $red2->save();
        $red2->roles()->attach($role_admin);

        $red2 = new User();
        $red2->email = "adelmaczynska@pepco.eu";
        $red2->password = bcrypt('adelmaczynska@!76$');
        $red2->email_verified_at = date("Y-m-d h:i:s");
        $red2->save();
        $red2->roles()->attach($role_admin);
    }
}
