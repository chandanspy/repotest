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
class ProductImageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EXTERNAL_URL_LARGE = 'externalUrlLarge';

    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE = 'idProductImage';

    /**
     * @var string
     */
    public const EXTERNAL_URL_SMALL = 'externalUrlSmall';

    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE = 'idProductImageSetToProductImage';

    /**
     * @var string
     */
    public const SORT_ORDER = 'sortOrder';

    /**
     * @var string|null
     */
    protected $externalUrlLarge;

    /**
     * @var int|null
     */
    protected $idProductImage;

    /**
     * @var string|null
     */
    protected $externalUrlSmall;

    /**
     * @var int|null
     */
    protected $idProductImageSetToProductImage;

    /**
     * @var int|null
     */
    protected $sortOrder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'external_url_large' => 'externalUrlLarge',
        'externalUrlLarge' => 'externalUrlLarge',
        'ExternalUrlLarge' => 'externalUrlLarge',
        'id_product_image' => 'idProductImage',
        'idProductImage' => 'idProductImage',
        'IdProductImage' => 'idProductImage',
        'external_url_small' => 'externalUrlSmall',
        'externalUrlSmall' => 'externalUrlSmall',
        'ExternalUrlSmall' => 'externalUrlSmall',
        'id_product_image_set_to_product_image' => 'idProductImageSetToProductImage',
        'idProductImageSetToProductImage' => 'idProductImageSetToProductImage',
        'IdProductImageSetToProductImage' => 'idProductImageSetToProductImage',
        'sort_order' => 'sortOrder',
        'sortOrder' => 'sortOrder',
        'SortOrder' => 'sortOrder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_PRODUCT_IMAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_image',
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
        self::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE => [
            'type' => 'int',
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
    ];

    /**
     * @module ProductPackagingUnitWidget|AvailabilityNotification|ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductSetGui
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
     * @module ProductPackagingUnitWidget|AvailabilityNotification|ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductSetGui
     *
     * @return string|null
     */
    public function getExternalUrlLarge()
    {
        return $this->externalUrlLarge;
    }

    /**
     * @module ProductPackagingUnitWidget|AvailabilityNotification|ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductSetGui
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
     * @module ProductPackagingUnitWidget|AvailabilityNotification|ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductSetGui
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
     * @module ProductPackagingUnitWidget|AvailabilityNotification|ConfigurableBundleStorage|ConfigurableBundle|ProductImage|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage
     *
     * @param int|null $idProductImage
     *
     * @return $this
     */
    public function setIdProductImage($idProductImage)
    {
        $this->idProductImage = $idProductImage;
        $this->modifiedProperties[self::ID_PRODUCT_IMAGE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage
     *
     * @return int|null
     */
    public function getIdProductImage()
    {
        return $this->idProductImage;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage
     *
     * @param int|null $idProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductImageOrFail($idProductImage)
    {
        if ($idProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE);
        }

        return $this->setIdProductImage($idProductImage);
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductImageOrFail()
    {
        if ($this->idProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE);
        }

        return $this->idProductImage;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductImage()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_IMAGE);

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductImage|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductImage|ProductSetGui
     *
     * @return string|null
     */
    public function getExternalUrlSmall()
    {
        return $this->externalUrlSmall;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductImage|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductImage|ProductSetGui
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
     * @module ConfigurableBundleStorage|ConfigurableBundle|ContentProductGui|ProductImage|ProductSetGui
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
     * @module ConfigurableBundle|ProductImage
     *
     * @param int|null $idProductImageSetToProductImage
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
     * @module ConfigurableBundle|ProductImage
     *
     * @return int|null
     */
    public function getIdProductImageSetToProductImage()
    {
        return $this->idProductImageSetToProductImage;
    }

    /**
     * @module ConfigurableBundle|ProductImage
     *
     * @param int|null $idProductImageSetToProductImage
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
     * @module ConfigurableBundle|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductImageSetToProductImageOrFail()
    {
        if ($this->idProductImageSetToProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);
        }

        return $this->idProductImageSetToProductImage;
    }

    /**
     * @module ConfigurableBundle|ProductImage
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
     * @module ConfigurableBundle|ProductImage
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
     * @module ConfigurableBundle|ProductImage
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @module ConfigurableBundle|ProductImage
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
     * @module ConfigurableBundle|ProductImage
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
     * @module ConfigurableBundle|ProductImage
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
                case 'externalUrlLarge':
                case 'idProductImage':
                case 'externalUrlSmall':
                case 'idProductImageSetToProductImage':
                case 'sortOrder':
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
                case 'externalUrlLarge':
                case 'idProductImage':
                case 'externalUrlSmall':
                case 'idProductImageSetToProductImage':
                case 'sortOrder':
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
                case 'externalUrlLarge':
                case 'idProductImage':
                case 'externalUrlSmall':
                case 'idProductImageSetToProductImage':
                case 'sortOrder':
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
            'externalUrlLarge' => $this->externalUrlLarge,
            'idProductImage' => $this->idProductImage,
            'externalUrlSmall' => $this->externalUrlSmall,
            'idProductImageSetToProductImage' => $this->idProductImageSetToProductImage,
            'sortOrder' => $this->sortOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'external_url_large' => $this->externalUrlLarge,
            'id_product_image' => $this->idProductImage,
            'external_url_small' => $this->externalUrlSmall,
            'id_product_image_set_to_product_image' => $this->idProductImageSetToProductImage,
            'sort_order' => $this->sortOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'external_url_large' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, false) : $this->externalUrlLarge,
            'id_product_image' => $this->idProductImage instanceof AbstractTransfer ? $this->idProductImage->toArray(true, false) : $this->idProductImage,
            'external_url_small' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, false) : $this->externalUrlSmall,
            'id_product_image_set_to_product_image' => $this->idProductImageSetToProductImage instanceof AbstractTransfer ? $this->idProductImageSetToProductImage->toArray(true, false) : $this->idProductImageSetToProductImage,
            'sort_order' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, false) : $this->sortOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'externalUrlLarge' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, true) : $this->externalUrlLarge,
            'idProductImage' => $this->idProductImage instanceof AbstractTransfer ? $this->idProductImage->toArray(true, true) : $this->idProductImage,
            'externalUrlSmall' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, true) : $this->externalUrlSmall,
            'idProductImageSetToProductImage' => $this->idProductImageSetToProductImage instanceof AbstractTransfer ? $this->idProductImageSetToProductImage->toArray(true, true) : $this->idProductImageSetToProductImage,
            'sortOrder' => $this->sortOrder instanceof AbstractTransfer ? $this->sortOrder->toArray(true, true) : $this->sortOrder,
        ];
    }
}
