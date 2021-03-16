<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //aqui se crean los roles
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Suscriptor']);

        //crear permisos
        //permiso de inicio
        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);

        //permisos usuarios
        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);

        //permisos de servicios
        Permission::create(['name' => 'admin.servicios.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.servicios.created'])->assignRole($role1);
        Permission::create(['name' => 'admin.servicios.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.servicios.delete'])->assignRole($role1);

        //permisos de paquetes
        Permission::create(['name' => 'admin.paquetes.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.paquetes.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.paquetes.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.paquetes.destroy'])->assignRole($role1);

        //permisos de planes
        Permission::create(['name' => 'admin.plans.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.plans.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.plans.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.plans.destroy'])->assignRole($role1);

        //permisos de facturas
        Permission::create(['name' => 'admin.facturas.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.facturas.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.facturas.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.facturas.destroy'])->syncRoles([$role1,$role2]);


    }
}
