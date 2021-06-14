<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Borad extends Entity
{
    protected $_accessible =[
        '*' => true,
        'id' => false
    ]; 
}