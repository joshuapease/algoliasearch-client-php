<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Api;

use Algolia\AlgoliaSearch\Algolia;
use Algolia\AlgoliaSearch\Configuration\UsageConfig;
use Algolia\AlgoliaSearch\ObjectSerializer;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapper;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapperInterface;
use Algolia\AlgoliaSearch\RetryStrategy\ClusterHosts;
use GuzzleHttp\Psr7\Query;

/**
 * UsageClient Class Doc Comment.
 *
 * @category Class
 */
class UsageClient
{
    public const VERSION = '4.0.0-beta.8';

    /**
     * @var ApiWrapperInterface
     */
    protected $api;

    /**
     * @var UsageConfig
     */
    protected $config;

    public function __construct(ApiWrapperInterface $apiWrapper, UsageConfig $config)
    {
        $this->config = $config;
        $this->api = $apiWrapper;
    }

    /**
     * Instantiate the client with basic credentials.
     *
     * @param string $appId  Application ID
     * @param string $apiKey Algolia API Key
     */
    public static function create($appId = null, $apiKey = null)
    {
        return static::createWithConfig(UsageConfig::create($appId, $apiKey));
    }

    /**
     * Instantiate the client with configuration.
     *
     * @param UsageConfig $config Configuration
     */
    public static function createWithConfig(UsageConfig $config)
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
    public static function getClusterHosts(UsageConfig $config)
    {
        $cacheKey = sprintf('%s-clusterHosts-%s', __CLASS__, $config->getAppId());

        if ($hosts = $config->getHosts()) {
            // If a list of hosts was passed, we ignore the cache
            $clusterHosts = ClusterHosts::create($hosts);
        } elseif (false === ($clusterHosts = ClusterHosts::createFromCache($cacheKey))) {
            // We'll try to restore the ClusterHost from cache, if we cannot
            // we create a new instance and set the cache key
            $clusterHosts = ClusterHosts::createFromAppId($config->getAppId())
                ->setCacheKey($cacheKey)
            ;
        }

        return $clusterHosts;
    }

