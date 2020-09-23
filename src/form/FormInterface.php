<?php


namespace projetMagicCard\form;


interface FormInterface
{
    /**
     * permet de valider les formulaires ainsi
     *gestion des erreurs
     *
     * @return mixed
     */
    public function validationForm();

    /**
     * permet d'inserer les donné saisis et q
     * @return mixed
     */

    public function insertForm();


}