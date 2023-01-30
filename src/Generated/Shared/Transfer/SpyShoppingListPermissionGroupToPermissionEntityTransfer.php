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
class SpyShoppingListPermissionGroupToPermissionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION = 'idShoppingListPermissionGroupToPermission';

    /**
     * @var string
     */
    public const FK_PERMISSION = 'fkPermission';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_PERMISSION_GROUP = 'fkShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PERMISSION_GROUP = 'spyShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const SPY_PERMISSION = 'spyPermission';

    /**
     * @var integer|null
     */
    protected $idShoppingListPermissionGroupToPermission;

    /**
     * @var integer|null
     */
    protected $fkPermission;

    /**
     * @var integer|null
     */
    protected $fkShoppingListPermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null
     */
    protected $spyShoppingListPermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    protected $spyPermission;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_permission_group_to_permission' => 'idShoppingListPermissionGroupToPermission',
        'idShoppingListPermissionGroupToPermission' => 'idShoppingListPermissionGroupToPermission',
        'IdShoppingListPermissionGroupToPermission' => 'idShoppingListPermissionGroupToPermission',
        'fk_permission' => 'fkPermission',
        'fkPermission' => 'fkPermission',
        'FkPermission' => 'fkPermission',
        'fk_shopping_list_permission_group' => 'fkShoppingListPermissionGroup',
        'fkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'FkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'spy_shopping_list_permission_group' => 'spyShoppingListPermissionGroup',
        'spyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
        'SpyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
        'spy_permission' => 'spyPermission',
        'spyPermission' => 'spyPermission',
        'SpyPermission' => 'spyPermission',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_permission_group_to_permission',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PERMISSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_permission',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_permission_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PERMISSION => [
            'type' => 'Generated\Shared\Transfer\SpyPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_permission',
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListPermissionGroupToPermission
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroupToPermission($idShoppingListPermissionGroupToPermission)
    {
        $this->idShoppingListPermissionGroupToPermission = $idShoppingListPermissionGroupToPermission;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListPermissionGroupToPermission()
    {
        return $this->idShoppingListPermissionGroupToPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListPermissionGroupToPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroupToPermissionOrFail($idShoppingListPermissionGroupToPermission)
    {
        if ($idShoppingListPermissionGroupToPermission === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION);
        }

        return $this->setIdShoppingListPermissionGroupToPermission($idShoppingListPermissionGroupToPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListPermissionGroupToPermissionOrFail()
    {
        if ($this->idShoppingListPermissionGroupToPermission === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION);
        }

        return $this->idShoppingListPermissionGroupToPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListPermissionGroupToPermission()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPermission
     *
     * @return $this
     */
    public function setFkPermission($fkPermission)
    {
        $this->fkPermission = $fkPermission;
        $this->modifiedProperties[self::FK_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPermission()
    {
        return $this->fkPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPermissionOrFail($fkPermission)
    {
        if ($fkPermission === null) {
            $this->throwNullValueException(static::FK_PERMISSION);
        }

        return $this->setFkPermission($fkPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPermissionOrFail()
    {
        if ($this->fkPermission === null) {
            $this->throwNullValueException(static::FK_PERMISSION);
        }

        return $this->fkPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPermission()
    {
        $this->assertPropertyIsSet(self::FK_PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setFkShoppingListPermissionGroup($fkShoppingListPermissionGroup)
    {
        $this->fkShoppingListPermissionGroup = $fkShoppingListPermissionGroup;
        $this->modifiedProperties[self::FK_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingListPermissionGroup()
    {
        return $this->fkShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListPermissionGroupOrFail($fkShoppingListPermissionGroup)
    {
        if ($fkShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->setFkShoppingListPermissionGroup($fkShoppingListPermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListPermissionGroupOrFail()
    {
        if ($this->fkShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->fkShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null $spyShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setSpyShoppingListPermissionGroup(SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup = null)
    {
        $this->spyShoppingListPermissionGroup = $spyShoppingListPermissionGroup;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null
     */
    public function getSpyShoppingListPermissionGroup()
    {
        return $this->spyShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListPermissionGroupOrFail(SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup)
    {
        return $this->setSpyShoppingListPermissionGroup($spyShoppingListPermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer
     */
    public function getSpyShoppingListPermissionGroupOrFail()
    {
        if ($this->spyShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->spyShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null $spyPermission
     *
     * @return $this
     */
    public function setSpyPermission(SpyPermissionEntityTransfer $spyPermission = null)
    {
        $this->spyPermission = $spyPermission;
        $this->modifiedProperties[self::SPY_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    public function getSpyPermission()
    {
        return $this->spyPermission;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer $spyPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPermissionOrFail(SpyPermissionEntityTransfer $spyPermission)
    {
        return $this->setSpyPermission($spyPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer
     */
    public function getSpyPermissionOrFail()
    {
        if ($this->spyPermission === null) {
            $this->throwNullValueException(static::SPY_PERMISSION);
        }

        return $this->spyPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPermission()
    {
        $this->assertPropertyIsSet(self::SPY_PERMISSION);

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
                case 'idShoppingListPermissionGroupToPermission':
                case 'fkPermission':
                case 'fkShoppingListPermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListPermissionGroup':
                case 'spyPermission':
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
                case 'idShoppingListPermissionGroupToPermission':
                case 'fkPermission':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListPermissionGroup':
                case 'spyPermission':
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
                case 'idShoppingListPermissionGroupToPermission':
                case 'fkPermission':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListPermissionGroup':
                case 'spyPermission':
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
            'idShoppingListPermissionGroupToPermission' => $this->idShoppingListPermissionGroupToPermission,
            'fkPermission' => $this->fkPermission,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup,
            'spyPermission' => $this->spyPermission,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_permission_group_to_permission' => $this->idShoppingListPermissionGroupToPermission,
            'fk_permission' => $this->fkPermission,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup,
            'spy_permission' => $this->spyPermission,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_permission_group_to_permission' => $this->idShoppingListPermissionGroupToPermission instanceof AbstractTransfer ? $this->idShoppingListPermissionGroupToPermission->toArray(true, false) : $this->idShoppingListPermissionGroupToPermission,
            'fk_permission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, false) : $this->fkPermission,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, false) : $this->fkShoppingListPermissionGroup,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, false) : $this->spyShoppingListPermissionGroup,
            'spy_permission' => $this->spyPermission instanceof AbstractTransfer ? $this->spyPermission->toArray(true, false) : $this->spyPermission,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListPermissionGroupToPermission' => $this->idShoppingListPermissionGroupToPermission instanceof AbstractTransfer ? $this->idShoppingListPermissionGroupToPermission->toArray(true, true) : $this->idShoppingListPermissionGroupToPermission,
            'fkPermission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, true) : $this->fkPermission,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, true) : $this->fkShoppingListPermissionGroup,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, true) : $this->spyShoppingListPermissionGroup,
            'spyPermission' => $this->spyPermission instanceof AbstractTransfer ? $this->spyPermission->toArray(true, true) : $this->spyPermission,
        ];
    }
}
