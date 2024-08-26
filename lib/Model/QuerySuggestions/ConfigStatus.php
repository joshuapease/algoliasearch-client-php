<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\QuerySuggestions;

use Algolia\AlgoliaSearch\Model\AbstractModel;

/**
 * ConfigStatus Class Doc Comment.
 *
 * @category Class
 */
class ConfigStatus extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'indexName' => 'string',
        'isRunning' => 'bool',
        'lastBuiltAt' => 'string',
        'lastSuccessfulBuiltAt' => 'string',
        'lastSuccessfulBuildDuration' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'indexName' => null,
        'isRunning' => null,
        'lastBuiltAt' => null,
        'lastSuccessfulBuiltAt' => null,
        'lastSuccessfulBuildDuration' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'indexName' => 'indexName',
        'isRunning' => 'isRunning',
        'lastBuiltAt' => 'lastBuiltAt',
        'lastSuccessfulBuiltAt' => 'lastSuccessfulBuiltAt',
        'lastSuccessfulBuildDuration' => 'lastSuccessfulBuildDuration',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'indexName' => 'setIndexName',
        'isRunning' => 'setIsRunning',
        'lastBuiltAt' => 'setLastBuiltAt',
        'lastSuccessfulBuiltAt' => 'setLastSuccessfulBuiltAt',
        'lastSuccessfulBuildDuration' => 'setLastSuccessfulBuildDuration',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'indexName' => 'getIndexName',
        'isRunning' => 'getIsRunning',
        'lastBuiltAt' => 'getLastBuiltAt',
        'lastSuccessfulBuiltAt' => 'getLastSuccessfulBuiltAt',
        'lastSuccessfulBuildDuration' => 'getLastSuccessfulBuildDuration',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(?array $data = null)
    {
        if (isset($data['indexName'])) {
            $this->container['indexName'] = $data['indexName'];
        }
        if (isset($data['isRunning'])) {
            $this->container['isRunning'] = $data['isRunning'];
        }
        if (isset($data['lastBuiltAt'])) {
            $this->container['lastBuiltAt'] = $data['lastBuiltAt'];
        }
        if (isset($data['lastSuccessfulBuiltAt'])) {
            $this->container['lastSuccessfulBuiltAt'] = $data['lastSuccessfulBuiltAt'];
        }
        if (isset($data['lastSuccessfulBuildDuration'])) {
            $this->container['lastSuccessfulBuildDuration'] = $data['lastSuccessfulBuildDuration'];
        }
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets indexName.
     *
     * @return null|string
     */
    public function getIndexName()
    {
        return $this->container['indexName'] ?? null;
    }

    /**
     * Sets indexName.
     *
     * @param null|string $indexName name of the Query Suggestions index (case-sensitive)
     *
     * @return self
     */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;

        return $this;
    }

    /**
     * Gets isRunning.
     *
     * @return null|bool
     */
    public function getIsRunning()
    {
        return $this->container['isRunning'] ?? null;
    }

    /**
     * Sets isRunning.
     *
     * @param null|bool $isRunning whether the creation or update of the Query Suggestions index is in progress
     *
     * @return self
     */
    public function setIsRunning($isRunning)
    {
        $this->container['isRunning'] = $isRunning;

        return $this;
    }

    /**
     * Gets lastBuiltAt.
     *
     * @return null|string
     */
    public function getLastBuiltAt()
    {
        return $this->container['lastBuiltAt'] ?? null;
    }

    /**
     * Sets lastBuiltAt.
     *
     * @param null|string $lastBuiltAt date and time when the Query Suggestions index was last built, in RFC 3339 format
     *
     * @return self
     */
    public function setLastBuiltAt($lastBuiltAt)
    {
        $this->container['lastBuiltAt'] = $lastBuiltAt;

        return $this;
    }

    /**
     * Gets lastSuccessfulBuiltAt.
     *
     * @return null|string
     */
    public function getLastSuccessfulBuiltAt()
    {
        return $this->container['lastSuccessfulBuiltAt'] ?? null;
    }

    /**
     * Sets lastSuccessfulBuiltAt.
     *
     * @param null|string $lastSuccessfulBuiltAt date and time when the Query Suggestions index was last updated successfully
     *
     * @return self
     */
    public function setLastSuccessfulBuiltAt($lastSuccessfulBuiltAt)
    {
        $this->container['lastSuccessfulBuiltAt'] = $lastSuccessfulBuiltAt;

        return $this;
    }

    /**
     * Gets lastSuccessfulBuildDuration.
     *
     * @return null|string
     */
    public function getLastSuccessfulBuildDuration()
    {
        return $this->container['lastSuccessfulBuildDuration'] ?? null;
    }

    /**
     * Sets lastSuccessfulBuildDuration.
     *
     * @param null|string $lastSuccessfulBuildDuration duration of the last successful build in seconds
     *
     * @return self
     */
    public function setLastSuccessfulBuildDuration($lastSuccessfulBuildDuration)
    {
        $this->container['lastSuccessfulBuildDuration'] = $lastSuccessfulBuildDuration;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }
}