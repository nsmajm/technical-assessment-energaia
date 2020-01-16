<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyRole = Role::create(['name' => 'company-user']);
        $supplierRole = Role::create(['name' => 'supplier-user']);

        $inventoryPermission = Permission::create(['name' => 'view-inventory']);
        $supplyPermission = Permission::create(['name' => 'view-supplies']);

        // give permission accordingly
        $inventoryPermission->assignRole($companyRole);
        $supplyPermission->assignRole($supplierRole);
    }
}
