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
class OauthGrantTypeConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const FULLY_QUALIFIED_CLASS_NAME = 'fullyQualifiedClassName';

    /**
     * @var string
     */
    public const BUILDER_FULLY_QUALIFIED_CLASS_NAME = 'builderFullyQualifiedClassName';

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $fullyQualifiedClassName;

    /**
     * @var string|null
     */
    protected $builderFullyQualifiedClassName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'fully_qualified_class_name' => 'fullyQualifiedClassName',
        'fullyQualifiedClassName' => 'fullyQualifiedClassName',
        'FullyQualifiedClassName' => 'fullyQualifiedClassName',
        'builder_fully_qualified_class_name' => 'builderFullyQualifiedClassName',
        'builderFullyQualifiedClassName' => 'builderFullyQualifiedClassName',
        'BuilderFullyQualifiedClassName' => 'builderFullyQualifiedClassName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::BUILDER_FULLY_QUALIFIED_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'builder_fully_qualified_class_name',
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
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @param string|null $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @param string|null $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail($identifier)
    {
        if ($identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->setIdentifier($identifier);
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdentifierOrFail()
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
     *
     * @return string|null
     */
    public function getFullyQualifiedClassName()
    {
        return $this->fullyQualifiedClassName;
    }

    /**
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCompanyUser|OauthCustomerConnector|Oauth
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
     * @module Oauth
     *
     * @param string|null $builderFullyQualifiedClassName
     *
     * @return $this
     */
    public function setBuilderFullyQualifiedClassName($builderFullyQualifiedClassName)
    {
        $this->builderFullyQualifiedClassName = $builderFullyQualifiedClassName;
        $this->modifiedProperties[self::BUILDER_FULLY_QUALIFIED_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getBuilderFullyQualifiedClassName()
    {
        return $this->builderFullyQualifiedClassName;
    }

    /**
     * @module Oauth
     *
     * @param string|null $builderFullyQualifiedClassName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBuilderFullyQualifiedClassNameOrFail($builderFullyQualifiedClassName)
    {
        if ($builderFullyQualifiedClassName === null) {
            $this->throwNullValueException(static::BUILDER_FULLY_QUALIFIED_CLASS_NAME);
        }

        return $this->setBuilderFullyQualifiedClassName($builderFullyQualifiedClassName);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBuilderFullyQualifiedClassNameOrFail()
    {
        if ($this->builderFullyQualifiedClassName === null) {
            $this->throwNullValueException(static::BUILDER_FULLY_QUALIFIED_CLASS_NAME);
        }

        return $this->builderFullyQualifiedClassName;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBuilderFullyQualifiedClassName()
    {
        $this->assertPropertyIsSet(self::BUILDER_FULLY_QUALIFIED_CLASS_NAME);

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
                case 'identifier':
                case 'fullyQualifiedClassName':
                case 'builderFullyQualifiedClassName':
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
                case 'identifier':
                case 'fullyQualifiedClassName':
                case 'builderFullyQualifiedClassName':
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
                case 'identifier':
                case 'fullyQualifiedClassName':
                case 'builderFullyQualifiedClassName':
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
            'identifier' => $this->identifier,
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName,
            'builderFullyQualifiedClassName' => $this->builderFullyQualifiedClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'fully_qualified_class_name' => $this->fullyQualifiedClassName,
            'builder_fully_qualified_class_name' => $this->builderFullyQualifiedClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'fully_qualified_class_name' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, false) : $this->fullyQualifiedClassName,
            'builder_fully_qualified_class_name' => $this->builderFullyQualifiedClassName instanceof AbstractTransfer ? $this->builderFullyQualifiedClassName->toArray(true, false) : $this->builderFullyQualifiedClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, true) : $this->fullyQualifiedClassName,
            'builderFullyQualifiedClassName' => $this->builderFullyQualifiedClassName instanceof AbstractTransfer ? $this->builderFullyQualifiedClassName->toArray(true, true) : $this->builderFullyQualifiedClassName,
        ];
    }
}
