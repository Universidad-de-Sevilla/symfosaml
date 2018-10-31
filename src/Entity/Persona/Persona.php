<?php

namespace App\Entity\Persona;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Persona
 * @ORM\Entity
 * @ORM\Table(name="AA_personas")
 **/
class Persona
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="apellidos", type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(name="correo1", type="string", unique=TRUE)
     * @var string
     */
    private $correo1;

    /**
     * @ORM\Column(name="correo2", type="string")
     * @var string
     */
    private $correo2;

    /**
     * @ORM\Column(name="creado", type="datetime")
     * @var \DateTime
     */
    private $creado;

    /**
     * @ORM\Column(name="dni_sin_letra", type="string")
     * @var string
     */
    private $dni;

    /**
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=TRUE)
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(name="modificado", type="datetime", nullable=TRUE)
     * @var \DateTime
     */
    private $modificado;

    /**
     * @ORM\Column(name="nif", type="string")
     * @var string
     */
    private $nif;

    /**
     * @ORM\Column(name="nombre", type="string")
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(name="organizacion", type="string")
     * @var string
     */
    private $organizacion;

    /**
     * @ORM\Column(name="sexo", type="string")
     * @var string
     */
    private $sexo;

    /**
     * @ORM\Column(name="telefono_trabajo", type="string")
     * @var string
     */
    private $telefonoTrabajo;

    /**
     * @ORM\Column(name="telefono_domicilio", type="string")
     * @var string
     */
    private $telefonoDomicilio;

    /**
     * @ORM\Column(name="telefono_movil", type="string")
     * @var string
     */
    private $telefonoMovil;

    /**
     * @ORM\Column(name="usesrelacion", type="string")
     * @var string
     */
    private $usEsRelacion;

    /**
     * @ORM\Column(name="uvus", type="string")
     * @var string
     */
    private $uvus;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getCorreo1()
    {
        return $this->correo1;
    }

    /**
     * @param string $correo1
     */
    public function setCorreo1($correo1)
    {
        $this->correo1 = $correo1;
    }

    /**
     * @return string
     */
    public function getCorreo2()
    {
        return $this->correo2;
    }

    /**
     * @param string $correo2
     */
    public function setCorreo2($correo2)
    {
        $this->correo2 = $correo2;
    }

    /**
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * @param \DateTime $creado
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;
    }

    /**
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return \DateTime
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * @param \DateTime $modificado
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;
    }

    /**
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * @param string $nif
     */
    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }

    /**
     * @param string $organizacion
     */
    public function setOrganizacion($organizacion)
    {
        $this->organizacion = $organizacion;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return string
     */
    public function getTelefonoTrabajo()
    {
        return $this->telefonoTrabajo;
    }

    /**
     * @param string $telefonoTrabajo
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {
        $this->telefonoTrabajo = $telefonoTrabajo;
    }

    /**
     * @return string
     */
    public function getTelefonoDomicilio()
    {
        return $this->telefonoDomicilio;
    }

    /**
     * @param string $telefonoDomicilio
     */
    public function setTelefonoDomicilio($telefonoDomicilio)
    {
        $this->telefonoDomicilio = $telefonoDomicilio;
    }

    /**
     * @return string
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * @param string $telefonoMovil
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;
    }

    /**
     * @return string
     */
    public function getUsEsRelacion()
    {
        return $this->usEsRelacion;
    }

    /**
     * @param string $usEsRelacion
     */
    public function setUsEsRelacion($usEsRelacion)
    {
        $this->usEsRelacion = $usEsRelacion;
    }

    /**
     * @return string
     */
    public function getUvus()
    {
        return $this->uvus;
    }

    /**
     * @param string $uvus
     */
    public function setUvus($uvus)
    {
        $this->uvus = $uvus;
    }

}

