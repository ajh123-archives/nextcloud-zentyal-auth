<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Samuel Hulme <samrosoft36@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ZentyalAuthBackend;

use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

/**
 * Settings section for the administration page
 */
class AdminSection implements IIconSection {

    /** @var IURLGenerator */
    private $urlGenerator;

    /**
     * @param IURLGenerator $urlGenerator - url generator service
     */
    public function __construct(IURLGenerator $urlGenerator) {
        $this->urlGenerator = $urlGenerator;
    }


    /**
     * Path to an 16*16 icons
     *
     * @return strings
     */
    public function getIcon() {
        return $this->urlGenerator->imagePath("zentyalauthbackend", "app.svg");
    }

    /**
     * ID of the section
     *
     * @returns string
     */
    public function getID() {
        return "zentyal";
    }

    /**
     * Name of the section
     *
     * @return string
     */
    public function getName() {
        return "Zentyal Auth Backend";
    }

    /**
     * Get priority order
     *
     * @return int
     */
    public function getPriority() {
        return 25;
    }
}