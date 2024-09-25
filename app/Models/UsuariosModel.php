<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user','password','name','email','active','activation_token','reset_token','reset_token_expires_at','user_type_id'];

    protected bool $allowEmptyInserts = false;
   

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';
    
    //obtener datos de usuario
    public function validacionUsuario($usuario, $password){
        //echo "usuario: ". $usuario;
        $datosUsuario = $this->where([
            'user'=>$usuario,
            'active'=>1
            ])->first();
        //print_r($datosUsuario);
        //return $datosUsuario;
        
        if($datosUsuario && password_verify($password,$datosUsuario['password'])){
            return $datosUsuario;
        }
        return null;
        
    }
  
}
