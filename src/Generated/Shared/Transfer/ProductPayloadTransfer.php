<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductPayloadTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const CATEGORIES = 'categories';

    /**
     * @var string
     */
    public const LABEL_IDS = 'labelIds';

    /**
     * @var string
     */
    public const PRODUCT_LISTS = 'productLists';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const AVERAGE_RATING = 'averageRating';

    /**
     * @var string
     */
    public const REVIEW_COUNT = 'reviewCount';

    /**
     * @var string
     */
    public const POPULARITY = 'popularity';

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var array
     */
    protected $categories = [];

    /**
     * @var array
     */
    protected $labelIds = [];

    /**
     * @var array
     */
    protected $productLists = [];

    /**
     * @var array
     */
    protected $images = [];

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var float|null
     */
    protected $averageRating;

    /**
     * @var int|null
     */
    protected $reviewCount;

    /**
     * @var int|null
     */
    protected $popularity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'categories' => 'categories',
        'Categories' => 'categories',
        'label_ids' => 'labelIds',
        'labelIds' => 'labelIds',
        'LabelIds' => 'labelIds',
        'product_lists' => 'productLists',
        'productLists' => 'productLists',
        'ProductLists' => 'productLists',
        'images' => 'images',
        'Images' => 'images',
        'prices' => 'prices',
        'Prices' => 'prices',
        'average_rating' => 'averageRating',
        'averageRating' => 'averageRating',
        'AverageRating' => 'averageRating',
        'review_count' => 'reviewCount',
        'reviewCount' => 'reviewCount',
        'ReviewCount' => 'reviewCount',
        'popularity' => 'popularity',
        'Popularity' => 'popularity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'categories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LABEL_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'label_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LISTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_lists',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'images',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'prices',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVERAGE_RATING => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'average_rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVIEW_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'review_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POPULARITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'popularity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductListSearch|ProductPageSearch|ProductReviewSearch|SalesProductConnector
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductListSearch|ProductPageSearch|ProductReviewSearch|SalesProductConnector
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductListSearch|ProductPageSearch|ProductReviewSearch|SalesProductConnector
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductListSearch|ProductPageSearch|ProductReviewSearch|SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module ProductCategorySearch|ProductLabelSearch|ProductListSearch|ProductPageSearch|ProductReviewSearch|SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param array|null $categories
     *
     * @return $this
     */
    public function setCategories(array $categories = null)
    {
        if ($categories === null) {
            $categories = [];
        }

        $this->categories = $categories;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @param mixed $categories
     *
     * @return $this
     */
    public function addCategories($categories)
    {
        $this->categories[] = $categories;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductCategorySearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategories()
    {
        $this->assertPropertyIsSet(self::CATEGORIES);

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @param array|null $labelIds
     *
     * @return $this
     */
    public function setLabelIds(array $labelIds = null)
    {
        if ($labelIds === null) {
            $labelIds = [];
        }

        $this->labelIds = $labelIds;
        $this->modifiedProperties[self::LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @return array
     */
    public function getLabelIds()
    {
        return $this->labelIds;
    }

    /**
     * @module ProductLabelSearch
     *
     * @param mixed $labelIds
     *
     * @return $this
     */
    public function addLabelIds($labelIds)
    {
        $this->labelIds[] = $labelIds;
        $this->modifiedProperties[self::LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabelIds()
    {
        $this->assertPropertyIsSet(self::LABEL_IDS);

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @param array|null $productLists
     *
     * @return $this
     */
    public function setProductLists(array $productLists = null)
    {
        if ($productLists === null) {
            $productLists = [];
        }

        $this->productLists = $productLists;
        $this->modifiedProperties[self::PRODUCT_LISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @return array
     */
    public function getProductLists()
    {
        return $this->productLists;
    }

    /**
     * @module ProductListSearch
     *
     * @param mixed $productLists
     *
     * @return $this
     */
    public function addProductLists($productLists)
    {
        $this->productLists[] = $productLists;
        $this->modifiedProperties[self::PRODUCT_LISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLists()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LISTS);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param array|null $images
     *
     * @return $this
     */
    public function setImages(array $images = null)
    {
        if ($images === null) {
            $images = [];
        }

        $this->images = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $images
     *
     * @return $this
     */
    public function addImages($images)
    {
        $this->images[] = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImages()
    {
        $this->assertPropertyIsSet(self::IMAGES);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param array|null $prices
     *
     * @return $this
     */
    public function setPrices(array $prices = null)
    {
        if ($prices === null) {
            $prices = [];
        }

        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $prices
     *
     * @return $this
     */
    public function addPrices($prices)
    {
        $this->prices[] = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module ProductReviewSearch
     *
     * @param float|null $averageRating
     *
     * @return $this
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
        $this->modifiedProperties[self::AVERAGE_RATING] = true;

        return $this;
    }

    /**
     * @module ProductReviewSearch
     *
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @module ProductReviewSearch
     *
     * @param float|null $averageRating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAverageRatingOrFail($averageRating)
    {
        if ($averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->setAverageRating($averageRating);
    }

    /**
     * @module ProductReviewSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getAverageRatingOrFail()
    {
        if ($this->averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->averageRating;
    }

    /**
     * @module ProductReviewSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAverageRating()
    {
        $this->assertPropertyIsSet(self::AVERAGE_RATING);

        return $this;
    }

    /**
     * @module ProductReviewSearch
     *
     * @param int|null $reviewCount
     *
     * @return $this
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        $this->modifiedProperties[self::REVIEW_COUNT] = true;

        return $this;
    }

    /**
     * @module ProductReviewSearch
     *
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @module ProductReviewSearch
     *
     * @param int|null $reviewCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReviewCountOrFail($reviewCount)
    {
        if ($reviewCount === null) {
            $this->throwNullValueException(static::REVIEW_COUNT);
        }

        return $this->setReviewCount($reviewCount);
    }

    /**
     * @module ProductReviewSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getReviewCountOrFail()
    {
        if ($this->reviewCount === null) {
            $this->throwNullValueException(static::REVIEW_COUNT);
        }

        return $this->reviewCount;
    }

    /**
     * @module ProductReviewSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReviewCount()
    {
        $this->assertPropertyIsSet(self::REVIEW_COUNT);

        return $this;
    }

    /**
     * @module SalesProductConnector
     *
     * @param int|null $popularity
     *
     * @return $this
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
        $this->modifiedProperties[self::POPULARITY] = true;

        return $this;
    }

    /**
     * @module SalesProductConnector
     *
     * @return int|null
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @module SalesProductConnector
     *
     * @param int|null $popularity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPopularityOrFail($popularity)
    {
        if ($popularity === null) {
            $this->throwNullValueException(static::POPULARITY);
        }

        return $this->setPopularity($popularity);
    }

    /**
     * @module SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPopularityOrFail()
    {
        if ($this->popularity === null) {
            $this->throwNullValueException(static::POPULARITY);
        }

        return $this->popularity;
    }

    /**
     * @module SalesProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePopularity()
    {
        $this->assertPropertyIsSet(self::POPULARITY);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'idProductAbstract':
                case 'categories':
                case 'labelIds':
                case 'productLists':
                case 'images':
                case 'prices':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'idProductAbstract':
                case 'categories':
                case 'labelIds':
                case 'productLists':
                case 'images':
                case 'prices':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'idProductAbstract':
                case 'categories':
                case 'labelIds':
                case 'productLists':
                case 'images':
                case 'prices':
                case 'averageRating':
                case 'reviewCount':
                case 'popularity':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract,
            'categories' => $this->categories,
            'labelIds' => $this->labelIds,
            'productLists' => $this->productLists,
            'images' => $this->images,
            'prices' => $this->prices,
            'averageRating' => $this->averageRating,
            'reviewCount' => $this->reviewCount,
            'popularity' => $this->popularity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract,
            'categories' => $this->categories,
            'label_ids' => $this->labelIds,
            'product_lists' => $this->productLists,
            'images' => $this->images,
            'prices' => $this->prices,
            'average_rating' => $this->averageRating,
            'review_count' => $this->reviewCount,
            'popularity' => $this->popularity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, false) : $this->categories,
            'label_ids' => $this->labelIds instanceof AbstractTransfer ? $this->labelIds->toArray(true, false) : $this->labelIds,
            'product_lists' => $this->productLists instanceof AbstractTransfer ? $this->productLists->toArray(true, false) : $this->productLists,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->images,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'average_rating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, false) : $this->averageRating,
            'review_count' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, false) : $this->reviewCount,
            'popularity' => $this->popularity instanceof AbstractTransfer ? $this->popularity->toArray(true, false) : $this->popularity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, true) : $this->categories,
            'labelIds' => $this->labelIds instanceof AbstractTransfer ? $this->labelIds->toArray(true, true) : $this->labelIds,
            'productLists' => $this->productLists instanceof AbstractTransfer ? $this->productLists->toArray(true, true) : $this->productLists,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->images,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'averageRating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, true) : $this->averageRating,
            'reviewCount' => $this->reviewCount instanceof AbstractTransfer ? $this->reviewCount->toArray(true, true) : $this->reviewCount,
            'popularity' => $this->popularity instanceof AbstractTransfer ? $this->popularity->toArray(true, true) : $this->popularity,
        ];
    }
}
