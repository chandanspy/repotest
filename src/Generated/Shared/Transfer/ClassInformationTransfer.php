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
class ClassInformationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FULLY_QUALIFIED_CLASS_NAME = 'fullyQualifiedClassName';

    /**
     * @var string
     */
    public const CLASS_NAME = 'className';

    /**
     * @var string
     */
    public const METHODS = 'methods';

    /**
     * @var string|null
     */
    protected $fullyQualifiedClassName;

    /**
     * @var string|null
     */
    protected $className;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MethodInformationTransfer[]
     */
    protected $methods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fully_qualified_class_name' => 'fullyQualifiedClassName',
        'fullyQualifiedClassName' => 'fullyQualifiedClassName',
        'FullyQualifiedClassName' => 'fullyQualifiedClassName',
        'class_name' => 'className',
        'className' => 'className',
        'ClassName' => 'className',
        'methods' => 'methods',
        'Methods' => 'methods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FULLY_QUALIFIED_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fully_qualified_class_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'class_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHODS => [
            'type' => 'Generated\Shared\Transfer\MethodInformationTransfer',
            'type_shim' => null,
            'name_underscore' => 'methods',
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
     * @module SprykGui
     *
     * @param string|null $fullyQualifiedClassName
     *
     * @return $this
     */
    public function setFullyQualifiedClassName($fullyQualifiedClassName)
    {
        $this->fullyQualifiedClassName = $fullyQualifiedClassName;
        $this->modifiedProperties[self::FULLY_QUALIFIED_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return string|null
     */
    public function getFullyQualifiedClassName()
    {
        return $this->fullyQualifiedClassName;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $fullyQualifiedClassName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFullyQualifiedClassNameOrFail($fullyQualifiedClassName)
    {
        if ($fullyQualifiedClassName === null) {
            $this->throwNullValueException(static::FULLY_QUALIFIED_CLASS_NAME);
        }

        return $this->setFullyQualifiedClassName($fullyQualifiedClassName);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFullyQualifiedClassNameOrFail()
    {
        if ($this->fullyQualifiedClassName === null) {
            $this->throwNullValueException(static::FULLY_QUALIFIED_CLASS_NAME);
        }

        return $this->fullyQualifiedClassName;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFullyQualifiedClassName()
    {
        $this->assertPropertyIsSet(self::FULLY_QUALIFIED_CLASS_NAME);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $className
     *
     * @return $this
     */
    public function setClassName($className)
    {
        $this->className = $className;
        $this->modifiedProperties[self::CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return string|null
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @module SprykGui
     *
     * @param string|null $className
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClassNameOrFail($className)
    {
        if ($className === null) {
            $this->throwNullValueException(static::CLASS_NAME);
        }

        return $this->setClassName($className);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClassNameOrFail()
    {
        if ($this->className === null) {
            $this->throwNullValueException(static::CLASS_NAME);
        }

        return $this->className;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClassName()
    {
        $this->assertPropertyIsSet(self::CLASS_NAME);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MethodInformationTransfer[] $methods
     *
     * @return $this
     */
    public function setMethods(ArrayObject $methods)
    {
        $this->methods = $methods;
        $this->modifiedProperties[self::METHODS] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MethodInformationTransfer[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\MethodInformationTransfer $method
     *
     * @return $this
     */
    public function addMethod(MethodInformationTransfer $method)
    {
        $this->methods[] = $method;
        $this->modifiedProperties[self::METHODS] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethods()
    {
        $this->assertCollectionPropertyIsSet(self::METHODS);

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
                case 'fullyQualifiedClassName':
                case 'className':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'methods':
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
                case 'fullyQualifiedClassName':
                case 'className':
                    $values[$arrayKey] = $value;

                    break;
                case 'methods':
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
                case 'fullyQualifiedClassName':
                case 'className':
                    $values[$arrayKey] = $value;

                    break;
                case 'methods':
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
        $this->methods = $this->methods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName,
            'className' => $this->className,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fully_qualified_class_name' => $this->fullyQualifiedClassName,
            'class_name' => $this->className,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fully_qualified_class_name' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, false) : $this->fullyQualifiedClassName,
            'class_name' => $this->className instanceof AbstractTransfer ? $this->className->toArray(true, false) : $this->className,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, false) : $this->addValuesToCollection($this->methods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, true) : $this->fullyQualifiedClassName,
            'className' => $this->className instanceof AbstractTransfer ? $this->className->toArray(true, true) : $this->className,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, true) : $this->addValuesToCollection($this->methods, true, true),
        ];
    }
}
