<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Model\PaymentType;
use App\Model\Lga;
use App\Model\User;
use App\Model\CofoType;

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

        // payment type
        PaymentType::create(['name' => 'GTB', 'type' => 'Bank Transfer']);
        PaymentType::create(['name' => 'First Bank', 'type' => 'Pos']);
        PaymentType::create(['name' => 'Office', 'type' => 'Cash']);

        // Cofo type
        CofoType::create(['category' => 'New', 'name' => 'Residential', 'fee' => 150000]);
        CofoType::create(['category' => 'New', 'name' => 'Commercial', 'fee' => 500000]);
        CofoType::create(['category' => 'New', 'name' => 'Education', 'fee' => 100000]);
        CofoType::create(['category' => 'New', 'name' => 'Hotels', 'fee' => 2000000]);
        CofoType::create(['category' => 'New', 'name' => 'Churches/Mosques', 'fee' => 100000]);
        CofoType::create(['category' => 'New', 'name' => 'Filling Stations', 'fee' => 1000000]);
        CofoType::create(['category' => 'New', 'name' => 'Industrial', 'fee' => 1000000]);
        CofoType::create(['category' => 'New', 'name' => 'Agricultural Purposes', 'fee' => 100000]);
        CofoType::create(['category' => 'New', 'name' => 'Hospitals', 'fee' => 100000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Hotels', 'fee' => 5000000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Clubs', 'fee' => 5000000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Bars', 'fee' => 5000000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Education', 'fee' => 10000000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Schools', 'fee' => 10000000]);
        CofoType::create(['category' => 'Change Of Purpose', 'name' => 'Residential to Hotels', 'fee' => 10000000]);

        // Lga
        $imoLga = ["Aboh-Mbaise", "Ahiazu-Mbaise", "Ehime-Mbano", "Ezinihitte", "Ideato North", "Ideato South",
            "Ihitte/Uboma", "Ikeduru", "Isiala Mbano", "Isu", "Mbaitoli", "Mbaitoli", "Ngor-Okpala",
            "Njaba", "Nwangele", "Nkwerre", "Obowo", "Oguta", "Ohaji/Egbema", "Okigwe", "Orlu", "Orsu",
            "Oru East", "Oru West", "Owerri-Municipal", "Owerri North", "Owerri West", ];
        foreach ($imoLga as $lga){
            Lga::create(['name' => $lga]);
        }




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

        $user = User::find(1);
        $user->assignRole(1);
    }
}