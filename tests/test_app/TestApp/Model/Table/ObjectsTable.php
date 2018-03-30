<?php
/**
 * Created by PhpStorm.
 * User: ngirardet
 * Date: 30.03.2018
 * Time: 13:44
 */

namespace Cake\Test\test_app\TestApp\Model\Table;


use Cake\ORM\Table;

class ObjectsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setDisplayField('code');
        $this->setPrimaryKey('id_object');
    }
}