<?php

class Receta{

 private $id_receta;
 private $fecha_expedicion;
 private $fecha_vencimiento;
 public $paciente_ususario_cedula;

 public function __construct($id_receta, $fecha_expedicion, $fecha_vencimiento, $paciente_ususario_cedula){
    $this -> id_receta = $id_receta;
    $this -> fecha_expedicion = $fecha_expedicion;
    $this -> fecha_vencimiento = $fecha_vencimiento;
    $this -> paciente_ususario_cedula = $paciente_ususario_cedula;
 }
 
 public function getId_receta()
 {
  return $this->id_receta;
 }


 public function setId_receta($id_receta)
 {
  $this->id_receta = $id_receta;

  return $this;
 }

 
 public function getFecha_expedicion()
 {
  return $this->fecha_expedicion;
 }

 
 public function setFecha_expedicon($fecha_expedicion)
 {
  $this->fecha_expedicion = $fecha_expedicion;

  return $this;
 }

 
 public function getFecha_vencimiento()
 {
  return $this->fecha_vencimiento;
 }

 
 public function setFecha_vencimiento($fecha_vencimiento)
 {
  $this->fecha_vencimiento = $fecha_vencimiento;

  return $this;
 }


 public function getPaciente_ususario_cedula()
 {
  return $this->paciente_ususario_cedula;
 }

 
 public function setPaciente_ususario_cedula($paciente_ususario_cedula)
 {
  $this->paciente_ususario_cedula = $paciente_ususario_cedula;

  return $this;
 }
}