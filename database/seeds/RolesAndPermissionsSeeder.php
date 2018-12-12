<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions documents
        Permission::create(['name' => 'view documents']);
        Permission::create(['name' => 'create documents']);
        Permission::create(['name' => 'edit documents']);
        Permission::create(['name' => 'delete documents']);
        Permission::create(['name' => 'approve documents']);
        Permission::create(['name' => 'super documents']);

        // create permissions owner
        Permission::create(['name' => 'view owners']);
        Permission::create(['name' => 'create owners']);
        Permission::create(['name' => 'edit owners']);
        Permission::create(['name' => 'delete owners']);

        // create permissions print management
        Permission::create(['name' => 'view prints']);
        Permission::create(['name' => 'delete prints']);

        // create permissions stocks
        Permission::create(['name' => 'view stocks']);
        Permission::create(['name' => 'receive stocks']);
        Permission::create(['name' => 'edit stocks']);
        Permission::create(['name' => 'delete stocks']);
        Permission::create(['name' => 'approve stocks']);
        Permission::create(['name' => 'transfer stocks']);
        Permission::create(['name' => 'raise stocks']);

        // create permissions reports
        Permission::create(['name' => 'view reports']);
        Permission::create(['name' => 'query reports']);
        Permission::create(['name' => 'export reports']);
        Permission::create(['name' => 'delete reports']);

        // create permissions users
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'approval'])
            ->givePermissionTo(['view documents', 'approve documents']);

        $role = Role::create(['name' => 'document-manager']);
        $role->givePermissionTo(['view documents', 'create documents', 'delete documents']);

        $role = Role::create(['name' => 'document-user']);
        $role->givePermissionTo(['view documents', 'create documents']);

        $role = Role::create(['name' => 'print-manager']);
        $role->givePermissionTo(['view prints', 'delete prints']);

        $role = Role::create(['name' => 'super-approval']);
        $role->givePermissionTo(['view documents', 'super documents']);
    }
}