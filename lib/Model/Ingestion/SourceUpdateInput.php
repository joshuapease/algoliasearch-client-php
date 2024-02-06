<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Ingestion;

/**
 * SourceUpdateInput Class Doc Comment.
 *
 * @category Class
 */
class SourceUpdateInput extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'storeKeys' => 'string[]',
        'locales' => 'string[]',
        'url' => 'string',
        'uniqueIDColumn' => 'string',
        'method' => '\Algolia\AlgoliaSearch\Model\Ingestion\MethodType',
        'mapping' => 'array<string,\Algolia\AlgoliaSearch\Model\Ingestion\MappingTypeCSV>',
        'delimiter' => 'string',
        'projectID' => 'string',
        'datasetID' => 'string',
        'dataType' => '\Algolia\AlgoliaSearch\Model\Ingestion\BigQueryDataType',
        'table' => 'string',
        'tablePrefix' => 'string',
        'customSQLRequest' => 'string',
        'registry' => '\Algolia\AlgoliaSearch\Model\Ingestion\DockerRegistry',
        'image' => 'string',
        'version' => 'string',
        'configuration' => 'object',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'storeKeys' => null,
        'locales' => null,
        'url' => null,
        'uniqueIDColumn' => null,
        'method' => null,
        'mapping' => null,
        'delimiter' => null,
        'projectID' => null,
        'datasetID' => null,
        'dataType' => null,
        'table' => null,
        'tablePrefix' => null,
        'customSQLRequest' => null,
        'registry' => null,
        'image' => null,
        'version' => null,
        'configuration' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'storeKeys' => 'storeKeys',
        'locales' => 'locales',
        'url' => 'url',
        'uniqueIDColumn' => 'uniqueIDColumn',
        'method' => 'method',
        'mapping' => 'mapping',
        'delimiter' => 'delimiter',
        'projectID' => 'projectID',
        'datasetID' => 'datasetID',
        'dataType' => 'dataType',
        'table' => 'table',
        'tablePrefix' => 'tablePrefix',
        'customSQLRequest' => 'customSQLRequest',
        'registry' => 'registry',
        'image' => 'image',
        'version' => 'version',
        'configuration' => 'configuration',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'storeKeys' => 'setStoreKeys',
        'locales' => 'setLocales',
        'url' => 'setUrl',
        'uniqueIDColumn' => 'setUniqueIDColumn',
        'method' => 'setMethod',
        'mapping' => 'setMapping',
        'delimiter' => 'setDelimiter',
        'projectID' => 'setProjectID',
        'datasetID' => 'setDatasetID',
        'dataType' => 'setDataType',
        'table' => 'setTable',
        'tablePrefix' => 'setTablePrefix',
        'customSQLRequest' => 'setCustomSQLRequest',
        'registry' => 'setRegistry',
        'image' => 'setImage',
        'version' => 'setVersion',
        'configuration' => 'setConfiguration',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'storeKeys' => 'getStoreKeys',
        'locales' => 'getLocales',
        'url' => 'getUrl',
        'uniqueIDColumn' => 'getUniqueIDColumn',
        'method' => 'getMethod',
        'mapping' => 'getMapping',
        'delimiter' => 'getDelimiter',
        'projectID' => 'getProjectID',
        'datasetID' => 'getDatasetID',
        'dataType' => 'getDataType',
        'table' => 'getTable',
        'tablePrefix' => 'getTablePrefix',
        'customSQLRequest' => 'getCustomSQLRequest',
        'registry' => 'getRegistry',
        'image' => 'getImage',
        'version' => 'getVersion',
        'configuration' => 'getConfiguration',
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
        if (isset($data['storeKeys'])) {
            $this->container['storeKeys'] = $data['storeKeys'];
        }
        if (isset($data['locales'])) {
            $this->container['locales'] = $data['locales'];
        }
        if (isset($data['url'])) {
            $this->container['url'] = $data['url'];
        }
        if (isset($data['uniqueIDColumn'])) {
            $this->container['uniqueIDColumn'] = $data['uniqueIDColumn'];
        }
        if (isset($data['method'])) {
            $this->container['method'] = $data['method'];
        }
        if (isset($data['mapping'])) {
            $this->container['mapping'] = $data['mapping'];
        }
        if (isset($data['delimiter'])) {
            $this->container['delimiter'] = $data['delimiter'];
        }
        if (isset($data['projectID'])) {
            $this->container['projectID'] = $data['projectID'];
        }
        if (isset($data['datasetID'])) {
            $this->container['datasetID'] = $data['datasetID'];
        }
        if (isset($data['dataType'])) {
            $this->container['dataType'] = $data['dataType'];
        }
        if (isset($data['table'])) {
            $this->container['table'] = $data['table'];
        }
        if (isset($data['tablePrefix'])) {
            $this->container['tablePrefix'] = $data['tablePrefix'];
        }
        if (isset($data['customSQLRequest'])) {
            $this->container['customSQLRequest'] = $data['customSQLRequest'];
        }
        if (isset($data['registry'])) {
            $this->container['registry'] = $data['registry'];
        }
        if (isset($data['image'])) {
            $this->container['image'] = $data['image'];
        }
        if (isset($data['version'])) {
            $this->container['version'] = $data['version'];
        }
        if (isset($data['configuration'])) {
            $this->container['configuration'] = $data['configuration'];
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

        if (!isset($this->container['url']) || null === $this->container['url']) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (isset($this->container['delimiter']) && (mb_strlen($this->container['delimiter']) > 1)) {
            $invalidProperties[] = "invalid value for 'delimiter', the character length must be smaller than or equal to 1.";
        }

        if (isset($this->container['delimiter']) && (mb_strlen($this->container['delimiter']) < 1)) {
            $invalidProperties[] = "invalid value for 'delimiter', the character length must be bigger than or equal to 1.";
        }

        if (!isset($this->container['projectID']) || null === $this->container['projectID']) {
            $invalidProperties[] = "'projectID' can't be null";
        }
        if (!isset($this->container['datasetID']) || null === $this->container['datasetID']) {
            $invalidProperties[] = "'datasetID' can't be null";
        }
        if (!isset($this->container['configuration']) || null === $this->container['configuration']) {
            $invalidProperties[] = "'configuration' can't be null";
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
     * Gets storeKeys.
     *
     * @return null|string[]
     */
    public function getStoreKeys()
    {
        return $this->container['storeKeys'] ?? null;
    }

    /**
     * Sets storeKeys.
     *
     * @param null|string[] $storeKeys unique and immutable key of the referenced Store
     *
     * @return self
     */
    public function setStoreKeys($storeKeys)
    {
        $this->container['storeKeys'] = $storeKeys;

        return $this;
    }

    /**
     * Gets locales.
     *
     * @return null|string[]
     */
    public function getLocales()
    {
        return $this->container['locales'] ?? null;
    }

    /**
     * Sets locales.
     *
     * @param null|string[] $locales Array of locales that must match the following pattern: ^[a-z]{2}(-[A-Z]{2})?$. For example [\"fr-FR\", \"en\"].
     *
     * @return self
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'] ?? null;
    }

    /**
     * Sets url.
     *
     * @param string $url the URL of the file
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets uniqueIDColumn.
     *
     * @return null|string
     */
    public function getUniqueIDColumn()
    {
        return $this->container['uniqueIDColumn'] ?? null;
    }

    /**
     * Sets uniqueIDColumn.
     *
     * @param null|string $uniqueIDColumn the name of the column that contains the unique ID, used as `objectID` in Algolia
     *
     * @return self
     */
    public function setUniqueIDColumn($uniqueIDColumn)
    {
        $this->container['uniqueIDColumn'] = $uniqueIDColumn;

        return $this;
    }

    /**
     * Gets method.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Ingestion\MethodType
     */
    public function getMethod()
    {
        return $this->container['method'] ?? null;
    }

    /**
     * Sets method.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Ingestion\MethodType $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets mapping.
     *
     * @return null|array<string,\Algolia\AlgoliaSearch\Model\Ingestion\MappingTypeCSV>
     */
    public function getMapping()
    {
        return $this->container['mapping'] ?? null;
    }

    /**
     * Sets mapping.
     *
     * @param null|array<string,\Algolia\AlgoliaSearch\Model\Ingestion\MappingTypeCSV> $mapping Mapping of type for every column. For example {\"myColumn\": \"boolean\", \"myOtherColumn\": \"json\"}.
     *
     * @return self
     */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;

        return $this;
    }

    /**
     * Gets delimiter.
     *
     * @return null|string
     */
    public function getDelimiter()
    {
        return $this->container['delimiter'] ?? null;
    }

    /**
     * Sets delimiter.
     *
     * @param null|string $delimiter the character used to split the value on each line, default to a comma (\\r, \\n, 0xFFFD, and space are forbidden)
     *
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        if (!is_null($delimiter) && (mb_strlen($delimiter) > 1)) {
            throw new \InvalidArgumentException('invalid length for $delimiter when calling SourceUpdateInput., must be smaller than or equal to 1.');
        }
        if (!is_null($delimiter) && (mb_strlen($delimiter) < 1)) {
            throw new \InvalidArgumentException('invalid length for $delimiter when calling SourceUpdateInput., must be bigger than or equal to 1.');
        }

        $this->container['delimiter'] = $delimiter;

        return $this;
    }

    /**
     * Gets projectID.
     *
     * @return string
     */
    public function getProjectID()
    {
        return $this->container['projectID'] ?? null;
    }

    /**
     * Sets projectID.
     *
     * @param string $projectID project ID of the BigQuery Source
     *
     * @return self
     */
    public function setProjectID($projectID)
    {
        $this->container['projectID'] = $projectID;

        return $this;
    }

    /**
     * Gets datasetID.
     *
     * @return string
     */
    public function getDatasetID()
    {
        return $this->container['datasetID'] ?? null;
    }

    /**
     * Sets datasetID.
     *
     * @param string $datasetID dataset ID of the BigQuery Source
     *
     * @return self
     */
    public function setDatasetID($datasetID)
    {
        $this->container['datasetID'] = $datasetID;

        return $this;
    }

    /**
     * Gets dataType.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Ingestion\BigQueryDataType
     */
    public function getDataType()
    {
        return $this->container['dataType'] ?? null;
    }

    /**
     * Sets dataType.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Ingestion\BigQueryDataType $dataType dataType
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets table.
     *
     * @return null|string
     */
    public function getTable()
    {
        return $this->container['table'] ?? null;
    }

    /**
     * Sets table.
     *
     * @param null|string $table table name (for default BQ)
     *
     * @return self
     */
    public function setTable($table)
    {
        $this->container['table'] = $table;

        return $this;
    }

    /**
     * Gets tablePrefix.
     *
     * @return null|string
     */
    public function getTablePrefix()
    {
        return $this->container['tablePrefix'] ?? null;
    }

    /**
     * Sets tablePrefix.
     *
     * @param null|string $tablePrefix table prefix (for Google Analytics)
     *
     * @return self
     */
    public function setTablePrefix($tablePrefix)
    {
        $this->container['tablePrefix'] = $tablePrefix;

        return $this;
    }

    /**
     * Gets customSQLRequest.
     *
     * @return null|string
     */
    public function getCustomSQLRequest()
    {
        return $this->container['customSQLRequest'] ?? null;
    }

    /**
     * Sets customSQLRequest.
     *
     * @param null|string $customSQLRequest custom SQL request to extract data from the BigQuery table
     *
     * @return self
     */
    public function setCustomSQLRequest($customSQLRequest)
    {
        $this->container['customSQLRequest'] = $customSQLRequest;

        return $this;
    }

    /**
     * Gets registry.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Ingestion\DockerRegistry
     */
    public function getRegistry()
    {
        return $this->container['registry'] ?? null;
    }

    /**
     * Sets registry.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Ingestion\DockerRegistry $registry registry
     *
     * @return self
     */
    public function setRegistry($registry)
    {
        $this->container['registry'] = $registry;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return null|string
     */
    public function getImage()
    {
        return $this->container['image'] ?? null;
    }

    /**
     * Sets image.
     *
     * @param null|string $image the name of the image to pull
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets version.
     *
     * @return null|string
     */
    public function getVersion()
    {
        return $this->container['version'] ?? null;
    }

    /**
     * Sets version.
     *
     * @param null|string $version the version of the image, defaults to `latest`
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets configuration.
     *
     * @return object
     */
    public function getConfiguration()
    {
        return $this->container['configuration'] ?? null;
    }

    /**
     * Sets configuration.
     *
     * @param object $configuration the configuration of the spec
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
