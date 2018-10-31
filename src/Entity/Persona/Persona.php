<?php

namespace App\Entity\Persona;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="AA_personas")
 **/
class Persona implements UserInterface
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
    private $correo;

    /**
     * @ORM\Column(name="dni_sin_letra", type="string")
     * @var string
     */
    private $dni;

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
     * @ORM\Column(name="telefono_trabajo", type="string")
     * @var string
     */
    private $telefonoTrabajo;

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
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
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

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return array('ROLE_USER');
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return array()
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return null;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->getUvus();
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
