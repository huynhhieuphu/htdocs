<?php
namespace Src\Model;

if (!defined('ADMIN_PATH')) {
    die('Can not access');
}

use Src\Config\Database;
use \PDO;

class Customer extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}