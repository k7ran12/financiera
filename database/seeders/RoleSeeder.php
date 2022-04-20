<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'asesores']);

        Permission::create(['name'=>'prestamos.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'prestamos.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'prestamos.delete'])->syncRoles([$role1]);
        Permission::create(['name'=>'prestamos.update'])->syncRoles([$role1]);

        Permission::create(['name'=>'clientes.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'clientes.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'clientes.delete'])->syncRoles([$role1]);
        Permission::create(['name'=>'clientes.update'])->syncRoles([$role1,$role2]);      

        Permission::create(['name'=>'reportes'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'empresa'])->syncRoles([$role1]);
        
    }
}
