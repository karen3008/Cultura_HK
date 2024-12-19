<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Str;  

class UserSeeder extends Seeder  
{  
    public function run()  
    {  
        DB::table('users')->insert([  
            [  
                'username' => 'admin',  
                'password' => bcrypt('clave123'), // Asegúrate de encriptar la contraseña
                //'passwordconfirmation' => bcrypt('clave123'), // Asegúrate de encriptar la contraseña   
                'secret_question' => 'What is your favorite color?',  
                'secret_answer' => 'azul',  
                'identification' => '18881531',  
                'id_parent' => '0',  
                'firs_name' => 'Karen',  
                'second_name' => 'Jemima',  
                'last_name' => 'Delgado',  
                'email' => 'ingdelgadokaren@gmail.com',  
                'email_verified_at' => now(),  
                'phone' => '04269564138',  
                'status' => 'active',  
                'id_rol' => '1',  
                'id_addres' => '1',  
                'created_at' => now(),  
                'updated_at' => now(),  
            ],  
            // Puedes agregar más usuarios aquí  
        ]);  
    }  
}