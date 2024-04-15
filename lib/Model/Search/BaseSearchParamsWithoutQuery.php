<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * BaseSearchParamsWithoutQuery Class Doc Comment.
 *
 * @category Class
 */
class BaseSearchParamsWithoutQuery extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'similarQuery' => 'string',
        'filters' => 'string',
        'facetFilters' => '\Algolia\AlgoliaSearch\Model\Search\FacetFilters',
        'optionalFilters' => '\Algolia\AlgoliaSearch\Model\Search\OptionalFilters',
        'numericFilters' => '\Algolia\AlgoliaSearch\Model\Search\NumericFilters',
        'tagFilters' => '\Algolia\AlgoliaSearch\Model\Search\TagFilters',
        'sumOrFiltersScores' => 'bool',
        'restrictSearchableAttributes' => 'string[]',
        'facets' => 'string[]',
        'facetingAfterDistinct' => 'bool',
        'page' => 'int',
        'offset' => 'int',
        'length' => 'int',
        'aroundLatLng' => 'string',
        'aroundLatLngViaIP' => 'bool',
        'aroundRadius' => '\Algolia\AlgoliaSearch\Model\Search\AroundRadius',
        'aroundPrecision' => '\Algolia\AlgoliaSearch\Model\Search\AroundPrecision',
        'minimumAroundRadius' => 'int',
        'insideBoundingBox' => 'float[][]',
        'insidePolygon' => 'float[][]',
        'naturalLanguages' => '\Algolia\AlgoliaSearch\Model\Search\SupportedLanguage[]',
        'ruleContexts' => 'string[]',
        'personalizationImpact' => 'int',
        'userToken' => 'string',
        'getRankingInfo' => 'bool',
        'synonyms' => 'bool',
        'clickAnalytics' => 'bool',
        'analytics' => 'bool',
        'analyticsTags' => 'string[]',
        'percentileComputation' => 'bool',
        'enableABTest' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'similarQuery' => null,
        'filters' => null,
        'facetFilters' => null,
        'optionalFilters' => null,
        'numericFilters' => null,
        'tagFilters' => null,
        'sumOrFiltersScores' => null,
        'restrictSearchableAttributes' => null,
        'facets' => null,
        'facetingAfterDistinct' => null,
        'page' => null,
        'offset' => null,
        'length' => null,
        'aroundLatLng' => null,
        'aroundLatLngViaIP' => null,
        'aroundRadius' => null,
        'aroundPrecision' => null,
        'minimumAroundRadius' => null,
        'insideBoundingBox' => 'double',
        'insidePolygon' => 'double',
        'naturalLanguages' => null,
        'ruleContexts' => null,
        'personalizationImpact' => null,
        'userToken' => null,
        'getRankingInfo' => null,
        'synonyms' => null,
        'clickAnalytics' => null,
        'analytics' => null,
        'analyticsTags' => null,
        'percentileComputation' => null,
        'enableABTest' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'similarQuery' => 'similarQuery',
        'filters' => 'filters',
        'facetFilters' => 'facetFilters',
        'optionalFilters' => 'optionalFilters',
        'numericFilters' => 'numericFilters',
        'tagFilters' => 'tagFilters',
        'sumOrFiltersScores' => 'sumOrFiltersScores',
        'restrictSearchableAttributes' => 'restrictSearchableAttributes',
        'facets' => 'facets',
        'facetingAfterDistinct' => 'facetingAfterDistinct',
        'page' => 'page',
        'offset' => 'offset',
        'length' => 'length',
        'aroundLatLng' => 'aroundLatLng',
        'aroundLatLngViaIP' => 'aroundLatLngViaIP',
        'aroundRadius' => 'aroundRadius',
        'aroundPrecision' => 'aroundPrecision',
        'minimumAroundRadius' => 'minimumAroundRadius',
        'insideBoundingBox' => 'insideBoundingBox',
        'insidePolygon' => 'insidePolygon',
        'naturalLanguages' => 'naturalLanguages',
        'ruleContexts' => 'ruleContexts',
        'personalizationImpact' => 'personalizationImpact',
        'userToken' => 'userToken',
        'getRankingInfo' => 'getRankingInfo',
        'synonyms' => 'synonyms',
        'clickAnalytics' => 'clickAnalytics',
        'analytics' => 'analytics',
        'analyticsTags' => 'analyticsTags',
        'percentileComputation' => 'percentileComputation',
        'enableABTest' => 'enableABTest',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'similarQuery' => 'setSimilarQuery',
        'filters' => 'setFilters',
        'facetFilters' => 'setFacetFilters',
        'optionalFilters' => 'setOptionalFilters',
        'numericFilters' => 'setNumericFilters',
        'tagFilters' => 'setTagFilters',
        'sumOrFiltersScores' => 'setSumOrFiltersScores',
        'restrictSearchableAttributes' => 'setRestrictSearchableAttributes',
        'facets' => 'setFacets',
        'facetingAfterDistinct' => 'setFacetingAfterDistinct',
        'page' => 'setPage',
        'offset' => 'setOffset',
        'length' => 'setLength',
        'aroundLatLng' => 'setAroundLatLng',
        'aroundLatLngViaIP' => 'setAroundLatLngViaIP',
        'aroundRadius' => 'setAroundRadius',
        'aroundPrecision' => 'setAroundPrecision',
        'minimumAroundRadius' => 'setMinimumAroundRadius',
        'insideBoundingBox' => 'setInsideBoundingBox',
        'insidePolygon' => 'setInsidePolygon',
        'naturalLanguages' => 'setNaturalLanguages',
        'ruleContexts' => 'setRuleContexts',
        'personalizationImpact' => 'setPersonalizationImpact',
        'userToken' => 'setUserToken',
        'getRankingInfo' => 'setGetRankingInfo',
        'synonyms' => 'setSynonyms',
        'clickAnalytics' => 'setClickAnalytics',
        'analytics' => 'setAnalytics',
        'analyticsTags' => 'setAnalyticsTags',
        'percentileComputation' => 'setPercentileComputation',
        'enableABTest' => 'setEnableABTest',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'similarQuery' => 'getSimilarQuery',
        'filters' => 'getFilters',
        'facetFilters' => 'getFacetFilters',
        'optionalFilters' => 'getOptionalFilters',
        'numericFilters' => 'getNumericFilters',
        'tagFilters' => 'getTagFilters',
        'sumOrFiltersScores' => 'getSumOrFiltersScores',
        'restrictSearchableAttributes' => 'getRestrictSearchableAttributes',
        'facets' => 'getFacets',
        'facetingAfterDistinct' => 'getFacetingAfterDistinct',
        'page' => 'getPage',
        'offset' => 'getOffset',
        'length' => 'getLength',
        'aroundLatLng' => 'getAroundLatLng',
        'aroundLatLngViaIP' => 'getAroundLatLngViaIP',
        'aroundRadius' => 'getAroundRadius',
        'aroundPrecision' => 'getAroundPrecision',
        'minimumAroundRadius' => 'getMinimumAroundRadius',
        'insideBoundingBox' => 'getInsideBoundingBox',
        'insidePolygon' => 'getInsidePolygon',
        'naturalLanguages' => 'getNaturalLanguages',
        'ruleContexts' => 'getRuleContexts',
        'personalizationImpact' => 'getPersonalizationImpact',
        'userToken' => 'getUserToken',
        'getRankingInfo' => 'getGetRankingInfo',
        'synonyms' => 'getSynonyms',
        'clickAnalytics' => 'getClickAnalytics',
        'analytics' => 'getAnalytics',
        'analyticsTags' => 'getAnalyticsTags',
        'percentileComputation' => 'getPercentileComputation',
        'enableABTest' => 'getEnableABTest',
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
        if (isset($data['similarQuery'])) {
            $this->container['similarQuery'] = $data['similarQuery'];
        }
        if (isset($data['filters'])) {
            $this->container['filters'] = $data['filters'];
        }
        if (isset($data['facetFilters'])) {
            $this->container['facetFilters'] = $data['facetFilters'];
        }
        if (isset($data['optionalFilters'])) {
            $this->container['optionalFilters'] = $data['optionalFilters'];
        }
        if (isset($data['numericFilters'])) {
            $this->container['numericFilters'] = $data['numericFilters'];
        }
        if (isset($data['tagFilters'])) {
            $this->container['tagFilters'] = $data['tagFilters'];
        }
        if (isset($data['sumOrFiltersScores'])) {
            $this->container['sumOrFiltersScores'] = $data['sumOrFiltersScores'];
        }
        if (isset($data['restrictSearchableAttributes'])) {
            $this->container['restrictSearchableAttributes'] = $data['restrictSearchableAttributes'];
        }
        if (isset($data['facets'])) {
            $this->container['facets'] = $data['facets'];
        }
        if (isset($data['facetingAfterDistinct'])) {
            $this->container['facetingAfterDistinct'] = $data['facetingAfterDistinct'];
        }
        if (isset($data['page'])) {
            $this->container['page'] = $data['page'];
        }
        if (isset($data['offset'])) {
            $this->container['offset'] = $data['offset'];
        }
        if (isset($data['length'])) {
            $this->container['length'] = $data['length'];
        }
        if (isset($data['aroundLatLng'])) {
            $this->container['aroundLatLng'] = $data['aroundLatLng'];
        }
        if (isset($data['aroundLatLngViaIP'])) {
            $this->container['aroundLatLngViaIP'] = $data['aroundLatLngViaIP'];
        }
        if (isset($data['aroundRadius'])) {
            $this->container['aroundRadius'] = $data['aroundRadius'];
        }
        if (isset($data['aroundPrecision'])) {
            $this->container['aroundPrecision'] = $data['aroundPrecision'];
        }
        if (isset($data['minimumAroundRadius'])) {
            $this->container['minimumAroundRadius'] = $data['minimumAroundRadius'];
        }
        if (isset($data['insideBoundingBox'])) {
            $this->container['insideBoundingBox'] = $data['insideBoundingBox'];
        }
        if (isset($data['insidePolygon'])) {
            $this->container['insidePolygon'] = $data['insidePolygon'];
        }
        if (isset($data['naturalLanguages'])) {
            $this->container['naturalLanguages'] = $data['naturalLanguages'];
        }
        if (isset($data['ruleContexts'])) {
            $this->container['ruleContexts'] = $data['ruleContexts'];
        }
        if (isset($data['personalizationImpact'])) {
            $this->container['personalizationImpact'] = $data['personalizationImpact'];
        }
        if (isset($data['userToken'])) {
            $this->container['userToken'] = $data['userToken'];
        }
        if (isset($data['getRankingInfo'])) {
            $this->container['getRankingInfo'] = $data['getRankingInfo'];
        }
        if (isset($data['synonyms'])) {
            $this->container['synonyms'] = $data['synonyms'];
        }
        if (isset($data['clickAnalytics'])) {
            $this->container['clickAnalytics'] = $data['clickAnalytics'];
        }
        if (isset($data['analytics'])) {
            $this->container['analytics'] = $data['analytics'];
        }
        if (isset($data['analyticsTags'])) {
            $this->container['analyticsTags'] = $data['analyticsTags'];
        }
        if (isset($data['percentileComputation'])) {
            $this->container['percentileComputation'] = $data['percentileComputation'];
        }
        if (isset($data['enableABTest'])) {
            $this->container['enableABTest'] = $data['enableABTest'];
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

        if (isset($this->container['page']) && ($this->container['page'] < 0)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
        }

        if (isset($this->container['length']) && ($this->container['length'] > 1000)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 1000.";
        }

        if (isset($this->container['length']) && ($this->container['length'] < 1)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 1.";
        }

        if (isset($this->container['minimumAroundRadius']) && ($this->container['minimumAroundRadius'] < 1)) {
            $invalidProperties[] = "invalid value for 'minimumAroundRadius', must be bigger than or equal to 1.";
        }

        if (isset($this->container['personalizationImpact']) && ($this->container['personalizationImpact'] > 100)) {
            $invalidProperties[] = "invalid value for 'personalizationImpact', must be smaller than or equal to 100.";
        }

        if (isset($this->container['personalizationImpact']) && ($this->container['personalizationImpact'] < 0)) {
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
     * Gets similarQuery.
     *
     * @return null|string
     */
    public function getSimilarQuery()
    {
        return $this->container['similarQuery'] ?? null;
    }

    /**
     * Sets similarQuery.
     *
     * @param null|string $similarQuery Keywords to be used instead of the search query to conduct a more broader search.  Using the `similarQuery` parameter changes other settings:  - `queryType` is set to `prefixNone`. - `removeStopWords` is set to true. - `words` is set as the first ranking criterion. - All remaining words are treated as `optionalWords`.  Since the `similarQuery` is supposed to do a broad search, they usually return many results. Combine it with `filters` to narrow down the list of results.
     *
     * @return self
     */
    public function setSimilarQuery($similarQuery)
    {
        $this->container['similarQuery'] = $similarQuery;

        return $this;
    }

    /**
     * Gets filters.
     *
     * @return null|string
     */
    public function getFilters()
    {
        return $this->container['filters'] ?? null;
    }

    /**
     * Sets filters.
     *
     * @param null|string $filters Filter expression to only include items that match the filter criteria in the response.  You can use these filter expressions:  - **Numeric filters.** `<facet> <op> <number>`, where `<op>` is one of `<`, `<=`, `=`, `!=`, `>`, `>=`. - **Ranges.** `<facet>:<lower> TO <upper>` where `<lower>` and `<upper>` are the lower and upper limits of the range (inclusive). - **Facet filters.** `<facet>:<value>` where `<facet>` is a facet attribute (case-sensitive) and `<value>` a facet value. - **Tag filters.** `_tags:<value>` or just `<value>` (case-sensitive). - **Boolean filters.** `<facet>: true | false`.  You can combine filters with `AND`, `OR`, and `NOT` operators with the following restrictions:  - You can only combine filters of the same type with `OR`.   **Not supported:** `facet:value OR num > 3`. - You can't use `NOT` with combinations of filters.   **Not supported:** `NOT(facet:value OR facet:value)` - You can't combine conjunctions (`AND`) with `OR`.   **Not supported:** `facet:value OR (facet:value AND facet:value)`  Use quotes around your filters, if the facet attribute name or facet value has spaces, keywords (`OR`, `AND`, `NOT`), or quotes. If a facet attribute is an array, the filter matches if it matches at least one element of the array.  For more information, see [Filters](https://www.algolia.com/doc/guides/managing-results/refine-results/filtering/).
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets facetFilters.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\FacetFilters
     */
    public function getFacetFilters()
    {
        return $this->container['facetFilters'] ?? null;
    }

    /**
     * Sets facetFilters.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\FacetFilters $facetFilters facetFilters
     *
     * @return self
     */
    public function setFacetFilters($facetFilters)
    {
        $this->container['facetFilters'] = $facetFilters;

        return $this;
    }

    /**
     * Gets optionalFilters.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\OptionalFilters
     */
    public function getOptionalFilters()
    {
        return $this->container['optionalFilters'] ?? null;
    }

    /**
     * Sets optionalFilters.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\OptionalFilters $optionalFilters optionalFilters
     *
     * @return self
     */
    public function setOptionalFilters($optionalFilters)
    {
        $this->container['optionalFilters'] = $optionalFilters;

        return $this;
    }

    /**
     * Gets numericFilters.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\NumericFilters
     */
    public function getNumericFilters()
    {
        return $this->container['numericFilters'] ?? null;
    }

    /**
     * Sets numericFilters.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\NumericFilters $numericFilters numericFilters
     *
     * @return self
     */
    public function setNumericFilters($numericFilters)
    {
        $this->container['numericFilters'] = $numericFilters;

        return $this;
    }

    /**
     * Gets tagFilters.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\TagFilters
     */
    public function getTagFilters()
    {
        return $this->container['tagFilters'] ?? null;
    }

    /**
     * Sets tagFilters.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\TagFilters $tagFilters tagFilters
     *
     * @return self
     */
    public function setTagFilters($tagFilters)
    {
        $this->container['tagFilters'] = $tagFilters;

        return $this;
    }

    /**
     * Gets sumOrFiltersScores.
     *
     * @return null|bool
     */
    public function getSumOrFiltersScores()
    {
        return $this->container['sumOrFiltersScores'] ?? null;
    }

    /**
     * Sets sumOrFiltersScores.
     *
     * @param null|bool $sumOrFiltersScores Whether to sum all filter scores.  If true, all filter scores are summed. Otherwise, the maximum filter score is kept. For more information, see [filter scores](https://www.algolia.com/doc/guides/managing-results/refine-results/filtering/in-depth/filter-scoring/#accumulating-scores-with-sumorfiltersscores).
     *
     * @return self
     */
    public function setSumOrFiltersScores($sumOrFiltersScores)
    {
        $this->container['sumOrFiltersScores'] = $sumOrFiltersScores;

        return $this;
    }

    /**
     * Gets restrictSearchableAttributes.
     *
     * @return null|string[]
     */
    public function getRestrictSearchableAttributes()
    {
        return $this->container['restrictSearchableAttributes'] ?? null;
    }

    /**
     * Sets restrictSearchableAttributes.
     *
     * @param null|string[] $restrictSearchableAttributes Restricts a search to a subset of your searchable attributes. Attribute names are case-sensitive.
     *
     * @return self
     */
    public function setRestrictSearchableAttributes($restrictSearchableAttributes)
    {
        $this->container['restrictSearchableAttributes'] = $restrictSearchableAttributes;

        return $this;
    }

    /**
     * Gets facets.
     *
     * @return null|string[]
     */
    public function getFacets()
    {
        return $this->container['facets'] ?? null;
    }

    /**
     * Sets facets.
     *
     * @param null|string[] $facets Facets for which to retrieve facet values that match the search criteria and the number of matching facet values.  To retrieve all facets, use the wildcard character `*`. For more information, see [facets](https://www.algolia.com/doc/guides/managing-results/refine-results/faceting/#contextual-facet-values-and-counts).
     *
     * @return self
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * Gets facetingAfterDistinct.
     *
     * @return null|bool
     */
    public function getFacetingAfterDistinct()
    {
        return $this->container['facetingAfterDistinct'] ?? null;
    }

    /**
     * Sets facetingAfterDistinct.
     *
     * @param null|bool $facetingAfterDistinct Whether faceting should be applied after deduplication with `distinct`.  This leads to accurate facet counts when using faceting in combination with `distinct`. It's usually better to use `afterDistinct` modifiers in the `attributesForFaceting` setting, as `facetingAfterDistinct` only computes correct facet counts if all records have the same facet values for the `attributeForDistinct`.
     *
     * @return self
     */
    public function setFacetingAfterDistinct($facetingAfterDistinct)
    {
        $this->container['facetingAfterDistinct'] = $facetingAfterDistinct;

        return $this;
    }

    /**
     * Gets page.
     *
     * @return null|int
     */
    public function getPage()
    {
        return $this->container['page'] ?? null;
    }

    /**
     * Sets page.
     *
     * @param null|int $page page of search results to retrieve
     *
     * @return self
     */
    public function setPage($page)
    {
        if (!is_null($page) && ($page < 0)) {
            throw new \InvalidArgumentException('invalid value for $page when calling BaseSearchParamsWithoutQuery., must be bigger than or equal to 0.');
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets offset.
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->container['offset'] ?? null;
    }

    /**
     * Sets offset.
     *
     * @param null|int $offset position of the first hit to retrieve
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets length.
     *
     * @return null|int
     */
    public function getLength()
    {
        return $this->container['length'] ?? null;
    }

    /**
     * Sets length.
     *
     * @param null|int $length number of hits to retrieve (used in combination with `offset`)
     *
     * @return self
     */
    public function setLength($length)
    {
        if (!is_null($length) && ($length > 1000)) {
            throw new \InvalidArgumentException('invalid value for $length when calling BaseSearchParamsWithoutQuery., must be smaller than or equal to 1000.');
        }
        if (!is_null($length) && ($length < 1)) {
            throw new \InvalidArgumentException('invalid value for $length when calling BaseSearchParamsWithoutQuery., must be bigger than or equal to 1.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets aroundLatLng.
     *
     * @return null|string
     */
    public function getAroundLatLng()
    {
        return $this->container['aroundLatLng'] ?? null;
    }

    /**
     * Sets aroundLatLng.
     *
     * @param null|string $aroundLatLng Coordinates for the center of a circle, expressed as a comma-separated string of latitude and longitude.  Only records included within circle around this central location are included in the results. The radius of the circle is determined by the `aroundRadius` and `minimumAroundRadius` settings. This parameter is ignored if you also specify `insidePolygon` or `insideBoundingBox`.
     *
     * @return self
     */
    public function setAroundLatLng($aroundLatLng)
    {
        $this->container['aroundLatLng'] = $aroundLatLng;

        return $this;
    }

    /**
     * Gets aroundLatLngViaIP.
     *
     * @return null|bool
     */
    public function getAroundLatLngViaIP()
    {
        return $this->container['aroundLatLngViaIP'] ?? null;
    }

    /**
     * Sets aroundLatLngViaIP.
     *
     * @param null|bool $aroundLatLngViaIP whether to obtain the coordinates from the request's IP address
     *
     * @return self
     */
    public function setAroundLatLngViaIP($aroundLatLngViaIP)
    {
        $this->container['aroundLatLngViaIP'] = $aroundLatLngViaIP;

        return $this;
    }

    /**
     * Gets aroundRadius.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\AroundRadius
     */
    public function getAroundRadius()
    {
        return $this->container['aroundRadius'] ?? null;
    }

    /**
     * Sets aroundRadius.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\AroundRadius $aroundRadius aroundRadius
     *
     * @return self
     */
    public function setAroundRadius($aroundRadius)
    {
        $this->container['aroundRadius'] = $aroundRadius;

        return $this;
    }

    /**
     * Gets aroundPrecision.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\AroundPrecision
     */
    public function getAroundPrecision()
    {
        return $this->container['aroundPrecision'] ?? null;
    }

    /**
     * Sets aroundPrecision.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\AroundPrecision $aroundPrecision aroundPrecision
     *
     * @return self
     */
    public function setAroundPrecision($aroundPrecision)
    {
        $this->container['aroundPrecision'] = $aroundPrecision;

        return $this;
    }

    /**
     * Gets minimumAroundRadius.
     *
     * @return null|int
     */
    public function getMinimumAroundRadius()
    {
        return $this->container['minimumAroundRadius'] ?? null;
    }

    /**
     * Sets minimumAroundRadius.
     *
     * @param null|int $minimumAroundRadius minimum radius (in meters) for a search around a location when `aroundRadius` isn't set
     *
     * @return self
     */
    public function setMinimumAroundRadius($minimumAroundRadius)
    {
        if (!is_null($minimumAroundRadius) && ($minimumAroundRadius < 1)) {
            throw new \InvalidArgumentException('invalid value for $minimumAroundRadius when calling BaseSearchParamsWithoutQuery., must be bigger than or equal to 1.');
        }

        $this->container['minimumAroundRadius'] = $minimumAroundRadius;

        return $this;
    }

    /**
     * Gets insideBoundingBox.
     *
     * @return null|float[][]
     */
    public function getInsideBoundingBox()
    {
        return $this->container['insideBoundingBox'] ?? null;
    }

    /**
     * Sets insideBoundingBox.
     *
     * @param null|float[][] $insideBoundingBox Coordinates for a rectangular area in which to search.  Each bounding box is defined by the two opposite points of its diagonal, and expressed as latitude and longitude pair: `[p1 lat, p1 long, p2 lat, p2 long]`. Provide multiple bounding boxes as nested arrays. For more information, see [rectangular area](https://www.algolia.com/doc/guides/managing-results/refine-results/geolocation/#filtering-inside-rectangular-or-polygonal-areas).
     *
     * @return self
     */
    public function setInsideBoundingBox($insideBoundingBox)
    {
        $this->container['insideBoundingBox'] = $insideBoundingBox;

        return $this;
    }

    /**
     * Gets insidePolygon.
     *
     * @return null|float[][]
     */
    public function getInsidePolygon()
    {
        return $this->container['insidePolygon'] ?? null;
    }

    /**
     * Sets insidePolygon.
     *
     * @param null|float[][] $insidePolygon Coordinates of a polygon in which to search.  Polygons are defined by 3 to 10,000 points. Each point is represented by its latitude and longitude. Provide multiple polygons as nested arrays. For more information, see [filtering inside polygons](https://www.algolia.com/doc/guides/managing-results/refine-results/geolocation/#filtering-inside-rectangular-or-polygonal-areas). This parameter is ignored if you also specify `insideBoundingBox`.
     *
     * @return self
     */
    public function setInsidePolygon($insidePolygon)
    {
        $this->container['insidePolygon'] = $insidePolygon;

        return $this;
    }

    /**
     * Gets naturalLanguages.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Search\SupportedLanguage[]
     */
    public function getNaturalLanguages()
    {
        return $this->container['naturalLanguages'] ?? null;
    }

    /**
     * Sets naturalLanguages.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Search\SupportedLanguage[] $naturalLanguages ISO language codes that adjust settings that are useful for processing natural language queries (as opposed to keyword searches):  - Sets `removeStopWords` and `ignorePlurals` to the list of provided languages. - Sets `removeWordsIfNoResults` to `allOptional`. - Adds a `natural_language` attribute to `ruleContexts` and `analyticsTags`.
     *
     * @return self
     */
    public function setNaturalLanguages($naturalLanguages)
    {
        $this->container['naturalLanguages'] = $naturalLanguages;

        return $this;
    }

    /**
     * Gets ruleContexts.
     *
     * @return null|string[]
     */
    public function getRuleContexts()
    {
        return $this->container['ruleContexts'] ?? null;
    }

    /**
     * Sets ruleContexts.
     *
     * @param null|string[] $ruleContexts Assigns a rule context to the search query.  [Rule contexts](https://www.algolia.com/doc/guides/managing-results/rules/rules-overview/how-to/customize-search-results-by-platform/#whats-a-context) are strings that you can use to trigger matching rules.
     *
     * @return self
     */
    public function setRuleContexts($ruleContexts)
    {
        $this->container['ruleContexts'] = $ruleContexts;

        return $this;
    }

    /**
     * Gets personalizationImpact.
     *
     * @return null|int
     */
    public function getPersonalizationImpact()
    {
        return $this->container['personalizationImpact'] ?? null;
    }

    /**
     * Sets personalizationImpact.
     *
     * @param null|int $personalizationImpact Impact that Personalization should have on this search.  The higher this value is, the more Personalization determines the ranking compared to other factors. For more information, see [Understanding Personalization impact](https://www.algolia.com/doc/guides/personalization/personalizing-results/in-depth/configuring-personalization/#understanding-personalization-impact).
     *
     * @return self
     */
    public function setPersonalizationImpact($personalizationImpact)
    {
        if (!is_null($personalizationImpact) && ($personalizationImpact > 100)) {
            throw new \InvalidArgumentException('invalid value for $personalizationImpact when calling BaseSearchParamsWithoutQuery., must be smaller than or equal to 100.');
        }
        if (!is_null($personalizationImpact) && ($personalizationImpact < 0)) {
            throw new \InvalidArgumentException('invalid value for $personalizationImpact when calling BaseSearchParamsWithoutQuery., must be bigger than or equal to 0.');
        }

        $this->container['personalizationImpact'] = $personalizationImpact;

        return $this;
    }

    /**
     * Gets userToken.
     *
     * @return null|string
     */
    public function getUserToken()
    {
        return $this->container['userToken'] ?? null;
    }

    /**
     * Sets userToken.
     *
     * @param null|string $userToken Unique pseudonymous or anonymous user identifier.  This helps with analytics and click and conversion events. For more information, see [user token](https://www.algolia.com/doc/guides/sending-events/concepts/usertoken/).
     *
     * @return self
     */
    public function setUserToken($userToken)
    {
        $this->container['userToken'] = $userToken;

        return $this;
    }

    /**
     * Gets getRankingInfo.
     *
     * @return null|bool
     */
    public function getGetRankingInfo()
    {
        return $this->container['getRankingInfo'] ?? null;
    }

    /**
     * Sets getRankingInfo.
     *
     * @param null|bool $getRankingInfo whether the search response should include detailed ranking information
     *
     * @return self
     */
    public function setGetRankingInfo($getRankingInfo)
    {
        $this->container['getRankingInfo'] = $getRankingInfo;

        return $this;
    }

    /**
     * Gets synonyms.
     *
     * @return null|bool
     */
    public function getSynonyms()
    {
        return $this->container['synonyms'] ?? null;
    }

    /**
     * Sets synonyms.
     *
     * @param null|bool $synonyms whether to take into account an index's synonyms for this search
     *
     * @return self
     */
    public function setSynonyms($synonyms)
    {
        $this->container['synonyms'] = $synonyms;

        return $this;
    }

    /**
     * Gets clickAnalytics.
     *
     * @return null|bool
     */
    public function getClickAnalytics()
    {
        return $this->container['clickAnalytics'] ?? null;
    }

    /**
     * Sets clickAnalytics.
     *
     * @param null|bool $clickAnalytics Whether to include a `queryID` attribute in the response.  The query ID is a unique identifier for a search query and is required for tracking [click and conversion events](https://www.algolia.com/guides/sending-events/getting-started/).
     *
     * @return self
     */
    public function setClickAnalytics($clickAnalytics)
    {
        $this->container['clickAnalytics'] = $clickAnalytics;

        return $this;
    }

    /**
     * Gets analytics.
     *
     * @return null|bool
     */
    public function getAnalytics()
    {
        return $this->container['analytics'] ?? null;
    }

    /**
     * Sets analytics.
     *
     * @param null|bool $analytics whether this search will be included in Analytics
     *
     * @return self
     */
    public function setAnalytics($analytics)
    {
        $this->container['analytics'] = $analytics;

        return $this;
    }

    /**
     * Gets analyticsTags.
     *
     * @return null|string[]
     */
    public function getAnalyticsTags()
    {
        return $this->container['analyticsTags'] ?? null;
    }

    /**
     * Sets analyticsTags.
     *
     * @param null|string[] $analyticsTags Tags to apply to the query for [segmenting analytics data](https://www.algolia.com/doc/guides/search-analytics/guides/segments/).
     *
     * @return self
     */
    public function setAnalyticsTags($analyticsTags)
    {
        $this->container['analyticsTags'] = $analyticsTags;

        return $this;
    }

    /**
     * Gets percentileComputation.
     *
     * @return null|bool
     */
    public function getPercentileComputation()
    {
        return $this->container['percentileComputation'] ?? null;
    }

    /**
     * Sets percentileComputation.
     *
     * @param null|bool $percentileComputation whether to include this search when calculating processing-time percentiles
     *
     * @return self
     */
    public function setPercentileComputation($percentileComputation)
    {
        $this->container['percentileComputation'] = $percentileComputation;

        return $this;
    }

    /**
     * Gets enableABTest.
     *
     * @return null|bool
     */
    public function getEnableABTest()
    {
        return $this->container['enableABTest'] ?? null;
    }

    /**
     * Sets enableABTest.
     *
     * @param null|bool $enableABTest whether to enable A/B testing for this search
     *
     * @return self
     */
    public function setEnableABTest($enableABTest)
    {
        $this->container['enableABTest'] = $enableABTest;

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
