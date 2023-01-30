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
class FindAgentResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AGENT = 'agent';

    /**
     * @var string
     */
    public const IS_AGENT_FOUND = 'isAgentFound';

    /**
     * @var \Generated\Shared\Transfer\UserTransfer|null
     */
    protected $agent;

    /**
     * @var bool|null
     */
    protected $isAgentFound;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'agent' => 'agent',
        'Agent' => 'agent',
        'is_agent_found' => 'isAgentFound',
        'isAgentFound' => 'isAgentFound',
        'IsAgentFound' => 'isAgentFound',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AGENT => [
            'type' => 'Generated\Shared\Transfer\UserTransfer',
            'type_shim' => null,
            'name_underscore' => 'agent',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AGENT_FOUND => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_agent_found',
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
     * @module Agent|OauthAgentConnector
     *
     * @param \Generated\Shared\Transfer\UserTransfer|null $agent
     *
     * @return $this
     */
    public function setAgent(UserTransfer $agent = null)
    {
        $this->agent = $agent;
        $this->modifiedProperties[self::AGENT] = true;

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param \Generated\Shared\Transfer\UserTransfer $agent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAgentOrFail(UserTransfer $agent)
    {
        return $this->setAgent($agent);
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function getAgentOrFail()
    {
        if ($this->agent === null) {
            $this->throwNullValueException(static::AGENT);
        }

        return $this->agent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAgent()
    {
        $this->assertPropertyIsSet(self::AGENT);

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgentFound
     *
     * @return $this
     */
    public function setIsAgentFound($isAgentFound)
    {
        $this->isAgentFound = $isAgentFound;
        $this->modifiedProperties[self::IS_AGENT_FOUND] = true;

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @return bool|null
     */
    public function getIsAgentFound()
    {
        return $this->isAgentFound;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgentFound
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAgentFoundOrFail($isAgentFound)
    {
        if ($isAgentFound === null) {
            $this->throwNullValueException(static::IS_AGENT_FOUND);
        }

        return $this->setIsAgentFound($isAgentFound);
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAgentFoundOrFail()
    {
        if ($this->isAgentFound === null) {
            $this->throwNullValueException(static::IS_AGENT_FOUND);
        }

        return $this->isAgentFound;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAgentFound()
    {
        $this->assertPropertyIsSet(self::IS_AGENT_FOUND);

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
                case 'isAgentFound':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'agent':
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
                case 'isAgentFound':
                    $values[$arrayKey] = $value;

                    break;
                case 'agent':
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
                case 'isAgentFound':
                    $values[$arrayKey] = $value;

                    break;
                case 'agent':
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
            'isAgentFound' => $this->isAgentFound,
            'agent' => $this->agent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_agent_found' => $this->isAgentFound,
            'agent' => $this->agent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_agent_found' => $this->isAgentFound instanceof AbstractTransfer ? $this->isAgentFound->toArray(true, false) : $this->isAgentFound,
            'agent' => $this->agent instanceof AbstractTransfer ? $this->agent->toArray(true, false) : $this->agent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isAgentFound' => $this->isAgentFound instanceof AbstractTransfer ? $this->isAgentFound->toArray(true, true) : $this->isAgentFound,
            'agent' => $this->agent instanceof AbstractTransfer ? $this->agent->toArray(true, true) : $this->agent,
        ];
    }
}
