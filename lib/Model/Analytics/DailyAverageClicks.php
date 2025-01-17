<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Analytics;

use Algolia\AlgoliaSearch\Model\AbstractModel;

/**
 * DailyAverageClicks Class Doc Comment.
 *
 * @category Class
 */
class DailyAverageClicks extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'average' => 'float',
        'clickCount' => 'int',
        'date' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'average' => 'double',
        'clickCount' => null,
        'date' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'average' => 'average',
        'clickCount' => 'clickCount',
        'date' => 'date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'average' => 'setAverage',
        'clickCount' => 'setClickCount',
        'date' => 'setDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'average' => 'getAverage',
        'clickCount' => 'getClickCount',
        'date' => 'getDate',
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
        if (isset($data['average'])) {
            $this->container['average'] = $data['average'];
        }
        if (isset($data['clickCount'])) {
            $this->container['clickCount'] = $data['clickCount'];
        }
        if (isset($data['date'])) {
            $this->container['date'] = $data['date'];
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
        $invalidProperties = [];

        if (!isset($this->container['average']) || null === $this->container['average']) {
            $invalidProperties[] = "'average' can't be null";
        }
        if ($this->container['average'] < 1) {
            $invalidProperties[] = "invalid value for 'average', must be bigger than or equal to 1.";
        }

        if (!isset($this->container['clickCount']) || null === $this->container['clickCount']) {
            $invalidProperties[] = "'clickCount' can't be null";
        }
        if ($this->container['clickCount'] < 0) {
            $invalidProperties[] = "invalid value for 'clickCount', must be bigger than or equal to 0.";
        }

        if (!isset($this->container['date']) || null === $this->container['date']) {
            $invalidProperties[] = "'date' can't be null";
        }

        return $invalidProperties;
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
     * Gets average.
     *
     * @return float
     */
    public function getAverage()
    {
        return $this->container['average'] ?? null;
    }

    /**
     * Sets average.
     *
     * @param float $average Average position of a clicked search result in the list of search results. If null, Algolia didn't receive any search requests with `clickAnalytics` set to true.
     *
     * @return self
     */
    public function setAverage($average)
    {
        if ($average < 1) {
            throw new \InvalidArgumentException('invalid value for $average when calling DailyAverageClicks., must be bigger than or equal to 1.');
        }

        $this->container['average'] = $average;

        return $this;
    }

    /**
     * Gets clickCount.
     *
     * @return int
     */
    public function getClickCount()
    {
        return $this->container['clickCount'] ?? null;
    }

    /**
     * Sets clickCount.
     *
     * @param int $clickCount number of clicks associated with this search
     *
     * @return self
     */
    public function setClickCount($clickCount)
    {
        if ($clickCount < 0) {
            throw new \InvalidArgumentException('invalid value for $clickCount when calling DailyAverageClicks., must be bigger than or equal to 0.');
        }

        $this->container['clickCount'] = $clickCount;

        return $this;
    }

    /**
     * Gets date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'] ?? null;
    }

    /**
     * Sets date.
     *
     * @param string $date date in the format YYYY-MM-DD
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
