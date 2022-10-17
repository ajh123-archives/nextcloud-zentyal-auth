<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend;

use OCP\Settings\ISettings;
use OCP\AppFramework\Http\TemplateResponse;

/**
 * Settings controller for the administration page
 */
class AdminSettings implements ISettings {

    public function __construct() {
    }

	/**
	 * @return TemplateResponse
	 */
	public function getForm() {
        $parameters = [];
		return new TemplateResponse('zentyalauthbackend', 'settings', $parameters);
	}

    /**
     * Get section ID
     *
     * @return string
     */
    public function getSection() {
        return "zentyal";
    }

    /**
     * Get priority order
     *
     * @return int
     */
    public function getPriority() {
        return 5;
    }
}