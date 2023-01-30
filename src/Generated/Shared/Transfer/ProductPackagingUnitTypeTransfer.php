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
class ProductPackagingUnitTypeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_PACKAGING_UNIT_TYPE = 'idProductPackagingUnitType';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TRANSLATIONS = 'translations';

    /**
     * @var int|null
     */
    protected $idProductPackagingUnitType;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductPackagingUnitTypeTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_packaging_unit_type' => 'idProductPackagingUnitType',
        'idProductPackagingUnitType' => 'idProductPackagingUnitType',
        'IdProductPackagingUnitType' => 'idProductPackagingUnitType',
        'name' => 'name',
        'Name' => 'name',
        'translations' => 'translations',
        'Translations' => 'translations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_PACKAGING_UNIT_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_packaging_unit_type',
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
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductPackagingUnitTypeTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'translations',
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
     * @module ProductPackagingUnit
     *
     * @param int|null $idProductPackagingUnitType
     *
     * @return $this
     */
    public function setIdProductPackagingUnitType($idProductPackagingUnitType)
    {
        $this->idProductPackagingUnitType = $idProductPackagingUnitType;
        $this->modifiedProperties[self::ID_PRODUCT_PACKAGING_UNIT_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return int|null
     */
    public function getIdProductPackagingUnitType()
    {
        return $this->idProductPackagingUnitType;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param int|null $idProductPackagingUnitType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductPackagingUnitTypeOrFail($idProductPackagingUnitType)
    {
        if ($idProductPackagingUnitType === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->setIdProductPackagingUnitType($idProductPackagingUnitType);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductPackagingUnitTypeOrFail()
    {
        if ($this->idProductPackagingUnitType === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->idProductPackagingUnitType;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductPackagingUnitType()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_PACKAGING_UNIT_TYPE);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
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
     * @module ProductPackagingUnit
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductPackagingUnit
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
     * @module ProductPackagingUnit
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
     * @module ProductPackagingUnit
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
     * @module ProductPackagingUnit
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductPackagingUnitTypeTranslationTransfer[] $translations
     *
     * @return $this
     */
    public function setTranslations(ArrayObject $translations)
    {
        $this->translations = $translations;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductPackagingUnitTypeTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductPackagingUnitTypeTranslationTransfer $productPackagingUnitTypeTranslation
     *
     * @return $this
     */
    public function addProductPackagingUnitTypeTranslation(ProductPackagingUnitTypeTranslationTransfer $productPackagingUnitTypeTranslation)
    {
        $this->translations[] = $productPackagingUnitTypeTranslation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::TRANSLATIONS);

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
                case 'idProductPackagingUnitType':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'translations':
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
                case 'idProductPackagingUnitType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
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
                case 'idProductPackagingUnitType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
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
        $this->translations = $this->translations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnitType' => $this->idProductPackagingUnitType,
            'name' => $this->name,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit_type' => $this->idProductPackagingUnitType,
            'name' => $this->name,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit_type' => $this->idProductPackagingUnitType instanceof AbstractTransfer ? $this->idProductPackagingUnitType->toArray(true, false) : $this->idProductPackagingUnitType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnitType' => $this->idProductPackagingUnitType instanceof AbstractTransfer ? $this->idProductPackagingUnitType->toArray(true, true) : $this->idProductPackagingUnitType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
        ];
    }
}
