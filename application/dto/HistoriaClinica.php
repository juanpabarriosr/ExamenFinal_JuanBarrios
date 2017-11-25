<?php

class HistoriaClinica{
    
    private $id;
    private $fecha;
    private $historia;
    private $paciente;
    function HistoriaClinica()
    {}
    
    public function hasHistoria() {
        return !empty(trim($this->historia));
    }
            
    public function getId()
    {
        return $this->id;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getHistoria()
    {
        return $this->Historia;
    }
    public function getpaciente()
    {
        return $this->getpaciente;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function setHistoria($historia)
    {
        $this->historia = $historia;
    }
        public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }
    
        
}
?>