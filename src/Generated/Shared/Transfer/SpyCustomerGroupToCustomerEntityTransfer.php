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
class SpyCustomerGroupToCustomerEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CUSTOMER_GROUP_TO_CUSTOMER = 'idCustomerGroupToCustomer';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const FK_CUSTOMER_GROUP = 'fkCustomerGroup';

    /**
     * @var string
     */
    public const CUSTOMER_GROUP = 'customerGroup';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var integer|null
     */
    protected $idCustomerGroupToCustomer;

    /**
     * @var integer|null
     */
    protected $fkCustomer;

    /**
     * @var integer|null
     */
    protected $fkCustomerGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer|null
     */
    protected $customerGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    protected $customer;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_customer_group_to_customer' => 'idCustomerGroupToCustomer',
        'idCustomerGroupToCustomer' => 'idCustomerGroupToCustomer',
        'IdCustomerGroupToCustomer' => 'idCustomerGroupToCustomer',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'fk_customer_group' => 'fkCustomerGroup',
        'fkCustomerGroup' => 'fkCustomerGroup',
        'FkCustomerGroup' => 'fkCustomerGroup',
        'customer_group' => 'customerGroup',
        'customerGroup' => 'customerGroup',
        'CustomerGroup' => 'customerGroup',
        'customer' => 'customer',
        'Customer' => 'customer',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CUSTOMER_GROUP_TO_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_customer_group_to_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
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
    public static $entityNamespace = 'Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer';


    /**
     * @module 
     *
     * @param integer|null $idCustomerGroupToCustomer
     *
     * @return $this
     */
    public function setIdCustomerGroupToCustomer($idCustomerGroupToCustomer)
    {
        $this->idCustomerGroupToCustomer = $idCustomerGroupToCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER_GROUP_TO_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCustomerGroupToCustomer()
    {
        return $this->idCustomerGroupToCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $idCustomerGroupToCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerGroupToCustomerOrFail($idCustomerGroupToCustomer)
    {
        if ($idCustomerGroupToCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_GROUP_TO_CUSTOMER);
        }

        return $this->setIdCustomerGroupToCustomer($idCustomerGroupToCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCustomerGroupToCustomerOrFail()
    {
        if ($this->idCustomerGroupToCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_GROUP_TO_CUSTOMER);
        }

        return $this->idCustomerGroupToCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomerGroupToCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER_GROUP_TO_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomerGroup
     *
     * @return $this
     */
    public function setFkCustomerGroup($fkCustomerGroup)
    {
        $this->fkCustomerGroup = $fkCustomerGroup;
        $this->modifiedProperties[self::FK_CUSTOMER_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomerGroup()
    {
        return $this->fkCustomerGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerGroupOrFail($fkCustomerGroup)
    {
        if ($fkCustomerGroup === null) {
            $this->throwNullValueException(static::FK_CUSTOMER_GROUP);
        }

        return $this->setFkCustomerGroup($fkCustomerGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerGroupOrFail()
    {
        if ($this->fkCustomerGroup === null) {
            $this->throwNullValueException(static::FK_CUSTOMER_GROUP);
        }

        return $this->fkCustomerGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomerGroup()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer|null $customerGroup
     *
     * @return $this
     */
    public function setCustomerGroup(SpyCustomerGroupEntityTransfer $customerGroup = null)
    {
        $this->customerGroup = $customerGroup;
        $this->modifiedProperties[self::CUSTOMER_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer|null
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer $customerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerGroupOrFail(SpyCustomerGroupEntityTransfer $customerGroup)
    {
        return $this->setCustomerGroup($customerGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerGroupEntityTransfer
     */
    public function getCustomerGroupOrFail()
    {
        if ($this->customerGroup === null) {
            $this->throwNullValueException(static::CUSTOMER_GROUP);
        }

        return $this->customerGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerGroup()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(SpyCustomerEntityTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(SpyCustomerEntityTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

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
                case 'idCustomerGroupToCustomer':
                case 'fkCustomer':
                case 'fkCustomerGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customerGroup':
                case 'customer':
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
                case 'idCustomerGroupToCustomer':
                case 'fkCustomer':
                case 'fkCustomerGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'customerGroup':
                case 'customer':
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
                case 'idCustomerGroupToCustomer':
                case 'fkCustomer':
                case 'fkCustomerGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'customerGroup':
                case 'customer':
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
            'idCustomerGroupToCustomer' => $this->idCustomerGroupToCustomer,
            'fkCustomer' => $this->fkCustomer,
            'fkCustomerGroup' => $this->fkCustomerGroup,
            'customerGroup' => $this->customerGroup,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_customer_group_to_customer' => $this->idCustomerGroupToCustomer,
            'fk_customer' => $this->fkCustomer,
            'fk_customer_group' => $this->fkCustomerGroup,
            'customer_group' => $this->customerGroup,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_customer_group_to_customer' => $this->idCustomerGroupToCustomer instanceof AbstractTransfer ? $this->idCustomerGroupToCustomer->toArray(true, false) : $this->idCustomerGroupToCustomer,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'fk_customer_group' => $this->fkCustomerGroup instanceof AbstractTransfer ? $this->fkCustomerGroup->toArray(true, false) : $this->fkCustomerGroup,
            'customer_group' => $this->customerGroup instanceof AbstractTransfer ? $this->customerGroup->toArray(true, false) : $this->customerGroup,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCustomerGroupToCustomer' => $this->idCustomerGroupToCustomer instanceof AbstractTransfer ? $this->idCustomerGroupToCustomer->toArray(true, true) : $this->idCustomerGroupToCustomer,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'fkCustomerGroup' => $this->fkCustomerGroup instanceof AbstractTransfer ? $this->fkCustomerGroup->toArray(true, true) : $this->fkCustomerGroup,
            'customerGroup' => $this->customerGroup instanceof AbstractTransfer ? $this->customerGroup->toArray(true, true) : $this->customerGroup,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
        ];
    }
}
