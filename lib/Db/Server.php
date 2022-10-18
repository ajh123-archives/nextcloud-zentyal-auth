<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend\Db;

use JsonSerializable;

use OCP\AppFramework\Db\Entity;

class Server extends Entity implements JsonSerializable {

    protected $title;
    protected $server_addr;
    protected $realm;
    protected $base_dn;

    public function __construct() {
        $this->addType('id','integer');
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'server_addr' => $this->server_addr,
            'realm' => $this->realm,
            'base_dn' => $this->base_dn
        ];
    }
}