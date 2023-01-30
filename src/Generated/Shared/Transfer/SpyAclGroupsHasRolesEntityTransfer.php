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
class SpyAclGroupsHasRolesEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_ACL_ROLE = 'fkAclRole';

    /**
     * @var string
     */
    public const FK_ACL_GROUP = 'fkAclGroup';

    /**
     * @var string
     */
    public const SPY_ACL_ROLE = 'spyAclRole';

    /**
     * @var string
     */
    public const SPY_ACL_GROUP = 'spyAclGroup';

    /**
     * @var integer|null
     */
    protected $fkAclRole;

    /**
     * @var integer|null
     */
    protected $fkAclGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null
     */
    protected $spyAclRole;

    /**
     * @var \Generated\Shared\Transfer\SpyAclGroupEntityTransfer|null
     */
    protected $spyAclGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_acl_role' => 'fkAclRole',
        'fkAclRole' => 'fkAclRole',
        'FkAclRole' => 'fkAclRole',
        'fk_acl_group' => 'fkAclGroup',
        'fkAclGroup' => 'fkAclGroup',
        'FkAclGroup' => 'fkAclGroup',
        'spy_acl_role' => 'spyAclRole',
        'spyAclRole' => 'spyAclRole',
        'SpyAclRole' => 'spyAclRole',
        'spy_acl_group' => 'spyAclGroup',
        'spyAclGroup' => 'spyAclGroup',
        'SpyAclGroup' => 'spyAclGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_ACL_ROLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_acl_role',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_ACL_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_acl_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ACL_ROLE => [
            'type' => 'Generated\Shared\Transfer\SpyAclRoleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_role',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ACL_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyAclGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_group',
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
    public static $entityNamespace = 'Orm\Zed\Acl\Persistence\SpyAclGroupsHasRoles';


    /**
     * @module 
     *
     * @param integer|null $fkAclRole
     *
     * @return $this
     */
    public function setFkAclRole($fkAclRole)
    {
        $this->fkAclRole = $fkAclRole;
        $this->modifiedProperties[self::FK_ACL_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAclRole()
    {
        return $this->fkAclRole;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAclRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAclRoleOrFail($fkAclRole)
    {
        if ($fkAclRole === null) {
            $this->throwNullValueException(static::FK_ACL_ROLE);
        }

        return $this->setFkAclRole($fkAclRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAclRoleOrFail()
    {
        if ($this->fkAclRole === null) {
            $this->throwNullValueException(static::FK_ACL_ROLE);
        }

        return $this->fkAclRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAclRole()
    {
        $this->assertPropertyIsSet(self::FK_ACL_ROLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAclGroup
     *
     * @return $this
     */
    public function setFkAclGroup($fkAclGroup)
    {
        $this->fkAclGroup = $fkAclGroup;
        $this->modifiedProperties[self::FK_ACL_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAclGroup()
    {
        return $this->fkAclGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAclGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAclGroupOrFail($fkAclGroup)
    {
        if ($fkAclGroup === null) {
            $this->throwNullValueException(static::FK_ACL_GROUP);
        }

        return $this->setFkAclGroup($fkAclGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAclGroupOrFail()
    {
        if ($this->fkAclGroup === null) {
            $this->throwNullValueException(static::FK_ACL_GROUP);
        }

        return $this->fkAclGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAclGroup()
    {
        $this->assertPropertyIsSet(self::FK_ACL_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null $spyAclRole
     *
     * @return $this
     */
    public function setSpyAclRole(SpyAclRoleEntityTransfer $spyAclRole = null)
    {
        $this->spyAclRole = $spyAclRole;
        $this->modifiedProperties[self::SPY_ACL_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null
     */
    public function getSpyAclRole()
    {
        return $this->spyAclRole;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclRoleEntityTransfer $spyAclRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyAclRoleOrFail(SpyAclRoleEntityTransfer $spyAclRole)
    {
        return $this->setSpyAclRole($spyAclRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyAclRoleEntityTransfer
     */
    public function getSpyAclRoleOrFail()
    {
        if ($this->spyAclRole === null) {
            $this->throwNullValueException(static::SPY_ACL_ROLE);
        }

        return $this->spyAclRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclRole()
    {
        $this->assertPropertyIsSet(self::SPY_ACL_ROLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclGroupEntityTransfer|null $spyAclGroup
     *
     * @return $this
     */
    public function setSpyAclGroup(SpyAclGroupEntityTransfer $spyAclGroup = null)
    {
        $this->spyAclGroup = $spyAclGroup;
        $this->modifiedProperties[self::SPY_ACL_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyAclGroupEntityTransfer|null
     */
    public function getSpyAclGroup()
    {
        return $this->spyAclGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclGroupEntityTransfer $spyAclGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyAclGroupOrFail(SpyAclGroupEntityTransfer $spyAclGroup)
    {
        return $this->setSpyAclGroup($spyAclGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyAclGroupEntityTransfer
     */
    public function getSpyAclGroupOrFail()
    {
        if ($this->spyAclGroup === null) {
            $this->throwNullValueException(static::SPY_ACL_GROUP);
        }

        return $this->spyAclGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclGroup()
    {
        $this->assertPropertyIsSet(self::SPY_ACL_GROUP);

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
                case 'fkAclRole':
                case 'fkAclGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAclRole':
                case 'spyAclGroup':
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
                case 'fkAclRole':
                case 'fkAclGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclRole':
                case 'spyAclGroup':
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
                case 'fkAclRole':
                case 'fkAclGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclRole':
                case 'spyAclGroup':
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
            'fkAclRole' => $this->fkAclRole,
            'fkAclGroup' => $this->fkAclGroup,
            'spyAclRole' => $this->spyAclRole,
            'spyAclGroup' => $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_acl_role' => $this->fkAclRole,
            'fk_acl_group' => $this->fkAclGroup,
            'spy_acl_role' => $this->spyAclRole,
            'spy_acl_group' => $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_acl_role' => $this->fkAclRole instanceof AbstractTransfer ? $this->fkAclRole->toArray(true, false) : $this->fkAclRole,
            'fk_acl_group' => $this->fkAclGroup instanceof AbstractTransfer ? $this->fkAclGroup->toArray(true, false) : $this->fkAclGroup,
            'spy_acl_role' => $this->spyAclRole instanceof AbstractTransfer ? $this->spyAclRole->toArray(true, false) : $this->spyAclRole,
            'spy_acl_group' => $this->spyAclGroup instanceof AbstractTransfer ? $this->spyAclGroup->toArray(true, false) : $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkAclRole' => $this->fkAclRole instanceof AbstractTransfer ? $this->fkAclRole->toArray(true, true) : $this->fkAclRole,
            'fkAclGroup' => $this->fkAclGroup instanceof AbstractTransfer ? $this->fkAclGroup->toArray(true, true) : $this->fkAclGroup,
            'spyAclRole' => $this->spyAclRole instanceof AbstractTransfer ? $this->spyAclRole->toArray(true, true) : $this->spyAclRole,
            'spyAclGroup' => $this->spyAclGroup instanceof AbstractTransfer ? $this->spyAclGroup->toArray(true, true) : $this->spyAclGroup,
        ];
    }
}
