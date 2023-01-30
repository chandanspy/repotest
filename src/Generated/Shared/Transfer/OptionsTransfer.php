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
class OptionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RETURN_TYPE_COLLECTION = 'returnTypeCollection';

    /**
     * @var string
     */
    public const CLASS_INFORMATION_COLLECTION = 'classInformationCollection';

    /**
     * @var string
     */
    public const ARGUMENT_COLLECTION = 'argumentCollection';

    /**
     * @var \Generated\Shared\Transfer\ReturnTypeCollectionTransfer|null
     */
    protected $returnTypeCollection;

    /**
     * @var \Generated\Shared\Transfer\ClassInformationCollectionTransfer|null
     */
    protected $classInformationCollection;

    /**
     * @var \Generated\Shared\Transfer\ArgumentCollectionTransfer|null
     */
    protected $argumentCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'return_type_collection' => 'returnTypeCollection',
        'returnTypeCollection' => 'returnTypeCollection',
        'ReturnTypeCollection' => 'returnTypeCollection',
        'class_information_collection' => 'classInformationCollection',
        'classInformationCollection' => 'classInformationCollection',
        'ClassInformationCollection' => 'classInformationCollection',
        'argument_collection' => 'argumentCollection',
        'argumentCollection' => 'argumentCollection',
        'ArgumentCollection' => 'argumentCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RETURN_TYPE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\ReturnTypeCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'return_type_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLASS_INFORMATION_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\ClassInformationCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'class_information_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ARGUMENT_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\ArgumentCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'argument_collection',
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
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ReturnTypeCollectionTransfer|null $returnTypeCollection
     *
     * @return $this
     */
    public function setReturnTypeCollection(ReturnTypeCollectionTransfer $returnTypeCollection = null)
    {
        $this->returnTypeCollection = $returnTypeCollection;
        $this->modifiedProperties[self::RETURN_TYPE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ReturnTypeCollectionTransfer|null
     */
    public function getReturnTypeCollection()
    {
        return $this->returnTypeCollection;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ReturnTypeCollectionTransfer $returnTypeCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReturnTypeCollectionOrFail(ReturnTypeCollectionTransfer $returnTypeCollection)
    {
        return $this->setReturnTypeCollection($returnTypeCollection);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ReturnTypeCollectionTransfer
     */
    public function getReturnTypeCollectionOrFail()
    {
        if ($this->returnTypeCollection === null) {
            $this->throwNullValueException(static::RETURN_TYPE_COLLECTION);
        }

        return $this->returnTypeCollection;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnTypeCollection()
    {
        $this->assertPropertyIsSet(self::RETURN_TYPE_COLLECTION);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ClassInformationCollectionTransfer|null $classInformationCollection
     *
     * @return $this
     */
    public function setClassInformationCollection(ClassInformationCollectionTransfer $classInformationCollection = null)
    {
        $this->classInformationCollection = $classInformationCollection;
        $this->modifiedProperties[self::CLASS_INFORMATION_COLLECTION] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ClassInformationCollectionTransfer|null
     */
    public function getClassInformationCollection()
    {
        return $this->classInformationCollection;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ClassInformationCollectionTransfer $classInformationCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClassInformationCollectionOrFail(ClassInformationCollectionTransfer $classInformationCollection)
    {
        return $this->setClassInformationCollection($classInformationCollection);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ClassInformationCollectionTransfer
     */
    public function getClassInformationCollectionOrFail()
    {
        if ($this->classInformationCollection === null) {
            $this->throwNullValueException(static::CLASS_INFORMATION_COLLECTION);
        }

        return $this->classInformationCollection;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClassInformationCollection()
    {
        $this->assertPropertyIsSet(self::CLASS_INFORMATION_COLLECTION);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentCollectionTransfer|null $argumentCollection
     *
     * @return $this
     */
    public function setArgumentCollection(ArgumentCollectionTransfer $argumentCollection = null)
    {
        $this->argumentCollection = $argumentCollection;
        $this->modifiedProperties[self::ARGUMENT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ArgumentCollectionTransfer|null
     */
    public function getArgumentCollection()
    {
        return $this->argumentCollection;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ArgumentCollectionTransfer $argumentCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setArgumentCollectionOrFail(ArgumentCollectionTransfer $argumentCollection)
    {
        return $this->setArgumentCollection($argumentCollection);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ArgumentCollectionTransfer
     */
    public function getArgumentCollectionOrFail()
    {
        if ($this->argumentCollection === null) {
            $this->throwNullValueException(static::ARGUMENT_COLLECTION);
        }

        return $this->argumentCollection;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireArgumentCollection()
    {
        $this->assertPropertyIsSet(self::ARGUMENT_COLLECTION);

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
                case 'returnTypeCollection':
                case 'classInformationCollection':
                case 'argumentCollection':
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
                case 'returnTypeCollection':
                case 'classInformationCollection':
                case 'argumentCollection':
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
                case 'returnTypeCollection':
                case 'classInformationCollection':
                case 'argumentCollection':
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
            'returnTypeCollection' => $this->returnTypeCollection,
            'classInformationCollection' => $this->classInformationCollection,
            'argumentCollection' => $this->argumentCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'return_type_collection' => $this->returnTypeCollection,
            'class_information_collection' => $this->classInformationCollection,
            'argument_collection' => $this->argumentCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'return_type_collection' => $this->returnTypeCollection instanceof AbstractTransfer ? $this->returnTypeCollection->toArray(true, false) : $this->returnTypeCollection,
            'class_information_collection' => $this->classInformationCollection instanceof AbstractTransfer ? $this->classInformationCollection->toArray(true, false) : $this->classInformationCollection,
            'argument_collection' => $this->argumentCollection instanceof AbstractTransfer ? $this->argumentCollection->toArray(true, false) : $this->argumentCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'returnTypeCollection' => $this->returnTypeCollection instanceof AbstractTransfer ? $this->returnTypeCollection->toArray(true, true) : $this->returnTypeCollection,
            'classInformationCollection' => $this->classInformationCollection instanceof AbstractTransfer ? $this->classInformationCollection->toArray(true, true) : $this->classInformationCollection,
            'argumentCollection' => $this->argumentCollection instanceof AbstractTransfer ? $this->argumentCollection->toArray(true, true) : $this->argumentCollection,
        ];
    }
}
