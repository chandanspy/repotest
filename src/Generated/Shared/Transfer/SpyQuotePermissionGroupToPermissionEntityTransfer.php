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
class SpyQuotePermissionGroupToPermissionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION = 'idQuotePermissionGroupToPermission';

    /**
     * @var string
     */
    public const FK_PERMISSION = 'fkPermission';

    /**
     * @var string
     */
    public const FK_QUOTE_PERMISSION_GROUP = 'fkQuotePermissionGroup';

    /**
     * @var string
     */
    public const PERMISSION = 'permission';

    /**
     * @var string
     */
    public const QUOTE_PERMISSION_GROUP = 'quotePermissionGroup';

    /**
     * @var integer|null
     */
    protected $idQuotePermissionGroupToPermission;

    /**
     * @var integer|null
     */
    protected $fkPermission;

    /**
     * @var integer|null
     */
    protected $fkQuotePermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    protected $permission;

    /**
     * @var \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null
     */
    protected $quotePermissionGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_permission_group_to_permission' => 'idQuotePermissionGroupToPermission',
        'idQuotePermissionGroupToPermission' => 'idQuotePermissionGroupToPermission',
        'IdQuotePermissionGroupToPermission' => 'idQuotePermissionGroupToPermission',
        'fk_permission' => 'fkPermission',
        'fkPermission' => 'fkPermission',
        'FkPermission' => 'fkPermission',
        'fk_quote_permission_group' => 'fkQuotePermissionGroup',
        'fkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'FkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'permission' => 'permission',
        'Permission' => 'permission',
        'quote_permission_group' => 'quotePermissionGroup',
        'quotePermissionGroup' => 'quotePermissionGroup',
        'QuotePermissionGroup' => 'quotePermissionGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote_permission_group_to_permission',
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
        self::FK_QUOTE_PERMISSION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_quote_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PERMISSION => [
            'type' => 'Generated\Shared\Transfer\SpyPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'permission',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_permission_group',
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
    public static $entityNamespace = 'Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission';


    /**
     * @module 
     *
     * @param integer|null $idQuotePermissionGroupToPermission
     *
     * @return $this
     */
    public function setIdQuotePermissionGroupToPermission($idQuotePermissionGroupToPermission)
    {
        $this->idQuotePermissionGroupToPermission = $idQuotePermissionGroupToPermission;
        $this->modifiedProperties[self::ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuotePermissionGroupToPermission()
    {
        return $this->idQuotePermissionGroupToPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuotePermissionGroupToPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuotePermissionGroupToPermissionOrFail($idQuotePermissionGroupToPermission)
    {
        if ($idQuotePermissionGroupToPermission === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION);
        }

        return $this->setIdQuotePermissionGroupToPermission($idQuotePermissionGroupToPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuotePermissionGroupToPermissionOrFail()
    {
        if ($this->idQuotePermissionGroupToPermission === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION);
        }

        return $this->idQuotePermissionGroupToPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuotePermissionGroupToPermission()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION);

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
     * @param integer|null $fkQuotePermissionGroup
     *
     * @return $this
     */
    public function setFkQuotePermissionGroup($fkQuotePermissionGroup)
    {
        $this->fkQuotePermissionGroup = $fkQuotePermissionGroup;
        $this->modifiedProperties[self::FK_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkQuotePermissionGroup()
    {
        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuotePermissionGroupOrFail($fkQuotePermissionGroup)
    {
        if ($fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->setFkQuotePermissionGroup($fkQuotePermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkQuotePermissionGroupOrFail()
    {
        if ($this->fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null $permission
     *
     * @return $this
     */
    public function setPermission(SpyPermissionEntityTransfer $permission = null)
    {
        $this->permission = $permission;
        $this->modifiedProperties[self::PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer $permission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPermissionOrFail(SpyPermissionEntityTransfer $permission)
    {
        return $this->setPermission($permission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer
     */
    public function getPermissionOrFail()
    {
        if ($this->permission === null) {
            $this->throwNullValueException(static::PERMISSION);
        }

        return $this->permission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePermission()
    {
        $this->assertPropertyIsSet(self::PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null $quotePermissionGroup
     *
     * @return $this
     */
    public function setQuotePermissionGroup(SpyQuotePermissionGroupEntityTransfer $quotePermissionGroup = null)
    {
        $this->quotePermissionGroup = $quotePermissionGroup;
        $this->modifiedProperties[self::QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null
     */
    public function getQuotePermissionGroup()
    {
        return $this->quotePermissionGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer $quotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuotePermissionGroupOrFail(SpyQuotePermissionGroupEntityTransfer $quotePermissionGroup)
    {
        return $this->setQuotePermissionGroup($quotePermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer
     */
    public function getQuotePermissionGroupOrFail()
    {
        if ($this->quotePermissionGroup === null) {
            $this->throwNullValueException(static::QUOTE_PERMISSION_GROUP);
        }

        return $this->quotePermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::QUOTE_PERMISSION_GROUP);

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
                case 'idQuotePermissionGroupToPermission':
                case 'fkPermission':
                case 'fkQuotePermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'permission':
                case 'quotePermissionGroup':
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
                case 'idQuotePermissionGroupToPermission':
                case 'fkPermission':
                case 'fkQuotePermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'permission':
                case 'quotePermissionGroup':
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
                case 'idQuotePermissionGroupToPermission':
                case 'fkPermission':
                case 'fkQuotePermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'permission':
                case 'quotePermissionGroup':
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
            'idQuotePermissionGroupToPermission' => $this->idQuotePermissionGroupToPermission,
            'fkPermission' => $this->fkPermission,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup,
            'permission' => $this->permission,
            'quotePermissionGroup' => $this->quotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group_to_permission' => $this->idQuotePermissionGroupToPermission,
            'fk_permission' => $this->fkPermission,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup,
            'permission' => $this->permission,
            'quote_permission_group' => $this->quotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group_to_permission' => $this->idQuotePermissionGroupToPermission instanceof AbstractTransfer ? $this->idQuotePermissionGroupToPermission->toArray(true, false) : $this->idQuotePermissionGroupToPermission,
            'fk_permission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, false) : $this->fkPermission,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, false) : $this->fkQuotePermissionGroup,
            'permission' => $this->permission instanceof AbstractTransfer ? $this->permission->toArray(true, false) : $this->permission,
            'quote_permission_group' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, false) : $this->quotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuotePermissionGroupToPermission' => $this->idQuotePermissionGroupToPermission instanceof AbstractTransfer ? $this->idQuotePermissionGroupToPermission->toArray(true, true) : $this->idQuotePermissionGroupToPermission,
            'fkPermission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, true) : $this->fkPermission,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, true) : $this->fkQuotePermissionGroup,
            'permission' => $this->permission instanceof AbstractTransfer ? $this->permission->toArray(true, true) : $this->permission,
            'quotePermissionGroup' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, true) : $this->quotePermissionGroup,
        ];
    }
}
