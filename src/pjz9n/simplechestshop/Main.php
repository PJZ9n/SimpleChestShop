<?php

/**
 * Copyright (c) 2020 PJZ9n.
 *
 * This file is part of SimpleChestShop.
 *
 * SimpleChestShop is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SimpleChestShop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SimpleChestShop. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace pjz9n\simplechestshop;

use Illuminate\Database\Capsule\Manager;
use Particle\Validator\Validator;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onLoad(): void
    {
        $this->loadLibrary(
            __DIR__ . "/../../../composer/illuminate/database/vendor/autoload.php",
            Manager::class
        );
        $this->loadLibrary(
            __DIR__ . "/../../../composer/particle/validator/vendor/autoload.php",
            Validator::class
        );
    }

    private function loadLibrary(string $autoloadPath, string $checkClass): void
    {
        $this->getLogger()->debug("Check class load: " . $checkClass);
        if (!class_exists($checkClass)) {
            $this->getLogger()->debug("Include composer autoloader: " . $autoloadPath);
            require_once $autoloadPath;
        } else {
            $this->getLogger()->debug("Already autoloaded.");
        }
    }
}
