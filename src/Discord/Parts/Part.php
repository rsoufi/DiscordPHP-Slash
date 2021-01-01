<?php

/*
 * This file is a part of the DiscordPHP-Slash project.
 *
 * Copyright (c) 2020-present David Cole <david.cole1340@gmail.com>
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this source code in the LICENSE.md file.
 */

namespace Discord\Slash\Parts;

use JsonSerializable;

/**
 * Represents a part in the Discord servers.
 *
 * @author David Cole <david.cole1340@gmail.com>
 */
class Part implements JsonSerializable
{
    /**
     * Array of attributes.
     *
     * @var array
     */
    protected $attributes;

    /**
     * Part constructor.
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        $this->attributes = (array) $attributes;
    }

    /**
     * Returns the parts attributes.
     *
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Gets an attribute from the part.
     *
     * @param string $key
     */
    public function __get(string $key)
    {
        return $this->attributes[$key] ?? null;
    }

    /**
     * Sets an attribute in the part.
     *
     * @param string $key
     * @param mixed  $value
     */
    public function __set(string $key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function jsonSerialize()
    {
        return $this->attributes;
    }
}
