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
class SpyCategoryImageSetToCategoryImageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE = 'idCategoryImageSetToCategoryImage';

    /**
     * @var string
     */
    public const FK_CATEGORY_IMAGE = 'fkCategoryImage';

    /**
     * @var string
     */
    public const FK_CATEGORY_IMAGE_SET = 'fkCategoryImageSet';

    /**
     * @var string
     */
    public const SORT_ORDER = 'sortOrder';

    /**
     * @var string
     */
    public const SPY_CATEGORY_IMAGE_SET = 'spyCategoryImageSet';

    /**
     * @var string
     */
    public const SPY_CATEGORY_IMAGE = 'spyCategoryImage';

    /**
     * @var integer|null
     */
    protected $idCategoryImageSetToCategoryImage;

    /**
     * @var integer|null
     */
    protected $fkCategoryImage;

    /**
     * @var integer|null
     */
    protected $fkCategoryImageSet;

    /**
     * @var integer|null
     */
    protected $sortOrder;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer|null
     */
    protected $spyCategoryImageSet;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryImageEntityTransfer|null
     */
    protected $spyCategoryImage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_image_set_to_category_image' => 'idCategoryImageSetToCategoryImage',
        'idCategoryImageSetToCategoryImage' => 'idCategoryImageSetToCategoryImage',
        'IdCategoryImageSetToCategoryImage' => 'idCategoryImageSetToCategoryImage',
        'fk_category_image' => 'fkCategoryImage',
        'fkCategoryImage' => 'fkCategoryImage',
        'FkCategoryImage' => 'fkCategoryImage',
        'fk_category_image_set' => 'fkCategoryImageSet',
        'fkCategoryImageSet' => 'fkCategoryImageSet',
        'FkCategoryImageSet' => 'fkCategoryImageSet',
        'sort_order' => 'sortOrder',
        'sortOrder' => 'sortOrder',
        'SortOrder' => 'sortOrder',
        'spy_category_image_set' => 'spyCategoryImageSet',
        'spyCategoryImageSet' => 'spyCategoryImageSet',
        'SpyCategoryImageSet' => 'spyCategoryImageSet',
        'spy_category_image' => 'spyCategoryImage',
        'spyCategoryImage' => 'spyCategoryImage',
        'SpyCategoryImage' => 'spyCategoryImage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_category_image_set_to_category_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY_IMAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY_IMAGE_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category_image_set',
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
        self::SPY_CATEGORY_IMAGE_SET => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_image_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_IMAGE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryImageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_image',
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
    public static $entityNamespace = 'Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage';


    /**
     * @module 
     *
     * @param integer|null $idCategoryImageSetToCategoryImage
     *
     * @return $this
     */
    public function setIdCategoryImageSetToCategoryImage($idCategoryImageSetToCategoryImage)
    {
        $this->idCategoryImageSetToCategoryImage = $idCategoryImageSetToCategoryImage;
        $this->modifiedProperties[self::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryImageSetToCategoryImage()
    {
        return $this->idCategoryImageSetToCategoryImage;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryImageSetToCategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryImageSetToCategoryImageOrFail($idCategoryImageSetToCategoryImage)
    {
        if ($idCategoryImageSetToCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE);
        }

        return $this->setIdCategoryImageSetToCategoryImage($idCategoryImageSetToCategoryImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryImageSetToCategoryImageOrFail()
    {
        if ($this->idCategoryImageSetToCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE);
        }

        return $this->idCategoryImageSetToCategoryImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryImageSetToCategoryImage()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryImage
     *
     * @return $this
     */
    public function setFkCategoryImage($fkCategoryImage)
    {
        $this->fkCategoryImage = $fkCategoryImage;
        $this->modifiedProperties[self::FK_CATEGORY_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryImage()
    {
        return $this->fkCategoryImage;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryImageOrFail($fkCategoryImage)
    {
        if ($fkCategoryImage === null) {
            $this->throwNullValueException(static::FK_CATEGORY_IMAGE);
        }

        return $this->setFkCategoryImage($fkCategoryImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryImageOrFail()
    {
        if ($this->fkCategoryImage === null) {
            $this->throwNullValueException(static::FK_CATEGORY_IMAGE);
        }

        return $this->fkCategoryImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryImage()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_IMAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryImageSet
     *
     * @return $this
     */
    public function setFkCategoryImageSet($fkCategoryImageSet)
    {
        $this->fkCategoryImageSet = $fkCategoryImageSet;
        $this->modifiedProperties[self::FK_CATEGORY_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryImageSet()
    {
        return $this->fkCategoryImageSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryImageSetOrFail($fkCategoryImageSet)
    {
        if ($fkCategoryImageSet === null) {
            $this->throwNullValueException(static::FK_CATEGORY_IMAGE_SET);
        }

        return $this->setFkCategoryImageSet($fkCategoryImageSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryImageSetOrFail()
    {
        if ($this->fkCategoryImageSet === null) {
            $this->throwNullValueException(static::FK_CATEGORY_IMAGE_SET);
        }

        return $this->fkCategoryImageSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryImageSet()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_IMAGE_SET);

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
     * @param \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer|null $spyCategoryImageSet
     *
     * @return $this
     */
    public function setSpyCategoryImageSet(SpyCategoryImageSetEntityTransfer $spyCategoryImageSet = null)
    {
        $this->spyCategoryImageSet = $spyCategoryImageSet;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer|null
     */
    public function getSpyCategoryImageSet()
    {
        return $this->spyCategoryImageSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer $spyCategoryImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryImageSetOrFail(SpyCategoryImageSetEntityTransfer $spyCategoryImageSet)
    {
        return $this->setSpyCategoryImageSet($spyCategoryImageSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer
     */
    public function getSpyCategoryImageSetOrFail()
    {
        if ($this->spyCategoryImageSet === null) {
            $this->throwNullValueException(static::SPY_CATEGORY_IMAGE_SET);
        }

        return $this->spyCategoryImageSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryImageSet()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY_IMAGE_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageEntityTransfer|null $spyCategoryImage
     *
     * @return $this
     */
    public function setSpyCategoryImage(SpyCategoryImageEntityTransfer $spyCategoryImage = null)
    {
        $this->spyCategoryImage = $spyCategoryImage;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryImageEntityTransfer|null
     */
    public function getSpyCategoryImage()
    {
        return $this->spyCategoryImage;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageEntityTransfer $spyCategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryImageOrFail(SpyCategoryImageEntityTransfer $spyCategoryImage)
    {
        return $this->setSpyCategoryImage($spyCategoryImage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryImageEntityTransfer
     */
    public function getSpyCategoryImageOrFail()
    {
        if ($this->spyCategoryImage === null) {
            $this->throwNullValueException(static::SPY_CATEGORY_IMAGE);
        }

        return $this->spyCategoryImage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryImage()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY_IMAGE);

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
                case 'idCategoryImageSetToCategoryImage':
                case 'fkCategoryImage':
                case 'fkCategoryImageSet':
                case 'sortOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCategoryImageSet':
                case 'spyCategoryImage':
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
                case 'idCategoryImageSetToCategoryImage':
                case 'fkCategoryImage':
                case 'fkCategoryImageSet':
                case 'sortOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryImageSet':
                case 'spyCategoryImage':
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
                case 'idCategoryImageSetToCategoryImage':
                case 'fkCategoryImage':
                case 'fkCategoryImageSet':
                case 'sortOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryImageSet':
                case 'spyCategoryImage':
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
            'idCategoryImageSetToCategoryImage' => $this->idCategoryImageSetToCategoryImage,
            'fkCategoryImage' => $this->fkCategoryImage,
            'fkCategoryImageSet' => $this->fkCategoryImageSet,
            'sortOrder' => $this->sortOrder,
            'spyCategoryImageSet' => $this->spyCategoryImageSet,
            'spyCategoryImage' => $this->spyCategoryImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image_set_to_category_image' => $this->idCategoryImageSetToCategoryImage,
            'fk_category_image' => $this->fkCategoryImage,
            'fk_category_image_set' => $this->fkCategoryImageSet,
            'sort_order' => $this->sortOrder,
            'spy_category_image_set' => $this->spyCategoryImageSet,
            'spy_category_image' => $this->spyCategoryImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image_set_to_category_image' => $this->idCategoryImageSetToCategoryImage instanceof AbstractTransfer ? $this->idCategoryImageSetToCategoryImage->toArray(true, false) : $this->idCategoryImageSetToCategoryImage,
            'fk_category_image' => $this->fkCategoryImage instanceof AbstractTransfer ? $this->fkCategoryImage->toArray(true, false) : $this->fkCategoryImage,
            'fk_category_image_set' => $this->fkCategoryImageSet instanceof AbstractTransfer ? $this->fkCategoryImageSet->toArray(true, false) : $this->fkCategoryImageSet,
            'sort_order' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, false) : $this->sortOrder,
            'spy_category_image_set' => $this->spyCategoryImageSet instanceof AbstractTransfer ? $this->spyCategoryImageSet->toArray(true, false) : $this->spyCategoryImageSet,
            'spy_category_image' => $this->spyCategoryImage instanceof AbstractTransfer ? $this->spyCategoryImage->toArray(true, false) : $this->spyCategoryImage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryImageSetToCategoryImage' => $this->idCategoryImageSetToCategoryImage instanceof AbstractTransfer ? $this->idCategoryImageSetToCategoryImage->toArray(true, true) : $this->idCategoryImageSetToCategoryImage,
            'fkCategoryImage' => $this->fkCategoryImage instanceof AbstractTransfer ? $this->fkCategoryImage->toArray(true, true) : $this->fkCategoryImage,
            'fkCategoryImageSet' => $this->fkCategoryImageSet instanceof AbstractTransfer ? $this->fkCategoryImageSet->toArray(true, true) : $this->fkCategoryImageSet,
            'sortOrder' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, true) : $this->sortOrder,
            'spyCategoryImageSet' => $this->spyCategoryImageSet instanceof AbstractTransfer ? $this->spyCategoryImageSet->toArray(true, true) : $this->spyCategoryImageSet,
            'spyCategoryImage' => $this->spyCategoryImage instanceof AbstractTransfer ? $this->spyCategoryImage->toArray(true, true) : $this->spyCategoryImage,
        ];
    }
}
