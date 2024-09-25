<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Home extends BaseController
{
    //protected $helpers = ['form'];
    
    public function index()//: string
    {
        return view('iniciar_sesion');
    }
    public function registrar(){
        return view('registro');
    }
    public function crear(){
        $rules=[
            'user'=>'required|max_length[30]|is_unique[usuarios.user]',
            'password'=>'required|max_length[50]|min_length[5]',
            'repassword'=>'matches[password]',
            'name'=>'required|max_length[100]',
            'email'=>'required|max_length[80]|valid_email|is_unique[usuarios.email]'
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors',$this->validator->listErrors());
        }

        $usuariosModel = new UsuariosModel();
        $post = $this->request->getPost(['user','password','name','email']);
        //print_r($post);
        $token = bin2hex(random_bytes(20));

        $usuariosModel->insert([
            'user'=>$post['user'],
            'password'=>password_hash($post['password'], PASSWORD_DEFAULT),
            'name'=>$post['name'],
            'email'=>$post['email'],
            'active'=>0,
            'activation_token'=>$token,
            'user_type_id'=>1
            
        ]);
        //llamar al servicio de correo
        $email = \Config\Services::email();
        $email->setTo($post['email']);
        $email->setSubject('Activa tu cuenta');

        $url = base_url('activar_usuario/'.$token);
        $body = "<p>Hola ". $post['name'] ."</p>";
        $body .="<p> enlace para activar <a href='$url'>Activar</a></p>";
        
        //print_r($email);

        $email->setMessage($body);
        $email->send();

        $titulo='Registro exitoso';
        $mensaje='Revisa tu correo para activar tu cuenta';
        return $this->showMessage($titulo, $mensaje);


    }

    private function showMessage($titulo, $mensaje){
        $data=[
            'titulo'=>$titulo,
            'mensaje'=>$mensaje
        ];
        return view('mensaje',$data);
    }

    public function activarUsuario($token){
        $usuariosModel = new UsuariosModel();
        $usuario =$usuariosModel->where(['activation_token' => $token,'active'=>0])->first();
        if($usuario){
            $usuariosModel->update(
                $usuario['id'],
                [
                    'active'=>1,
                    'activation_token'=>''

                ]
            );
            $titulo="Usuario activado";
            $mensaje="Su usuario ha sido activado con exito";
            return $this->showMessage($titulo, $mensaje);
        }
        return $this->showMessage('Ocurrio un error','Intenta en unos minutos');

    }
}
