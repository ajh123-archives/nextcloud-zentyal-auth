<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'zentyalauthbackend';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
