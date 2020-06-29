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

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onLoad(): void
    {
        //check the composer vendor bundled version
        if (file_exists($this->getFile() . "vendor/")) {
            $this->getLogger()->notice("The composer vendor bundled version was detected.");
            require_once __DIR__ . "/../../../vendor/autoload.php";
        }
    }
}
