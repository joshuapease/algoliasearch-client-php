<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Api;

use Algolia\AlgoliaSearch\Algolia;
use Algolia\AlgoliaSearch\Configuration\QuerySuggestionsConfig;
use Algolia\AlgoliaSearch\ObjectSerializer;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapper;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapperInterface;
use Algolia\AlgoliaSearch\RetryStrategy\ClusterHosts;

/**
 * QuerySuggestionsClient Class Doc Comment.
 *
 * @category Class
 */
class QuerySuggestionsClient
{
    public const VERSION = '4.0.0-alpha.100';

    /**
     * @var ApiWrapperInterface
     */
    protected $api;

    /**
     * @var QuerySuggestionsConfig
     */
    protected $config;

    public function __construct(ApiWrapperInterface $apiWrapper, QuerySuggestionsConfig $config)
    {
        $this->config = $config;
        $this->api = $apiWrapper;
    }

    /**
     * Instantiate the client with basic credentials and region.
     *
     * @param string $appId  Application ID
     * @param string $apiKey Algolia API Key
     * @param string $region Region
     */
    public static function create($appId = null, $apiKey = null, $region = null)
    {
        $config = QuerySuggestionsConfig::create($appId, $apiKey, $region);

        return static::createWithConfig($config);
    }

    /**
     * Instantiate the client with configuration.
     *
     * @param QuerySuggestionsConfig $config Configuration
     */
    public static function createWithConfig(QuerySuggestionsConfig $config)
    {
        $config = clone $config;

        $apiWrapper = new ApiWrapper(
            Algolia::getHttpClient(),
            $config,
            self::getClusterHosts($config)
        );

        return new static($apiWrapper, $config);
    }

    /**
     * Gets the cluster hosts depending on the config.
     *
     * @return ClusterHosts
     */
    public static function getClusterHosts(QuerySuggestionsConfig $config)
    {
        if ($hosts = $config->getHosts()) {
            // If a list of hosts was passed, we ignore the cache
            $clusterHosts = ClusterHosts::create($hosts);
        } else {
            $url = null !== $config->getRegion() && '' !== $config->getRegion() ?
                str_replace('{region}', $config->getRegion(), 'query-suggestions.{region}.algolia.com') :
                '';
            $clusterHosts = ClusterHosts::create($url);
        }

        return $clusterHosts;
    }

    /**
     * @return QuerySuggestionsConfig
     */
    public function getClientConfig()
    {
        return $this->config;
    }

