<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Personalization;

use Algolia\AlgoliaSearch\Model\AbstractModel;

/**
 * PersonalizationStrategyParams Class Doc Comment.
 *
 * @category Class
 */
class PersonalizationStrategyParams extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'eventScoring' => '\Algolia\AlgoliaSearch\Model\Personalization\EventScoring[]',
        'facetScoring' => '\Algolia\AlgoliaSearch\Model\Personalization\FacetScoring[]',
        'personalizationImpact' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'eventScoring' => null,
        'facetScoring' => null,
        'personalizationImpact' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eventScoring' => 'eventScoring',
        'facetScoring' => 'facetScoring',
        'personalizationImpact' => 'personalizationImpact',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'eventScoring' => 'setEventScoring',
        'facetScoring' => 'setFacetScoring',
        'personalizationImpact' => 'setPersonalizationImpact',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'eventScoring' => 'getEventScoring',
        'facetScoring' => 'getFacetScoring',
        'personalizationImpact' => 'getPersonalizationImpact',
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
        if (isset($data['eventScoring'])) {
            $this->container['eventScoring'] = $data['eventScoring'];
        }
        if (isset($data['facetScoring'])) {
            $this->container['facetScoring'] = $data['facetScoring'];
        }
        if (isset($data['personalizationImpact'])) {
            $this->container['personalizationImpact'] = $data['personalizationImpact'];
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

        if (!isset($this->container['eventScoring']) || null === $this->container['eventScoring']) {
            $invalidProperties[] = "'eventScoring' can't be null";
        }
        if (!isset($this->container['facetScoring']) || null === $this->container['facetScoring']) {
            $invalidProperties[] = "'facetScoring' can't be null";
        }
        if (!isset($this->container['personalizationImpact']) || null === $this->container['personalizationImpact']) {
            $invalidProperties[] = "'personalizationImpact' can't be null";
        }
        if ($this->container['personalizationImpact'] > 100) {
            $invalidProperties[] = "invalid value for 'personalizationImpact', must be smaller than or equal to 100.";
        }

        if ($this->container['personalizationImpact'] < 0) {
            $invalidProperties[] = "invalid value for 'personalizationImpact', must be bigger than or equal to 0.";
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
     * Gets eventScoring.
     *
     * @return \Algolia\AlgoliaSearch\Model\Personalization\EventScoring[]
     */
    public function getEventScoring()
    {
        return $this->container['eventScoring'] ?? null;
    }

    /**
     * Sets eventScoring.
     *
     * @param \Algolia\AlgoliaSearch\Model\Personalization\EventScoring[] $eventScoring Scores associated with each event.  The higher the scores, the higher the impact of those events on the personalization of search results.
     *
     * @return self
     */
    public function setEventScoring($eventScoring)
    {
        $this->container['eventScoring'] = $eventScoring;

        return $this;
    }

    /**
     * Gets facetScoring.
     *
     * @return \Algolia\AlgoliaSearch\Model\Personalization\FacetScoring[]
     */
    public function getFacetScoring()
    {
        return $this->container['facetScoring'] ?? null;
    }

    /**
     * Sets facetScoring.
     *
     * @param \Algolia\AlgoliaSearch\Model\Personalization\FacetScoring[] $facetScoring Scores associated with each facet.  The higher the scores, the higher the impact of those events on the personalization of search results.
     *
     * @return self
     */
    public function setFacetScoring($facetScoring)
    {
        $this->container['facetScoring'] = $facetScoring;

        return $this;
    }

    /**
     * Gets personalizationImpact.
     *
     * @return int
     */
    public function getPersonalizationImpact()
    {
        return $this->container['personalizationImpact'] ?? null;
    }

    /**
     * Sets personalizationImpact.
     *
     * @param int $personalizationImpact Impact of personalization on the search results.  If set to 0, personalization has no impact on the search results.
     *
     * @return self
     */
    public function setPersonalizationImpact($personalizationImpact)
    {
        if ($personalizationImpact > 100) {
            throw new \InvalidArgumentException('invalid value for $personalizationImpact when calling PersonalizationStrategyParams., must be smaller than or equal to 100.');
        }
        if ($personalizationImpact < 0) {
            throw new \InvalidArgumentException('invalid value for $personalizationImpact when calling PersonalizationStrategyParams., must be bigger than or equal to 0.');
        }

        $this->container['personalizationImpact'] = $personalizationImpact;

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
