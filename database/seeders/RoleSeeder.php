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
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Cliente']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.users.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.users.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.users.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.users.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.p_images.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.p_images.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.p_images.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.p_images.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.b_images.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.b_images.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.b_images.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.b_images.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.carrimages.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.carrimages.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.carrimages.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.carrimages.destroy'])->syncRoles($role1);
        
        Permission::create(['name'=>'admin.codigos.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.codigos.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.codigos.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.codigos.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.beneficios.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.beneficios.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.beneficios.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.beneficios.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.promos.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.promos.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.promos.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.promos.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.horarios.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.horarios.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.horarios.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.horarios.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.salas.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.salas.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.salas.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.salas.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.peliculas.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.peliculas.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.peliculas.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.peliculas.destroy'])->syncRoles($role1);

        Permission::create(['name'=>'admin.tickets.index'])->syncRoles($role1);
        Permission::create(['name'=>'admin.tickets.create'])->syncRoles($role1);
        Permission::create(['name'=>'admin.tickets.edits'])->syncRoles($role1);
        Permission::create(['name'=>'admin.tickets.destroy'])->syncRoles($role1);



    }
}
