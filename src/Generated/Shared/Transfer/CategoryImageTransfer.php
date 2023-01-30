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
class CategoryImageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_IMAGE = 'idCategoryImage';

    /**
     * @var string
     */
    public const ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE = 'idCategoryImageSetToCategoryImage';

    /**
     * @var string
     */
    public const SORT_ORDER = 'sortOrder';

    /**
     * @var string
     */
    public const EXTERNAL_URL_SMALL = 'externalUrlSmall';

    /**
     * @var string
     */
    public const EXTERNAL_URL_LARGE = 'externalUrlLarge';

    /**
     * @var int|null
     */
    protected $idCategoryImage;

    /**
     * @var int|null
     */
    protected $idCategoryImageSetToCategoryImage;

    /**
     * @var int|null
     */
    protected $sortOrder;

    /**
     * @var string|null
     */
    protected $externalUrlSmall;

    /**
     * @var string|null
     */
    protected $externalUrlLarge;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_image' => 'idCategoryImage',
        'idCategoryImage' => 'idCategoryImage',
        'IdCategoryImage' => 'idCategoryImage',
        'id_category_image_set_to_category_image' => 'idCategoryImageSetToCategoryImage',
        'idCategoryImageSetToCategoryImage' => 'idCategoryImageSetToCategoryImage',
        'IdCategoryImageSetToCategoryImage' => 'idCategoryImageSetToCategoryImage',
        'sort_order' => 'sortOrder',
        'sortOrder' => 'sortOrder',
        'SortOrder' => 'sortOrder',
        'external_url_small' => 'externalUrlSmall',
        'externalUrlSmall' => 'externalUrlSmall',
        'ExternalUrlSmall' => 'externalUrlSmall',
        'external_url_large' => 'externalUrlLarge',
        'externalUrlLarge' => 'externalUrlLarge',
        'ExternalUrlLarge' => 'externalUrlLarge',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_IMAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE => [
            'type' => 'int',
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
        self::SORT_ORDER => [
            'type' => 'int',
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
        self::EXTERNAL_URL_SMALL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url_small',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXTERNAL_URL_LARGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url_large',
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
     * @module CategoryImage
     *
     * @param int|null $idCategoryImage
     *
     * @return $this
     */
    public function setIdCategoryImage($idCategoryImage)
    {
        $this->idCategoryImage = $idCategoryImage;
        $this->modifiedProperties[self::ID_CATEGORY_IMAGE] = true;

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @return int|null
     */
    public function getIdCategoryImage()
    {
        return $this->idCategoryImage;
    }

    /**
     * @module CategoryImage
     *
     * @param int|null $idCategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryImageOrFail($idCategoryImage)
    {
        if ($idCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE);
        }

        return $this->setIdCategoryImage($idCategoryImage);
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryImageOrFail()
    {
        if ($this->idCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE);
        }

        return $this->idCategoryImage;
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryImage()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_IMAGE);

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @param int|null $idCategoryImageSetToCategoryImage
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
     * @module CategoryImage
     *
     * @return int|null
     */
    public function getIdCategoryImageSetToCategoryImage()
    {
        return $this->idCategoryImageSetToCategoryImage;
    }

    /**
     * @module CategoryImage
     *
     * @param int|null $idCategoryImageSetToCategoryImage
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
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryImageSetToCategoryImageOrFail()
    {
        if ($this->idCategoryImageSetToCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGE);
        }

        return $this->idCategoryImageSetToCategoryImage;
    }

    /**
     * @module CategoryImage
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
     * @module CategoryImage
     *
     * @param int|null $sortOrder
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
     * @module CategoryImage
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @module CategoryImage
     *
     * @param int|null $sortOrder
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
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSortOrderOrFail()
    {
        if ($this->sortOrder === null) {
            $this->throwNullValueException(static::SORT_ORDER);
        }

        return $this->sortOrder;
    }

    /**
     * @module CategoryImage
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
     * @module CategoryImage
     *
     * @param string|null $externalUrlSmall
     *
     * @return $this
     */
    public function setExternalUrlSmall($externalUrlSmall)
    {
        $this->externalUrlSmall = $externalUrlSmall;
        $this->modifiedProperties[self::EXTERNAL_URL_SMALL] = true;

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @return string|null
     */
    public function getExternalUrlSmall()
    {
        return $this->externalUrlSmall;
    }

    /**
     * @module CategoryImage
     *
     * @param string|null $externalUrlSmall
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlSmallOrFail($externalUrlSmall)
    {
        if ($externalUrlSmall === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_SMALL);
        }

        return $this->setExternalUrlSmall($externalUrlSmall);
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlSmallOrFail()
    {
        if ($this->externalUrlSmall === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_SMALL);
        }

        return $this->externalUrlSmall;
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrlSmall()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL_SMALL);

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @param string|null $externalUrlLarge
     *
     * @return $this
     */
    public function setExternalUrlLarge($externalUrlLarge)
    {
        $this->externalUrlLarge = $externalUrlLarge;
        $this->modifiedProperties[self::EXTERNAL_URL_LARGE] = true;

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @return string|null
     */
    public function getExternalUrlLarge()
    {
        return $this->externalUrlLarge;
    }

    /**
     * @module CategoryImage
     *
     * @param string|null $externalUrlLarge
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlLargeOrFail($externalUrlLarge)
    {
        if ($externalUrlLarge === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_LARGE);
        }

        return $this->setExternalUrlLarge($externalUrlLarge);
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlLargeOrFail()
    {
        if ($this->externalUrlLarge === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_LARGE);
        }

        return $this->externalUrlLarge;
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrlLarge()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL_LARGE);

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
                case 'idCategoryImage':
                case 'idCategoryImageSetToCategoryImage':
                case 'sortOrder':
                case 'externalUrlSmall':
                case 'externalUrlLarge':
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
                case 'idCategoryImage':
                case 'idCategoryImageSetToCategoryImage':
                case 'sortOrder':
                case 'externalUrlSmall':
                case 'externalUrlLarge':
                    $values[$arrayKey] = $value;

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
                case 'idCategoryImage':
                case 'idCategoryImageSetToCategoryImage':
                case 'sortOrder':
                case 'externalUrlSmall':
                case 'externalUrlLarge':
                    $values[$arrayKey] = $value;

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
            'idCategoryImage' => $this->idCategoryImage,
            'idCategoryImageSetToCategoryImage' => $this->idCategoryImageSetToCategoryImage,
            'sortOrder' => $this->sortOrder,
            'externalUrlSmall' => $this->externalUrlSmall,
            'externalUrlLarge' => $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image' => $this->idCategoryImage,
            'id_category_image_set_to_category_image' => $this->idCategoryImageSetToCategoryImage,
            'sort_order' => $this->sortOrder,
            'external_url_small' => $this->externalUrlSmall,
            'external_url_large' => $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image' => $this->idCategoryImage instanceof AbstractTransfer ? $this->idCategoryImage->toArray(true, false) : $this->idCategoryImage,
            'id_category_image_set_to_category_image' => $this->idCategoryImageSetToCategoryImage instanceof AbstractTransfer ? $this->idCategoryImageSetToCategoryImage->toArray(true, false) : $this->idCategoryImageSetToCategoryImage,
            'sort_order' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, false) : $this->sortOrder,
            'external_url_small' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, false) : $this->externalUrlSmall,
            'external_url_large' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, false) : $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryImage' => $this->idCategoryImage instanceof AbstractTransfer ? $this->idCategoryImage->toArray(true, true) : $this->idCategoryImage,
            'idCategoryImageSetToCategoryImage' => $this->idCategoryImageSetToCategoryImage instanceof AbstractTransfer ? $this->idCategoryImageSetToCategoryImage->toArray(true, true) : $this->idCategoryImageSetToCategoryImage,
            'sortOrder' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, true) : $this->sortOrder,
            'externalUrlSmall' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, true) : $this->externalUrlSmall,
            'externalUrlLarge' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, true) : $this->externalUrlLarge,
        ];
    }
}
