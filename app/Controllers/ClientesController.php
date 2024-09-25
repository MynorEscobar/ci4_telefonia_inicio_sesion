<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll(); //select * from clientes
        return view('clientes',$datos);
    }
    public function guardarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getPost('txtId'),
            'apellido'=>$this->request->getPost('txtApellido'),
            'nombre'=>$this->request->getPost('txtNombre'),
            'correo_electronico'=>$this->request->getPost('txtCorreo'),
            'calle_avenida'=>$this->request->getPost('txtCalleAv'),
            'no_casa'=>$this->request->getPost('txtNoCasa'),
            'zona'=>$this->request->getPost('txtZona'),

        ];
        $cliente = new ClientesModel();
        $cliente->insert($datos);
        return $this->index();
        //print_r($datos);
    }
    public function buscarCliente($id=null){
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        //print_r($datos);
        return view('form_modificar_cliente',$datos);
    }
    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getPost('txtId'),
            'apellido'=>$this->request->getPost('txtApellido'),
            'nombre'=>$this->request->getPost('txtNombre'),
            'correo_electronico'=>$this->request->getPost('txtCorreo'),
            'calle_avenida'=>$this->request->getPost('txtCalleAv'),
            'no_casa'=>$this->request->getPost('txtNoCasa'),
            'zona'=>$this->request->getPost('txtZona'),

        ];
        $cliente = new ClientesModel();
        $cliente->update($datos['cliente_id'],$datos);
        return $this->index();       
    }
    public function eliminarCliente($id=null){
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        return $this->index();
    }
}