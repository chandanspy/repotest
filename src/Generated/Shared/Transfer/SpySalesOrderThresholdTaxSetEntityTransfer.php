<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesOrderThresholdTaxSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_THRESHOLD_TAX_SET = 'idSalesOrderThresholdTaxSet';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const TAX_SET = 'taxSet';

    /**
     * @var integer|null
     */
    protected $idSalesOrderThresholdTaxSet;

    /**
     * @var integer|null
     */
    protected $fkTaxSet;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    protected $taxSet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_threshold_tax_set' => 'idSalesOrderThresholdTaxSet',
        'idSalesOrderThresholdTaxSet' => 'idSalesOrderThresholdTaxSet',
        'IdSalesOrderThresholdTaxSet' => 'idSalesOrderThresholdTaxSet',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'tax_set' => 'taxSet',
        'taxSet' => 'taxSet',
        'TaxSet' => 'taxSet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_THRESHOLD_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_threshold_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_SET => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_set',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdTaxSet';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThresholdTaxSet
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdTaxSet($idSalesOrderThresholdTaxSet)
    {
        $this->idSalesOrderThresholdTaxSet = $idSalesOrderThresholdTaxSet;
        $this->modifiedProperties[self::ID_SALES_ORDER_THRESHOLD_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderThresholdTaxSet()
    {
        return $this->idSalesOrderThresholdTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThresholdTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdTaxSetOrFail($idSalesOrderThresholdTaxSet)
    {
        if ($idSalesOrderThresholdTaxSet === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TAX_SET);
        }

        return $this->setIdSalesOrderThresholdTaxSet($idSalesOrderThresholdTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderThresholdTaxSetOrFail()
    {
        if ($this->idSalesOrderThresholdTaxSet === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD_TAX_SET);
        }

        return $this->idSalesOrderThresholdTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderThresholdTaxSet()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_THRESHOLD_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @return $this
     */
    public function setFkTaxSet($fkTaxSet)
    {
        $this->fkTaxSet = $fkTaxSet;
        $this->modifiedProperties[self::FK_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxSetOrFail($fkTaxSet)
    {
        if ($fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->setFkTaxSet($fkTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxSet()
    {
        $this->assertPropertyIsSet(self::FK_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null $taxSet
     *
     * @return $this
     */
    public function setTaxSet(SpyTaxSetEntityTransfer $taxSet = null)
    {
        $this->taxSet = $taxSet;
        $this->modifiedProperties[self::TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    public function getTaxSet()
    {
        return $this->taxSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer $taxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxSetOrFail(SpyTaxSetEntityTransfer $taxSet)
    {
        return $this->setTaxSet($taxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer
     */
    public function getTaxSetOrFail()
    {
        if ($this->taxSet === null) {
            $this->throwNullValueException(static::TAX_SET);
        }

        return $this->taxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxSet()
    {
        $this->assertPropertyIsSet(self::TAX_SET);

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
                case 'idSalesOrderThresholdTaxSet':
                case 'fkTaxSet':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxSet':
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
                case 'idSalesOrderThresholdTaxSet':
                case 'fkTaxSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idSalesOrderThresholdTaxSet':
                case 'fkTaxSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idSalesOrderThresholdTaxSet' => $this->idSalesOrderThresholdTaxSet,
            'fkTaxSet' => $this->fkTaxSet,
            'taxSet' => $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold_tax_set' => $this->idSalesOrderThresholdTaxSet,
            'fk_tax_set' => $this->fkTaxSet,
            'tax_set' => $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold_tax_set' => $this->idSalesOrderThresholdTaxSet instanceof AbstractTransfer ? $this->idSalesOrderThresholdTaxSet->toArray(true, false) : $this->idSalesOrderThresholdTaxSet,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'tax_set' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, false) : $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderThresholdTaxSet' => $this->idSalesOrderThresholdTaxSet instanceof AbstractTransfer ? $this->idSalesOrderThresholdTaxSet->toArray(true, true) : $this->idSalesOrderThresholdTaxSet,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'taxSet' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, true) : $this->taxSet,
        ];
    }
}
