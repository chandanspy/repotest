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
class ProductAbstractDataFeedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const JOIN_PRICE = 'joinPrice';

    /**
     * @var string
     */
    public const JOIN_CATEGORY = 'joinCategory';

    /**
     * @var string
     */
    public const JOIN_IMAGE = 'joinImage';

    /**
     * @var string
     */
    public const JOIN_PRODUCT = 'joinProduct';

    /**
     * @var string
     */
    public const JOIN_OPTION = 'joinOption';

    /**
     * @var string
     */
    public const USE_ONLY_ACTIVE_STOCK = 'useOnlyActiveStock';

    /**
     * @var string
     */
    public const UPDATED_FROM = 'updatedFrom';

    /**
     * @var string
     */
    public const UPDATED_TO = 'updatedTo';

    /**
     * @var string
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var bool|null
     */
    protected $joinPrice;

    /**
     * @var bool|null
     */
    protected $joinCategory;

    /**
     * @var bool|null
     */
    protected $joinImage;

    /**
     * @var bool|null
     */
    protected $joinProduct;

    /**
     * @var bool|null
     */
    protected $joinOption;

    /**
     * @var bool|null
     */
    protected $useOnlyActiveStock;

    /**
     * @var string|null
     */
    protected $updatedFrom;

    /**
     * @var string|null
     */
    protected $updatedTo;

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'join_price' => 'joinPrice',
        'joinPrice' => 'joinPrice',
        'JoinPrice' => 'joinPrice',
        'join_category' => 'joinCategory',
        'joinCategory' => 'joinCategory',
        'JoinCategory' => 'joinCategory',
        'join_image' => 'joinImage',
        'joinImage' => 'joinImage',
        'JoinImage' => 'joinImage',
        'join_product' => 'joinProduct',
        'joinProduct' => 'joinProduct',
        'JoinProduct' => 'joinProduct',
        'join_option' => 'joinOption',
        'joinOption' => 'joinOption',
        'JoinOption' => 'joinOption',
        'use_only_active_stock' => 'useOnlyActiveStock',
        'useOnlyActiveStock' => 'useOnlyActiveStock',
        'UseOnlyActiveStock' => 'useOnlyActiveStock',
        'updated_from' => 'updatedFrom',
        'updatedFrom' => 'updatedFrom',
        'UpdatedFrom' => 'updatedFrom',
        'updated_to' => 'updatedTo',
        'updatedTo' => 'updatedTo',
        'UpdatedTo' => 'updatedTo',
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::JOIN_PRICE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'join_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOIN_CATEGORY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'join_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOIN_IMAGE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'join_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOIN_PRODUCT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'join_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOIN_OPTION => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'join_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USE_ONLY_ACTIVE_STOCK => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'use_only_active_stock',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_locale',
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
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinPrice
     *
     * @return $this
     */
    public function setJoinPrice($joinPrice)
    {
        $this->joinPrice = $joinPrice;
        $this->modifiedProperties[self::JOIN_PRICE] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getJoinPrice()
    {
        return $this->joinPrice;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinPriceOrFail($joinPrice)
    {
        if ($joinPrice === null) {
            $this->throwNullValueException(static::JOIN_PRICE);
        }

        return $this->setJoinPrice($joinPrice);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getJoinPriceOrFail()
    {
        if ($this->joinPrice === null) {
            $this->throwNullValueException(static::JOIN_PRICE);
        }

        return $this->joinPrice;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinPrice()
    {
        $this->assertPropertyIsSet(self::JOIN_PRICE);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinCategory
     *
     * @return $this
     */
    public function setJoinCategory($joinCategory)
    {
        $this->joinCategory = $joinCategory;
        $this->modifiedProperties[self::JOIN_CATEGORY] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getJoinCategory()
    {
        return $this->joinCategory;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinCategoryOrFail($joinCategory)
    {
        if ($joinCategory === null) {
            $this->throwNullValueException(static::JOIN_CATEGORY);
        }

        return $this->setJoinCategory($joinCategory);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getJoinCategoryOrFail()
    {
        if ($this->joinCategory === null) {
            $this->throwNullValueException(static::JOIN_CATEGORY);
        }

        return $this->joinCategory;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinCategory()
    {
        $this->assertPropertyIsSet(self::JOIN_CATEGORY);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinImage
     *
     * @return $this
     */
    public function setJoinImage($joinImage)
    {
        $this->joinImage = $joinImage;
        $this->modifiedProperties[self::JOIN_IMAGE] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getJoinImage()
    {
        return $this->joinImage;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinImageOrFail($joinImage)
    {
        if ($joinImage === null) {
            $this->throwNullValueException(static::JOIN_IMAGE);
        }

        return $this->setJoinImage($joinImage);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getJoinImageOrFail()
    {
        if ($this->joinImage === null) {
            $this->throwNullValueException(static::JOIN_IMAGE);
        }

        return $this->joinImage;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinImage()
    {
        $this->assertPropertyIsSet(self::JOIN_IMAGE);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinProduct
     *
     * @return $this
     */
    public function setJoinProduct($joinProduct)
    {
        $this->joinProduct = $joinProduct;
        $this->modifiedProperties[self::JOIN_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getJoinProduct()
    {
        return $this->joinProduct;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinProductOrFail($joinProduct)
    {
        if ($joinProduct === null) {
            $this->throwNullValueException(static::JOIN_PRODUCT);
        }

        return $this->setJoinProduct($joinProduct);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getJoinProductOrFail()
    {
        if ($this->joinProduct === null) {
            $this->throwNullValueException(static::JOIN_PRODUCT);
        }

        return $this->joinProduct;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinProduct()
    {
        $this->assertPropertyIsSet(self::JOIN_PRODUCT);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinOption
     *
     * @return $this
     */
    public function setJoinOption($joinOption)
    {
        $this->joinOption = $joinOption;
        $this->modifiedProperties[self::JOIN_OPTION] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getJoinOption()
    {
        return $this->joinOption;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $joinOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setJoinOptionOrFail($joinOption)
    {
        if ($joinOption === null) {
            $this->throwNullValueException(static::JOIN_OPTION);
        }

        return $this->setJoinOption($joinOption);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getJoinOptionOrFail()
    {
        if ($this->joinOption === null) {
            $this->throwNullValueException(static::JOIN_OPTION);
        }

        return $this->joinOption;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJoinOption()
    {
        $this->assertPropertyIsSet(self::JOIN_OPTION);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $useOnlyActiveStock
     *
     * @return $this
     */
    public function setUseOnlyActiveStock($useOnlyActiveStock)
    {
        $this->useOnlyActiveStock = $useOnlyActiveStock;
        $this->modifiedProperties[self::USE_ONLY_ACTIVE_STOCK] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return bool|null
     */
    public function getUseOnlyActiveStock()
    {
        return $this->useOnlyActiveStock;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param bool|null $useOnlyActiveStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUseOnlyActiveStockOrFail($useOnlyActiveStock)
    {
        if ($useOnlyActiveStock === null) {
            $this->throwNullValueException(static::USE_ONLY_ACTIVE_STOCK);
        }

        return $this->setUseOnlyActiveStock($useOnlyActiveStock);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getUseOnlyActiveStockOrFail()
    {
        if ($this->useOnlyActiveStock === null) {
            $this->throwNullValueException(static::USE_ONLY_ACTIVE_STOCK);
        }

        return $this->useOnlyActiveStock;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUseOnlyActiveStock()
    {
        $this->assertPropertyIsSet(self::USE_ONLY_ACTIVE_STOCK);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param string|null $updatedFrom
     *
     * @return $this
     */
    public function setUpdatedFrom($updatedFrom)
    {
        $this->updatedFrom = $updatedFrom;
        $this->modifiedProperties[self::UPDATED_FROM] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return string|null
     */
    public function getUpdatedFrom()
    {
        return $this->updatedFrom;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param string|null $updatedFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedFromOrFail($updatedFrom)
    {
        if ($updatedFrom === null) {
            $this->throwNullValueException(static::UPDATED_FROM);
        }

        return $this->setUpdatedFrom($updatedFrom);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedFromOrFail()
    {
        if ($this->updatedFrom === null) {
            $this->throwNullValueException(static::UPDATED_FROM);
        }

        return $this->updatedFrom;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedFrom()
    {
        $this->assertPropertyIsSet(self::UPDATED_FROM);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param string|null $updatedTo
     *
     * @return $this
     */
    public function setUpdatedTo($updatedTo)
    {
        $this->updatedTo = $updatedTo;
        $this->modifiedProperties[self::UPDATED_TO] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return string|null
     */
    public function getUpdatedTo()
    {
        return $this->updatedTo;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param string|null $updatedTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedToOrFail($updatedTo)
    {
        if ($updatedTo === null) {
            $this->throwNullValueException(static::UPDATED_TO);
        }

        return $this->setUpdatedTo($updatedTo);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedToOrFail()
    {
        if ($this->updatedTo === null) {
            $this->throwNullValueException(static::UPDATED_TO);
        }

        return $this->updatedTo;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedTo()
    {
        $this->assertPropertyIsSet(self::UPDATED_TO);

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param int|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @param int|null $idLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocaleOrFail($idLocale)
    {
        if ($idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->setIdLocale($idLocale);
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdLocaleOrFail()
    {
        if ($this->idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->idLocale;
    }

    /**
     * @module ProductAbstractDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLocale()
    {
        $this->assertPropertyIsSet(self::ID_LOCALE);

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
                case 'joinPrice':
                case 'joinCategory':
                case 'joinImage':
                case 'joinProduct':
                case 'joinOption':
                case 'useOnlyActiveStock':
                case 'updatedFrom':
                case 'updatedTo':
                case 'idLocale':
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
                case 'joinPrice':
                case 'joinCategory':
                case 'joinImage':
                case 'joinProduct':
                case 'joinOption':
                case 'useOnlyActiveStock':
                case 'updatedFrom':
                case 'updatedTo':
                case 'idLocale':
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
                case 'joinPrice':
                case 'joinCategory':
                case 'joinImage':
                case 'joinProduct':
                case 'joinOption':
                case 'useOnlyActiveStock':
                case 'updatedFrom':
                case 'updatedTo':
                case 'idLocale':
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
            'joinPrice' => $this->joinPrice,
            'joinCategory' => $this->joinCategory,
            'joinImage' => $this->joinImage,
            'joinProduct' => $this->joinProduct,
            'joinOption' => $this->joinOption,
            'useOnlyActiveStock' => $this->useOnlyActiveStock,
            'updatedFrom' => $this->updatedFrom,
            'updatedTo' => $this->updatedTo,
            'idLocale' => $this->idLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'join_price' => $this->joinPrice,
            'join_category' => $this->joinCategory,
            'join_image' => $this->joinImage,
            'join_product' => $this->joinProduct,
            'join_option' => $this->joinOption,
            'use_only_active_stock' => $this->useOnlyActiveStock,
            'updated_from' => $this->updatedFrom,
            'updated_to' => $this->updatedTo,
            'id_locale' => $this->idLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'join_price' => $this->joinPrice instanceof AbstractTransfer ? $this->joinPrice->toArray(true, false) : $this->joinPrice,
            'join_category' => $this->joinCategory instanceof AbstractTransfer ? $this->joinCategory->toArray(true, false) : $this->joinCategory,
            'join_image' => $this->joinImage instanceof AbstractTransfer ? $this->joinImage->toArray(true, false) : $this->joinImage,
            'join_product' => $this->joinProduct instanceof AbstractTransfer ? $this->joinProduct->toArray(true, false) : $this->joinProduct,
            'join_option' => $this->joinOption instanceof AbstractTransfer ? $this->joinOption->toArray(true, false) : $this->joinOption,
            'use_only_active_stock' => $this->useOnlyActiveStock instanceof AbstractTransfer ? $this->useOnlyActiveStock->toArray(true, false) : $this->useOnlyActiveStock,
            'updated_from' => $this->updatedFrom instanceof AbstractTransfer ? $this->updatedFrom->toArray(true, false) : $this->updatedFrom,
            'updated_to' => $this->updatedTo instanceof AbstractTransfer ? $this->updatedTo->toArray(true, false) : $this->updatedTo,
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'joinPrice' => $this->joinPrice instanceof AbstractTransfer ? $this->joinPrice->toArray(true, true) : $this->joinPrice,
            'joinCategory' => $this->joinCategory instanceof AbstractTransfer ? $this->joinCategory->toArray(true, true) : $this->joinCategory,
            'joinImage' => $this->joinImage instanceof AbstractTransfer ? $this->joinImage->toArray(true, true) : $this->joinImage,
            'joinProduct' => $this->joinProduct instanceof AbstractTransfer ? $this->joinProduct->toArray(true, true) : $this->joinProduct,
            'joinOption' => $this->joinOption instanceof AbstractTransfer ? $this->joinOption->toArray(true, true) : $this->joinOption,
            'useOnlyActiveStock' => $this->useOnlyActiveStock instanceof AbstractTransfer ? $this->useOnlyActiveStock->toArray(true, true) : $this->useOnlyActiveStock,
            'updatedFrom' => $this->updatedFrom instanceof AbstractTransfer ? $this->updatedFrom->toArray(true, true) : $this->updatedFrom,
            'updatedTo' => $this->updatedTo instanceof AbstractTransfer ? $this->updatedTo->toArray(true, true) : $this->updatedTo,
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
        ];
    }
}
