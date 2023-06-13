<?php
namespace App\Http\Models;

use Lubed\Data\AbstractModel;

class UserModel extends AbstractModel {
    public function deleteBy(array $where) {
        // TODO: Implement deleteBy() method.
    }

    public function findAll():array {
        $sql = 'SELECT * FROM sys_user';
        $result = $this->execute($sql);
        return $result->fetchAll();
    }

    public function findBy(array $where, string $order_by='', int $page=1, int $page_size=20) {
        // TODO: Implement findBy() method.
    }

    public function findOne() {
        // TODO: Implement findOne() method.
    }

    public function save(array $data) {
        // TODO: Implement save() method.
    }
}