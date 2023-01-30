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
class SessionCustomerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const ID_SESSION = 'idSession';

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var string|null
     */
    protected $idSession;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'id_session' => 'idSession',
        'idSession' => 'idSession',
        'IdSession' => 'idSession',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SESSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_session',
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
     * @module SessionRedis
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module SessionRedis
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module SessionRedis
     *
     * @param int|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module SessionRedis
     *
     * @param string|null $idSession
     *
     * @return $this
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;
        $this->modifiedProperties[self::ID_SESSION] = true;

        return $this;
    }

    /**
     * @module SessionRedis
     *
     * @return string|null
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * @module SessionRedis
     *
     * @param string|null $idSession
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSessionOrFail($idSession)
    {
        if ($idSession === null) {
            $this->throwNullValueException(static::ID_SESSION);
        }

        return $this->setIdSession($idSession);
    }

    /**
     * @module SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdSessionOrFail()
    {
        if ($this->idSession === null) {
            $this->throwNullValueException(static::ID_SESSION);
        }

        return $this->idSession;
    }

    /**
     * @module SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSession()
    {
        $this->assertPropertyIsSet(self::ID_SESSION);

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
                case 'idCustomer':
                case 'idSession':
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
                case 'idCustomer':
                case 'idSession':
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
                case 'idCustomer':
                case 'idSession':
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
            'idCustomer' => $this->idCustomer,
            'idSession' => $this->idSession,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer,
            'id_session' => $this->idSession,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'id_session' => $this->idSession instanceof AbstractTransfer ? $this->idSession->toArray(true, false) : $this->idSession,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'idSession' => $this->idSession instanceof AbstractTransfer ? $this->idSession->toArray(true, true) : $this->idSession,
        ];
    }
}
