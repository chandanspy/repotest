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
class ProductLabelAggregateFormTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_RELATIONS = 'productAbstractRelations';

    /**
     * @var string
     */
    public const PRODUCT_LABEL = 'productLabel';

    /**
     * @var \Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer|null
     */
    protected $productAbstractRelations;

    /**
     * @var \Generated\Shared\Transfer\ProductLabelTransfer|null
     */
    protected $productLabel;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_abstract_relations' => 'productAbstractRelations',
        'productAbstractRelations' => 'productAbstractRelations',
        'ProductAbstractRelations' => 'productAbstractRelations',
        'product_label' => 'productLabel',
        'productLabel' => 'productLabel',
        'ProductLabel' => 'productLabel',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ABSTRACT_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_relations',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LABEL => [
            'type' => 'Generated\Shared\Transfer\ProductLabelTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_label',
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
     * @module ProductLabelGui
     *
     * @param \Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer|null $productAbstractRelations
     *
     * @return $this
     */
    public function setProductAbstractRelations(ProductLabelProductAbstractRelationsTransfer $productAbstractRelations = null)
    {
        $this->productAbstractRelations = $productAbstractRelations;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module ProductLabelGui
     *
     * @return \Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer|null
     */
    public function getProductAbstractRelations()
    {
        return $this->productAbstractRelations;
    }

    /**
     * @module ProductLabelGui
     *
     * @param \Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer $productAbstractRelations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractRelationsOrFail(ProductLabelProductAbstractRelationsTransfer $productAbstractRelations)
    {
        return $this->setProductAbstractRelations($productAbstractRelations);
    }

    /**
     * @module ProductLabelGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductLabelProductAbstractRelationsTransfer
     */
    public function getProductAbstractRelationsOrFail()
    {
        if ($this->productAbstractRelations === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_RELATIONS);
        }

        return $this->productAbstractRelations;
    }

    /**
     * @module ProductLabelGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractRelations()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_RELATIONS);

        return $this;
    }

    /**
     * @module ProductLabelGui
     *
     * @param \Generated\Shared\Transfer\ProductLabelTransfer|null $productLabel
     *
     * @return $this
     */
    public function setProductLabel(ProductLabelTransfer $productLabel = null)
    {
        $this->productLabel = $productLabel;
        $this->modifiedProperties[self::PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductLabelGui
     *
     * @return \Generated\Shared\Transfer\ProductLabelTransfer|null
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @module ProductLabelGui
     *
     * @param \Generated\Shared\Transfer\ProductLabelTransfer $productLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductLabelOrFail(ProductLabelTransfer $productLabel)
    {
        return $this->setProductLabel($productLabel);
    }

    /**
     * @module ProductLabelGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductLabelTransfer
     */
    public function getProductLabelOrFail()
    {
        if ($this->productLabel === null) {
            $this->throwNullValueException(static::PRODUCT_LABEL);
        }

        return $this->productLabel;
    }

    /**
     * @module ProductLabelGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabel()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LABEL);

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
                case 'productAbstractRelations':
                case 'productLabel':
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
                case 'productAbstractRelations':
                case 'productLabel':
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
                case 'productAbstractRelations':
                case 'productLabel':
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
            'productAbstractRelations' => $this->productAbstractRelations,
            'productLabel' => $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_relations' => $this->productAbstractRelations,
            'product_label' => $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_relations' => $this->productAbstractRelations instanceof AbstractTransfer ? $this->productAbstractRelations->toArray(true, false) : $this->productAbstractRelations,
            'product_label' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, false) : $this->productLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productAbstractRelations' => $this->productAbstractRelations instanceof AbstractTransfer ? $this->productAbstractRelations->toArray(true, true) : $this->productAbstractRelations,
            'productLabel' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, true) : $this->productLabel,
        ];
    }
}