    /**
     * Create a new Query Suggestions configuration.  You can have up to 100 configurations per Algolia application.
     *
     * Required API Key ACLs:
     *  - editSettings
     *
     * @param array $querySuggestionsConfigurationWithIndex querySuggestionsConfigurationWithIndex (required)
     *
     * @see \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsConfigurationWithIndex
     *
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\BaseResponse|array<string, mixed>
     */
    public function createConfig($querySuggestionsConfigurationWithIndex, $requestOptions = [])
    {
        // verify the required parameter 'querySuggestionsConfigurationWithIndex' is set
        if (!isset($querySuggestionsConfigurationWithIndex)) {
            throw new \InvalidArgumentException(
                'Parameter `querySuggestionsConfigurationWithIndex` is required when calling `createConfig`.'
            );
        }

        $resourcePath = '/1/configs';
        $queryParameters = [];
        $headers = [];
        $httpBody = $querySuggestionsConfigurationWithIndex;

        return $this->sendRequest('POST', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * This method allow you to send requests to the Algolia REST API.
     *
     * @param string $path           Path of the endpoint, anything after \&quot;/1\&quot; must be specified. (required)
     * @param array  $parameters     Query parameters to apply to the current query. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function customDelete($path, $parameters = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if (!isset($path)) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `customDelete`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        if (null !== $parameters) {
            $queryParameters = $parameters;
        }

        // path params
        if (null !== $path) {
            $resourcePath = str_replace(
                '{path}',
                $path,
                $resourcePath
            );
        }

        return $this->sendRequest('DELETE', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * This method allow you to send requests to the Algolia REST API.
     *
     * @param string $path           Path of the endpoint, anything after \&quot;/1\&quot; must be specified. (required)
     * @param array  $parameters     Query parameters to apply to the current query. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function customGet($path, $parameters = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if (!isset($path)) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `customGet`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        if (null !== $parameters) {
            $queryParameters = $parameters;
        }

        // path params
        if (null !== $path) {
            $resourcePath = str_replace(
                '{path}',
                $path,
                $resourcePath
            );
        }

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * This method allow you to send requests to the Algolia REST API.
     *
     * @param string $path           Path of the endpoint, anything after \&quot;/1\&quot; must be specified. (required)
     * @param array  $parameters     Query parameters to apply to the current query. (optional)
     * @param array  $body           Parameters to send with the custom request. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function customPost($path, $parameters = null, $body = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if (!isset($path)) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `customPost`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = isset($body) ? $body : [];

        if (null !== $parameters) {
            $queryParameters = $parameters;
        }

        // path params
        if (null !== $path) {
            $resourcePath = str_replace(
                '{path}',
                $path,
                $resourcePath
            );
        }

        return $this->sendRequest('POST', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * This method allow you to send requests to the Algolia REST API.
     *
     * @param string $path           Path of the endpoint, anything after \&quot;/1\&quot; must be specified. (required)
     * @param array  $parameters     Query parameters to apply to the current query. (optional)
     * @param array  $body           Parameters to send with the custom request. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function customPut($path, $parameters = null, $body = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if (!isset($path)) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `customPut`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = isset($body) ? $body : [];

        if (null !== $parameters) {
            $queryParameters = $parameters;
        }

        // path params
        if (null !== $path) {
            $resourcePath = str_replace(
                '{path}',
                $path,
                $resourcePath
            );
        }

        return $this->sendRequest('PUT', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * Delete a Query Suggestions configuration.  Deleting only removes the configuration and stops updates to the Query Suggestions index. The Query Suggestions index itself is not deleted.
     *
     * Required API Key ACLs:
     *  - editSettings
     *
     * @param string $indexName      Query Suggestions index name. (required)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\BaseResponse|array<string, mixed>
     */
    public function deleteConfig($indexName, $requestOptions = [])
    {
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `deleteConfig`.'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        // path params
        if (null !== $indexName) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest('DELETE', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * List all Query Suggestions configurations of your Algolia application.
     *
     * Required API Key ACLs:
     *  - settings
     *
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsConfigurationResponse[]|array<string, mixed>
     */
    public function getAllConfigs($requestOptions = [])
    {
        $resourcePath = '/1/configs';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * Get a single Query Suggestions configuration.
     *
     * Required API Key ACLs:
     *  - settings
     *
     * @param string $indexName      Query Suggestions index name. (required)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsConfigurationResponse|array<string, mixed>
     */
    public function getConfig($indexName, $requestOptions = [])
    {
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `getConfig`.'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        // path params
        if (null !== $indexName) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * Report the status of a Query Suggestions index.
     *
     * Required API Key ACLs:
     *  - settings
     *
     * @param string $indexName      Query Suggestions index name. (required)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\GetConfigStatus200Response|array<string, mixed>
     */
    public function getConfigStatus($indexName, $requestOptions = [])
    {
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `getConfigStatus`.'
            );
        }

        $resourcePath = '/1/configs/{indexName}/status';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        // path params
        if (null !== $indexName) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * Get the logs for a single Query Suggestions index.
     *
     * Required API Key ACLs:
     *  - settings
     *
     * @param string $indexName      Query Suggestions index name. (required)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\GetLogFile200Response|array<string, mixed>
     */
    public function getLogFile($indexName, $requestOptions = [])
    {
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `getLogFile`.'
            );
        }

        $resourcePath = '/1/logs/{indexName}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        // path params
        if (null !== $indexName) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    /**
     * Update a QuerySuggestions configuration.
     *
     * Required API Key ACLs:
     *  - editSettings
     *
     * @param string $indexName                     Query Suggestions index name. (required)
     * @param array  $querySuggestionsConfiguration querySuggestionsConfiguration (required)
     *                                              - $querySuggestionsConfiguration['sourceIndices'] => (array) Algolia indices from which to get the popular searches for query suggestions. (required)
     *                                              - $querySuggestionsConfiguration['languages'] => (array)
     *                                              - $querySuggestionsConfiguration['exclude'] => (array) Patterns to exclude from query suggestions.
     *                                              - $querySuggestionsConfiguration['enablePersonalization'] => (bool) Turn on personalized query suggestions.
     *                                              - $querySuggestionsConfiguration['allowSpecialCharacters'] => (bool) Allow suggestions with special characters.
     *
     * @see \Algolia\AlgoliaSearch\Model\QuerySuggestions\QuerySuggestionsConfiguration
     *
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\QuerySuggestions\BaseResponse|array<string, mixed>
     */
    public function updateConfig($indexName, $querySuggestionsConfiguration, $requestOptions = [])
    {
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `updateConfig`.'
            );
        }
        // verify the required parameter 'querySuggestionsConfiguration' is set
        if (!isset($querySuggestionsConfiguration)) {
            throw new \InvalidArgumentException(
                'Parameter `querySuggestionsConfiguration` is required when calling `updateConfig`.'
            );
        }

        $resourcePath = '/1/configs/{indexName}';
        $queryParameters = [];
        $headers = [];
        $httpBody = $querySuggestionsConfiguration;

        // path params
        if (null !== $indexName) {
            $resourcePath = str_replace(
                '{indexName}',
                ObjectSerializer::toPathValue($indexName),
                $resourcePath
            );
        }

        return $this->sendRequest('PUT', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
    }

    private function sendRequest($method, $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions, $useReadTransporter = false)
    {
        if (!isset($requestOptions['headers'])) {
            $requestOptions['headers'] = [];
        }
        if (!isset($requestOptions['queryParameters'])) {
            $requestOptions['queryParameters'] = [];
        }

        $requestOptions['headers'] = array_merge($headers, $requestOptions['headers']);
        $requestOptions['queryParameters'] = array_merge($queryParameters, $requestOptions['queryParameters']);
        $query = \GuzzleHttp\Psr7\Query::build($requestOptions['queryParameters']);

        return $this->api->sendRequest(
            $method,
            $resourcePath.($query ? "?{$query}" : ''),
            $httpBody,
            $requestOptions,
            $useReadTransporter
        );
    }
}
