<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductListUsedByTableTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_LIST = 'productList';

    /**
     * @var string
     */
    public const ROWS = 'rows';

    /**
     * @var \Generated\Shared\Transfer\ProductListTransfer|null
     */
    protected $productList;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductListUsedByTableRowTransfer[]
     */
    protected $rows;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_list' => 'productList',
        'productList' => 'productList',
        'ProductList' => 'productList',
        'rows' => 'rows',
        'Rows' => 'rows',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_LIST => [
            'type' => 'Generated\Shared\Transfer\ProductListTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROWS => [
            'type' => 'Generated\Shared\Transfer\ProductListUsedByTableRowTransfer',
            'type_shim' => null,
            'name_underscore' => 'rows',
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
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer|null $productList
     *
     * @return $this
     */
    public function setProductList(ProductListTransfer $productList = null)
    {
        $this->productList = $productList;
        $this->modifiedProperties[self::PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer|null
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListOrFail(ProductListTransfer $productList)
    {
        return $this->setProductList($productList);
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer
     */
    public function getProductListOrFail()
    {
        if ($this->productList === null) {
            $this->throwNullValueException(static::PRODUCT_LIST);
        }

        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductList()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductListUsedByTableRowTransfer[] $rows
     *
     * @return $this
     */
    public function setRows(ArrayObject $rows)
    {
        $this->rows = $rows;
        $this->modifiedProperties[self::ROWS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductListUsedByTableRowTransfer[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListUsedByTableRowTransfer $row
     *
     * @return $this
     */
    public function addRow(ProductListUsedByTableRowTransfer $row)
    {
        $this->rows[] = $row;
        $this->modifiedProperties[self::ROWS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|MerchantRelationshipProductListGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRows()
    {
        $this->assertCollectionPropertyIsSet(self::ROWS);

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
                case 'productList':
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
                case 'rows':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'productList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'rows':
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
                case 'productList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'rows':
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
        $this->rows = $this->rows ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productList' => $this->productList,
            'rows' => $this->rows,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_list' => $this->productList,
            'rows' => $this->rows,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_list' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, false) : $this->productList,
            'rows' => $this->rows instanceof AbstractTransfer ? $this->rows->toArray(true, false) : $this->addValuesToCollection($this->rows, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productList' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, true) : $this->productList,
            'rows' => $this->rows instanceof AbstractTransfer ? $this->rows->toArray(true, true) : $this->addValuesToCollection($this->rows, true, true),
        ];
    }
}
