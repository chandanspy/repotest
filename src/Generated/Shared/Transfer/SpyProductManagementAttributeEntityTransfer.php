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
class SpyProductManagementAttributeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MANAGEMENT_ATTRIBUTE = 'idProductManagementAttribute';

    /**
     * @var string
     */
    public const FK_PRODUCT_ATTRIBUTE_KEY = 'fkProductAttributeKey';

    /**
     * @var string
     */
    public const ALLOW_INPUT = 'allowInput';

    /**
     * @var string
     */
    public const INPUT_TYPE = 'inputType';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ATTRIBUTE_KEY = 'spyProductAttributeKey';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUES = 'spyProductManagementAttributeValues';

    /**
     * @var integer|null
     */
    protected $idProductManagementAttribute;

    /**
     * @var integer|null
     */
    protected $fkProductAttributeKey;

    /**
     * @var boolean|null
     */
    protected $allowInput;

    /**
     * @var string|null
     */
    protected $inputType;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null
     */
    protected $spyProductAttributeKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer[]
     */
    protected $spyProductManagementAttributeValues;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_management_attribute' => 'idProductManagementAttribute',
        'idProductManagementAttribute' => 'idProductManagementAttribute',
        'IdProductManagementAttribute' => 'idProductManagementAttribute',
        'fk_product_attribute_key' => 'fkProductAttributeKey',
        'fkProductAttributeKey' => 'fkProductAttributeKey',
        'FkProductAttributeKey' => 'fkProductAttributeKey',
        'allow_input' => 'allowInput',
        'allowInput' => 'allowInput',
        'AllowInput' => 'allowInput',
        'input_type' => 'inputType',
        'inputType' => 'inputType',
        'InputType' => 'inputType',
        'spy_product_attribute_key' => 'spyProductAttributeKey',
        'spyProductAttributeKey' => 'spyProductAttributeKey',
        'SpyProductAttributeKey' => 'spyProductAttributeKey',
        'spy_product_management_attribute_values' => 'spyProductManagementAttributeValues',
        'spyProductManagementAttributeValues' => 'spyProductManagementAttributeValues',
        'SpyProductManagementAttributeValues' => 'spyProductManagementAttributeValues',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_management_attribute',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_attribute_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALLOW_INPUT => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'allow_input',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INPUT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'input_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_attribute_key',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUES => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attribute_values',
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
    public static $entityNamespace = 'Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute';


    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttribute
     *
     * @return $this
     */
    public function setIdProductManagementAttribute($idProductManagementAttribute)
    {
        $this->idProductManagementAttribute = $idProductManagementAttribute;
        $this->modifiedProperties[self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductManagementAttribute()
    {
        return $this->idProductManagementAttribute;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductManagementAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductManagementAttributeOrFail($idProductManagementAttribute)
    {
        if ($idProductManagementAttribute === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->setIdProductManagementAttribute($idProductManagementAttribute);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductManagementAttributeOrFail()
    {
        if ($this->idProductManagementAttribute === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MANAGEMENT_ATTRIBUTE);
        }

        return $this->idProductManagementAttribute;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductManagementAttribute()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MANAGEMENT_ATTRIBUTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAttributeKey
     *
     * @return $this
     */
    public function setFkProductAttributeKey($fkProductAttributeKey)
    {
        $this->fkProductAttributeKey = $fkProductAttributeKey;
        $this->modifiedProperties[self::FK_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAttributeKey()
    {
        return $this->fkProductAttributeKey;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAttributeKeyOrFail($fkProductAttributeKey)
    {
        if ($fkProductAttributeKey === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->setFkProductAttributeKey($fkProductAttributeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAttributeKeyOrFail()
    {
        if ($this->fkProductAttributeKey === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->fkProductAttributeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $allowInput
     *
     * @return $this
     */
    public function setAllowInput($allowInput)
    {
        $this->allowInput = $allowInput;
        $this->modifiedProperties[self::ALLOW_INPUT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getAllowInput()
    {
        return $this->allowInput;
    }

    /**
     * @module 
     *
     * @param boolean|null $allowInput
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAllowInputOrFail($allowInput)
    {
        if ($allowInput === null) {
            $this->throwNullValueException(static::ALLOW_INPUT);
        }

        return $this->setAllowInput($allowInput);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getAllowInputOrFail()
    {
        if ($this->allowInput === null) {
            $this->throwNullValueException(static::ALLOW_INPUT);
        }

        return $this->allowInput;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAllowInput()
    {
        $this->assertPropertyIsSet(self::ALLOW_INPUT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $inputType
     *
     * @return $this
     */
    public function setInputType($inputType)
    {
        $this->inputType = $inputType;
        $this->modifiedProperties[self::INPUT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getInputType()
    {
        return $this->inputType;
    }

    /**
     * @module 
     *
     * @param string|null $inputType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInputTypeOrFail($inputType)
    {
        if ($inputType === null) {
            $this->throwNullValueException(static::INPUT_TYPE);
        }

        return $this->setInputType($inputType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInputTypeOrFail()
    {
        if ($this->inputType === null) {
            $this->throwNullValueException(static::INPUT_TYPE);
        }

        return $this->inputType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInputType()
    {
        $this->assertPropertyIsSet(self::INPUT_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null $spyProductAttributeKey
     *
     * @return $this
     */
    public function setSpyProductAttributeKey(SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey = null)
    {
        $this->spyProductAttributeKey = $spyProductAttributeKey;
        $this->modifiedProperties[self::SPY_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer|null
     */
    public function getSpyProductAttributeKey()
    {
        return $this->spyProductAttributeKey;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAttributeKeyOrFail(SpyProductAttributeKeyEntityTransfer $spyProductAttributeKey)
    {
        return $this->setSpyProductAttributeKey($spyProductAttributeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAttributeKeyEntityTransfer
     */
    public function getSpyProductAttributeKeyOrFail()
    {
        if ($this->spyProductAttributeKey === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->spyProductAttributeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer[] $spyProductManagementAttributeValues
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeValues(ArrayObject $spyProductManagementAttributeValues)
    {
        $this->spyProductManagementAttributeValues = $spyProductManagementAttributeValues;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer[]
     */
    public function getSpyProductManagementAttributeValues()
    {
        return $this->spyProductManagementAttributeValues;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeValueEntityTransfer $spyProductManagementAttributeValues
     *
     * @return $this
     */
    public function addSpyProductManagementAttributeValues(SpyProductManagementAttributeValueEntityTransfer $spyProductManagementAttributeValues)
    {
        $this->spyProductManagementAttributeValues[] = $spyProductManagementAttributeValues;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttributeValues()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUES);

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
                case 'idProductManagementAttribute':
                case 'fkProductAttributeKey':
                case 'allowInput':
                case 'inputType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAttributeKey':
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
                case 'spyProductManagementAttributeValues':
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
                case 'idProductManagementAttribute':
                case 'fkProductAttributeKey':
                case 'allowInput':
                case 'inputType':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAttributeKey':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductManagementAttributeValues':
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
                case 'idProductManagementAttribute':
                case 'fkProductAttributeKey':
                case 'allowInput':
                case 'inputType':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAttributeKey':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductManagementAttributeValues':
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
        $this->spyProductManagementAttributeValues = $this->spyProductManagementAttributeValues ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttribute' => $this->idProductManagementAttribute,
            'fkProductAttributeKey' => $this->fkProductAttributeKey,
            'allowInput' => $this->allowInput,
            'inputType' => $this->inputType,
            'spyProductAttributeKey' => $this->spyProductAttributeKey,
            'spyProductManagementAttributeValues' => $this->spyProductManagementAttributeValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute' => $this->idProductManagementAttribute,
            'fk_product_attribute_key' => $this->fkProductAttributeKey,
            'allow_input' => $this->allowInput,
            'input_type' => $this->inputType,
            'spy_product_attribute_key' => $this->spyProductAttributeKey,
            'spy_product_management_attribute_values' => $this->spyProductManagementAttributeValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_management_attribute' => $this->idProductManagementAttribute instanceof AbstractTransfer ? $this->idProductManagementAttribute->toArray(true, false) : $this->idProductManagementAttribute,
            'fk_product_attribute_key' => $this->fkProductAttributeKey instanceof AbstractTransfer ? $this->fkProductAttributeKey->toArray(true, false) : $this->fkProductAttributeKey,
            'allow_input' => $this->allowInput instanceof AbstractTransfer ? $this->allowInput->toArray(true, false) : $this->allowInput,
            'input_type' => $this->inputType instanceof AbstractTransfer ? $this->inputType->toArray(true, false) : $this->inputType,
            'spy_product_attribute_key' => $this->spyProductAttributeKey instanceof AbstractTransfer ? $this->spyProductAttributeKey->toArray(true, false) : $this->spyProductAttributeKey,
            'spy_product_management_attribute_values' => $this->spyProductManagementAttributeValues instanceof AbstractTransfer ? $this->spyProductManagementAttributeValues->toArray(true, false) : $this->addValuesToCollection($this->spyProductManagementAttributeValues, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductManagementAttribute' => $this->idProductManagementAttribute instanceof AbstractTransfer ? $this->idProductManagementAttribute->toArray(true, true) : $this->idProductManagementAttribute,
            'fkProductAttributeKey' => $this->fkProductAttributeKey instanceof AbstractTransfer ? $this->fkProductAttributeKey->toArray(true, true) : $this->fkProductAttributeKey,
            'allowInput' => $this->allowInput instanceof AbstractTransfer ? $this->allowInput->toArray(true, true) : $this->allowInput,
            'inputType' => $this->inputType instanceof AbstractTransfer ? $this->inputType->toArray(true, true) : $this->inputType,
            'spyProductAttributeKey' => $this->spyProductAttributeKey instanceof AbstractTransfer ? $this->spyProductAttributeKey->toArray(true, true) : $this->spyProductAttributeKey,
            'spyProductManagementAttributeValues' => $this->spyProductManagementAttributeValues instanceof AbstractTransfer ? $this->spyProductManagementAttributeValues->toArray(true, true) : $this->addValuesToCollection($this->spyProductManagementAttributeValues, true, true),
        ];
    }
}
