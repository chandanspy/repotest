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
class SpyCategoryImageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_IMAGE = 'idCategoryImage';

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
    public const SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES = 'spyCategoryImageSetToCategoryImages';

    /**
     * @var integer|null
     */
    protected $idCategoryImage;

    /**
     * @var string|null
     */
    protected $externalUrlLarge;

    /**
     * @var string|null
     */
    protected $externalUrlSmall;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer[]
     */
    protected $spyCategoryImageSetToCategoryImages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_image' => 'idCategoryImage',
        'idCategoryImage' => 'idCategoryImage',
        'IdCategoryImage' => 'idCategoryImage',
        'external_url_large' => 'externalUrlLarge',
        'externalUrlLarge' => 'externalUrlLarge',
        'ExternalUrlLarge' => 'externalUrlLarge',
        'external_url_small' => 'externalUrlSmall',
        'externalUrlSmall' => 'externalUrlSmall',
        'ExternalUrlSmall' => 'externalUrlSmall',
        'spy_category_image_set_to_category_images' => 'spyCategoryImageSetToCategoryImages',
        'spyCategoryImageSetToCategoryImages' => 'spyCategoryImageSetToCategoryImages',
        'SpyCategoryImageSetToCategoryImages' => 'spyCategoryImageSetToCategoryImages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_IMAGE => [
            'type' => 'integer',
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
        self::SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_image_set_to_category_images',
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
    public static $entityNamespace = 'Orm\Zed\CategoryImage\Persistence\SpyCategoryImage';


    /**
     * @module 
     *
     * @param integer|null $idCategoryImage
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryImage()
    {
        return $this->idCategoryImage;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryImage
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryImageOrFail()
    {
        if ($this->idCategoryImage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE);
        }

        return $this->idCategoryImage;
    }

    /**
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer[] $spyCategoryImageSetToCategoryImages
     *
     * @return $this
     */
    public function setSpyCategoryImageSetToCategoryImages(ArrayObject $spyCategoryImageSetToCategoryImages)
    {
        $this->spyCategoryImageSetToCategoryImages = $spyCategoryImageSetToCategoryImages;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer[]
     */
    public function getSpyCategoryImageSetToCategoryImages()
    {
        return $this->spyCategoryImageSetToCategoryImages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer $spyCategoryImageSetToCategoryImages
     *
     * @return $this
     */
    public function addSpyCategoryImageSetToCategoryImages(SpyCategoryImageSetToCategoryImageEntityTransfer $spyCategoryImageSetToCategoryImages)
    {
        $this->spyCategoryImageSetToCategoryImages[] = $spyCategoryImageSetToCategoryImages;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryImageSetToCategoryImages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES);

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
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCategoryImageSetToCategoryImages':
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
                case 'idCategoryImage':
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryImageSetToCategoryImages':
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
                case 'idCategoryImage':
                case 'externalUrlLarge':
                case 'externalUrlSmall':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryImageSetToCategoryImages':
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
        $this->spyCategoryImageSetToCategoryImages = $this->spyCategoryImageSetToCategoryImages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategoryImage' => $this->idCategoryImage,
            'externalUrlLarge' => $this->externalUrlLarge,
            'externalUrlSmall' => $this->externalUrlSmall,
            'spyCategoryImageSetToCategoryImages' => $this->spyCategoryImageSetToCategoryImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image' => $this->idCategoryImage,
            'external_url_large' => $this->externalUrlLarge,
            'external_url_small' => $this->externalUrlSmall,
            'spy_category_image_set_to_category_images' => $this->spyCategoryImageSetToCategoryImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image' => $this->idCategoryImage instanceof AbstractTransfer ? $this->idCategoryImage->toArray(true, false) : $this->idCategoryImage,
            'external_url_large' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, false) : $this->externalUrlLarge,
            'external_url_small' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, false) : $this->externalUrlSmall,
            'spy_category_image_set_to_category_images' => $this->spyCategoryImageSetToCategoryImages instanceof AbstractTransfer ? $this->spyCategoryImageSetToCategoryImages->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryImageSetToCategoryImages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryImage' => $this->idCategoryImage instanceof AbstractTransfer ? $this->idCategoryImage->toArray(true, true) : $this->idCategoryImage,
            'externalUrlLarge' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, true) : $this->externalUrlLarge,
            'externalUrlSmall' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, true) : $this->externalUrlSmall,
            'spyCategoryImageSetToCategoryImages' => $this->spyCategoryImageSetToCategoryImages instanceof AbstractTransfer ? $this->spyCategoryImageSetToCategoryImages->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryImageSetToCategoryImages, true, true),
        ];
    }
}
