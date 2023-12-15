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
        Permission::create(['name','home'])->syncRoles(['admin','vendedor','cliente','invitado']);

        Permission::create(['name','articles.index'])->syncRoles(['admin','invitado']);
        Permission::create(['name','articles.create'])->syncRoles(['admin']);
        Permission::create(['name','articles.edit'])->syncRoles(['admin']);
        Permission::create(['name','articles.show'])->syncRoles(['admin']);
        Permission::create(['name','articles.destroy'])->syncRoles(['admin']);

        Permission::create(['name','cities.index'])->syncRoles(['admin']);
        Permission::create(['name','cities.create'])->syncRoles(['admin']);
        Permission::create(['name','cities.edit'])->syncRoles(['admin']);
        Permission::create(['name','cities.show'])->syncRoles(['admin']);
        Permission::create(['name','cities.destroy'])->syncRoles(['admin']);

        Permission::create(['name','customers.index'])->syncRoles(['admin']);
        Permission::create(['name','customers.create'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','customers.edit'])->syncRoles(['admin']);
        Permission::create(['name','customers.show'])->syncRoles(['admin']);
        Permission::create(['name','customers.destroy'])->syncRoles(['admin']);

        Permission::create(['name','document-types.index'])->syncRoles(['admin']);
        Permission::create(['name','document-types.create'])->syncRoles(['admin']);
        Permission::create(['name','document-types.edit'])->syncRoles(['admin']);
        Permission::create(['name','document-types.show'])->syncRoles(['admin']);
        Permission::create(['name','document-types.destroy'])->syncRoles(['admin']);

        Permission::create(['name','item-types.index'])->syncRoles(['admin']);
        Permission::create(['name','item-types.create'])->syncRoles(['admin']);
        Permission::create(['name','item-types.edit'])->syncRoles(['admin']);
        Permission::create(['name','item-types.show'])->syncRoles(['admin']);
        Permission::create(['name','item-types.destroy'])->syncRoles(['admin']);

        Permission::create(['name','articles.index'])->syncRoles(['admin']);
        Permission::create(['name','articles.create'])->syncRoles(['admin']);
        Permission::create(['name','articles.edit'])->syncRoles(['admin']);
        Permission::create(['name','articles.show'])->syncRoles(['admin']);
        Permission::create(['name','articles.destroy'])->syncRoles(['admin']);

        Permission::create(['name','refunds.index'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','refunds.create'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','refunds.edit'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','refunds.show'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','refunds.destroy'])->syncRoles(['admin','vendedor','cliente']);

        Permission::create(['name','reportes.r1'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r2'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r3'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r4'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r5'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r6'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r7'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r8'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r9'])->syncRoles(['admin','vendedor']);
        Permission::create(['name','reportes.r10'])->syncRoles(['admin','vendedor']);

        Permission::create(['name','sales.index'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','sales.create'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','sales.edit'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','sales.show'])->syncRoles(['admin','vendedor','cliente']);
        Permission::create(['name','sales.destroy'])->syncRoles(['admin','vendedor','cliente']);

        Permission::create(['name','suppliers.index'])->syncRoles(['admin']);
        Permission::create(['name','suppliers.create'])->syncRoles(['admin']);
        Permission::create(['name','suppliers.edit'])->syncRoles(['admin']);
        Permission::create(['name','suppliers.show'])->syncRoles(['admin']);
        Permission::create(['name','suppliers.destroy'])->syncRoles(['admin']);

        Permission::create(['name','way-to-pays.index'])->syncRoles(['admin']);
        Permission::create(['name','way-to-pays.create'])->syncRoles(['admin']);
        Permission::create(['name','way-to-pays.edit'])->syncRoles(['admin']);
        Permission::create(['name','way-to-pays.show'])->syncRoles(['admin']);
        Permission::create(['name','way-to-pays.destroy'])->syncRoles(['admin']);

        Permission::create(['name','sale/pdf/{sale}'])->syncRoles(['admin','vendedor','cliente']);

        Permission::create(['name','users.index'])->syncRoles(['admin']);
        Permission::create(['name','users.create'])->syncRoles(['admin']);
        Permission::create(['name','users.edit'])->syncRoles(['admin']);
        Permission::create(['name','users.show'])->syncRoles(['admin']);
        Permission::create(['name','users.destroy'])->syncRoles(['admin']);
    }
}
