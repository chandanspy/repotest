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
class QuoteErrorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const ERROR_IDENTIFIER = 'errorIdentifier';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var string|null
     */
    protected $errorIdentifier;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'message' => 'message',
        'Message' => 'message',
        'error_identifier' => 'errorIdentifier',
        'errorIdentifier' => 'errorIdentifier',
        'ErrorIdentifier' => 'errorIdentifier',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'error_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
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
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|Currency|OrderCustomReference|PersistentCartShare|Price|QuoteRequestAgent|QuoteRequest|Quote|Store
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|Currency|OrderCustomReference|PersistentCartShare|Price|QuoteRequestAgent|QuoteRequest|Quote|Store
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|Currency|OrderCustomReference|PersistentCartShare|Price|QuoteRequestAgent|QuoteRequest|Quote|Store
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|Currency|OrderCustomReference|PersistentCartShare|Price|QuoteRequestAgent|QuoteRequest|Quote|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|Currency|OrderCustomReference|PersistentCartShare|Price|QuoteRequestAgent|QuoteRequest|Quote|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @return $this
     */
    public function setErrorIdentifier($errorIdentifier)
    {
        $this->errorIdentifier = $errorIdentifier;
        $this->modifiedProperties[self::ERROR_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @return string|null
     */
    public function getErrorIdentifier()
    {
        return $this->errorIdentifier;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorIdentifierOrFail($errorIdentifier)
    {
        if ($errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->setErrorIdentifier($errorIdentifier);
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getErrorIdentifierOrFail()
    {
        if ($this->errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->errorIdentifier;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorIdentifier()
    {
        $this->assertPropertyIsSet(self::ERROR_IDENTIFIER);

        return $this;
    }

    /**
     * @module Currency|Price|Quote
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module Currency|Price|Quote
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module Currency|Price|Quote
     *
     * @param mixed $parameters
     *
     * @return $this
     */
    public function addParameters($parameters)
    {
        $this->parameters[] = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module Currency|Price|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

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
                case 'message':
                case 'errorIdentifier':
                case 'parameters':
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
                case 'message':
                case 'errorIdentifier':
                case 'parameters':
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
                case 'message':
                case 'errorIdentifier':
                case 'parameters':
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
            'message' => $this->message,
            'errorIdentifier' => $this->errorIdentifier,
            'parameters' => $this->parameters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message,
            'error_identifier' => $this->errorIdentifier,
            'parameters' => $this->parameters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'error_identifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, false) : $this->errorIdentifier,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'errorIdentifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, true) : $this->errorIdentifier,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
        ];
    }
}
