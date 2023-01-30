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
class RoleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_ACL_ROLE = 'idAclRole';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_GROUP = 'idGroup';

    /**
     * @var string
     */
    public const RULES = 'rules';

    /**
     * @var string
     */
    public const ACL_GROUP = 'aclGroup';

    /**
     * @var string
     */
    public const ACL_RULES = 'aclRules';

    /**
     * @var string
     */
    public const ACL_ENTITY_RULES = 'aclEntityRules';

    /**
     * @var int|null
     */
    protected $idAclRole;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idGroup;

    /**
     * @var string|null
     */
    protected $rules;

    /**
     * @var \Generated\Shared\Transfer\GroupTransfer|null
     */
    protected $aclGroup;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RuleTransfer[]
     */
    protected $aclRules;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AclEntityRuleTransfer[]
     */
    protected $aclEntityRules;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_acl_role' => 'idAclRole',
        'idAclRole' => 'idAclRole',
        'IdAclRole' => 'idAclRole',
        'name' => 'name',
        'Name' => 'name',
        'id_group' => 'idGroup',
        'idGroup' => 'idGroup',
        'IdGroup' => 'idGroup',
        'rules' => 'rules',
        'Rules' => 'rules',
        'acl_group' => 'aclGroup',
        'aclGroup' => 'aclGroup',
        'AclGroup' => 'aclGroup',
        'acl_rules' => 'aclRules',
        'aclRules' => 'aclRules',
        'AclRules' => 'aclRules',
        'acl_entity_rules' => 'aclEntityRules',
        'aclEntityRules' => 'aclEntityRules',
        'AclEntityRules' => 'aclEntityRules',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ACL_ROLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_acl_role',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::ID_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RULES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'rules',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_GROUP => [
            'type' => 'Generated\Shared\Transfer\GroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_RULES => [
            'type' => 'Generated\Shared\Transfer\RuleTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_rules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_ENTITY_RULES => [
            'type' => 'Generated\Shared\Transfer\AclEntityRuleTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_entity_rules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Acl
     *
     * @param int|null $idAclRole
     *
     * @return $this
     */
    public function setIdAclRole($idAclRole)
    {
        $this->idAclRole = $idAclRole;
        $this->modifiedProperties[self::ID_ACL_ROLE] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return int|null
     */
    public function getIdAclRole()
    {
        return $this->idAclRole;
    }

    /**
     * @module Acl
     *
     * @param int|null $idAclRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAclRoleOrFail($idAclRole)
    {
        if ($idAclRole === null) {
            $this->throwNullValueException(static::ID_ACL_ROLE);
        }

        return $this->setIdAclRole($idAclRole);
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdAclRoleOrFail()
    {
        if ($this->idAclRole === null) {
            $this->throwNullValueException(static::ID_ACL_ROLE);
        }

        return $this->idAclRole;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAclRole()
    {
        $this->assertPropertyIsSet(self::ID_ACL_ROLE);

        return $this;
    }

    /**
     * @module Acl
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
     * @module Acl
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Acl
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
     * @module Acl
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
     * @module Acl
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
     * @module Acl
     *
     * @param int|null $idGroup
     *
     * @return $this
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;
        $this->modifiedProperties[self::ID_GROUP] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return int|null
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * @module Acl
     *
     * @param int|null $idGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGroupOrFail($idGroup)
    {
        if ($idGroup === null) {
            $this->throwNullValueException(static::ID_GROUP);
        }

        return $this->setIdGroup($idGroup);
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdGroupOrFail()
    {
        if ($this->idGroup === null) {
            $this->throwNullValueException(static::ID_GROUP);
        }

        return $this->idGroup;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGroup()
    {
        $this->assertPropertyIsSet(self::ID_GROUP);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param string|null $rules
     *
     * @return $this
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
        $this->modifiedProperties[self::RULES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return string|null
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @module Acl
     *
     * @param string|null $rules
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRulesOrFail($rules)
    {
        if ($rules === null) {
            $this->throwNullValueException(static::RULES);
        }

        return $this->setRules($rules);
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRulesOrFail()
    {
        if ($this->rules === null) {
            $this->throwNullValueException(static::RULES);
        }

        return $this->rules;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRules()
    {
        $this->assertPropertyIsSet(self::RULES);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\GroupTransfer|null $aclGroup
     *
     * @return $this
     */
    public function setAclGroup(GroupTransfer $aclGroup = null)
    {
        $this->aclGroup = $aclGroup;
        $this->modifiedProperties[self::ACL_GROUP] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return \Generated\Shared\Transfer\GroupTransfer|null
     */
    public function getAclGroup()
    {
        return $this->aclGroup;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\GroupTransfer $aclGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAclGroupOrFail(GroupTransfer $aclGroup)
    {
        return $this->setAclGroup($aclGroup);
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GroupTransfer
     */
    public function getAclGroupOrFail()
    {
        if ($this->aclGroup === null) {
            $this->throwNullValueException(static::ACL_GROUP);
        }

        return $this->aclGroup;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclGroup()
    {
        $this->assertPropertyIsSet(self::ACL_GROUP);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RuleTransfer[] $aclRules
     *
     * @return $this
     */
    public function setAclRules(ArrayObject $aclRules)
    {
        $this->aclRules = $aclRules;
        $this->modifiedProperties[self::ACL_RULES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RuleTransfer[]
     */
    public function getAclRules()
    {
        return $this->aclRules;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\RuleTransfer $aclRule
     *
     * @return $this
     */
    public function addAclRule(RuleTransfer $aclRule)
    {
        $this->aclRules[] = $aclRule;
        $this->modifiedProperties[self::ACL_RULES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclRules()
    {
        $this->assertCollectionPropertyIsSet(self::ACL_RULES);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AclEntityRuleTransfer[] $aclEntityRules
     *
     * @return $this
     */
    public function setAclEntityRules(ArrayObject $aclEntityRules)
    {
        $this->aclEntityRules = $aclEntityRules;
        $this->modifiedProperties[self::ACL_ENTITY_RULES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AclEntityRuleTransfer[]
     */
    public function getAclEntityRules()
    {
        return $this->aclEntityRules;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\AclEntityRuleTransfer $aclEntityRule
     *
     * @return $this
     */
    public function addAclEntityRule(AclEntityRuleTransfer $aclEntityRule)
    {
        $this->aclEntityRules[] = $aclEntityRule;
        $this->modifiedProperties[self::ACL_ENTITY_RULES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclEntityRules()
    {
        $this->assertCollectionPropertyIsSet(self::ACL_ENTITY_RULES);

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
                case 'idAclRole':
                case 'name':
                case 'idGroup':
                case 'rules':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'aclGroup':
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
                case 'aclRules':
                case 'aclEntityRules':
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
                case 'idAclRole':
                case 'name':
                case 'idGroup':
                case 'rules':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'aclRules':
                case 'aclEntityRules':
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
                case 'idAclRole':
                case 'name':
                case 'idGroup':
                case 'rules':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'aclRules':
                case 'aclEntityRules':
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
        $this->aclRules = $this->aclRules ?: new ArrayObject();
        $this->aclEntityRules = $this->aclEntityRules ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idAclRole' => $this->idAclRole,
            'name' => $this->name,
            'idGroup' => $this->idGroup,
            'rules' => $this->rules,
            'aclGroup' => $this->aclGroup,
            'aclRules' => $this->aclRules,
            'aclEntityRules' => $this->aclEntityRules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_role' => $this->idAclRole,
            'name' => $this->name,
            'id_group' => $this->idGroup,
            'rules' => $this->rules,
            'acl_group' => $this->aclGroup,
            'acl_rules' => $this->aclRules,
            'acl_entity_rules' => $this->aclEntityRules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_role' => $this->idAclRole instanceof AbstractTransfer ? $this->idAclRole->toArray(true, false) : $this->idAclRole,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_group' => $this->idGroup instanceof AbstractTransfer ? $this->idGroup->toArray(true, false) : $this->idGroup,
            'rules' => $this->rules instanceof AbstractTransfer ? $this->rules->toArray(true, false) : $this->rules,
            'acl_group' => $this->aclGroup instanceof AbstractTransfer ? $this->aclGroup->toArray(true, false) : $this->aclGroup,
            'acl_rules' => $this->aclRules instanceof AbstractTransfer ? $this->aclRules->toArray(true, false) : $this->addValuesToCollection($this->aclRules, true, false),
            'acl_entity_rules' => $this->aclEntityRules instanceof AbstractTransfer ? $this->aclEntityRules->toArray(true, false) : $this->addValuesToCollection($this->aclEntityRules, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAclRole' => $this->idAclRole instanceof AbstractTransfer ? $this->idAclRole->toArray(true, true) : $this->idAclRole,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idGroup' => $this->idGroup instanceof AbstractTransfer ? $this->idGroup->toArray(true, true) : $this->idGroup,
            'rules' => $this->rules instanceof AbstractTransfer ? $this->rules->toArray(true, true) : $this->rules,
            'aclGroup' => $this->aclGroup instanceof AbstractTransfer ? $this->aclGroup->toArray(true, true) : $this->aclGroup,
            'aclRules' => $this->aclRules instanceof AbstractTransfer ? $this->aclRules->toArray(true, true) : $this->addValuesToCollection($this->aclRules, true, true),
            'aclEntityRules' => $this->aclEntityRules instanceof AbstractTransfer ? $this->aclEntityRules->toArray(true, true) : $this->addValuesToCollection($this->aclEntityRules, true, true),
        ];
    }
}
