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
class ProductDiscontinuedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_DISCONTINUED_NOTES = 'productDiscontinuedNotes';

    /**
     * @var string
     */
    public const ID_PRODUCT_DISCONTINUED = 'idProductDiscontinued';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ACTIVE_UNTIL = 'activeUntil';

    /**
     * @var string
     */
    public const DISCONTINUED_ON = 'discontinuedOn';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[]
     */
    protected $productDiscontinuedNotes;

    /**
     * @var int|null
     */
    protected $idProductDiscontinued;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $activeUntil;

    /**
     * @var string|null
     */
    protected $discontinuedOn;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_discontinued_notes' => 'productDiscontinuedNotes',
        'productDiscontinuedNotes' => 'productDiscontinuedNotes',
        'ProductDiscontinuedNotes' => 'productDiscontinuedNotes',
        'id_product_discontinued' => 'idProductDiscontinued',
        'idProductDiscontinued' => 'idProductDiscontinued',
        'IdProductDiscontinued' => 'idProductDiscontinued',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'sku' => 'sku',
        'Sku' => 'sku',
        'active_until' => 'activeUntil',
        'activeUntil' => 'activeUntil',
        'ActiveUntil' => 'activeUntil',
        'discontinued_on' => 'discontinuedOn',
        'discontinuedOn' => 'discontinuedOn',
        'DiscontinuedOn' => 'discontinuedOn',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_DISCONTINUED_NOTES => [
            'type' => 'Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_discontinued_notes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_DISCONTINUED => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_discontinued',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
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
        self::ACTIVE_UNTIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_until',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCONTINUED_ON => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discontinued_on',
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
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[] $productDiscontinuedNotes
     *
     * @return $this
     */
    public function setProductDiscontinuedNotes(ArrayObject $productDiscontinuedNotes)
    {
        $this->productDiscontinuedNotes = $productDiscontinuedNotes;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer[]
     */
    public function getProductDiscontinuedNotes()
    {
        return $this->productDiscontinuedNotes;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedNoteTransfer $productDiscontinuedNote
     *
     * @return $this
     */
    public function addProductDiscontinuedNote(ProductDiscontinuedNoteTransfer $productDiscontinuedNote)
    {
        $this->productDiscontinuedNotes[] = $productDiscontinuedNote;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductDiscontinuedNotes()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_DISCONTINUED_NOTES);

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int|null $idProductDiscontinued
     *
     * @return $this
     */
    public function setIdProductDiscontinued($idProductDiscontinued)
    {
        $this->idProductDiscontinued = $idProductDiscontinued;
        $this->modifiedProperties[self::ID_PRODUCT_DISCONTINUED] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return int|null
     */
    public function getIdProductDiscontinued()
    {
        return $this->idProductDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int|null $idProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductDiscontinuedOrFail($idProductDiscontinued)
    {
        if ($idProductDiscontinued === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED);
        }

        return $this->setIdProductDiscontinued($idProductDiscontinued);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductDiscontinuedOrFail()
    {
        if ($this->idProductDiscontinued === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED);
        }

        return $this->idProductDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductDiscontinued()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_DISCONTINUED);

        return $this;
    }

    /**
     * @module ProductDiscontinuedProductBundleConnector|ProductDiscontinuedProductLabelConnector|ProductDiscontinued
     *
     * @param int|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedProductBundleConnector|ProductDiscontinuedProductLabelConnector|ProductDiscontinued
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductDiscontinuedProductBundleConnector|ProductDiscontinuedProductLabelConnector|ProductDiscontinued
     *
     * @param int|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module ProductDiscontinuedProductBundleConnector|ProductDiscontinuedProductLabelConnector|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module ProductDiscontinuedProductBundleConnector|ProductDiscontinuedProductLabelConnector|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinued
     *
     * @param string|null $activeUntil
     *
     * @return $this
     */
    public function setActiveUntil($activeUntil)
    {
        $this->activeUntil = $activeUntil;
        $this->modifiedProperties[self::ACTIVE_UNTIL] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinued
     *
     * @return string|null
     */
    public function getActiveUntil()
    {
        return $this->activeUntil;
    }

    /**
     * @module ProductDiscontinued
     *
     * @param string|null $activeUntil
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveUntilOrFail($activeUntil)
    {
        if ($activeUntil === null) {
            $this->throwNullValueException(static::ACTIVE_UNTIL);
        }

        return $this->setActiveUntil($activeUntil);
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveUntilOrFail()
    {
        if ($this->activeUntil === null) {
            $this->throwNullValueException(static::ACTIVE_UNTIL);
        }

        return $this->activeUntil;
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveUntil()
    {
        $this->assertPropertyIsSet(self::ACTIVE_UNTIL);

        return $this;
    }

    /**
     * @module ProductDiscontinued
     *
     * @param string|null $discontinuedOn
     *
     * @return $this
     */
    public function setDiscontinuedOn($discontinuedOn)
    {
        $this->discontinuedOn = $discontinuedOn;
        $this->modifiedProperties[self::DISCONTINUED_ON] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinued
     *
     * @return string|null
     */
    public function getDiscontinuedOn()
    {
        return $this->discontinuedOn;
    }

    /**
     * @module ProductDiscontinued
     *
     * @param string|null $discontinuedOn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscontinuedOnOrFail($discontinuedOn)
    {
        if ($discontinuedOn === null) {
            $this->throwNullValueException(static::DISCONTINUED_ON);
        }

        return $this->setDiscontinuedOn($discontinuedOn);
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscontinuedOnOrFail()
    {
        if ($this->discontinuedOn === null) {
            $this->throwNullValueException(static::DISCONTINUED_ON);
        }

        return $this->discontinuedOn;
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscontinuedOn()
    {
        $this->assertPropertyIsSet(self::DISCONTINUED_ON);

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
                case 'idProductDiscontinued':
                case 'fkProduct':
                case 'sku':
                case 'activeUntil':
                case 'discontinuedOn':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productDiscontinuedNotes':
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
                case 'idProductDiscontinued':
                case 'fkProduct':
                case 'sku':
                case 'activeUntil':
                case 'discontinuedOn':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinuedNotes':
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
                case 'idProductDiscontinued':
                case 'fkProduct':
                case 'sku':
                case 'activeUntil':
                case 'discontinuedOn':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinuedNotes':
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
        $this->productDiscontinuedNotes = $this->productDiscontinuedNotes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductDiscontinued' => $this->idProductDiscontinued,
            'fkProduct' => $this->fkProduct,
            'sku' => $this->sku,
            'activeUntil' => $this->activeUntil,
            'discontinuedOn' => $this->discontinuedOn,
            'productDiscontinuedNotes' => $this->productDiscontinuedNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_discontinued' => $this->idProductDiscontinued,
            'fk_product' => $this->fkProduct,
            'sku' => $this->sku,
            'active_until' => $this->activeUntil,
            'discontinued_on' => $this->discontinuedOn,
            'product_discontinued_notes' => $this->productDiscontinuedNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_discontinued' => $this->idProductDiscontinued instanceof AbstractTransfer ? $this->idProductDiscontinued->toArray(true, false) : $this->idProductDiscontinued,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'active_until' => $this->activeUntil instanceof AbstractTransfer ? $this->activeUntil->toArray(true, false) : $this->activeUntil,
            'discontinued_on' => $this->discontinuedOn instanceof AbstractTransfer ? $this->discontinuedOn->toArray(true, false) : $this->discontinuedOn,
            'product_discontinued_notes' => $this->productDiscontinuedNotes instanceof AbstractTransfer ? $this->productDiscontinuedNotes->toArray(true, false) : $this->addValuesToCollection($this->productDiscontinuedNotes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductDiscontinued' => $this->idProductDiscontinued instanceof AbstractTransfer ? $this->idProductDiscontinued->toArray(true, true) : $this->idProductDiscontinued,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'activeUntil' => $this->activeUntil instanceof AbstractTransfer ? $this->activeUntil->toArray(true, true) : $this->activeUntil,
            'discontinuedOn' => $this->discontinuedOn instanceof AbstractTransfer ? $this->discontinuedOn->toArray(true, true) : $this->discontinuedOn,
            'productDiscontinuedNotes' => $this->productDiscontinuedNotes instanceof AbstractTransfer ? $this->productDiscontinuedNotes->toArray(true, true) : $this->addValuesToCollection($this->productDiscontinuedNotes, true, true),
        ];
    }
}
