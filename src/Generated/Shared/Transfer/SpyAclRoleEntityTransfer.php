<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyAclRoleEntityTransfer extends AbstractEntityTransfer
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
    public const SPY_ACL_RULES = 'spyAclRules';

    /**
     * @var string
     */
    public const SPY_ACL_GROUPS_HAS_ROLESS = 'spyAclGroupsHasRoless';

    /**
     * @var integer|null
     */
    protected $idAclRole;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAclRuleEntityTransfer[]
     */
    protected $spyAclRules;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer[]
     */
    protected $spyAclGroupsHasRoless;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_acl_role' => 'idAclRole',
        'idAclRole' => 'idAclRole',
        'IdAclRole' => 'idAclRole',
        'name' => 'name',
        'Name' => 'name',
        'spy_acl_rules' => 'spyAclRules',
        'spyAclRules' => 'spyAclRules',
        'SpyAclRules' => 'spyAclRules',
        'spy_acl_groups_has_roless' => 'spyAclGroupsHasRoless',
        'spyAclGroupsHasRoless' => 'spyAclGroupsHasRoless',
        'SpyAclGroupsHasRoless' => 'spyAclGroupsHasRoless',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ACL_ROLE => [
            'type' => 'integer',
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
        self::SPY_ACL_RULES => [
            'type' => 'Generated\Shared\Transfer\SpyAclRuleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_rules',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ACL_GROUPS_HAS_ROLESS => [
            'type' => 'Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_groups_has_roless',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Acl\Persistence\SpyAclRole';


    /**
     * @module 
     *
     * @param integer|null $idAclRole
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdAclRole()
    {
        return $this->idAclRole;
    }

    /**
     * @module 
     *
     * @param integer|null $idAclRole
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAclRoleOrFail()
    {
        if ($this->idAclRole === null) {
            $this->throwNullValueException(static::ID_ACL_ROLE);
        }

        return $this->idAclRole;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAclRuleEntityTransfer[] $spyAclRules
     *
     * @return $this
     */
    public function setSpyAclRules(ArrayObject $spyAclRules)
    {
        $this->spyAclRules = $spyAclRules;
        $this->modifiedProperties[self::SPY_ACL_RULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAclRuleEntityTransfer[]
     */
    public function getSpyAclRules()
    {
        return $this->spyAclRules;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclRuleEntityTransfer $spyAclRules
     *
     * @return $this
     */
    public function addSpyAclRules(SpyAclRuleEntityTransfer $spyAclRules)
    {
        $this->spyAclRules[] = $spyAclRules;
        $this->modifiedProperties[self::SPY_ACL_RULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclRules()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ACL_RULES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer[] $spyAclGroupsHasRoless
     *
     * @return $this
     */
    public function setSpyAclGroupsHasRoless(ArrayObject $spyAclGroupsHasRoless)
    {
        $this->spyAclGroupsHasRoless = $spyAclGroupsHasRoless;
        $this->modifiedProperties[self::SPY_ACL_GROUPS_HAS_ROLESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer[]
     */
    public function getSpyAclGroupsHasRoless()
    {
        return $this->spyAclGroupsHasRoless;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer $spyAclGroupsHasRoless
     *
     * @return $this
     */
    public function addSpyAclGroupsHasRoless(SpyAclGroupsHasRolesEntityTransfer $spyAclGroupsHasRoless)
    {
        $this->spyAclGroupsHasRoless[] = $spyAclGroupsHasRoless;
        $this->modifiedProperties[self::SPY_ACL_GROUPS_HAS_ROLESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclGroupsHasRoless()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ACL_GROUPS_HAS_ROLESS);

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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAclRules':
                case 'spyAclGroupsHasRoless':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idAclRole':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclRules':
                case 'spyAclGroupsHasRoless':
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
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclRules':
                case 'spyAclGroupsHasRoless':
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
        $this->spyAclRules = $this->spyAclRules ?: new ArrayObject();
        $this->spyAclGroupsHasRoless = $this->spyAclGroupsHasRoless ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idAclRole' => $this->idAclRole,
            'name' => $this->name,
            'spyAclRules' => $this->spyAclRules,
            'spyAclGroupsHasRoless' => $this->spyAclGroupsHasRoless,
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
            'spy_acl_rules' => $this->spyAclRules,
            'spy_acl_groups_has_roless' => $this->spyAclGroupsHasRoless,
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
            'spy_acl_rules' => $this->spyAclRules instanceof AbstractTransfer ? $this->spyAclRules->toArray(true, false) : $this->addValuesToCollection($this->spyAclRules, true, false),
            'spy_acl_groups_has_roless' => $this->spyAclGroupsHasRoless instanceof AbstractTransfer ? $this->spyAclGroupsHasRoless->toArray(true, false) : $this->addValuesToCollection($this->spyAclGroupsHasRoless, true, false),
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
            'spyAclRules' => $this->spyAclRules instanceof AbstractTransfer ? $this->spyAclRules->toArray(true, true) : $this->addValuesToCollection($this->spyAclRules, true, true),
            'spyAclGroupsHasRoless' => $this->spyAclGroupsHasRoless instanceof AbstractTransfer ? $this->spyAclGroupsHasRoless->toArray(true, true) : $this->addValuesToCollection($this->spyAclGroupsHasRoless, true, true),
        ];
    }
}
