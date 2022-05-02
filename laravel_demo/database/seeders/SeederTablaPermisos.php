<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;



class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[
            //Tabla Roles
            'ver-rol', 
            'crear-rol', 
            'editar-rol', 
            'borrar-rol',
            //Tabla Vehiculos
            'ver-vehiculo', 
            'registrar-vehiculo', 
            'editar-vehiculo', 
            'borrar-vehiculo',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
} 
