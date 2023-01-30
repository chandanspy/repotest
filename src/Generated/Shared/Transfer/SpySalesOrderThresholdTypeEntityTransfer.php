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
class SpySalesOrderThresholdTypeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_THRESHOLD_TYPE = 'idSalesOrderThresholdType';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const THRESHOLD_GROUP = 'thresholdGroup';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS = 'spyMerchantRelationshipSalesOrderThresholds';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_THRESHOLDS = 'spySalesOrderThresholds';

    /**
     * @var integer|null
     */
    protected $idSalesOrderThresholdType;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $thresholdGroup;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    protected $spyMerchantRelationshipSalesOrderThresholds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[]
     */
    protected $spySalesOrderThresholds;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_threshold_type' => 'idSalesOrderThresholdType',
        'idSalesOrderThresholdType' => 'idSalesOrderThresholdType',
        'IdSalesOrderThresholdType' => 'idSalesOrderThresholdType',
        'key' => 'key',
        'Key' => 'key',
        'threshold_group' => 'thresholdGroup',
        'thresholdGroup' => 'thresholdGroup',
        'ThresholdGroup' => 'thresholdGroup',
        'spy_merchant_relationship_sales_order_thresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'SpyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spy_sales_order_thresholds' => 'spySalesOrderThresholds',
        'spySalesOrderThresholds' => 'spySalesOrderThresholds',
        'SpySalesOrderThresholds' => 'spySalesOrderThresholds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_THRESHOLD_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_threshold_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::THRESHOLD_GROUP => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'threshold_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship_sales_order_thresholds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_thresholds',
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
    public static $entityNamespace = 'Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdType';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThresholdType
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdType($idSalesOrderThresholdType)
    {
        $this->idSalesOrderThresholdType = $idSalesOrderThresholdType;
        $this->modifiedProperties[self::ID_SALES_ORDER_THRESHOLD_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderThresholdType()
    {
        return $this->idSalesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThresholdType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdTypeOrFail($idSalesOrderThresholdType)
    {
        if ($idSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->setIdSalesOrderThresholdType($idSalesOrderThresholdType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderThresholdTypeOrFail()
    {
        if ($this->idSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->idSalesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderThresholdType()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_THRESHOLD_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $thresholdGroup
     *
     * @return $this
     */
    public function setThresholdGroup($thresholdGroup)
    {
        $this->thresholdGroup = $thresholdGroup;
        $this->modifiedProperties[self::THRESHOLD_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getThresholdGroup()
    {
        return $this->thresholdGroup;
    }

    /**
     * @module 
     *
     * @param string|null $thresholdGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setThresholdGroupOrFail($thresholdGroup)
    {
        if ($thresholdGroup === null) {
            $this->throwNullValueException(static::THRESHOLD_GROUP);
        }

        return $this->setThresholdGroup($thresholdGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getThresholdGroupOrFail()
    {
        if ($this->thresholdGroup === null) {
            $this->throwNullValueException(static::THRESHOLD_GROUP);
        }

        return $this->thresholdGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireThresholdGroup()
    {
        $this->assertPropertyIsSet(self::THRESHOLD_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[] $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipSalesOrderThresholds(ArrayObject $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    public function getSpyMerchantRelationshipSalesOrderThresholds()
    {
        return $this->spyMerchantRelationshipSalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function addSpyMerchantRelationshipSalesOrderThresholds(SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds[] = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationshipSalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[] $spySalesOrderThresholds
     *
     * @return $this
     */
    public function setSpySalesOrderThresholds(ArrayObject $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer[]
     */
    public function getSpySalesOrderThresholds()
    {
        return $this->spySalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds
     *
     * @return $this
     */
    public function addSpySalesOrderThresholds(SpySalesOrderThresholdEntityTransfer $spySalesOrderThresholds)
    {
        $this->spySalesOrderThresholds[] = $spySalesOrderThresholds;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_THRESHOLDS);

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
                case 'idSalesOrderThresholdType':
                case 'key':
                case 'thresholdGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spySalesOrderThresholds':
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
                case 'idSalesOrderThresholdType':
                case 'key':
                case 'thresholdGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spySalesOrderThresholds':
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
                case 'idSalesOrderThresholdType':
                case 'key':
                case 'thresholdGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spySalesOrderThresholds':
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
        $this->spyMerchantRelationshipSalesOrderThresholds = $this->spyMerchantRelationshipSalesOrderThresholds ?: new ArrayObject();
        $this->spySalesOrderThresholds = $this->spySalesOrderThresholds ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderThresholdType' => $this->idSalesOrderThresholdType,
            'key' => $this->key,
            'thresholdGroup' => $this->thresholdGroup,
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold_type' => $this->idSalesOrderThresholdType,
            'key' => $this->key,
            'threshold_group' => $this->thresholdGroup,
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold_type' => $this->idSalesOrderThresholdType instanceof AbstractTransfer ? $this->idSalesOrderThresholdType->toArray(true, false) : $this->idSalesOrderThresholdType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'threshold_group' => $this->thresholdGroup instanceof AbstractTransfer ? $this->thresholdGroup->toArray(true, false) : $this->thresholdGroup,
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, false),
            'spy_sales_order_thresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderThresholdType' => $this->idSalesOrderThresholdType instanceof AbstractTransfer ? $this->idSalesOrderThresholdType->toArray(true, true) : $this->idSalesOrderThresholdType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'thresholdGroup' => $this->thresholdGroup instanceof AbstractTransfer ? $this->thresholdGroup->toArray(true, true) : $this->thresholdGroup,
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, true),
            'spySalesOrderThresholds' => $this->spySalesOrderThresholds instanceof AbstractTransfer ? $this->spySalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderThresholds, true, true),
        ];
    }
}
