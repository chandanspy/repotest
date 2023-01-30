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
class SpyProductDiscontinuedEntityTransfer extends AbstractEntityTransfer
{
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
    public const ACTIVE_UNTIL = 'activeUntil';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const SPY_PRODUCT_DISCONTINUED_NOTES = 'spyProductDiscontinuedNotes';

    /**
     * @var integer|null
     */
    protected $idProductDiscontinued;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var string|null
     */
    protected $activeUntil;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[]
     */
    protected $spyProductDiscontinuedNotes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_discontinued' => 'idProductDiscontinued',
        'idProductDiscontinued' => 'idProductDiscontinued',
        'IdProductDiscontinued' => 'idProductDiscontinued',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'active_until' => 'activeUntil',
        'activeUntil' => 'activeUntil',
        'ActiveUntil' => 'activeUntil',
        'product' => 'product',
        'Product' => 'product',
        'spy_product_discontinued_notes' => 'spyProductDiscontinuedNotes',
        'spyProductDiscontinuedNotes' => 'spyProductDiscontinuedNotes',
        'SpyProductDiscontinuedNotes' => 'spyProductDiscontinuedNotes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_DISCONTINUED => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_DISCONTINUED_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_discontinued_notes',
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
    public static $entityNamespace = 'Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinued';


    /**
     * @module 
     *
     * @param integer|null $idProductDiscontinued
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductDiscontinued()
    {
        return $this->idProductDiscontinued;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductDiscontinued
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductDiscontinuedOrFail()
    {
        if ($this->idProductDiscontinued === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED);
        }

        return $this->idProductDiscontinued;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getActiveUntil()
    {
        return $this->activeUntil;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(SpyProductEntityTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(SpyProductEntityTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[] $spyProductDiscontinuedNotes
     *
     * @return $this
     */
    public function setSpyProductDiscontinuedNotes(ArrayObject $spyProductDiscontinuedNotes)
    {
        $this->spyProductDiscontinuedNotes = $spyProductDiscontinuedNotes;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[]
     */
    public function getSpyProductDiscontinuedNotes()
    {
        return $this->spyProductDiscontinuedNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer $spyProductDiscontinuedNotes
     *
     * @return $this
     */
    public function addSpyProductDiscontinuedNotes(SpyProductDiscontinuedNoteEntityTransfer $spyProductDiscontinuedNotes)
    {
        $this->spyProductDiscontinuedNotes[] = $spyProductDiscontinuedNotes;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductDiscontinuedNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_DISCONTINUED_NOTES);

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
                case 'activeUntil':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'product':
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
                case 'spyProductDiscontinuedNotes':
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
                case 'idProductDiscontinued':
                case 'fkProduct':
                case 'activeUntil':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductDiscontinuedNotes':
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
                case 'activeUntil':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductDiscontinuedNotes':
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
        $this->spyProductDiscontinuedNotes = $this->spyProductDiscontinuedNotes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductDiscontinued' => $this->idProductDiscontinued,
            'fkProduct' => $this->fkProduct,
            'activeUntil' => $this->activeUntil,
            'product' => $this->product,
            'spyProductDiscontinuedNotes' => $this->spyProductDiscontinuedNotes,
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
            'active_until' => $this->activeUntil,
            'product' => $this->product,
            'spy_product_discontinued_notes' => $this->spyProductDiscontinuedNotes,
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
            'active_until' => $this->activeUntil instanceof AbstractTransfer ? $this->activeUntil->toArray(true, false) : $this->activeUntil,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'spy_product_discontinued_notes' => $this->spyProductDiscontinuedNotes instanceof AbstractTransfer ? $this->spyProductDiscontinuedNotes->toArray(true, false) : $this->addValuesToCollection($this->spyProductDiscontinuedNotes, true, false),
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
            'activeUntil' => $this->activeUntil instanceof AbstractTransfer ? $this->activeUntil->toArray(true, true) : $this->activeUntil,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'spyProductDiscontinuedNotes' => $this->spyProductDiscontinuedNotes instanceof AbstractTransfer ? $this->spyProductDiscontinuedNotes->toArray(true, true) : $this->addValuesToCollection($this->spyProductDiscontinuedNotes, true, true),
        ];
    }
}
