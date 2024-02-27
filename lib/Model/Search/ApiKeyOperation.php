<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * ApiKeyOperation Class Doc Comment.
 *
 * @category Class
 */
class ApiKeyOperation
{
    /**
     * Possible values of this enum.
     */
    public const ADD = 'add';

    public const DELETE = 'delete';

    public const UPDATE = 'update';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADD,
            self::DELETE,
            self::UPDATE,
        ];
    }
}