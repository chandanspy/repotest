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
class SpyProductImageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_IMAGE = 'idProductImage';

    /**
     * @var string
     */
    public const EXTERNAL_URL_LARGE = 'externalUrlLarge';

    /**
     * @var string
     */
    public const EXTERNAL_URL_SMALL = 'externalUrlSmall';

    /**
     * @var string
     */
    public const PRODUCT_IMAGE_KEY = 'productImageKey';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES = 'spyProductImageSetToProductImages';

    /**
     * @var integer|null
     */
    protected $idProductImage;

    /**
     * @var string|null
     */
    protected $externalUrlLarge;

    /**
     * @var string|null
     */
    protected $externalUrlSmall;

    /**
     * @var string|null
     */
    protected $productImageKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[]
     */
    protected $spyProductImageSetToProductImages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_image' => 'idProductImage',
        'idProductImage' => 'idProductImage',
        'IdProductImage' => 'idProductImage',
        'external_url_large' => 'externalUrlLarge',
        'externalUrlLarge' => 'externalUrlLarge',
        'ExternalUrlLarge' => 'externalUrlLarge',
        'external_url_small' => 'externalUrlSmall',
        'externalUrlSmall' => 'externalUrlSmall',
        'ExternalUrlSmall' => 'externalUrlSmall',
        'product_image_key' => 'productImageKey',
        'productImageKey' => 'productImageKey',
        'ProductImageKey' => 'productImageKey',
        'spy_product_image_set_to_product_images' => 'spyProductImageSetToProductImages',
        'spyProductImageSetToProductImages' => 'spyProductImageSetToProductImages',
        'SpyProductImageSetToProductImages' => 'spyProductImageSetToProductImages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_IMAGE => [
            'type' => 'integer',
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
        self::PRODUCT_IMAGE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_image_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_set_to_product_images',
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
    public static $entityNamespace = 'Orm\Zed\ProductImage\Persistence\SpyProductImage';


    /**
     * @module 
     *
     * @param integer|null $idProductImage
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductImage()
    {
        return $this->idProductImage;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductImage
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductImageOrFail()
    {
        if ($this->idProductImage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_IMAGE);
        }

        return $this->idProductImage;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getExternalUrlLarge()
    {
        return $this->externalUrlLarge;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getExternalUrlSmall()
    {
        return $this->externalUrlSmall;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $productImageKey
     *
     * @return $this
     */
    public function setProductImageKey($productImageKey)
    {
        $this->productImageKey = $productImageKey;
        $this->modifiedProperties[self::PRODUCT_IMAGE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getProductImageKey()
    {
        return $this->productImageKey;
    }

    /**
     * @module 
     *
     * @param string|null $productImageKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductImageKeyOrFail($productImageKey)
    {
        if ($productImageKey === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_KEY);
        }

        return $this->setProductImageKey($productImageKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductImageKeyOrFail()
    {
        if ($this->productImageKey === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_KEY);
        }

        return $this->productImageKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGE_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[] $spyProductImageSetToProductImages
     *
     * @return $this
     */
    public function setSpyProductImageSetToProductImages(ArrayObject $spyProductImageSetToProductImages)
    {
        $this->spyProductImageSetToProductImages = $spyProductImageSetToProductImages;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer[]
     */
    public function getSpyProductImageSetToProductImages()
    {
        return $this->spyProductImageSetToProductImages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetToProductImageEntityTransfer $spyProductImageSetToProductImages
     *
     * @return $this
     */
    public function addSpyProductImageSetToProductImages(SpyProductImageSetToProductImageEntityTransfer $spyProductImageSetToProductImages)
    {
        $this->spyProductImageSetToProductImages[] = $spyProductImageSetToProductImages;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSetToProductImages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGES);

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
                case 'idProductImage':
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                case 'productImageKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductImageSetToProductImages':
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
                case 'idProductImage':
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                case 'productImageKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductImageSetToProductImages':
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
                case 'idProductImage':
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                case 'productImageKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductImageSetToProductImages':
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
        $this->spyProductImageSetToProductImages = $this->spyProductImageSetToProductImages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductImage' => $this->idProductImage,
            'externalUrlLarge' => $this->externalUrlLarge,
            'externalUrlSmall' => $this->externalUrlSmall,
            'productImageKey' => $this->productImageKey,
            'spyProductImageSetToProductImages' => $this->spyProductImageSetToProductImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image' => $this->idProductImage,
            'external_url_large' => $this->externalUrlLarge,
            'external_url_small' => $this->externalUrlSmall,
            'product_image_key' => $this->productImageKey,
            'spy_product_image_set_to_product_images' => $this->spyProductImageSetToProductImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_image' => $this->idProductImage instanceof AbstractTransfer ? $this->idProductImage->toArray(true, false) : $this->idProductImage,
            'external_url_large' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, false) : $this->externalUrlLarge,
            'external_url_small' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, false) : $this->externalUrlSmall,
            'product_image_key' => $this->productImageKey instanceof AbstractTransfer ? $this->productImageKey->toArray(true, false) : $this->productImageKey,
            'spy_product_image_set_to_product_images' => $this->spyProductImageSetToProductImages instanceof AbstractTransfer ? $this->spyProductImageSetToProductImages->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSetToProductImages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductImage' => $this->idProductImage instanceof AbstractTransfer ? $this->idProductImage->toArray(true, true) : $this->idProductImage,
            'externalUrlLarge' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, true) : $this->externalUrlLarge,
            'externalUrlSmall' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, true) : $this->externalUrlSmall,
            'productImageKey' => $this->productImageKey instanceof AbstractTransfer ? $this->productImageKey->toArray(true, true) : $this->productImageKey,
            'spyProductImageSetToProductImages' => $this->spyProductImageSetToProductImages instanceof AbstractTransfer ? $this->spyProductImageSetToProductImages->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSetToProductImages, true, true),
        ];
    }
}
