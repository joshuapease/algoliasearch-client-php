<?php

namespace Algolia\AlgoliaSearch\Model\Abtesting;

/**
 * CustomSearchParams Class Doc Comment
 *
 * @category Class
 * @package Algolia\AlgoliaSearch
 */
class CustomSearchParams extends \Algolia\AlgoliaSearch\Model\AbstractModel implements
        ModelInterface,
        \ArrayAccess,
        \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'customSearchParameters' => 'object',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'customSearchParameters' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customSearchParameters' => 'setCustomSearchParameters',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customSearchParameters' => 'getCustomSearchParameters',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(array $data = null)
    {
        if (isset($data['customSearchParameters'])) {
            $this->container['customSearchParameters'] =
                $data['customSearchParameters'];
        }
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (
            !isset($this->container['customSearchParameters']) ||
            $this->container['customSearchParameters'] === null
        ) {
            $invalidProperties[] = "'customSearchParameters' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets customSearchParameters
     *
     * @return object
     */
    public function getCustomSearchParameters()
    {
        return $this->container['customSearchParameters'] ?? null;
    }

    /**
     * Sets customSearchParameters
     *
     * @param object $customSearchParameters customSearchParameters
     *
     * @return self
     */
    public function setCustomSearchParameters($customSearchParameters)
    {
        $this->container['customSearchParameters'] = $customSearchParameters;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
