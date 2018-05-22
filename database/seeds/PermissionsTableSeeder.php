<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([

        	//Users
        	'name'  	   => 'Navegar usuarios',
        	'slug'  	   => 'users.index',
        	'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Ver detalle usuarios',
        	'slug'  	   => 'users.show',
        	'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Edicion de usuarios',
        	'slug'  	   => 'users.edit',
        	'description'  => 'Editar cualquier dato de los usuarios del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar usuarios',
        	'slug'  	   => 'users.destroy',
        	'description'  => 'Eliminar usuarios del sistema',

        ]);


        //roles 

         Permission::create([

        	'name'  	   => 'Navegar roles',
        	'slug'  	   => 'roles.index',
        	'description'  => 'Lista y navega todos los roles sistema',

        ]);

         Permission::create([

        	
        	'name'  	   => 'Crear detalle roles',
        	'slug'  	   => 'roles.create',
        	'description'  => 'Crear Roles del sistema',

        ]);

        Permission::create([

        
        	'name'  	   => 'Ver detalle roles',
        	'slug'  	   => 'roles.show',
        	'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Edicion de roles',
        	'slug'  	   => 'roles.edit',
        	'description'  => 'Editar cualquier dato de los roles del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar roles',
        	'slug'  	   => 'roles.destroy',
        	'description'  => 'Eliminar roles del sistema',

        ]);



        //Beacons

         Permission::create([

        	'name'  	   => 'Navegar beacons',
        	'slug'  	   => 'products.index',
        	'description'  => 'Lista y navega todos los beacons sistema',

        ]);

         Permission::create([

        	//Users
        	'name'  	   => 'Crear detalle beacons',
        	'slug'  	   => 'products.create',
        	'description'  => 'Crear Roles del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalle beacons',
        	'slug'  	   => 'products.show',
        	'description'  => 'Ver en detalle cada beacons del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de beacons',
        	'slug'  	   => 'products.edit',
        	'description'  => 'Editar cualquier dato de los beacons del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar beacons',
        	'slug'  	   => 'products.destroy',
        	'description'  => 'Eliminar beacons del sistema',

        ]);




    }
}
