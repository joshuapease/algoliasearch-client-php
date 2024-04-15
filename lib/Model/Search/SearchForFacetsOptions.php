<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * SearchForFacetsOptions Class Doc Comment.
 *
 * @category Class
 */
class SearchForFacetsOptions extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'facet' => 'string',
        'indexName' => 'string',
        'facetQuery' => 'string',
        'maxFacetHits' => 'int',
        'type' => '\Algolia\AlgoliaSearch\Model\Search\SearchTypeFacet',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'facet' => null,
        'indexName' => null,
        'facetQuery' => null,
        'maxFacetHits' => null,
        'type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'facet' => 'facet',
        'indexName' => 'indexName',
        'facetQuery' => 'facetQuery',
        'maxFacetHits' => 'maxFacetHits',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'facet' => 'setFacet',
        'indexName' => 'setIndexName',
        'facetQuery' => 'setFacetQuery',
        'maxFacetHits' => 'setMaxFacetHits',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'facet' => 'getFacet',
        'indexName' => 'getIndexName',
        'facetQuery' => 'getFacetQuery',
        'maxFacetHits' => 'getMaxFacetHits',
        'type' => 'getType',
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
    public function __construct(array $data = null)
    {
        if (isset($data['facet'])) {
            $this->container['facet'] = $data['facet'];
        }
        if (isset($data['indexName'])) {
            $this->container['indexName'] = $data['indexName'];
        }
        if (isset($data['facetQuery'])) {
            $this->container['facetQuery'] = $data['facetQuery'];
        }
        if (isset($data['maxFacetHits'])) {
            $this->container['maxFacetHits'] = $data['maxFacetHits'];
        }
        if (isset($data['type'])) {
            $this->container['type'] = $data['type'];
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

        if (!isset($this->container['facet']) || null === $this->container['facet']) {
            $invalidProperties[] = "'facet' can't be null";
        }
        if (!isset($this->container['indexName']) || null === $this->container['indexName']) {
            $invalidProperties[] = "'indexName' can't be null";
        }
        if (isset($this->container['maxFacetHits']) && ($this->container['maxFacetHits'] > 100)) {
            $invalidProperties[] = "invalid value for 'maxFacetHits', must be smaller than or equal to 100.";
        }

        if (!isset($this->container['type']) || null === $this->container['type']) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets facet.
     *
     * @return string
     */
    public function getFacet()
    {
        return $this->container['facet'] ?? null;
    }

    /**
     * Sets facet.
     *
     * @param string $facet facet name
     *
     * @return self
     */
    public function setFacet($facet)
    {
        $this->container['facet'] = $facet;

        return $this;
    }

    /**
     * Gets indexName.
     *
     * @return string
     */
    public function getIndexName()
    {
        return $this->container['indexName'] ?? null;
    }

    /**
     * Sets indexName.
     *
     * @param string $indexName index name (case-sensitive)
     *
     * @return self
     */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;

        return $this;
    }

    /**
     * Gets facetQuery.
     *
     * @return null|string
     */
    public function getFacetQuery()
    {
        return $this->container['facetQuery'] ?? null;
    }

    /**
     * Sets facetQuery.
     *
     * @param null|string $facetQuery text to search inside the facet's values
     *
     * @return self
     */
    public function setFacetQuery($facetQuery)
    {
        $this->container['facetQuery'] = $facetQuery;

        return $this;
    }

    /**
     * Gets maxFacetHits.
     *
     * @return null|int
     */
    public function getMaxFacetHits()
    {
        return $this->container['maxFacetHits'] ?? null;
    }

    /**
     * Sets maxFacetHits.
     *
     * @param null|int $maxFacetHits Maximum number of facet values to return when [searching for facet values](https://www.algolia.com/doc/guides/managing-results/refine-results/faceting/#search-for-facet-values).
     *
     * @return self
     */
    public function setMaxFacetHits($maxFacetHits)
    {
        if (!is_null($maxFacetHits) && ($maxFacetHits > 100)) {
            throw new \InvalidArgumentException('invalid value for $maxFacetHits when calling SearchForFacetsOptions., must be smaller than or equal to 100.');
        }

        $this->container['maxFacetHits'] = $maxFacetHits;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return \Algolia\AlgoliaSearch\Model\Search\SearchTypeFacet
     */
    public function getType()
    {
        return $this->container['type'] ?? null;
    }

    /**
     * Sets type.
     *
     * @param \Algolia\AlgoliaSearch\Model\Search\SearchTypeFacet $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
