<?php
namespace App\Model;

interface Model_Interface
{
    public function getAll();
    public function getById($id);
}