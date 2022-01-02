<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeederPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissios = [
            //tabla role
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla blog
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog'
        ];

        foreach ($permissios as $permissio)
        {
            Permission::create(['name' => $permissio]);
        }
    }
}
