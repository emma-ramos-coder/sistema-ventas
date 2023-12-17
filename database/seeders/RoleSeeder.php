<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'vendedor']);
        $role3 = Role::create(['name'=>'cliente']);
        $role4 = Role::create(['name'=>'invitado']);

        Permission::create(['name'=>'home',
                            'description'=>'Ver el dashboard'])->syncRoles([$role1,$role2,$role3,$role4]);

        Permission::create(['name'=>'articles.index',
                            'description'=>'Ver listado de artículos'])->syncRoles([$role1,$role4]);
        Permission::create(['name'=>'articles.create',
                            'description'=>'Crear artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'articles.edit',
                            'description'=>'Editar artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'articles.show',
                            'description'=>'Mostrar artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'articles.destroy',
                            'description'=>'Eliminar artículos'])->syncRoles([$role1]);

        Permission::create(['name'=>'cities.index',
                            'description'=>'Ver listado de ciudades'])->syncRoles([$role1]);
        Permission::create(['name'=>'cities.create',
                            'description'=>'Crear ciudades'])->syncRoles([$role1]);
        Permission::create(['name'=>'cities.edit',
                            'description'=>'Editar ciudades'])->syncRoles([$role1]);
        Permission::create(['name'=>'cities.show',
                            'description'=>'Mostrar ciudades'])->syncRoles([$role1]);
        Permission::create(['name'=>'cities.destroy',
                            'description'=>'Eliminar ciudades'])->syncRoles([$role1]);

        Permission::create(['name'=>'customers.index',
                            'description'=>'Ver listado de clientes'])->syncRoles([$role1]);
        Permission::create(['name'=>'customers.create',
                            'description'=>'Crear clientes'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'customers.edit',
                            'description'=>'Editar clientes'])->syncRoles([$role1]);
        Permission::create(['name'=>'customers.show',
                            'description'=>'Mostrar clientes'])->syncRoles([$role1]);
        Permission::create(['name'=>'customers.destroy',
                            'description'=>'Eliminar clientes'])->syncRoles([$role1]);

        Permission::create(['name'=>'document-types.index',
                            'description'=>'Ver lista de tipos de documentos'])->syncRoles([$role1]);
        Permission::create(['name'=>'document-types.create',
                            'description'=>'Crear tipos de documentos'])->syncRoles([$role1]);
        Permission::create(['name'=>'document-types.edit',
                            'description'=>'Editar tipos de documentos'])->syncRoles([$role1]);
        Permission::create(['name'=>'document-types.show',
                            'description'=>'Mostrar tipos de documentos'])->syncRoles([$role1]);
        Permission::create(['name'=>'document-types.destroy',
                            'description'=>'Eliminar tipos de documentos'])->syncRoles([$role1]);

        Permission::create(['name'=>'item-types.index',
                            'description'=>'Ver lista de tipos de artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'item-types.create',
                            'description'=>'Crear tipos de artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'item-types.edit',
                            'description'=>'Editar tipos de artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'item-types.show',
                            'description'=>'Mostrar tipos de artículos'])->syncRoles([$role1]);
        Permission::create(['name'=>'item-types.destroy',
                            'description'=>'Eliminar tipos de artículos'])->syncRoles([$role1]);

       /*  Permission::create(['name'=>'refunds.index',
                            'description'=>'Ver Lista de devoluciones'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'refunds.create',
                            'description'=>'Crear devoluciones'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'refunds.edit',
                            'description'=>'Editar devoluciones'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'refunds.show',
                            'description'=>'Mostrar devoluciones'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'refunds.destroy',
                            'description'=>'Eliminar devoluciones'])->syncRoles([$role1,$role2,$role3]); */

        Permission::create(['name'=>'reportes.r1',
                            'description'=>'Reporte de artículos vendidos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r2',
                            'description'=>'Reporte de precios de artículos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r3',
                            'description'=>'Reporte de artículos sin stock'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r4',
                            'description'=>'Reporte de ventas por día'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r5',
                            'description'=>'Reporte de ventas por cliente'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r6',
                            'description'=>'Reporte de ventas por proveedor'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r7',
                            'description'=>'Reporte de clientes por ciudad'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r8',
                            'description'=>'Reporte de ventas por forma de pago'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r9',
                            'description'=>'Reporte de arttículos por categoría'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reportes.r10',
                            'description'=>'Reporte de ventas por usuario'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'sales.index',
                            'description'=>'Ver listado de ventas '])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'sales.create',
                            'description'=>'Crear ventas'])->syncRoles([$role1,$role2,$role3]);
        /* Permission::create(['name'=>'sales.edit',
                            'description'=>'Editar ventas'])->syncRoles([$role1,$role2,$role3]); */
        Permission::create(['name'=>'sales.show',
                            'description'=>'Mostrar ventas'])->syncRoles([$role1,$role2,$role3]);
        /* Permission::create(['name'=>'sales.destroy',
                            'description'=>'Eliminar ventas'])->syncRoles([$role1,$role2,$role3]); */

        Permission::create(['name'=>'suppliers.index',
                            'description'=>'Ver listado de proveedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'suppliers.create',
                            'description'=>'Crear proveedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'suppliers.edit',
                            'description'=>'Editar proveedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'suppliers.show',
                            'description'=>'Mostrar proveedores'])->syncRoles([$role1]);
        Permission::create(['name'=>'suppliers.destroy',
                            'description'=>'Eliminar proveedores'])->syncRoles([$role1]);

        Permission::create(['name'=>'way-to-pays.index',
                            'description'=>'Ver listado de formas de pago'])->syncRoles([$role1]);
        Permission::create(['name'=>'way-to-pays.create',
                            'description'=>'Crear formas de pago'])->syncRoles([$role1]);
        Permission::create(['name'=>'way-to-pays.edit',
                            'description'=>'Editar formas de pago'])->syncRoles([$role1]);
        Permission::create(['name'=>'way-to-pays.show',
                            'description'=>'Mostrar formas de pago'])->syncRoles([$role1]);
        Permission::create(['name'=>'way-to-pays.destroy',
                            'description'=>'Eliminar formas de pago'])->syncRoles([$role1]);

        Permission::create(['name'=>'sale/pdf/{sale}',
                            'description'=>'Ver factura'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'users.index',
                            'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
        /* Permission::create(['name'=>'users.create',
                            'description'=>'Crear usuarios'])->syncRoles([$role1]); */
        Permission::create(['name'=>'users.edit',
                            'description'=>'Asignar rol a usuario'])->syncRoles([$role1]);
        /* Permission::create(['name'=>'users.show',
                            'description'=>'Mostrar usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'users.destroy',
                            'description'=>'Eliminar usuarios'])->syncRoles([$role1]); */

        Permission::create(['name'=>'roles.index',
                            'description'=>'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.create',
                            'description'=>'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.edit',
                            'description'=>'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.show',
                            'description'=>'Mostrar roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'roles.destroy',
                            'description'=>'Eliminar roles'])->syncRoles([$role1]);
    }
}
