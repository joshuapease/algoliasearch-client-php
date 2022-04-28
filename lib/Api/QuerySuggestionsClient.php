<?php

namespace Algolia\AlgoliaSearch\Api;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use Algolia\AlgoliaSearch\Algolia;
use Algolia\AlgoliaSearch\ApiException;
use Algolia\AlgoliaSearch\Configuration\QuerySuggestionsConfig;
use Algolia\AlgoliaSearch\ObjectSerializer;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapper;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapperInterface;
use Algolia\AlgoliaSearch\RetryStrategy\ClusterHosts;

/**
 * QuerySuggestionsClient Class Doc Comment
 *
 * @category Class
 * @package  Algolia\AlgoliaSearch
 */
class QuerySuggestionsClient
{
    /**
     * @var ApiWrapperInterface
     */
    protected $api;

    /**
     * @var QuerySuggestionsConfig
     */
    protected $config;

    /**
     * @param QuerySuggestionsConfig $config
     * @param ApiWrapperInterface $apiWrapper
     */
    public function __construct(
        ApiWrapperInterface $apiWrapper,
        QuerySuggestionsConfig $config
    ) {
        $this->config = $config;

        $this->api = $apiWrapper;
    }

    /**
     * Instantiate the client with basic credentials and region
     *
     * @param string $appId  Application ID
     * @param string $apiKey Algolia API Key
     * @param string $region Region
     */
    public static function create($appId = null, $apiKey = null, $region = null)
    {
        $allowedRegions = explode('-', 'us-eu');
        $config = QuerySuggestionsConfig::create(
            $appId,
            $apiKey,
            $region,
            $allowedRegions
        );

        return static::createWithConfig($config);
    }

    /**
     * Instantiate the client with configuration
     *
     * @param QuerySuggestionsConfig $config Configuration
     */
    public static function createWithConfig(QuerySuggestionsConfig $config)
    {
        $config = clone $config;

        if ($hosts = $config->getHosts()) {
            // If a list of hosts was passed, we ignore the cache
            $clusterHosts = ClusterHosts::create($hosts);
        } else {
            $clusterHosts = ClusterHosts::create(
                'query-suggestions.' . $config->getRegion() . '.algolia.com'
            );
        }

        $apiWrapper = new ApiWrapper(
            Algolia::getHttpClient(),
            $config,
            $clusterHosts
        );

        return new static($apiWrapper, $config);
    }

    /**
     * @return QuerySuggestionsConfig
     */
    public function getClientConfig()
    {
        return $this->config;
    }

