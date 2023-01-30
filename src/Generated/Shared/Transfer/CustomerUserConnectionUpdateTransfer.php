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
class CustomerUserConnectionUpdateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_USER = 'idUser';

    /**
     * @var string
     */
    public const ID_CUSTOMERS_TO_ASSIGN = 'idCustomersToAssign';

    /**
     * @var string
     */
    public const ID_CUSTOMERS_TO_DE_ASSIGN = 'idCustomersToDeAssign';

    /**
     * @var int|null
     */
    protected $idUser;

    /**
     * @var array
     */
    protected $idCustomersToAssign = [];

    /**
     * @var array
     */
    protected $idCustomersToDeAssign = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_user' => 'idUser',
        'idUser' => 'idUser',
        'IdUser' => 'idUser',
        'id_customers_to_assign' => 'idCustomersToAssign',
        'idCustomersToAssign' => 'idCustomersToAssign',
        'IdCustomersToAssign' => 'idCustomersToAssign',
        'id_customers_to_de_assign' => 'idCustomersToDeAssign',
        'idCustomersToDeAssign' => 'idCustomersToDeAssign',
        'IdCustomersToDeAssign' => 'idCustomersToDeAssign',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMERS_TO_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_customers_to_assign',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMERS_TO_DE_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_customers_to_de_assign',
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
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param int|null $idUser
     *
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        $this->modifiedProperties[self::ID_USER] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @return int|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param int|null $idUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUserOrFail($idUser)
    {
        if ($idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->setIdUser($idUser);
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdUserOrFail()
    {
        if ($this->idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->idUser;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUser()
    {
        $this->assertPropertyIsSet(self::ID_USER);

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param array|null $idCustomersToAssign
     *
     * @return $this
     */
    public function setIdCustomersToAssign(array $idCustomersToAssign = null)
    {
        if ($idCustomersToAssign === null) {
            $idCustomersToAssign = [];
        }

        $this->idCustomersToAssign = $idCustomersToAssign;
        $this->modifiedProperties[self::ID_CUSTOMERS_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @return array
     */
    public function getIdCustomersToAssign()
    {
        return $this->idCustomersToAssign;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param mixed $idCustomersToAssign
     *
     * @return $this
     */
    public function addIdCustomersToAssign($idCustomersToAssign)
    {
        $this->idCustomersToAssign[] = $idCustomersToAssign;
        $this->modifiedProperties[self::ID_CUSTOMERS_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomersToAssign()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMERS_TO_ASSIGN);

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param array|null $idCustomersToDeAssign
     *
     * @return $this
     */
    public function setIdCustomersToDeAssign(array $idCustomersToDeAssign = null)
    {
        if ($idCustomersToDeAssign === null) {
            $idCustomersToDeAssign = [];
        }

        $this->idCustomersToDeAssign = $idCustomersToDeAssign;
        $this->modifiedProperties[self::ID_CUSTOMERS_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @return array
     */
    public function getIdCustomersToDeAssign()
    {
        return $this->idCustomersToDeAssign;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @param mixed $idCustomersToDeAssign
     *
     * @return $this
     */
    public function addIdCustomersToDeAssign($idCustomersToDeAssign)
    {
        $this->idCustomersToDeAssign[] = $idCustomersToDeAssign;
        $this->modifiedProperties[self::ID_CUSTOMERS_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnectorGui|CustomerUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomersToDeAssign()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMERS_TO_DE_ASSIGN);

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
                case 'idUser':
                case 'idCustomersToAssign':
                case 'idCustomersToDeAssign':
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
                case 'idUser':
                case 'idCustomersToAssign':
                case 'idCustomersToDeAssign':
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
                case 'idUser':
                case 'idCustomersToAssign':
                case 'idCustomersToDeAssign':
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
            'idUser' => $this->idUser,
            'idCustomersToAssign' => $this->idCustomersToAssign,
            'idCustomersToDeAssign' => $this->idCustomersToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_user' => $this->idUser,
            'id_customers_to_assign' => $this->idCustomersToAssign,
            'id_customers_to_de_assign' => $this->idCustomersToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_user' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, false) : $this->idUser,
            'id_customers_to_assign' => $this->idCustomersToAssign instanceof AbstractTransfer ? $this->idCustomersToAssign->toArray(true, false) : $this->idCustomersToAssign,
            'id_customers_to_de_assign' => $this->idCustomersToDeAssign instanceof AbstractTransfer ? $this->idCustomersToDeAssign->toArray(true, false) : $this->idCustomersToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUser' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, true) : $this->idUser,
            'idCustomersToAssign' => $this->idCustomersToAssign instanceof AbstractTransfer ? $this->idCustomersToAssign->toArray(true, true) : $this->idCustomersToAssign,
            'idCustomersToDeAssign' => $this->idCustomersToDeAssign instanceof AbstractTransfer ? $this->idCustomersToDeAssign->toArray(true, true) : $this->idCustomersToDeAssign,
        ];
    }
}
