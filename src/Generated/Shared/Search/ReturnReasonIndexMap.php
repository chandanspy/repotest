<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Generated\Shared\Search;

use Spryker\Shared\Search\AbstractIndexMap;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF SEARCH MAP GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ReturnReasonIndexMap extends AbstractIndexMap
{

    const SEARCH_RESULT_DATA = 'search-result-data';
    const TYPE = 'type';
    const LOCALE = 'locale';
    const FULL_TEXT_BOOSTED = 'full-text-boosted';
    const COMPLETION_TERMS = 'completion-terms';
    const SUGGESTION_TERMS = 'suggestion-terms';
    const STRING_SORT = 'string-sort';

    /**
     * @var array
     */
    protected $metadata = [
        self::SEARCH_RESULT_DATA => [
            'type' => 'object',
        ],
        self::TYPE => [
            'type' => 'keyword',
        ],
        self::LOCALE => [
            'type' => 'keyword',
        ],
        self::FULL_TEXT_BOOSTED => [
            'type' => 'text',
        ],
        self::COMPLETION_TERMS => [
            'type' => 'keyword',
            'normalizer' => 'lowercase_normalizer',
        ],
        self::SUGGESTION_TERMS => [
            'type' => 'text',
            'analyzer' => 'suggestion_analyzer',
        ],
        self::STRING_SORT => [
            'type' => 'object',
        ],
    ];

}
