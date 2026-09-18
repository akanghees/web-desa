<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = ['berita', 'pengumuman', 'agenda', 'galeri', 'layanan_surat', 'permohonan_surat', 'data_penduduk', 'perangkat_desa'];
        $actions = ['view', 'create', 'edit', 'delete'];

        foreach ( $modules as $module) {
            foreach ( $actions as $action) {
                Permission::firstOrCreate(
                    ['slug' => "{$module}.{$action}"],
                    ['name' => ucfirst($action) . ' ' . str_replace('_', ' ', $module)]
                );
            }
        }

        $superAdmin = Role::firstOrCreate(['slug' => 'super_admin'], ['name' => 'Super Admin']);
        $superAdmin->permissions()->sync(Permission::pluck('id'));
    }
}
