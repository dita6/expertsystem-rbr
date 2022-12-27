<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached role dan permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //pasien
        $pasienRole = Role::create(['name'=>'pasien']);
        $user = User::factory()->create([
            'name' => 'Pasien test',
            'email' => 'pasien@testing.com',
            'password' => bcrypt('12345678'),
        ]);
        $user ->assignRole($pasienRole);

        //admin
        $adminRole = Role::create(['name'=>'admin']);
        $user = User::factory()->create([
            'name' => 'admin test',
            'email' => 'admin@testing.com',
            'password' => bcrypt('12345678'),
        ]);
        $user ->assignRole($adminRole);

        //pakar
        $pakarRole = Role::create(['name'=>'pakar']);
        $user = User::factory()->create([
            'name' => 'pakar',
            'email' => 'pakar@testing.com',
            'password' => bcrypt('12345678'),
        ]);
        $user ->assignRole($pakarRole);
    }
}