    /**
     * Create a configuration of a Query Suggestions index.
     *
     * @param array $querySuggestionsIndexWithIndexParam querySuggestionsIndexWithIndexParam (required)
     * @see \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsIndexWithIndexParam
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\SucessResponse
     */
    public function createConfig($querySuggestionsIndexWithIndexParam)
    {
        // verify the required parameter 'querySuggestionsIndexWithIndexParam' is set
        if (
            $querySuggestionsIndexWithIndexParam === null ||
            (is_array($querySuggestionsIndexWithIndexParam) &&
                count($querySuggestionsIndexWithIndexParam) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $querySuggestionsIndexWithIndexParam when calling createConfig'
            );
        }

        $resourcePath = '/1/configs';
        $queryParams = [];
        $httpBody = [];

        if (isset($querySuggestionsIndexWithIndexParam)) {
            $httpBody = $querySuggestionsIndexWithIndexParam;
        }

        return $this->sendRequest(
            'POST',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     *
     * @return array<string, mixed>|object
     */
    public function del($path, $parameters = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null || (is_array($path) && count($path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling del'
            );
        }

        $resourcePath = '/1{path}';
        $queryParams = [];
        $httpBody = [];

        if ($parameters !== null) {
            if ('form' === 'form' && is_array($parameters)) {
                foreach ($parameters as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams = $parameters;
            }
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        return $this->sendRequest(
            'DELETE',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Delete a configuration of a Query Suggestion&#39;s index.
     *
     * @param string $indexName The index in which to perform the request. (required)
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\SucessResponse
     */
    public function deleteConfig($indexName)
    {
        // verify the required parameter 'indexName' is set
        if (
            $indexName === null ||
            (is_array($indexName) && count($indexName) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling deleteConfig'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParams = [];
        $httpBody = [];

        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'DELETE',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     *
     * @return array<string, mixed>|object
     */
    public function get($path, $parameters = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null || (is_array($path) && count($path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling get'
            );
        }

        $resourcePath = '/1{path}';
        $queryParams = [];
        $httpBody = [];

        if ($parameters !== null) {
            if ('form' === 'form' && is_array($parameters)) {
                foreach ($parameters as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams = $parameters;
            }
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Get all the configurations of Query Suggestions.
     *
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsIndex[]
     */
    public function getAllConfigs()
    {
        $resourcePath = '/1/configs';
        $queryParams = [];
        $httpBody = [];

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Get the configuration of a single Query Suggestions index.
     *
     * @param string $indexName The index in which to perform the request. (required)
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsIndex
     */
    public function getConfig($indexName)
    {
        // verify the required parameter 'indexName' is set
        if (
            $indexName === null ||
            (is_array($indexName) && count($indexName) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling getConfig'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParams = [];
        $httpBody = [];

        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Get the status of a Query Suggestion&#39;s index.
     *
     * @param string $indexName The index in which to perform the request. (required)
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\Status
     */
    public function getConfigStatus($indexName)
    {
        // verify the required parameter 'indexName' is set
        if (
            $indexName === null ||
            (is_array($indexName) && count($indexName) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling getConfigStatus'
            );
        }

        $resourcePath = '/1/configs/{indexName}/status';
        $queryParams = [];
        $httpBody = [];

        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Get the log file of the last build of a single Query Suggestion index.
     *
     * @param string $indexName The index in which to perform the request. (required)
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\LogFile[]
     */
    public function getLogFile($indexName)
    {
        // verify the required parameter 'indexName' is set
        if (
            $indexName === null ||
            (is_array($indexName) && count($indexName) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling getLogFile'
            );
        }

        $resourcePath = '/1/logs/{indexName}';
        $queryParams = [];
        $httpBody = [];

        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $body The parameters to send with the custom request. (optional)
     *
     * @return array<string, mixed>|object
     */
    public function post($path, $parameters = null, $body = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null || (is_array($path) && count($path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling post'
            );
        }

        $resourcePath = '/1{path}';
        $queryParams = [];
        $httpBody = [];

        if ($parameters !== null) {
            if ('form' === 'form' && is_array($parameters)) {
                foreach ($parameters as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams = $parameters;
            }
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        if (isset($body)) {
            $httpBody = $body;
        }

        return $this->sendRequest(
            'POST',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $body The parameters to send with the custom request. (optional)
     *
     * @return array<string, mixed>|object
     */
    public function put($path, $parameters = null, $body = null)
    {
        // verify the required parameter 'path' is set
        if ($path === null || (is_array($path) && count($path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path when calling put'
            );
        }

        $resourcePath = '/1{path}';
        $queryParams = [];
        $httpBody = [];

        if ($parameters !== null) {
            if ('form' === 'form' && is_array($parameters)) {
                foreach ($parameters as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams = $parameters;
            }
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        if (isset($body)) {
            $httpBody = $body;
        }

        return $this->sendRequest(
            'PUT',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    /**
     * Update the configuration of a Query Suggestions index.
     *
     * @param string $indexName The index in which to perform the request. (required)
     * @param array $querySuggestionsIndexParam querySuggestionsIndexParam (required)
     * - $querySuggestionsIndexParam['sourceIndices'] => (array) List of source indices used to generate a Query Suggestions index. (required)
     * - $querySuggestionsIndexParam['languages'] => (array) De-duplicate singular and plural suggestions. For example, let's say your index contains English content, and that two suggestions “shoe” and “shoes” end up in your Query Suggestions index. If the English language is configured, only the most popular of those two suggestions would remain.
     * - $querySuggestionsIndexParam['exclude'] => (array) List of words and patterns to exclude from the Query Suggestions index.
     * @see \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsIndexParam
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\QuerySuggestions\SucessResponse
     */
    public function updateConfig($indexName, $querySuggestionsIndexParam)
    {
        // verify the required parameter 'indexName' is set
        if (
            $indexName === null ||
            (is_array($indexName) && count($indexName) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $indexName when calling updateConfig'
            );
        }
        // verify the required parameter 'querySuggestionsIndexParam' is set
        if (
            $querySuggestionsIndexParam === null ||
            (is_array($querySuggestionsIndexParam) &&
                count($querySuggestionsIndexParam) === 0)
        ) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $querySuggestionsIndexParam when calling updateConfig'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParams = [];
        $httpBody = [];

        // path params
        if ($indexName !== null) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        if (isset($querySuggestionsIndexParam)) {
            $httpBody = $querySuggestionsIndexParam;
        }

        return $this->sendRequest(
            'PUT',
            $resourcePath,
            $queryParams,
            $httpBody
        );
    }

    private function sendRequest(
        $method,
        $resourcePath,
        $queryParams,
        $httpBody
    ) {
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

        if ($method == 'GET') {
            $request = $this->api->read(
                $method,
                $resourcePath . ($query ? "?{$query}" : '')
            );
        } else {
            $request = $this->api->write(
                $method,
                $resourcePath . ($query ? "?{$query}" : ''),
                $httpBody
            );
        }

        return $request;
    }
}