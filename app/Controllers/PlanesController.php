<?php

namespace App\Controllers;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();
        $datos['datos']=$planes->findAll();
        return view('planes',$datos);
    }
    public function nuevoPlan():string
    {
        return view('form_nuevo_plan');
    }
    public function guardarPlan(){
        $planes = new PlanesModel();
        //echo $this->request->getPost('txtPlanId');
        
        $datos=[
            'plan_id'=>$this->request->getPost('txtPlanId'),
            'nombre'=>$this->request->getPost('txtNombre'),
            'pago_mensual'=>$this->request->getPost('txtPagoMensual'),
            'cantidad_minutos'=>$this->request->getPost('txtMinutos'),
            'cantidad_mensajes'=>$this->request->getPost('txtMensajes')

        ];
        print_r($datos);
        $planes->insert($datos);
        return redirect()->route('ver_planes');

    }
    public function eliminarPlan($id=null){
        echo "codigo: ". $id;
        $plan = new PlanesModel();
        $plan->delete(['plan_id'=>$id]);
        return $this->index();
    }
    public function buscarPlan($id=null){
        //echo "codigo: ". $id;
        $plan = new PlanesModel();
        $datos['datos']=$plan->where(['plan_id'=>$id])->first();
        //print_r($datos);
        return view('form_modificar_plan',$datos);
    }
    public function modificarPlan(){
        $planes = new PlanesModel();
        //echo $this->request->getPost('txtPlanId');
        
        $datos=[
            'plan_id'=>$this->request->getPost('txtPlanId'),
            'nombre'=>$this->request->getPost('txtNombre'),
            'pago_mensual'=>$this->request->getPost('txtPagoMensual'),
            'cantidad_minutos'=>$this->request->getPost('txtMinutos'),
            'cantidad_mensajes'=>$this->request->getPost('txtMensajes')

        ];
        //print_r($datos);
        $planes->update($datos['plan_id'],$datos);
        return redirect()->route('ver_planes');       
    }
}