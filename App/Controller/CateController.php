<?php


namespace App\Controller;


use App\Model\CateModel;

class CateController
{
    public $cateModel;

    public function __construct()
    {
        $this->cateModel = new CateModel();
    }

    function index()
    {
    }
}