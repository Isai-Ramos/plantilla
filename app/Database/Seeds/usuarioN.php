<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioN extends Seeder
{
	public function run()
	{
		$usuario = "juanito";
		$password = password_hash("456", PASSWORD_DEFAULT);
		$type = "normal";

		$data = [
                        'usuario' => $usuario,
                        'password' => $password,
                        'type' => $type
                ];

                // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
	}
}
