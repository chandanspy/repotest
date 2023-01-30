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
class RouteAuthorizationConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STRATEGY = 'strategy';

    /**
     * @var string
     */
    public const API_CODE = 'apiCode';

    /**
     * @var string
     */
    public const API_MESSAGE = 'apiMessage';

    /**
     * @var string
     */
    public const HTTP_STATUS_CODE = 'httpStatusCode';

    /**
     * @var string|null
     */
    protected $strategy;

    /**
     * @var string|null
     */
    protected $apiCode;

    /**
     * @var string|null
     */
    protected $apiMessage;

    /**
     * @var int|null
     */
    protected $httpStatusCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'strategy' => 'strategy',
        'Strategy' => 'strategy',
        'api_code' => 'apiCode',
        'apiCode' => 'apiCode',
        'ApiCode' => 'apiCode',
        'api_message' => 'apiMessage',
        'apiMessage' => 'apiMessage',
        'ApiMessage' => 'apiMessage',
        'http_status_code' => 'httpStatusCode',
        'httpStatusCode' => 'httpStatusCode',
        'HttpStatusCode' => 'httpStatusCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STRATEGY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'strategy',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::API_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'api_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::API_MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'api_message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HTTP_STATUS_CODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'http_status_code',
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
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @param string|null $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
        $this->modifiedProperties[self::STRATEGY] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @return string|null
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @param string|null $strategy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStrategyOrFail($strategy)
    {
        if ($strategy === null) {
            $this->throwNullValueException(static::STRATEGY);
        }

        return $this->setStrategy($strategy);
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStrategyOrFail()
    {
        if ($this->strategy === null) {
            $this->throwNullValueException(static::STRATEGY);
        }

        return $this->strategy;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStrategy()
    {
        $this->assertPropertyIsSet(self::STRATEGY);

        return $this;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @param string|null $apiCode
     *
     * @return $this
     */
    public function setApiCode($apiCode)
    {
        $this->apiCode = $apiCode;
        $this->modifiedProperties[self::API_CODE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @return string|null
     */
    public function getApiCode()
    {
        return $this->apiCode;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @param string|null $apiCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApiCodeOrFail($apiCode)
    {
        if ($apiCode === null) {
            $this->throwNullValueException(static::API_CODE);
        }

        return $this->setApiCode($apiCode);
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApiCodeOrFail()
    {
        if ($this->apiCode === null) {
            $this->throwNullValueException(static::API_CODE);
        }

        return $this->apiCode;
    }

    /**
     * @module AvailabilityNotificationsRestApi|CartsRestApi|OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiCode()
    {
        $this->assertPropertyIsSet(self::API_CODE);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param string|null $apiMessage
     *
     * @return $this
     */
    public function setApiMessage($apiMessage)
    {
        $this->apiMessage = $apiMessage;
        $this->modifiedProperties[self::API_MESSAGE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getApiMessage()
    {
        return $this->apiMessage;
    }

    /**
     * @module OrdersRestApi
     *
     * @param string|null $apiMessage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApiMessageOrFail($apiMessage)
    {
        if ($apiMessage === null) {
            $this->throwNullValueException(static::API_MESSAGE);
        }

        return $this->setApiMessage($apiMessage);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApiMessageOrFail()
    {
        if ($this->apiMessage === null) {
            $this->throwNullValueException(static::API_MESSAGE);
        }

        return $this->apiMessage;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiMessage()
    {
        $this->assertPropertyIsSet(self::API_MESSAGE);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $httpStatusCode
     *
     * @return $this
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->httpStatusCode = $httpStatusCode;
        $this->modifiedProperties[self::HTTP_STATUS_CODE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $httpStatusCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHttpStatusCodeOrFail($httpStatusCode)
    {
        if ($httpStatusCode === null) {
            $this->throwNullValueException(static::HTTP_STATUS_CODE);
        }

        return $this->setHttpStatusCode($httpStatusCode);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getHttpStatusCodeOrFail()
    {
        if ($this->httpStatusCode === null) {
            $this->throwNullValueException(static::HTTP_STATUS_CODE);
        }

        return $this->httpStatusCode;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHttpStatusCode()
    {
        $this->assertPropertyIsSet(self::HTTP_STATUS_CODE);

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
                case 'strategy':
                case 'apiCode':
                case 'apiMessage':
                case 'httpStatusCode':
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
                case 'strategy':
                case 'apiCode':
                case 'apiMessage':
                case 'httpStatusCode':
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
                case 'strategy':
                case 'apiCode':
                case 'apiMessage':
                case 'httpStatusCode':
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
            'strategy' => $this->strategy,
            'apiCode' => $this->apiCode,
            'apiMessage' => $this->apiMessage,
            'httpStatusCode' => $this->httpStatusCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'strategy' => $this->strategy,
            'api_code' => $this->apiCode,
            'api_message' => $this->apiMessage,
            'http_status_code' => $this->httpStatusCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'strategy' => $this->strategy instanceof AbstractTransfer ? $this->strategy->toArray(true, false) : $this->strategy,
            'api_code' => $this->apiCode instanceof AbstractTransfer ? $this->apiCode->toArray(true, false) : $this->apiCode,
            'api_message' => $this->apiMessage instanceof AbstractTransfer ? $this->apiMessage->toArray(true, false) : $this->apiMessage,
            'http_status_code' => $this->httpStatusCode instanceof AbstractTransfer ? $this->httpStatusCode->toArray(true, false) : $this->httpStatusCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'strategy' => $this->strategy instanceof AbstractTransfer ? $this->strategy->toArray(true, true) : $this->strategy,
            'apiCode' => $this->apiCode instanceof AbstractTransfer ? $this->apiCode->toArray(true, true) : $this->apiCode,
            'apiMessage' => $this->apiMessage instanceof AbstractTransfer ? $this->apiMessage->toArray(true, true) : $this->apiMessage,
            'httpStatusCode' => $this->httpStatusCode instanceof AbstractTransfer ? $this->httpStatusCode->toArray(true, true) : $this->httpStatusCode,
        ];
    }
}
