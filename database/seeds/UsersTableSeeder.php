<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyUser = User::create([
            'name' => 'Company User',
            'email' => 'user@company.com',
            'password' => Hash::make('123456')
        ]);
        $companyUser->assignRole('company-user');

        $supplierUser = User::create([
            'name' => 'Supplier User',
            'email' => 'user@supplier-company.com',
            'password' => Hash::make('123456'),
        ]);
        $supplierUser->assignRole('supplier-user');
    }
}
