<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend\Db;

use OCP\IDBConnection;
use OCP\AppFramework\Db\QBMapper;

class ServerMapper extends QBMapper {

    public function __construct(IDBConnection $db) {
        parent::__construct($db, 'zentyalab_servers', Server::class);
    }

    public function find(int $id) {
        $qb = $this->db->getQueryBuilder();

        $qb->select('*')
        ->from($this->getTableName())
        ->where(
                $qb->expr()->eq('id', $qb->createNamedParameter($id))
        );

        return $this->findEntity($qb);
    }

    public function findAll() {
        $qb = $this->db->getQueryBuilder();

        $qb->select('*')
        ->from($this->getTableName());

        return $this->findEntities($qb);
    }

}