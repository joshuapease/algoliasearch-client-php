<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Usage;

/**
 * Granularity Class Doc Comment.
 *
 * @category Class
 */
class Granularity
{
    /**
     * Possible values of this enum.
     */
    public const HOURLY = 'hourly';

    public const DAILY = 'daily';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOURLY,
            self::DAILY,
        ];
    }
}