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
class CustomerGroupToCustomerAssignmentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CUSTOMER_GROUP = 'idCustomerGroup';

    /**
     * @var string
     */
    public const IDS_CUSTOMER_TO_ASSIGN = 'idsCustomerToAssign';

    /**
     * @var string
     */
    public const IDS_CUSTOMER_TO_DE_ASSIGN = 'idsCustomerToDeAssign';

    /**
     * @var int|null
     */
    protected $idCustomerGroup;

    /**
     * @var array
     */
    protected $idsCustomerToAssign = [];

    /**
     * @var array
     */
    protected $idsCustomerToDeAssign = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_customer_group' => 'idCustomerGroup',
        'idCustomerGroup' => 'idCustomerGroup',
        'IdCustomerGroup' => 'idCustomerGroup',
        'ids_customer_to_assign' => 'idsCustomerToAssign',
        'idsCustomerToAssign' => 'idsCustomerToAssign',
        'IdsCustomerToAssign' => 'idsCustomerToAssign',
        'ids_customer_to_de_assign' => 'idsCustomerToDeAssign',
        'idsCustomerToDeAssign' => 'idsCustomerToDeAssign',
        'IdsCustomerToDeAssign' => 'idsCustomerToDeAssign',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CUSTOMER_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDS_CUSTOMER_TO_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'ids_customer_to_assign',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDS_CUSTOMER_TO_DE_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'ids_customer_to_de_assign',
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
     * @module CustomerGroup
     *
     * @param int|null $idCustomerGroup
     *
     * @return $this
     */
    public function setIdCustomerGroup($idCustomerGroup)
    {
        $this->idCustomerGroup = $idCustomerGroup;
        $this->modifiedProperties[self::ID_CUSTOMER_GROUP] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return int|null
     */
    public function getIdCustomerGroup()
    {
        return $this->idCustomerGroup;
    }

    /**
     * @module CustomerGroup
     *
     * @param int|null $idCustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerGroupOrFail($idCustomerGroup)
    {
        if ($idCustomerGroup === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_GROUP);
        }

        return $this->setIdCustomerGroup($idCustomerGroup);
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerGroupOrFail()
    {
        if ($this->idCustomerGroup === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_GROUP);
        }

        return $this->idCustomerGroup;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomerGroup()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER_GROUP);

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @param array|null $idsCustomerToAssign
     *
     * @return $this
     */
    public function setIdsCustomerToAssign(array $idsCustomerToAssign = null)
    {
        if ($idsCustomerToAssign === null) {
            $idsCustomerToAssign = [];
        }

        $this->idsCustomerToAssign = $idsCustomerToAssign;
        $this->modifiedProperties[self::IDS_CUSTOMER_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return array
     */
    public function getIdsCustomerToAssign()
    {
        return $this->idsCustomerToAssign;
    }

    /**
     * @module CustomerGroup
     *
     * @param mixed $idCustomerToAssign
     *
     * @return $this
     */
    public function addIdCustomerToAssign($idCustomerToAssign)
    {
        $this->idsCustomerToAssign[] = $idCustomerToAssign;
        $this->modifiedProperties[self::IDS_CUSTOMER_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdsCustomerToAssign()
    {
        $this->assertPropertyIsSet(self::IDS_CUSTOMER_TO_ASSIGN);

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @param array|null $idsCustomerToDeAssign
     *
     * @return $this
     */
    public function setIdsCustomerToDeAssign(array $idsCustomerToDeAssign = null)
    {
        if ($idsCustomerToDeAssign === null) {
            $idsCustomerToDeAssign = [];
        }

        $this->idsCustomerToDeAssign = $idsCustomerToDeAssign;
        $this->modifiedProperties[self::IDS_CUSTOMER_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return array
     */
    public function getIdsCustomerToDeAssign()
    {
        return $this->idsCustomerToDeAssign;
    }

    /**
     * @module CustomerGroup
     *
     * @param mixed $idCustomerToDeAssign
     *
     * @return $this
     */
    public function addIdCustomerToDeAssign($idCustomerToDeAssign)
    {
        $this->idsCustomerToDeAssign[] = $idCustomerToDeAssign;
        $this->modifiedProperties[self::IDS_CUSTOMER_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdsCustomerToDeAssign()
    {
        $this->assertPropertyIsSet(self::IDS_CUSTOMER_TO_DE_ASSIGN);

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
                case 'idCustomerGroup':
                case 'idsCustomerToAssign':
                case 'idsCustomerToDeAssign':
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
                case 'idCustomerGroup':
                case 'idsCustomerToAssign':
                case 'idsCustomerToDeAssign':
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
                case 'idCustomerGroup':
                case 'idsCustomerToAssign':
                case 'idsCustomerToDeAssign':
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
            'idCustomerGroup' => $this->idCustomerGroup,
            'idsCustomerToAssign' => $this->idsCustomerToAssign,
            'idsCustomerToDeAssign' => $this->idsCustomerToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_customer_group' => $this->idCustomerGroup,
            'ids_customer_to_assign' => $this->idsCustomerToAssign,
            'ids_customer_to_de_assign' => $this->idsCustomerToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_customer_group' => $this->idCustomerGroup instanceof AbstractTransfer ? $this->idCustomerGroup->toArray(true, false) : $this->idCustomerGroup,
            'ids_customer_to_assign' => $this->idsCustomerToAssign instanceof AbstractTransfer ? $this->idsCustomerToAssign->toArray(true, false) : $this->idsCustomerToAssign,
            'ids_customer_to_de_assign' => $this->idsCustomerToDeAssign instanceof AbstractTransfer ? $this->idsCustomerToDeAssign->toArray(true, false) : $this->idsCustomerToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCustomerGroup' => $this->idCustomerGroup instanceof AbstractTransfer ? $this->idCustomerGroup->toArray(true, true) : $this->idCustomerGroup,
            'idsCustomerToAssign' => $this->idsCustomerToAssign instanceof AbstractTransfer ? $this->idsCustomerToAssign->toArray(true, true) : $this->idsCustomerToAssign,
            'idsCustomerToDeAssign' => $this->idsCustomerToDeAssign instanceof AbstractTransfer ? $this->idsCustomerToDeAssign->toArray(true, true) : $this->idsCustomerToDeAssign,
        ];
    }
}
