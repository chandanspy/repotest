<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CustomerGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_CUSTOMER_GROUP = 'idCustomerGroup';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const CUSTOMERS = 'customers';

    /**
     * @var string
     */
    public const CUSTOMER_ASSIGNMENT = 'customerAssignment';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idCustomerGroup;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CustomerGroupToCustomerTransfer[]
     */
    protected $customers;

    /**
     * @var \Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer|null
     */
    protected $customerAssignment;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_customer_group' => 'idCustomerGroup',
        'idCustomerGroup' => 'idCustomerGroup',
        'IdCustomerGroup' => 'idCustomerGroup',
        'description' => 'description',
        'Description' => 'description',
        'customers' => 'customers',
        'Customers' => 'customers',
        'customer_assignment' => 'customerAssignment',
        'customerAssignment' => 'customerAssignment',
        'CustomerAssignment' => 'customerAssignment',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMERS => [
            'type' => 'Generated\Shared\Transfer\CustomerGroupToCustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_ASSIGNMENT => [
            'type' => 'Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer_assignment',
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
     * @module CustomerGroupDiscountConnector|CustomerGroup
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module CustomerGroupDiscountConnector|CustomerGroup
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CustomerGroupDiscountConnector|CustomerGroup
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module CustomerGroupDiscountConnector|CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module CustomerGroupDiscountConnector|CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

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
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module CustomerGroup
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CustomerGroupToCustomerTransfer[] $customers
     *
     * @return $this
     */
    public function setCustomers(ArrayObject $customers)
    {
        $this->customers = $customers;
        $this->modifiedProperties[self::CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CustomerGroupToCustomerTransfer[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @module CustomerGroup
     *
     * @param \Generated\Shared\Transfer\CustomerGroupToCustomerTransfer $customer
     *
     * @return $this
     */
    public function addCustomer(CustomerGroupToCustomerTransfer $customer)
    {
        $this->customers[] = $customer;
        $this->modifiedProperties[self::CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomers()
    {
        $this->assertCollectionPropertyIsSet(self::CUSTOMERS);

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @param \Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer|null $customerAssignment
     *
     * @return $this
     */
    public function setCustomerAssignment(CustomerGroupToCustomerAssignmentTransfer $customerAssignment = null)
    {
        $this->customerAssignment = $customerAssignment;
        $this->modifiedProperties[self::CUSTOMER_ASSIGNMENT] = true;

        return $this;
    }

    /**
     * @module CustomerGroup
     *
     * @return \Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer|null
     */
    public function getCustomerAssignment()
    {
        return $this->customerAssignment;
    }

    /**
     * @module CustomerGroup
     *
     * @param \Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer $customerAssignment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerAssignmentOrFail(CustomerGroupToCustomerAssignmentTransfer $customerAssignment)
    {
        return $this->setCustomerAssignment($customerAssignment);
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerGroupToCustomerAssignmentTransfer
     */
    public function getCustomerAssignmentOrFail()
    {
        if ($this->customerAssignment === null) {
            $this->throwNullValueException(static::CUSTOMER_ASSIGNMENT);
        }

        return $this->customerAssignment;
    }

    /**
     * @module CustomerGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerAssignment()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_ASSIGNMENT);

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
                case 'name':
                case 'idCustomerGroup':
                case 'description':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customerAssignment':
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
                case 'customers':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'name':
                case 'idCustomerGroup':
                case 'description':
                    $values[$arrayKey] = $value;

                    break;
                case 'customerAssignment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'customers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'name':
                case 'idCustomerGroup':
                case 'description':
                    $values[$arrayKey] = $value;

                    break;
                case 'customerAssignment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'customers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->customers = $this->customers ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'idCustomerGroup' => $this->idCustomerGroup,
            'description' => $this->description,
            'customerAssignment' => $this->customerAssignment,
            'customers' => $this->customers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_customer_group' => $this->idCustomerGroup,
            'description' => $this->description,
            'customer_assignment' => $this->customerAssignment,
            'customers' => $this->customers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_customer_group' => $this->idCustomerGroup instanceof AbstractTransfer ? $this->idCustomerGroup->toArray(true, false) : $this->idCustomerGroup,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'customer_assignment' => $this->customerAssignment instanceof AbstractTransfer ? $this->customerAssignment->toArray(true, false) : $this->customerAssignment,
            'customers' => $this->customers instanceof AbstractTransfer ? $this->customers->toArray(true, false) : $this->addValuesToCollection($this->customers, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idCustomerGroup' => $this->idCustomerGroup instanceof AbstractTransfer ? $this->idCustomerGroup->toArray(true, true) : $this->idCustomerGroup,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'customerAssignment' => $this->customerAssignment instanceof AbstractTransfer ? $this->customerAssignment->toArray(true, true) : $this->customerAssignment,
            'customers' => $this->customers instanceof AbstractTransfer ? $this->customers->toArray(true, true) : $this->addValuesToCollection($this->customers, true, true),
        ];
    }
}
