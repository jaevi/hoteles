<?php

namespace Jaevi\HotelesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jaevi\HotelesBundle\Entity\HabitacionRepository")
 */
class Habitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="noPersonas", type="integer")
     */
    private $noPersonas;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @ORM\ManyToOne(targetEntity="Hotel", inversedBy="habitaciones")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     **/
    private $hotel;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Habitacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set noPersonas
     *
     * @param integer $noPersonas
     * @return Habitacion
     */
    public function setNoPersonas($noPersonas)
    {
        $this->noPersonas = $noPersonas;

        return $this;
    }

    /**
     * Get noPersonas
     *
     * @return integer 
     */
    public function getNoPersonas()
    {
        return $this->noPersonas;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Habitacion
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    
    public function getHotel() {
        return $this->hotel;
    }

    public function setHotel(Hotel $hotel) {
        $this->hotel = $hotel;
    }
}
