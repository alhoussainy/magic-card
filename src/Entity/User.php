<?php


namespace projetMagicCard\Entity;


class User
{

private  int $id;

private string $email;

private string $password;

private int $creation;

private array $cardlist;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getCreation(): int
    {
        return $this->creation;
    }

    /**
     * @param int $creation
     */
    public function setCreation(int $creation): void
    {
        $this->creation = $creation;
    }

    /**
     * @return array
     */
    public function getCardlist(): array
    {
        return $this->cardlist;
    }

    /**
     * @param array $cardlist
     */
    public function setCardlist(array $cardlist): void
    {
        $this->cardlist = $cardlist;
    }

    /**
     * User constructor.
     * affecter des valeurs aux attributs
     * inialisation l'etat de l'objet
     * elle peut avoir des arguments
     */
 public function __construct(){


 }





}