<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\SimpleMigrationStep;
use OCP\Migration\IOutput;

class Version000002Date20221017193000 extends SimpleMigrationStep {

    /**
    * @param IOutput $output
    * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
    * @param array $options
    * @return null|ISchemaWrapper
    */
    public function changeSchema(IOutput $output, Closure $schemaClosure, array $options) {
        /** @var ISchemaWrapper $schema */
        $schema = $schemaClosure();

        if (!$schema->hasTable('zentyalab_servers')) {
            $table = $schema->createTable('zentyalab_servers');
            $table->addColumn('id', 'integer', [
                'autoincrement' => true,
                'notnull' => true,
            ]);
            $table->addColumn('server_addr', 'text', [
                'notnull' => true,
                'default' => ''
            ]);
            $table->addColumn('realm', 'text', [
                'notnull' => true,
                'default' => ''
            ]);
            $table->addColumn('base_dn', 'text', [
                'notnull' => true,
                'default' => ''
            ]);

            $table->setPrimaryKey(['id']);
        }
        return $schema;
    }
}