<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Recommend;

/**
 * ExactOnSingleWordQuery Class Doc Comment.
 *
 * @category Class
 *
 * @description Determines how the [Exact ranking criterion](https://www.algolia.com/doc/guides/managing-results/optimize-search-results/override-search-engine-defaults/in-depth/adjust-exact-settings/#turn-off-exact-for-some-attributes) is computed when the search query has only one word.  - &#x60;attribute&#x60;.   The Exact ranking criterion is 1 if the query word and attribute value are the same.   For example, a search for \&quot;road\&quot; will match the value \&quot;road\&quot;, but not \&quot;road trip\&quot;.  - &#x60;none&#x60;.   The Exact ranking criterion is ignored on single-word searches.  - &#x60;word&#x60;.   The Exact ranking criterion is 1 if the query word is found in the attribute value.   The query word must have at least 3 characters and must not be a stop word.   Only exact matches will be highlighted,   partial and prefix matches won&#39;t.
 */
class ExactOnSingleWordQuery
{
    /**
     * Possible values of this enum.
     */
    public const ATTRIBUTE = 'attribute';

    public const NONE = 'none';

    public const WORD = 'word';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ATTRIBUTE,
            self::NONE,
            self::WORD,
        ];
    }
}
