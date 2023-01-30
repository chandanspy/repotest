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
class SpyCategoryImageSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_IMAGE_SET = 'idCategoryImageSet';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_CATEGORY = 'spyCategory';

    /**
     * @var string
     */
    public const SPY_CATEGORY_IMAGE_SET_TO_CATEGORY_IMAGES = 'spyCategoryImageSetToCategoryImages';

    /**
     * @var integer|null
     */
    protected $idCategoryImageSet;

    /**
     * @var integer|null
     */
    protected $fkCategory;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    protected $spyCategory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetToCategoryImageEntityTransfer[]
     */
    protected $spyCategoryImageSetToCategoryImages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_image_set' => 'idCategoryImageSet',
        'idCategoryImageSet' => 'idCategoryImageSet',
        'IdCategoryImageSet' => 'idCategoryImageSet',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'name' => 'name',
        'Name' => 'name',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_category' => 'spyCategory',
        'spyCategory' => 'spyCategory',
        'SpyCategory' => 'spyCategory',
        'spy_category_image_set_to_category_images' => 'spyCategoryImageSetToCategoryImages',
        'spyCategoryImageSetToCategoryImages' => 'spyCategoryImageSetToCategoryImages',
        'SpyCategoryImageSetToCategoryImages' => 'spyCategoryImageSetToCategoryImages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_IMAGE_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_category_image_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category',
            'is_collection' => false,
            'is_transfer' => true,
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
    public static $entityNamespace = 'Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSet';


    /**
     * @module 
     *
     * @param integer|null $idCategoryImageSet
     *
     * @return $this
     */
    public function setIdCategoryImageSet($idCategoryImageSet)
    {
        $this->idCategoryImageSet = $idCategoryImageSet;
        $this->modifiedProperties[self::ID_CATEGORY_IMAGE_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryImageSet()
    {
        return $this->idCategoryImageSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryImageSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryImageSetOrFail($idCategoryImageSet)
    {
        if ($idCategoryImageSet === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE_SET);
        }

        return $this->setIdCategoryImageSet($idCategoryImageSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryImageSetOrFail()
    {
        if ($this->idCategoryImageSet === null) {
            $this->throwNullValueException(static::ID_CATEGORY_IMAGE_SET);
        }

        return $this->idCategoryImageSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryImageSet()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_IMAGE_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @return $this
     */
    public function setFkCategory($fkCategory)
    {
        $this->fkCategory = $fkCategory;
        $this->modifiedProperties[self::FK_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryOrFail($fkCategory)
    {
        if ($fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->setFkCategory($fkCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategory()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null $spyCategory
     *
     * @return $this
     */
    public function setSpyCategory(SpyCategoryEntityTransfer $spyCategory = null)
    {
        $this->spyCategory = $spyCategory;
        $this->modifiedProperties[self::SPY_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    public function getSpyCategory()
    {
        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $spyCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryOrFail(SpyCategoryEntityTransfer $spyCategory)
    {
        return $this->setSpyCategory($spyCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer
     */
    public function getSpyCategoryOrFail()
    {
        if ($this->spyCategory === null) {
            $this->throwNullValueException(static::SPY_CATEGORY);
        }

        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategory()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY);

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
                case 'idCategoryImageSet':
                case 'fkCategory':
                case 'fkLocale':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyLocale':
                case 'spyCategory':
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
                case 'idCategoryImageSet':
                case 'fkCategory':
                case 'fkLocale':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                case 'spyCategory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idCategoryImageSet':
                case 'fkCategory':
                case 'fkLocale':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                case 'spyCategory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idCategoryImageSet' => $this->idCategoryImageSet,
            'fkCategory' => $this->fkCategory,
            'fkLocale' => $this->fkLocale,
            'name' => $this->name,
            'spyLocale' => $this->spyLocale,
            'spyCategory' => $this->spyCategory,
            'spyCategoryImageSetToCategoryImages' => $this->spyCategoryImageSetToCategoryImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image_set' => $this->idCategoryImageSet,
            'fk_category' => $this->fkCategory,
            'fk_locale' => $this->fkLocale,
            'name' => $this->name,
            'spy_locale' => $this->spyLocale,
            'spy_category' => $this->spyCategory,
            'spy_category_image_set_to_category_images' => $this->spyCategoryImageSetToCategoryImages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_image_set' => $this->idCategoryImageSet instanceof AbstractTransfer ? $this->idCategoryImageSet->toArray(true, false) : $this->idCategoryImageSet,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_category' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, false) : $this->spyCategory,
            'spy_category_image_set_to_category_images' => $this->spyCategoryImageSetToCategoryImages instanceof AbstractTransfer ? $this->spyCategoryImageSetToCategoryImages->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryImageSetToCategoryImages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryImageSet' => $this->idCategoryImageSet instanceof AbstractTransfer ? $this->idCategoryImageSet->toArray(true, true) : $this->idCategoryImageSet,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyCategory' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, true) : $this->spyCategory,
            'spyCategoryImageSetToCategoryImages' => $this->spyCategoryImageSetToCategoryImages instanceof AbstractTransfer ? $this->spyCategoryImageSetToCategoryImages->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryImageSetToCategoryImages, true, true),
        ];
    }
}
