<?php
class Alumno
{
    private $nombre;
    private $email;
    private $curso;
    private $ciclo;
    private $emancipado;

    function __construct(
        $nombre,
        $email,
        $curso,
        $ciclo,
        $emancipado = "no"
    ) {

        $this->nombre = $nombre;
        $this->email = $email;
        $this->curso = $curso;
        $this->ciclo = $ciclo;
        $this->emancipado = $emancipado;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }




    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }



    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }



    public function getCiclo()
    {
        return $this->ciclo;
    }
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }



    public function getEmancipado()
    {
        return $this->emancipado;
    }
    public function setEmancipado($emancipado)
    {
        $this->emancipado = $emancipado;
    }


    function __toString()
    {
        return $this->nombre;
    }
}
