<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductOptionValueEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_VALUE = 'idProductOptionValue';

    /**
     * @var string
     */
    public const FK_PRODUCT_OPTION_GROUP = 'fkProductOptionGroup';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_GROUP = 'spyProductOptionGroup';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_VALUE_PRICES = 'spyProductOptionValuePrices';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PRODUCT_OPTIONS = 'spyShoppingListProductOptions';

    /**
     * @var integer|null
     */
    protected $idProductOptionValue;

    /**
     * @var integer|null
     */
    protected $fkProductOptionGroup;

    /**
     * @var integer|null
     */
    protected $price;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer|null
     */
    protected $spyProductOptionGroup;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[]
     */
    protected $spyProductOptionValuePrices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[]
     */
    protected $spyShoppingListProductOptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_option_value' => 'idProductOptionValue',
        'idProductOptionValue' => 'idProductOptionValue',
        'IdProductOptionValue' => 'idProductOptionValue',
        'fk_product_option_group' => 'fkProductOptionGroup',
        'fkProductOptionGroup' => 'fkProductOptionGroup',
        'FkProductOptionGroup' => 'fkProductOptionGroup',
        'price' => 'price',
        'Price' => 'price',
        'sku' => 'sku',
        'Sku' => 'sku',
        'value' => 'value',
        'Value' => 'value',
        'spy_product_option_group' => 'spyProductOptionGroup',
        'spyProductOptionGroup' => 'spyProductOptionGroup',
        'SpyProductOptionGroup' => 'spyProductOptionGroup',
        'spy_product_option_value_prices' => 'spyProductOptionValuePrices',
        'spyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'SpyProductOptionValuePrices' => 'spyProductOptionValuePrices',
        'spy_shopping_list_product_options' => 'spyShoppingListProductOptions',
        'spyShoppingListProductOptions' => 'spyShoppingListProductOptions',
        'SpyShoppingListProductOptions' => 'spyShoppingListProductOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_OPTION_VALUE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_option_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_OPTION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_option_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_VALUE_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_value_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_product_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductOption\Persistence\SpyProductOptionValue';


    /**
     * @module 
     *
     * @param integer|null $idProductOptionValue
     *
     * @return $this
     */
    public function setIdProductOptionValue($idProductOptionValue)
    {
        $this->idProductOptionValue = $idProductOptionValue;
        $this->modifiedProperties[self::ID_PRODUCT_OPTION_VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductOptionValue()
    {
        return $this->idProductOptionValue;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductOptionValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOptionValueOrFail($idProductOptionValue)
    {
        if ($idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->setIdProductOptionValue($idProductOptionValue);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductOptionValueOrFail()
    {
        if ($this->idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->idProductOptionValue;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductOptionValue()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_OPTION_VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductOptionGroup
     *
     * @return $this
     */
    public function setFkProductOptionGroup($fkProductOptionGroup)
    {
        $this->fkProductOptionGroup = $fkProductOptionGroup;
        $this->modifiedProperties[self::FK_PRODUCT_OPTION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductOptionGroup()
    {
        return $this->fkProductOptionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductOptionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOptionGroupOrFail($fkProductOptionGroup)
    {
        if ($fkProductOptionGroup === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_GROUP);
        }

        return $this->setFkProductOptionGroup($fkProductOptionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOptionGroupOrFail()
    {
        if ($this->fkProductOptionGroup === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_GROUP);
        }

        return $this->fkProductOptionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductOptionGroup()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_OPTION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module 
     *
     * @param integer|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module 
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer|null $spyProductOptionGroup
     *
     * @return $this
     */
    public function setSpyProductOptionGroup(SpyProductOptionGroupEntityTransfer $spyProductOptionGroup = null)
    {
        $this->spyProductOptionGroup = $spyProductOptionGroup;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer|null
     */
    public function getSpyProductOptionGroup()
    {
        return $this->spyProductOptionGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer $spyProductOptionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductOptionGroupOrFail(SpyProductOptionGroupEntityTransfer $spyProductOptionGroup)
    {
        return $this->setSpyProductOptionGroup($spyProductOptionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer
     */
    public function getSpyProductOptionGroupOrFail()
    {
        if ($this->spyProductOptionGroup === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_OPTION_GROUP);
        }

        return $this->spyProductOptionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionGroup()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_OPTION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[] $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function setSpyProductOptionValuePrices(ArrayObject $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer[]
     */
    public function getSpyProductOptionValuePrices()
    {
        return $this->spyProductOptionValuePrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices
     *
     * @return $this
     */
    public function addSpyProductOptionValuePrices(SpyProductOptionValuePriceEntityTransfer $spyProductOptionValuePrices)
    {
        $this->spyProductOptionValuePrices[] = $spyProductOptionValuePrices;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionValuePrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_OPTION_VALUE_PRICES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[] $spyShoppingListProductOptions
     *
     * @return $this
     */
    public function setSpyShoppingListProductOptions(ArrayObject $spyShoppingListProductOptions)
    {
        $this->spyShoppingListProductOptions = $spyShoppingListProductOptions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[]
     */
    public function getSpyShoppingListProductOptions()
    {
        return $this->spyShoppingListProductOptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer $spyShoppingListProductOptions
     *
     * @return $this
     */
    public function addSpyShoppingListProductOptions(SpyShoppingListProductOptionEntityTransfer $spyShoppingListProductOptions)
    {
        $this->spyShoppingListProductOptions[] = $spyShoppingListProductOptions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListProductOptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS);

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
                case 'idProductOptionValue':
                case 'fkProductOptionGroup':
                case 'price':
                case 'sku':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductOptionGroup':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyShoppingListProductOptions':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idProductOptionValue':
                case 'fkProductOptionGroup':
                case 'price':
                case 'sku':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductOptionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyShoppingListProductOptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idProductOptionValue':
                case 'fkProductOptionGroup':
                case 'price':
                case 'sku':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductOptionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductOptionValuePrices':
                case 'spyShoppingListProductOptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyProductOptionValuePrices = $this->spyProductOptionValuePrices ?: new ArrayObject();
        $this->spyShoppingListProductOptions = $this->spyShoppingListProductOptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductOptionValue' => $this->idProductOptionValue,
            'fkProductOptionGroup' => $this->fkProductOptionGroup,
            'price' => $this->price,
            'sku' => $this->sku,
            'value' => $this->value,
            'spyProductOptionGroup' => $this->spyProductOptionGroup,
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices,
            'spyShoppingListProductOptions' => $this->spyShoppingListProductOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue,
            'fk_product_option_group' => $this->fkProductOptionGroup,
            'price' => $this->price,
            'sku' => $this->sku,
            'value' => $this->value,
            'spy_product_option_group' => $this->spyProductOptionGroup,
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices,
            'spy_shopping_list_product_options' => $this->spyShoppingListProductOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, false) : $this->idProductOptionValue,
            'fk_product_option_group' => $this->fkProductOptionGroup instanceof AbstractTransfer ? $this->fkProductOptionGroup->toArray(true, false) : $this->fkProductOptionGroup,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'spy_product_option_group' => $this->spyProductOptionGroup instanceof AbstractTransfer ? $this->spyProductOptionGroup->toArray(true, false) : $this->spyProductOptionGroup,
            'spy_product_option_value_prices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, false) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, false),
            'spy_shopping_list_product_options' => $this->spyShoppingListProductOptions instanceof AbstractTransfer ? $this->spyShoppingListProductOptions->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListProductOptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductOptionValue' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, true) : $this->idProductOptionValue,
            'fkProductOptionGroup' => $this->fkProductOptionGroup instanceof AbstractTransfer ? $this->fkProductOptionGroup->toArray(true, true) : $this->fkProductOptionGroup,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'spyProductOptionGroup' => $this->spyProductOptionGroup instanceof AbstractTransfer ? $this->spyProductOptionGroup->toArray(true, true) : $this->spyProductOptionGroup,
            'spyProductOptionValuePrices' => $this->spyProductOptionValuePrices instanceof AbstractTransfer ? $this->spyProductOptionValuePrices->toArray(true, true) : $this->addValuesToCollection($this->spyProductOptionValuePrices, true, true),
            'spyShoppingListProductOptions' => $this->spyShoppingListProductOptions instanceof AbstractTransfer ? $this->spyShoppingListProductOptions->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListProductOptions, true, true),
        ];
    }
}
