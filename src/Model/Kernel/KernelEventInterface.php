<?php


namespace App\Model\Kernel;


interface KernelEventInterface
{
    /**
     *Permet le chargement d'élément dans le Kernel
     */
    public function load(): void;

}