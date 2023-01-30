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
class ProductPackagingUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_PACKAGING_UNIT = 'idProductPackagingUnit';

    /**
     * @var string
     */
    public const PRODUCT_PACKAGING_UNIT_TYPE = 'productPackagingUnitType';

    /**
     * @var string
     */
    public const PRODUCT_PACKAGING_UNIT_AMOUNT = 'productPackagingUnitAmount';

    /**
     * @var string
     */
    public const LEAD_PRODUCT = 'leadProduct';

    /**
     * @var int|null
     */
    protected $idProductPackagingUnit;

    /**
     * @var \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer|null
     */
    protected $productPackagingUnitType;

    /**
     * @var \Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer|null
     */
    protected $productPackagingUnitAmount;

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    protected $leadProduct;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_packaging_unit' => 'idProductPackagingUnit',
        'idProductPackagingUnit' => 'idProductPackagingUnit',
        'IdProductPackagingUnit' => 'idProductPackagingUnit',
        'product_packaging_unit_type' => 'productPackagingUnitType',
        'productPackagingUnitType' => 'productPackagingUnitType',
        'ProductPackagingUnitType' => 'productPackagingUnitType',
        'product_packaging_unit_amount' => 'productPackagingUnitAmount',
        'productPackagingUnitAmount' => 'productPackagingUnitAmount',
        'ProductPackagingUnitAmount' => 'productPackagingUnitAmount',
        'lead_product' => 'leadProduct',
        'leadProduct' => 'leadProduct',
        'LeadProduct' => 'leadProduct',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_PACKAGING_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_packaging_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_PACKAGING_UNIT_TYPE => [
            'type' => 'Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_packaging_unit_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_PACKAGING_UNIT_AMOUNT => [
            'type' => 'Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_packaging_unit_amount',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LEAD_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'lead_product',
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
     * @module ProductPackagingUnit
     *
     * @param int|null $idProductPackagingUnit
     *
     * @return $this
     */
    public function setIdProductPackagingUnit($idProductPackagingUnit)
    {
        $this->idProductPackagingUnit = $idProductPackagingUnit;
        $this->modifiedProperties[self::ID_PRODUCT_PACKAGING_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return int|null
     */
    public function getIdProductPackagingUnit()
    {
        return $this->idProductPackagingUnit;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param int|null $idProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductPackagingUnitOrFail($idProductPackagingUnit)
    {
        if ($idProductPackagingUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT);
        }

        return $this->setIdProductPackagingUnit($idProductPackagingUnit);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductPackagingUnitOrFail()
    {
        if ($this->idProductPackagingUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT);
        }

        return $this->idProductPackagingUnit;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductPackagingUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_PACKAGING_UNIT);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer|null $productPackagingUnitType
     *
     * @return $this
     */
    public function setProductPackagingUnitType(ProductPackagingUnitTypeTransfer $productPackagingUnitType = null)
    {
        $this->productPackagingUnitType = $productPackagingUnitType;
        $this->modifiedProperties[self::PRODUCT_PACKAGING_UNIT_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer|null
     */
    public function getProductPackagingUnitType()
    {
        return $this->productPackagingUnitType;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer $productPackagingUnitType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductPackagingUnitTypeOrFail(ProductPackagingUnitTypeTransfer $productPackagingUnitType)
    {
        return $this->setProductPackagingUnitType($productPackagingUnitType);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitTypeTransfer
     */
    public function getProductPackagingUnitTypeOrFail()
    {
        if ($this->productPackagingUnitType === null) {
            $this->throwNullValueException(static::PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->productPackagingUnitType;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductPackagingUnitType()
    {
        $this->assertPropertyIsSet(self::PRODUCT_PACKAGING_UNIT_TYPE);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer|null $productPackagingUnitAmount
     *
     * @return $this
     */
    public function setProductPackagingUnitAmount(ProductPackagingUnitAmountTransfer $productPackagingUnitAmount = null)
    {
        $this->productPackagingUnitAmount = $productPackagingUnitAmount;
        $this->modifiedProperties[self::PRODUCT_PACKAGING_UNIT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer|null
     */
    public function getProductPackagingUnitAmount()
    {
        return $this->productPackagingUnitAmount;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer $productPackagingUnitAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductPackagingUnitAmountOrFail(ProductPackagingUnitAmountTransfer $productPackagingUnitAmount)
    {
        return $this->setProductPackagingUnitAmount($productPackagingUnitAmount);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductPackagingUnitAmountTransfer
     */
    public function getProductPackagingUnitAmountOrFail()
    {
        if ($this->productPackagingUnitAmount === null) {
            $this->throwNullValueException(static::PRODUCT_PACKAGING_UNIT_AMOUNT);
        }

        return $this->productPackagingUnitAmount;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductPackagingUnitAmount()
    {
        $this->assertPropertyIsSet(self::PRODUCT_PACKAGING_UNIT_AMOUNT);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer|null $leadProduct
     *
     * @return $this
     */
    public function setLeadProduct(ProductConcreteTransfer $leadProduct = null)
    {
        $this->leadProduct = $leadProduct;
        $this->modifiedProperties[self::LEAD_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    public function getLeadProduct()
    {
        return $this->leadProduct;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $leadProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLeadProductOrFail(ProductConcreteTransfer $leadProduct)
    {
        return $this->setLeadProduct($leadProduct);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function getLeadProductOrFail()
    {
        if ($this->leadProduct === null) {
            $this->throwNullValueException(static::LEAD_PRODUCT);
        }

        return $this->leadProduct;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLeadProduct()
    {
        $this->assertPropertyIsSet(self::LEAD_PRODUCT);

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
                case 'idProductPackagingUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productPackagingUnitType':
                case 'productPackagingUnitAmount':
                case 'leadProduct':
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
                case 'idProductPackagingUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'productPackagingUnitType':
                case 'productPackagingUnitAmount':
                case 'leadProduct':
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
                case 'idProductPackagingUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'productPackagingUnitType':
                case 'productPackagingUnitAmount':
                case 'leadProduct':
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
            'idProductPackagingUnit' => $this->idProductPackagingUnit,
            'productPackagingUnitType' => $this->productPackagingUnitType,
            'productPackagingUnitAmount' => $this->productPackagingUnitAmount,
            'leadProduct' => $this->leadProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit' => $this->idProductPackagingUnit,
            'product_packaging_unit_type' => $this->productPackagingUnitType,
            'product_packaging_unit_amount' => $this->productPackagingUnitAmount,
            'lead_product' => $this->leadProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit' => $this->idProductPackagingUnit instanceof AbstractTransfer ? $this->idProductPackagingUnit->toArray(true, false) : $this->idProductPackagingUnit,
            'product_packaging_unit_type' => $this->productPackagingUnitType instanceof AbstractTransfer ? $this->productPackagingUnitType->toArray(true, false) : $this->productPackagingUnitType,
            'product_packaging_unit_amount' => $this->productPackagingUnitAmount instanceof AbstractTransfer ? $this->productPackagingUnitAmount->toArray(true, false) : $this->productPackagingUnitAmount,
            'lead_product' => $this->leadProduct instanceof AbstractTransfer ? $this->leadProduct->toArray(true, false) : $this->leadProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnit' => $this->idProductPackagingUnit instanceof AbstractTransfer ? $this->idProductPackagingUnit->toArray(true, true) : $this->idProductPackagingUnit,
            'productPackagingUnitType' => $this->productPackagingUnitType instanceof AbstractTransfer ? $this->productPackagingUnitType->toArray(true, true) : $this->productPackagingUnitType,
            'productPackagingUnitAmount' => $this->productPackagingUnitAmount instanceof AbstractTransfer ? $this->productPackagingUnitAmount->toArray(true, true) : $this->productPackagingUnitAmount,
            'leadProduct' => $this->leadProduct instanceof AbstractTransfer ? $this->leadProduct->toArray(true, true) : $this->leadProduct,
        ];
    }
}
