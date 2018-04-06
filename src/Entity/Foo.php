<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Foo.
 *
 * @ORM\Entity
 */
class Foo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $bar;

    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getBar() : ?string
    {
        return $this->bar;
    }

    /**
     * @param string $bar
     *
     * @return $this
     */
    public function setBar(string $bar) : self
    {
        $this->bar = $bar;

        return $this;
    }
}
