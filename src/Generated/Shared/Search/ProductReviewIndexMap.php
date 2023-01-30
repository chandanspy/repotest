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
class ProductReviewIndexMap extends AbstractIndexMap
{

    const SEARCH_RESULT_DATA = 'search-result-data';
    const STORE = 'store';
    const LOCALE = 'locale';
    const ID_PRODUCT_ABSTRACT = 'id-product-abstract';
    const RATING = 'rating';
    const CREATED_AT = 'created-at';

    /**
     * @var array
     */
    protected $metadata = [
        self::SEARCH_RESULT_DATA => [
            'type' => 'object',
        ],
        self::STORE => [
            'type' => 'keyword',
        ],
        self::LOCALE => [
            'type' => 'keyword',
        ],
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'integer',
        ],
        self::RATING => [
            'type' => 'integer',
        ],
        self::CREATED_AT => [
            'type' => 'keyword',
        ],
    ];

}
