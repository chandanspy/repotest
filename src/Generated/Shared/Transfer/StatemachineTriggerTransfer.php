<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 *
 * @deprecated Not in use anymore, will be removed with next major
 */
class StatemachineTriggerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EVENT_NAME = 'eventName';

    /**
     * @var string
     */
    public const ORDER_ID = 'orderId';

    /**
     * @var string
     */
    public const REFERENCES = 'references';

    /**
     * @var string
     */
    public const CONTEXT = 'context';

    /**
     * @var string
     */
    public const OBSERVER = 'observer';

    /**
     * @var string|null
     */
    protected $eventName;

    /**
     * @var string|null
     */
    protected $orderId;

    /**
     * @var array
     */
    protected $references = [];

    /**
     * @var string|null
     */
    protected $context;

    /**
     * @var string|null
     */
    protected $observer;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'event_name' => 'eventName',
        'eventName' => 'eventName',
        'EventName' => 'eventName',
        'order_id' => 'orderId',
        'orderId' => 'orderId',
        'OrderId' => 'orderId',
        'references' => 'references',
        'References' => 'references',
        'context' => 'context',
        'Context' => 'context',
        'observer' => 'observer',
        'Observer' => 'observer',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EVENT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'event_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFERENCES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'references',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTEXT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'context',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OBSERVER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'observer',
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
     * @module CustomerPage|Sales
     *
     * @param string|null $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        $this->modifiedProperties[self::EVENT_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $eventName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEventNameOrFail($eventName)
    {
        if ($eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->setEventName($eventName);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEventNameOrFail()
    {
        if ($this->eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->eventName;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEventName()
    {
        $this->assertPropertyIsSet(self::EVENT_NAME);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->modifiedProperties[self::ORDER_ID] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $orderId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderIdOrFail($orderId)
    {
        if ($orderId === null) {
            $this->throwNullValueException(static::ORDER_ID);
        }

        return $this->setOrderId($orderId);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderIdOrFail()
    {
        if ($this->orderId === null) {
            $this->throwNullValueException(static::ORDER_ID);
        }

        return $this->orderId;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderId()
    {
        $this->assertPropertyIsSet(self::ORDER_ID);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param array|null $references
     *
     * @return $this
     */
    public function setReferences(array $references = null)
    {
        if ($references === null) {
            $references = [];
        }

        $this->references = $references;
        $this->modifiedProperties[self::REFERENCES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return array
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param mixed $references
     *
     * @return $this
     */
    public function addReferences($references)
    {
        $this->references[] = $references;
        $this->modifiedProperties[self::REFERENCES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReferences()
    {
        $this->assertPropertyIsSet(self::REFERENCES);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        $this->modifiedProperties[self::CONTEXT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $context
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContextOrFail($context)
    {
        if ($context === null) {
            $this->throwNullValueException(static::CONTEXT);
        }

        return $this->setContext($context);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContextOrFail()
    {
        if ($this->context === null) {
            $this->throwNullValueException(static::CONTEXT);
        }

        return $this->context;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContext()
    {
        $this->assertPropertyIsSet(self::CONTEXT);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $observer
     *
     * @return $this
     */
    public function setObserver($observer)
    {
        $this->observer = $observer;
        $this->modifiedProperties[self::OBSERVER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getObserver()
    {
        return $this->observer;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $observer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setObserverOrFail($observer)
    {
        if ($observer === null) {
            $this->throwNullValueException(static::OBSERVER);
        }

        return $this->setObserver($observer);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getObserverOrFail()
    {
        if ($this->observer === null) {
            $this->throwNullValueException(static::OBSERVER);
        }

        return $this->observer;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireObserver()
    {
        $this->assertPropertyIsSet(self::OBSERVER);

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
                case 'eventName':
                case 'orderId':
                case 'references':
                case 'context':
                case 'observer':
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
                case 'eventName':
                case 'orderId':
                case 'references':
                case 'context':
                case 'observer':
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
                case 'eventName':
                case 'orderId':
                case 'references':
                case 'context':
                case 'observer':
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
            'eventName' => $this->eventName,
            'orderId' => $this->orderId,
            'references' => $this->references,
            'context' => $this->context,
            'observer' => $this->observer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'event_name' => $this->eventName,
            'order_id' => $this->orderId,
            'references' => $this->references,
            'context' => $this->context,
            'observer' => $this->observer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'event_name' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, false) : $this->eventName,
            'order_id' => $this->orderId instanceof AbstractTransfer ? $this->orderId->toArray(true, false) : $this->orderId,
            'references' => $this->references instanceof AbstractTransfer ? $this->references->toArray(true, false) : $this->references,
            'context' => $this->context instanceof AbstractTransfer ? $this->context->toArray(true, false) : $this->context,
            'observer' => $this->observer instanceof AbstractTransfer ? $this->observer->toArray(true, false) : $this->observer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'eventName' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, true) : $this->eventName,
            'orderId' => $this->orderId instanceof AbstractTransfer ? $this->orderId->toArray(true, true) : $this->orderId,
            'references' => $this->references instanceof AbstractTransfer ? $this->references->toArray(true, true) : $this->references,
            'context' => $this->context instanceof AbstractTransfer ? $this->context->toArray(true, true) : $this->context,
            'observer' => $this->observer instanceof AbstractTransfer ? $this->observer->toArray(true, true) : $this->observer,
        ];
    }
}
