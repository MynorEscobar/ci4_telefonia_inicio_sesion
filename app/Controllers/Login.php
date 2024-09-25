<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Login extends BaseController
{
    protected $helpers = ['form'];
    
    public function index()//: string
    {
        return view('iniciar_sesion');
    }
    public function autenticar(){
        /*
        $rules=[
            'user'=>'required',
            'password'=>'required'
        ];

        if (!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors',$this->validator->listErrors());
        }
        */
        $usuariosModel = new UsuariosModel();
        $post = $this->request->getPost(['user','password']);
        //print_r($post);
        //print_r($post);
        $usuario = $usuariosModel->validacionUsuario($post['user'],$post['password']);
        
        print_r($usuario);
        
        if($usuario!==null){
            $this->setSession($usuario);
            return redirect()->to(base_url('inicioUsuario'));
        }
        return redirect()->back()->withInput()->with('errors','Datos incorrectos');
       
    }
    public function recuperarContra(){
        echo 'Recuperar contraseña';
    }

    private function setSession($userData){
        $data=[
            'logged_id'=>true,
            'userid'=>$userData['id'],
            'username'=>$userData['name'],
        ];
        $this->session->set($data);
        
    }
}