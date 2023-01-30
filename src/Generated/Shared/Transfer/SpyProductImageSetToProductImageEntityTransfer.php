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
class SpyProductImageSetToProductImageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE = 'idProductImageSetToProductImage';

    /**
     * @var string
     */
    public const FK_PRODUCT_IMAGE = 'fkProductImage';

    /**
     * @var string
     */
    public const FK_PRODUCT_IMAGE_SET = 'fkProductImageSet';

    /**
     * @var string
     */
    public const SORT_ORDER = 'sortOrder';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SET = 'spyProductImageSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE = 'spyProductImage';

    /**
     * @var integer|null
     */
    protected $idProductImageSetToProductImage;

    /**
     * @var integer|null
     */
    protected $fkProductImage;

    /**
     * @var integer|null
     */
    protected $fkProductImageSet;

    /**
     * @var integer|null
     */
    protected $sortOrder;

    /**
     * @var \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer|null
     */
    protected $spyProductImageSet;

    /**
     * @var \Generated\Shared\Transfer\SpyProductImageEntityTransfer|null
     */
    protected $spyProductImage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_image_set_to_product_image' => 'idProductImageSetToProductImage',
        'idProductImageSetToProductImage' => 'idProductImageSetToProductImage',
        'IdProductImageSetToProductImage' => 'idProductImageSetToProductImage',
        'fk_product_image' => 'fkProductImage',
        'fkProductImage' => 'fkProductImage',
        'FkProductImage' => 'fkProductImage',
        'fk_product_image_set' => 'fkProductImageSet',
        'fkProductImageSet' => 'fkProductImageSet',
        'FkProductImageSet' => 'fkProductImageSet',
        'sort_order' => 'sortOrder',
        'sortOrder' => 'sortOrder',
        'SortOrder' => 'sortOrder',
        'spy_product_image_set' => 'spyProductImageSet',
        'spyProductImageSet' => 'spyProductImageSet',
        'SpyProductImageSet' => 'spyProductImageSet',
        'spy_product_image' => 'spyProductImage',
        'spyProductImage' => 'spyProductImage',
        'SpyProductImage' => 'spyProductImage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_image_set_to_product_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_IMAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_IMAGE_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_image_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'sort_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SET => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image',
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
    public static $entityNamespace = 'Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage';


    /**
     * @module 
     *
     * @param integer|null $idProductImageSetToProductImage
     *
     * @return $this
     */
    public function setIdProductImageSetToProductImage($idProductImageSetToProductImage)
    {
        $this->idProductImageSetToProductImage = $idProductImageSetToProductImage;
        $this->modifiedProperties[self::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductImageSetToProductImage()
    {
        return $this->idProductImageSetToProductImage;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductImageSetToProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductImageSetToProductImageOrFail($idProductImageSetToProductImage)
    {
        if ($idProductImageSetToProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);
        }

        return $this->setIdProductImageSetToProductImage($idProductImageSetToProductImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductImageSetToProductImageOrFail()
    {
        if ($this->idProductImageSetToProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);
        }

        return $this->idProductImageSetToProductImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductImageSetToProductImage()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductImage
     *
     * @return $this
     */
    public function setFkProductImage($fkProductImage)
    {
        $this->fkProductImage = $fkProductImage;
        $this->modifiedProperties[self::FK_PRODUCT_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductImage()
    {
        return $this->fkProductImage;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductImageOrFail($fkProductImage)
    {
        if ($fkProductImage === null) {
            $this->throwNullValueException(static::FK_PRODUCT_IMAGE);
        }

        return $this->setFkProductImage($fkProductImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductImageOrFail()
    {
        if ($this->fkProductImage === null) {
            $this->throwNullValueException(static::FK_PRODUCT_IMAGE);
        }

        return $this->fkProductImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductImage()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_IMAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductImageSet
     *
     * @return $this
     */
    public function setFkProductImageSet($fkProductImageSet)
    {
        $this->fkProductImageSet = $fkProductImageSet;
        $this->modifiedProperties[self::FK_PRODUCT_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductImageSet()
    {
        return $this->fkProductImageSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductImageSetOrFail($fkProductImageSet)
    {
        if ($fkProductImageSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_IMAGE_SET);
        }

        return $this->setFkProductImageSet($fkProductImageSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductImageSetOrFail()
    {
        if ($this->fkProductImageSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_IMAGE_SET);
        }

        return $this->fkProductImageSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductImageSet()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_IMAGE_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $sortOrder
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        $this->modifiedProperties[self::SORT_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $sortOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSortOrderOrFail($sortOrder)
    {
        if ($sortOrder === null) {
            $this->throwNullValueException(static::SORT_ORDER);
        }

        return $this->setSortOrder($sortOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getSortOrderOrFail()
    {
        if ($this->sortOrder === null) {
            $this->throwNullValueException(static::SORT_ORDER);
        }

        return $this->sortOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortOrder()
    {
        $this->assertPropertyIsSet(self::SORT_ORDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer|null $spyProductImageSet
     *
     * @return $this
     */
    public function setSpyProductImageSet(SpyProductImageSetEntityTransfer $spyProductImageSet = null)
    {
        $this->spyProductImageSet = $spyProductImageSet;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer|null
     */
    public function getSpyProductImageSet()
    {
        return $this->spyProductImageSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer $spyProductImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductImageSetOrFail(SpyProductImageSetEntityTransfer $spyProductImageSet)
    {
        return $this->setSpyProductImageSet($spyProductImageSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer
     */
    public function getSpyProductImageSetOrFail()
    {
        if ($this->spyProductImageSet === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_IMAGE_SET);
        }

        return $this->spyProductImageSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSet()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_IMAGE_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageEntityTransfer|null $spyProductImage
     *
     * @return $this
     */
    public function setSpyProductImage(SpyProductImageEntityTransfer $spyProductImage = null)
    {
        $this->spyProductImage = $spyProductImage;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductImageEntityTransfer|null
     */
    public function getSpyProductImage()
    {
        return $this->spyProductImage;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageEntityTransfer $spyProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductImageOrFail(SpyProductImageEntityTransfer $spyProductImage)
    {
        return $this->setSpyProductImage($spyProductImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductImageEntityTransfer
     */
    public function getSpyProductImageOrFail()
    {
        if ($this->spyProductImage === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_IMAGE);
        }

        return $this->spyProductImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImage()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_IMAGE);

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
                case 'idProductImageSetToProductImage':
                case 'fkProductImage':
                case 'fkProductImageSet':
                case 'sortOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductImageSet':
                case 'spyProductImage':
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
                case 'idProductImageSetToProductImage':
                case 'fkProductImage':
                case 'fkProductImageSet':
                case 'sortOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductImageSet':
                case 'spyProductImage':
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
                case 'idProductImageSetToProductImage':
                case 'fkProductImage':
                case 'fkProductImageSet':
                case 'sortOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductImageSet':
                case 'spyProductImage':
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
            'idProductImageSetToProductImage' => $this->idProductImageSetToProductImage,
            'fkProductImage' => $this->fkProductImage,
            'fkProductImageSet' => $this->fkProductImageSet,
            'sortOrder' => $this->sortOrder,
            'spyProductImageSet' => $this->spyProductImageSet,
            'spyProductImage' => $this->spyProductImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image_set_to_product_image' => $this->idProductImageSetToProductImage,
            'fk_product_image' => $this->fkProductImage,
            'fk_product_image_set' => $this->fkProductImageSet,
            'sort_order' => $this->sortOrder,
            'spy_product_image_set' => $this->spyProductImageSet,
            'spy_product_image' => $this->spyProductImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image_set_to_product_image' => $this->idProductImageSetToProductImage instanceof AbstractTransfer ? $this->idProductImageSetToProductImage->toArray(true, false) : $this->idProductImageSetToProductImage,
            'fk_product_image' => $this->fkProductImage instanceof AbstractTransfer ? $this->fkProductImage->toArray(true, false) : $this->fkProductImage,
            'fk_product_image_set' => $this->fkProductImageSet instanceof AbstractTransfer ? $this->fkProductImageSet->toArray(true, false) : $this->fkProductImageSet,
            'sort_order' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, false) : $this->sortOrder,
            'spy_product_image_set' => $this->spyProductImageSet instanceof AbstractTransfer ? $this->spyProductImageSet->toArray(true, false) : $this->spyProductImageSet,
            'spy_product_image' => $this->spyProductImage instanceof AbstractTransfer ? $this->spyProductImage->toArray(true, false) : $this->spyProductImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductImageSetToProductImage' => $this->idProductImageSetToProductImage instanceof AbstractTransfer ? $this->idProductImageSetToProductImage->toArray(true, true) : $this->idProductImageSetToProductImage,
            'fkProductImage' => $this->fkProductImage instanceof AbstractTransfer ? $this->fkProductImage->toArray(true, true) : $this->fkProductImage,
            'fkProductImageSet' => $this->fkProductImageSet instanceof AbstractTransfer ? $this->fkProductImageSet->toArray(true, true) : $this->fkProductImageSet,
            'sortOrder' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, true) : $this->sortOrder,
            'spyProductImageSet' => $this->spyProductImageSet instanceof AbstractTransfer ? $this->spyProductImageSet->toArray(true, true) : $this->spyProductImageSet,
            'spyProductImage' => $this->spyProductImage instanceof AbstractTransfer ? $this->spyProductImage->toArray(true, true) : $this->spyProductImage,
        ];
    }
}