    /**
     * @return UsageConfig
     */
    public function getClientConfig()
    {
        return $this->config;
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

        $resourcePath = '/{path}';
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

        $resourcePath = '/{path}';
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

        $resourcePath = '/{path}';
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

        $resourcePath = '/{path}';
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
     * Retrieves the selected usage statistics for one index.
     *
     * @param array  $statistic      Usage statistics to retrieve.  Use &#x60;*&#x60; to retrieve all usage metrics, otherwise add one or more of the following metrics, separated by a comma.  **Search operations**  - &#x60;search_operations&#x60;. All search operations. - &#x60;total_search_operations&#x60;: Sum of all search operations. - &#x60;total_search_requests&#x60;: Sum of all [search requests](https://support.algolia.com/hc/en-us/articles/4406981829777-How-does-Algolia-count-records-and-operations-).    The number of billed search requests is equal to this value minus &#x60;querysuggestions_total_search_requests&#x60;. - &#x60;queries_operations&#x60;. Number of [single index search](/specs/search#tag/Search/operation/searchSingleIndex) operations. - &#x60;multi_queries_operations&#x60;. Number of [multi-index search](/specs/search#tag/Search/operation/search) operations.  **ACL operations**  - &#x60;acl_operations&#x60;. All ACL operations. - &#x60;total_acl_operations&#x60;. Sum of all ACL operations. - &#x60;get_api_keys_operations&#x60;. Number of [list API keys](/specs/search#tag/Api-Keys/operation/listApiKeys) operations. - &#x60;get_api_key_operations&#x60;. Number of [get API key permission](/specs/search#tag/Api-Keys/operation/getApiKey) operations. - &#x60;add_api_key_operations&#x60;. Number of [create API key](/specs/search#tag/Api-Keys/operation/addApiKey) operations. - &#x60;update_api_key_operations&#x60;. Number of [update API key](/specs/search#tag/Api-Keys/operation/updateApiKey) operations. - &#x60;delete_api_key_operations&#x60;. Number of [delete API key](/specs/search#tag/Api-Keys/operation/deleteApiKey) operations. - &#x60;list_api_key_operations&#x60;. Number of list index API keys operations.  **Indexing operations**  - &#x60;indexing_operations&#x60;. All indexing operations. - &#x60;total_indexing_operations&#x60;. Sum of all indexing operations. - &#x60;browse_operations&#x60;. Number of [browse index](/specs/search#tag/Search/operation/browse) operations. - &#x60;clear_index_operations&#x60;. Number of [clear records](/specs/search#tag/Records/operation/clearObjects) operations. - &#x60;copy_move_operations&#x60;. Number of [copy or move index](/specs/search#tag/Indices/operation/operationIndex) operations. - &#x60;delete_index_operations&#x60;. Number of [delete index](/specs/search#tag/Indices/operation/deleteIndex) operations. - &#x60;get_log_operations&#x60;. Number of [get logs](/specs/search#tag/Advanced/operation/getLogs) operations. - &#x60;get_settings_operations&#x60;. Number of [get settings](/specs/search#operation/getIndexUsage) operations. - &#x60;set_settings_operations&#x60;. Number of [set settings](/specs/search#tag/Indices/operation/setSettings) operations. - &#x60;list_indices_operations&#x60;. Number of [list indices](/specs/search#tag/Indices/operation/listIndices) operations. - &#x60;wait_task_operations&#x60;. Number of [wait](/specs/search#tag/Indices/operation/getTask) operations.  **Record operations**  - &#x60;record_operations&#x60;. All record operations. - &#x60;total_records_operations&#x60;. Sum of all record operations. - &#x60;add_record_operations&#x60;. Number of [add or replace record](/specs/search#tag/Records/operation/saveObject) operations. - &#x60;batch_operations&#x60;. Number of [batch indexing](/specs/search#tag/Records/operation/multipleBatch) operations. - &#x60;delete_by_query_operations&#x60;. Number of [delete by query](/specs/search#tag/Records/operation/deleteBy) operations. - &#x60;delete_record_operations&#x60;. Number of [delete record](/specs/search#tag/Records/operation/deleteObject) operations. - &#x60;get_record_operations&#x60;. Number of [get record](/specs/search#tag/Records/operation/getObject) operations. - &#x60;partial_update_record_operations&#x60;. Number of [partially update records](/specs/search#tag/Records/operation/partialUpdateObject) operations. - &#x60;update_record_operations&#x60;. Number of [add or replace record by objectID](/specs/search#tag/Records/operation/addOrUpdateObject) operations.  **Synonym operations**  - &#x60;synonym_operations&#x60;. All synonym operations. - &#x60;total_synonym_operations&#x60;. Sum of all synonym operations. - &#x60;batch_synonym_operations&#x60;. Number of [save all synonyms](/specs/search#tag/Synonyms/operation/saveSynonyms) operations. - &#x60;clear_synonym_operations&#x60;. Number of [clear synonyms](/specs/search#tag/Synonyms/operation/clearSynonyms) operations. - &#x60;delete_synonym_operations&#x60;. Number of [delete synonym](/specs/search#tag/Synonyms/operation/deleteSynonym) operations. - &#x60;get_synonym_operations&#x60;. Number of [get synonym](/specs/search#tag/Synonyms/operation/getSynonym) operations. - &#x60;query_synonym_operations&#x60;. Number of [search synonyms](/specs/search#tag/Synonyms/operation/searchSynonyms) operations. - &#x60;update_synonym_operations&#x60;. Number of [save a synonym](/specs/search#tag/Synonyms/operation/saveSynonym) operations.  **Rule operations**  - &#x60;rule_operations&#x60;. All rule operations. - &#x60;total_rules_operations&#x60;. Sum of all rule operations. - &#x60;batch_rules_operations&#x60;. Number of [batch rules](/specs/search#tag/Rules/operation/saveRules) operations. - &#x60;clear_rules_operations&#x60;. Number of [delete rule](/specs/search#tag/Rules/operation/deleteRule) operations. - &#x60;delete_rules_operations&#x60;. Number of [clear rules](/specs/search#tag/Rules/operation/clearRules) operations. - &#x60;get_rules_operations&#x60;. Number of [get rule](/specs/search#tag/Rules/operation/getRule) operations. - &#x60;save_rules_operations&#x60;. Number of [save rule](/specs/search#operation/getIndexUsage) operations. - &#x60;search_rules_operations&#x60;. Number of [search rules](/specs/search#tag/Rules/operation/searchRules) operations.  **Total operations**  - &#x60;total_recommend_requests&#x60;. Number of [Recommend requests](https://www.algolia.com/doc/guides/algolia-ai/recommend/) - &#x60;total_write_operations&#x60;. Number of Write operations - &#x60;total_read_operations&#x60;. Number of read operations - &#x60;total_operations&#x60;. Sum of all operations  **Total Query Suggestions operations**  Query Suggestions operations are a subset of &#x60;total_search_operations&#x60;.  - &#x60;querysuggestions_total_search_operations&#x60;. Number of Query Suggestions search operations. - &#x60;querysuggestions_total_search_requests&#x60;. Number of Query Suggestions [search requests](https://support.algolia.com/hc/en-us/articles/4406981829777-How-does-Algolia-count-records-and-operations-). - &#x60;querysuggestions_total_acl_operations&#x60;. Sum of all Query Suggestions [ACL operations](#acl-operations). - &#x60;querysuggestions_total_indexing_operations&#x60;. Number of Query Suggestions [indexing operations](#indexing-operations). - &#x60;querysuggestions_total_records_operations&#x60;. Number of Query Suggestions [record operations](#record-operations). - &#x60;querysuggestions_total_synonym_operations&#x60;. Number of Query Suggestions [synonym operations](#synonym-operations). - &#x60;querysuggestions_total_rules_operations&#x60;. Number of Query Suggestions [Rule operations](#rule-operations). - &#x60;querysuggestions_total_write_operations&#x60;. Number of Query Suggestions Write operations. - &#x60;querysuggestions_total_read_operations&#x60;. Number of Query Suggestions Read operations. - &#x60;querysuggestions_total_operations&#x60;. Sum of all Query Suggestions operations.  **Processing time**  - &#x60;avg_processing_time&#x60;. Average processing time (in milliseconds). - &#x60;90p_processing_time&#x60;. 90th percentile of processing time (in milliseconds). - &#x60;99p_processing_time&#x60;. 99th percentile of processing time (in milliseconds). - &#x60;queries_above_last_ms_processing_time&#x60;. Number of queries that take one or more seconds to process.  **Indices**  - &#x60;records&#x60;. Number of records. - &#x60;data_size&#x60;. The size of the records (in bytes). - &#x60;file_size&#x60;. The size of the records _and_ index metadata (in bytes).  **Maximum queries per second**  - &#x60;max_qps&#x60;. [Maximum queries per second](https://support.algolia.com/hc/en-us/articles/4406975224721) per server. - &#x60;region_max_qps&#x60;. Maximum queries per second per region. - &#x60;total_max_qps&#x60;. Maximum queries per second across all servers.  **Used search capacity**  The following capacities are reported in percent:  - &#x60;used_search_capacity&#x60;. Maximum search capacity used per server. - &#x60;avg_used_search_capacity&#x60;. Average search capacity used per server. - &#x60;region_used_search_capacity&#x60;. Maximum search capacity used per region. - &#x60;region_avg_used_search_capacity&#x60;. Average search capacity used per region. - &#x60;total_used_search_capacity&#x60;. Maximum search capacity used for all servers. - &#x60;total_avg_used_search_capacity&#x60;. Average used search capacity for all servers.  **Degraded queries**  Check the impact of [degraded queries](https://support.algolia.com/hc/en-us/articles/4406981934481).  - &#x60;degraded_queries_ssd_used_queries_impacted&#x60;. Percentage of degraded queries due to the Algolia search engine having to read from the server&#39;s SSD. - &#x60;degraded_queries_ssd_used_seconds_impacted&#x60;. Percentage of seconds affected by &#x60;ssd_used&#x60; degraded queries. - &#x60;degraded_queries_max_capacity_queries_impacted&#x60;. Percentage of degraded queries due to all search threads being used. - &#x60;degraded_queries_max_capacity_seconds_impacted&#x60;. Percentage of seconds affected by &#x60;max_capacity&#x60; degraded queries. (required)
     * @param string $indexName      Name of the index on which to perform the operation. (required)
     * @param string $startDate      Start date of the period to analyze, in &#x60;YYYY-MM-DD&#x60; format. (required)
     * @param string $endDate        End date of the period to analyze, in &#x60;YYYY-MM-DD&#x60; format. (required)
     * @param array  $granularity    Granularity of the aggregated metrics.  - &#x60;hourly&#x60;: the maximum time range for hourly metrics is 7 days. - &#x60;daily&#x60;: the maximum time range for daily metrics is 365 days. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\Usage\GetUsage200Response|array<string, mixed>
     */
    public function getIndexUsage($statistic, $indexName, $startDate, $endDate, $granularity = null, $requestOptions = [])
    {
        // verify the required parameter 'statistic' is set
        if (!isset($statistic)) {
            throw new \InvalidArgumentException(
                'Parameter `statistic` is required when calling `getIndexUsage`.'
            );
        }
        // verify the required parameter 'indexName' is set
        if (!isset($indexName)) {
            throw new \InvalidArgumentException(
                'Parameter `indexName` is required when calling `getIndexUsage`.'
            );
        }
        // verify the required parameter 'startDate' is set
        if (!isset($startDate)) {
            throw new \InvalidArgumentException(
                'Parameter `startDate` is required when calling `getIndexUsage`.'
            );
        }
        // verify the required parameter 'endDate' is set
        if (!isset($endDate)) {
            throw new \InvalidArgumentException(
                'Parameter `endDate` is required when calling `getIndexUsage`.'
            );
        }

        $resourcePath = '/1/usage/{statistic}/{indexName}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        if (null !== $startDate) {
            $queryParameters['startDate'] = $startDate;
        }

        if (null !== $endDate) {
            $queryParameters['endDate'] = $endDate;
        }

        if (null !== $granularity) {
            $queryParameters['granularity'] = $granularity;
        }

        // path params
        if (null !== $statistic) {
            $resourcePath = str_replace(
                '{statistic}',
                ObjectSerializer::toPathValue($statistic),
                $resourcePath
            );
        }

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
     * Retrieves usage statistics evaluated over a specified period.
     *
     * @param array  $statistic      Usage statistics to retrieve.  Use &#x60;*&#x60; to retrieve all usage metrics, otherwise add one or more of the following metrics, separated by a comma.  **Search operations**  - &#x60;search_operations&#x60;. All search operations. - &#x60;total_search_operations&#x60;: Sum of all search operations. - &#x60;total_search_requests&#x60;: Sum of all [search requests](https://support.algolia.com/hc/en-us/articles/4406981829777-How-does-Algolia-count-records-and-operations-).    The number of billed search requests is equal to this value minus &#x60;querysuggestions_total_search_requests&#x60;. - &#x60;queries_operations&#x60;. Number of [single index search](/specs/search#tag/Search/operation/searchSingleIndex) operations. - &#x60;multi_queries_operations&#x60;. Number of [multi-index search](/specs/search#tag/Search/operation/search) operations.  **ACL operations**  - &#x60;acl_operations&#x60;. All ACL operations. - &#x60;total_acl_operations&#x60;. Sum of all ACL operations. - &#x60;get_api_keys_operations&#x60;. Number of [list API keys](/specs/search#tag/Api-Keys/operation/listApiKeys) operations. - &#x60;get_api_key_operations&#x60;. Number of [get API key permission](/specs/search#tag/Api-Keys/operation/getApiKey) operations. - &#x60;add_api_key_operations&#x60;. Number of [create API key](/specs/search#tag/Api-Keys/operation/addApiKey) operations. - &#x60;update_api_key_operations&#x60;. Number of [update API key](/specs/search#tag/Api-Keys/operation/updateApiKey) operations. - &#x60;delete_api_key_operations&#x60;. Number of [delete API key](/specs/search#tag/Api-Keys/operation/deleteApiKey) operations. - &#x60;list_api_key_operations&#x60;. Number of list index API keys operations.  **Indexing operations**  - &#x60;indexing_operations&#x60;. All indexing operations. - &#x60;total_indexing_operations&#x60;. Sum of all indexing operations. - &#x60;browse_operations&#x60;. Number of [browse index](/specs/search#tag/Search/operation/browse) operations. - &#x60;clear_index_operations&#x60;. Number of [clear records](/specs/search#tag/Records/operation/clearObjects) operations. - &#x60;copy_move_operations&#x60;. Number of [copy or move index](/specs/search#tag/Indices/operation/operationIndex) operations. - &#x60;delete_index_operations&#x60;. Number of [delete index](/specs/search#tag/Indices/operation/deleteIndex) operations. - &#x60;get_log_operations&#x60;. Number of [get logs](/specs/search#tag/Advanced/operation/getLogs) operations. - &#x60;get_settings_operations&#x60;. Number of [get settings](/specs/search#operation/getIndexUsage) operations. - &#x60;set_settings_operations&#x60;. Number of [set settings](/specs/search#tag/Indices/operation/setSettings) operations. - &#x60;list_indices_operations&#x60;. Number of [list indices](/specs/search#tag/Indices/operation/listIndices) operations. - &#x60;wait_task_operations&#x60;. Number of [wait](/specs/search#tag/Indices/operation/getTask) operations.  **Record operations**  - &#x60;record_operations&#x60;. All record operations. - &#x60;total_records_operations&#x60;. Sum of all record operations. - &#x60;add_record_operations&#x60;. Number of [add or replace record](/specs/search#tag/Records/operation/saveObject) operations. - &#x60;batch_operations&#x60;. Number of [batch indexing](/specs/search#tag/Records/operation/multipleBatch) operations. - &#x60;delete_by_query_operations&#x60;. Number of [delete by query](/specs/search#tag/Records/operation/deleteBy) operations. - &#x60;delete_record_operations&#x60;. Number of [delete record](/specs/search#tag/Records/operation/deleteObject) operations. - &#x60;get_record_operations&#x60;. Number of [get record](/specs/search#tag/Records/operation/getObject) operations. - &#x60;partial_update_record_operations&#x60;. Number of [partially update records](/specs/search#tag/Records/operation/partialUpdateObject) operations. - &#x60;update_record_operations&#x60;. Number of [add or replace record by objectID](/specs/search#tag/Records/operation/addOrUpdateObject) operations.  **Synonym operations**  - &#x60;synonym_operations&#x60;. All synonym operations. - &#x60;total_synonym_operations&#x60;. Sum of all synonym operations. - &#x60;batch_synonym_operations&#x60;. Number of [save all synonyms](/specs/search#tag/Synonyms/operation/saveSynonyms) operations. - &#x60;clear_synonym_operations&#x60;. Number of [clear synonyms](/specs/search#tag/Synonyms/operation/clearSynonyms) operations. - &#x60;delete_synonym_operations&#x60;. Number of [delete synonym](/specs/search#tag/Synonyms/operation/deleteSynonym) operations. - &#x60;get_synonym_operations&#x60;. Number of [get synonym](/specs/search#tag/Synonyms/operation/getSynonym) operations. - &#x60;query_synonym_operations&#x60;. Number of [search synonyms](/specs/search#tag/Synonyms/operation/searchSynonyms) operations. - &#x60;update_synonym_operations&#x60;. Number of [save a synonym](/specs/search#tag/Synonyms/operation/saveSynonym) operations.  **Rule operations**  - &#x60;rule_operations&#x60;. All rule operations. - &#x60;total_rules_operations&#x60;. Sum of all rule operations. - &#x60;batch_rules_operations&#x60;. Number of [batch rules](/specs/search#tag/Rules/operation/saveRules) operations. - &#x60;clear_rules_operations&#x60;. Number of [delete rule](/specs/search#tag/Rules/operation/deleteRule) operations. - &#x60;delete_rules_operations&#x60;. Number of [clear rules](/specs/search#tag/Rules/operation/clearRules) operations. - &#x60;get_rules_operations&#x60;. Number of [get rule](/specs/search#tag/Rules/operation/getRule) operations. - &#x60;save_rules_operations&#x60;. Number of [save rule](/specs/search#operation/getIndexUsage) operations. - &#x60;search_rules_operations&#x60;. Number of [search rules](/specs/search#tag/Rules/operation/searchRules) operations.  **Total operations**  - &#x60;total_recommend_requests&#x60;. Number of [Recommend requests](https://www.algolia.com/doc/guides/algolia-ai/recommend/) - &#x60;total_write_operations&#x60;. Number of Write operations - &#x60;total_read_operations&#x60;. Number of read operations - &#x60;total_operations&#x60;. Sum of all operations  **Total Query Suggestions operations**  Query Suggestions operations are a subset of &#x60;total_search_operations&#x60;.  - &#x60;querysuggestions_total_search_operations&#x60;. Number of Query Suggestions search operations. - &#x60;querysuggestions_total_search_requests&#x60;. Number of Query Suggestions [search requests](https://support.algolia.com/hc/en-us/articles/4406981829777-How-does-Algolia-count-records-and-operations-). - &#x60;querysuggestions_total_acl_operations&#x60;. Sum of all Query Suggestions [ACL operations](#acl-operations). - &#x60;querysuggestions_total_indexing_operations&#x60;. Number of Query Suggestions [indexing operations](#indexing-operations). - &#x60;querysuggestions_total_records_operations&#x60;. Number of Query Suggestions [record operations](#record-operations). - &#x60;querysuggestions_total_synonym_operations&#x60;. Number of Query Suggestions [synonym operations](#synonym-operations). - &#x60;querysuggestions_total_rules_operations&#x60;. Number of Query Suggestions [Rule operations](#rule-operations). - &#x60;querysuggestions_total_write_operations&#x60;. Number of Query Suggestions Write operations. - &#x60;querysuggestions_total_read_operations&#x60;. Number of Query Suggestions Read operations. - &#x60;querysuggestions_total_operations&#x60;. Sum of all Query Suggestions operations.  **Processing time**  - &#x60;avg_processing_time&#x60;. Average processing time (in milliseconds). - &#x60;90p_processing_time&#x60;. 90th percentile of processing time (in milliseconds). - &#x60;99p_processing_time&#x60;. 99th percentile of processing time (in milliseconds). - &#x60;queries_above_last_ms_processing_time&#x60;. Number of queries that take one or more seconds to process.  **Indices**  - &#x60;records&#x60;. Number of records. - &#x60;data_size&#x60;. The size of the records (in bytes). - &#x60;file_size&#x60;. The size of the records _and_ index metadata (in bytes).  **Maximum queries per second**  - &#x60;max_qps&#x60;. [Maximum queries per second](https://support.algolia.com/hc/en-us/articles/4406975224721) per server. - &#x60;region_max_qps&#x60;. Maximum queries per second per region. - &#x60;total_max_qps&#x60;. Maximum queries per second across all servers.  **Used search capacity**  The following capacities are reported in percent:  - &#x60;used_search_capacity&#x60;. Maximum search capacity used per server. - &#x60;avg_used_search_capacity&#x60;. Average search capacity used per server. - &#x60;region_used_search_capacity&#x60;. Maximum search capacity used per region. - &#x60;region_avg_used_search_capacity&#x60;. Average search capacity used per region. - &#x60;total_used_search_capacity&#x60;. Maximum search capacity used for all servers. - &#x60;total_avg_used_search_capacity&#x60;. Average used search capacity for all servers.  **Degraded queries**  Check the impact of [degraded queries](https://support.algolia.com/hc/en-us/articles/4406981934481).  - &#x60;degraded_queries_ssd_used_queries_impacted&#x60;. Percentage of degraded queries due to the Algolia search engine having to read from the server&#39;s SSD. - &#x60;degraded_queries_ssd_used_seconds_impacted&#x60;. Percentage of seconds affected by &#x60;ssd_used&#x60; degraded queries. - &#x60;degraded_queries_max_capacity_queries_impacted&#x60;. Percentage of degraded queries due to all search threads being used. - &#x60;degraded_queries_max_capacity_seconds_impacted&#x60;. Percentage of seconds affected by &#x60;max_capacity&#x60; degraded queries. (required)
     * @param string $startDate      Start date of the period to analyze, in &#x60;YYYY-MM-DD&#x60; format. (required)
     * @param string $endDate        End date of the period to analyze, in &#x60;YYYY-MM-DD&#x60; format. (required)
     * @param array  $granularity    Granularity of the aggregated metrics.  - &#x60;hourly&#x60;: the maximum time range for hourly metrics is 7 days. - &#x60;daily&#x60;: the maximum time range for daily metrics is 365 days. (optional)
     * @param array  $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return \Algolia\AlgoliaSearch\Model\Usage\GetUsage200Response|array<string, mixed>
     */
    public function getUsage($statistic, $startDate, $endDate, $granularity = null, $requestOptions = [])
    {
        // verify the required parameter 'statistic' is set
        if (!isset($statistic)) {
            throw new \InvalidArgumentException(
                'Parameter `statistic` is required when calling `getUsage`.'
            );
        }
        // verify the required parameter 'startDate' is set
        if (!isset($startDate)) {
            throw new \InvalidArgumentException(
                'Parameter `startDate` is required when calling `getUsage`.'
            );
        }
        // verify the required parameter 'endDate' is set
        if (!isset($endDate)) {
            throw new \InvalidArgumentException(
                'Parameter `endDate` is required when calling `getUsage`.'
            );
        }

        $resourcePath = '/1/usage/{statistic}';
        $queryParameters = [];
        $headers = [];
        $httpBody = null;

        if (null !== $startDate) {
            $queryParameters['startDate'] = $startDate;
        }

        if (null !== $endDate) {
            $queryParameters['endDate'] = $endDate;
        }

        if (null !== $granularity) {
            $queryParameters['granularity'] = $granularity;
        }

        // path params
        if (null !== $statistic) {
            $resourcePath = str_replace(
                '{statistic}',
                ObjectSerializer::toPathValue($statistic),
                $resourcePath
            );
        }

        return $this->sendRequest('GET', $resourcePath, $headers, $queryParameters, $httpBody, $requestOptions);
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
        $query = Query::build($requestOptions['queryParameters']);

        return $this->api->sendRequest(
            $method,
            $resourcePath.($query ? "?{$query}" : ''),
            $httpBody,
            $requestOptions,
            $useReadTransporter
        );
    }
}
