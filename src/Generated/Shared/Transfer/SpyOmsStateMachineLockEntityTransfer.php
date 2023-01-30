<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyOmsStateMachineLockEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OMS_STATE_MACHINE_LOCK = 'idOmsStateMachineLock';

    /**
     * @var string
     */
    public const DETAILS = 'details';

    /**
     * @var string
     */
    public const EXPIRES = 'expires';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var integer|null
     */
    protected $idOmsStateMachineLock;

    /**
     * @var string|null
     */
    protected $details;

    /**
     * @var string|null
     */
    protected $expires;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oms_state_machine_lock' => 'idOmsStateMachineLock',
        'idOmsStateMachineLock' => 'idOmsStateMachineLock',
        'IdOmsStateMachineLock' => 'idOmsStateMachineLock',
        'details' => 'details',
        'Details' => 'details',
        'expires' => 'expires',
        'Expires' => 'expires',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OMS_STATE_MACHINE_LOCK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_oms_state_machine_lock',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DETAILS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'details',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPIRES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expires',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Oms\Persistence\SpyOmsStateMachineLock';


    /**
     * @module 
     *
     * @param integer|null $idOmsStateMachineLock
     *
     * @return $this
     */
    public function setIdOmsStateMachineLock($idOmsStateMachineLock)
    {
        $this->idOmsStateMachineLock = $idOmsStateMachineLock;
        $this->modifiedProperties[self::ID_OMS_STATE_MACHINE_LOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdOmsStateMachineLock()
    {
        return $this->idOmsStateMachineLock;
    }

    /**
     * @module 
     *
     * @param integer|null $idOmsStateMachineLock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOmsStateMachineLockOrFail($idOmsStateMachineLock)
    {
        if ($idOmsStateMachineLock === null) {
            $this->throwNullValueException(static::ID_OMS_STATE_MACHINE_LOCK);
        }

        return $this->setIdOmsStateMachineLock($idOmsStateMachineLock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOmsStateMachineLockOrFail()
    {
        if ($this->idOmsStateMachineLock === null) {
            $this->throwNullValueException(static::ID_OMS_STATE_MACHINE_LOCK);
        }

        return $this->idOmsStateMachineLock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOmsStateMachineLock()
    {
        $this->assertPropertyIsSet(self::ID_OMS_STATE_MACHINE_LOCK);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;
        $this->modifiedProperties[self::DETAILS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @module 
     *
     * @param string|null $details
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDetailsOrFail($details)
    {
        if ($details === null) {
            $this->throwNullValueException(static::DETAILS);
        }

        return $this->setDetails($details);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDetailsOrFail()
    {
        if ($this->details === null) {
            $this->throwNullValueException(static::DETAILS);
        }

        return $this->details;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDetails()
    {
        $this->assertPropertyIsSet(self::DETAILS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        $this->modifiedProperties[self::EXPIRES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @module 
     *
     * @param string|null $expires
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiresOrFail($expires)
    {
        if ($expires === null) {
            $this->throwNullValueException(static::EXPIRES);
        }

        return $this->setExpires($expires);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiresOrFail()
    {
        if ($this->expires === null) {
            $this->throwNullValueException(static::EXPIRES);
        }

        return $this->expires;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpires()
    {
        $this->assertPropertyIsSet(self::EXPIRES);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
                case 'idOmsStateMachineLock':
                case 'details':
                case 'expires':
                case 'identifier':
                    $this->$normalizedPropertyName = $value;
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
                case 'idOmsStateMachineLock':
                case 'details':
                case 'expires':
                case 'identifier':
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
                case 'idOmsStateMachineLock':
                case 'details':
                case 'expires':
                case 'identifier':
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
            'idOmsStateMachineLock' => $this->idOmsStateMachineLock,
            'details' => $this->details,
            'expires' => $this->expires,
            'identifier' => $this->identifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_state_machine_lock' => $this->idOmsStateMachineLock,
            'details' => $this->details,
            'expires' => $this->expires,
            'identifier' => $this->identifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_state_machine_lock' => $this->idOmsStateMachineLock instanceof AbstractTransfer ? $this->idOmsStateMachineLock->toArray(true, false) : $this->idOmsStateMachineLock,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, false) : $this->details,
            'expires' => $this->expires instanceof AbstractTransfer ? $this->expires->toArray(true, false) : $this->expires,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOmsStateMachineLock' => $this->idOmsStateMachineLock instanceof AbstractTransfer ? $this->idOmsStateMachineLock->toArray(true, true) : $this->idOmsStateMachineLock,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, true) : $this->details,
            'expires' => $this->expires instanceof AbstractTransfer ? $this->expires->toArray(true, true) : $this->expires,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
        ];
    }
}
