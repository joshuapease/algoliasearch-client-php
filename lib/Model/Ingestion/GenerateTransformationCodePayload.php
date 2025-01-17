<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Ingestion;

use Algolia\AlgoliaSearch\Model\AbstractModel;

/**
 * GenerateTransformationCodePayload Class Doc Comment.
 *
 * @category Class
 */
class GenerateTransformationCodePayload extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'id' => 'string',
        'systemPrompt' => 'string',
        'userPrompt' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'id' => null,
        'systemPrompt' => null,
        'userPrompt' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'systemPrompt' => 'systemPrompt',
        'userPrompt' => 'userPrompt',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'systemPrompt' => 'setSystemPrompt',
        'userPrompt' => 'setUserPrompt',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'systemPrompt' => 'getSystemPrompt',
        'userPrompt' => 'getUserPrompt',
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
        if (isset($data['id'])) {
            $this->container['id'] = $data['id'];
        }
        if (isset($data['systemPrompt'])) {
            $this->container['systemPrompt'] = $data['systemPrompt'];
        }
        if (isset($data['userPrompt'])) {
            $this->container['userPrompt'] = $data['userPrompt'];
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

        if (!isset($this->container['id']) || null === $this->container['id']) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!isset($this->container['userPrompt']) || null === $this->container['userPrompt']) {
            $invalidProperties[] = "'userPrompt' can't be null";
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
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'] ?? null;
    }

    /**
     * Sets id.
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets systemPrompt.
     *
     * @return null|string
     */
    public function getSystemPrompt()
    {
        return $this->container['systemPrompt'] ?? null;
    }

    /**
     * Sets systemPrompt.
     *
     * @param null|string $systemPrompt systemPrompt
     *
     * @return self
     */
    public function setSystemPrompt($systemPrompt)
    {
        $this->container['systemPrompt'] = $systemPrompt;

        return $this;
    }

    /**
     * Gets userPrompt.
     *
     * @return string
     */
    public function getUserPrompt()
    {
        return $this->container['userPrompt'] ?? null;
    }

    /**
     * Sets userPrompt.
     *
     * @param string $userPrompt userPrompt
     *
     * @return self
     */
    public function setUserPrompt($userPrompt)
    {
        $this->container['userPrompt'] = $userPrompt;

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
