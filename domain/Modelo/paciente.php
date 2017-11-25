<?php

class Paciente
{
    private $id;
    private $apellido;
    private $nombre;
    private $historiaClinica;

    function Paciente()
    {}
    
    public function getFullNombre() {
        return $this->apellido .", ".$this->nombre;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getHistoriaClinica()
    {
        return $this->historiaClinica;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setHistoriaClinica($historiaClinica)
    {
        $this->historiaClinica = $historiaClinica;
    }
  
    
}
