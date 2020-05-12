<?php

use Illuminate\Database\Seeder;
Use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $doctorRole = Role::where('name', 'doctor')->first();
        $patientRole = Role::where('name', 'patient')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        $doctor = User::create([
            'name' => 'Doctor',
            'email' => 'doctor@doctor.com',
            'password' => bcrypt('doctor'),
        ]);

        $patient = User::create([
            'name' => 'Patient',
            'email' => 'patient@patient.com',
            'password' => bcrypt('patient'),
        ]);

        $admin->roles()->attach($adminRole);
        $doctor->roles()->attach($doctorRole);
        $patient->roles()->attach($patientRole);

        factory(App\User::class, 50)->create();
    }
}
