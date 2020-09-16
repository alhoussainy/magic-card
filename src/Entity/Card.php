<?php


namespace projetMagicCard\Entity;


class Card
{
    private $id;
    private $name;
    private $manaCost;
    private $type;
    private string $description;
    private string $image;
    private array $colorlist;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getManaCost()
    {
        return $this->manaCost;
    }

    /**
     * @param mixed $manaCost
     */
    public function setManaCost($manaCost): void
    {
        $this->manaCost = $manaCost;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return array
     */
    public function getColorlist(): array
    {
        return $this->colorlist;
    }

    /**
     * @param array $colorlist
     */
    public function setColorlist(array $colorlist): void
    {
        $this->colorlist = $colorlist;
    }



}