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
class SpyAclGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ACL_GROUP = 'idAclGroup';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_ACL_USER_HAS_GROUPS = 'spyAclUserHasGroups';

    /**
     * @var string
     */
    public const SPY_ACL_GROUPS_HAS_ROLESS = 'spyAclGroupsHasRoless';

    /**
     * @var integer|null
     */
    protected $idAclGroup;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer[]
     */
    protected $spyAclUserHasGroups;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAclGroupsHasRolesEntityTransfer[]
     */
    protected $spyAclGroupsHasRoless;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_acl_group' => 'idAclGroup',
        'idAclGroup' => 'idAclGroup',
        'IdAclGroup' => 'idAclGroup',
        'name' => 'name',
        'Name' => 'name',
        'spy_acl_user_has_groups' => 'spyAclUserHasGroups',
        'spyAclUserHasGroups' => 'spyAclUserHasGroups',
        'SpyAclUserHasGroups' => 'spyAclUserHasGroups',
        'spy_acl_groups_has_roless' => 'spyAclGroupsHasRoless',
        'spyAclGroupsHasRoless' => 'spyAclGroupsHasRoless',
        'SpyAclGroupsHasRoless' => 'spyAclGroupsHasRoless',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ACL_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_acl_group',
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
        self::SPY_ACL_USER_HAS_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_user_has_groups',
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
    public static $entityNamespace = 'Orm\Zed\Acl\Persistence\SpyAclGroup';


    /**
     * @module 
     *
     * @param integer|null $idAclGroup
     *
     * @return $this
     */
    public function setIdAclGroup($idAclGroup)
    {
        $this->idAclGroup = $idAclGroup;
        $this->modifiedProperties[self::ID_ACL_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAclGroup()
    {
        return $this->idAclGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $idAclGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAclGroupOrFail($idAclGroup)
    {
        if ($idAclGroup === null) {
            $this->throwNullValueException(static::ID_ACL_GROUP);
        }

        return $this->setIdAclGroup($idAclGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAclGroupOrFail()
    {
        if ($this->idAclGroup === null) {
            $this->throwNullValueException(static::ID_ACL_GROUP);
        }

        return $this->idAclGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAclGroup()
    {
        $this->assertPropertyIsSet(self::ID_ACL_GROUP);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer[] $spyAclUserHasGroups
     *
     * @return $this
     */
    public function setSpyAclUserHasGroups(ArrayObject $spyAclUserHasGroups)
    {
        $this->spyAclUserHasGroups = $spyAclUserHasGroups;
        $this->modifiedProperties[self::SPY_ACL_USER_HAS_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer[]
     */
    public function getSpyAclUserHasGroups()
    {
        return $this->spyAclUserHasGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer $spyAclUserHasGroups
     *
     * @return $this
     */
    public function addSpyAclUserHasGroups(SpyAclUserHasGroupEntityTransfer $spyAclUserHasGroups)
    {
        $this->spyAclUserHasGroups[] = $spyAclUserHasGroups;
        $this->modifiedProperties[self::SPY_ACL_USER_HAS_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclUserHasGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ACL_USER_HAS_GROUPS);

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
                case 'idAclGroup':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAclUserHasGroups':
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
                case 'idAclGroup':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclUserHasGroups':
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
                case 'idAclGroup':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAclUserHasGroups':
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
        $this->spyAclUserHasGroups = $this->spyAclUserHasGroups ?: new ArrayObject();
        $this->spyAclGroupsHasRoless = $this->spyAclGroupsHasRoless ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idAclGroup' => $this->idAclGroup,
            'name' => $this->name,
            'spyAclUserHasGroups' => $this->spyAclUserHasGroups,
            'spyAclGroupsHasRoless' => $this->spyAclGroupsHasRoless,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_group' => $this->idAclGroup,
            'name' => $this->name,
            'spy_acl_user_has_groups' => $this->spyAclUserHasGroups,
            'spy_acl_groups_has_roless' => $this->spyAclGroupsHasRoless,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_group' => $this->idAclGroup instanceof AbstractTransfer ? $this->idAclGroup->toArray(true, false) : $this->idAclGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_acl_user_has_groups' => $this->spyAclUserHasGroups instanceof AbstractTransfer ? $this->spyAclUserHasGroups->toArray(true, false) : $this->addValuesToCollection($this->spyAclUserHasGroups, true, false),
            'spy_acl_groups_has_roless' => $this->spyAclGroupsHasRoless instanceof AbstractTransfer ? $this->spyAclGroupsHasRoless->toArray(true, false) : $this->addValuesToCollection($this->spyAclGroupsHasRoless, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAclGroup' => $this->idAclGroup instanceof AbstractTransfer ? $this->idAclGroup->toArray(true, true) : $this->idAclGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyAclUserHasGroups' => $this->spyAclUserHasGroups instanceof AbstractTransfer ? $this->spyAclUserHasGroups->toArray(true, true) : $this->addValuesToCollection($this->spyAclUserHasGroups, true, true),
            'spyAclGroupsHasRoless' => $this->spyAclGroupsHasRoless instanceof AbstractTransfer ? $this->spyAclGroupsHasRoless->toArray(true, true) : $this->addValuesToCollection($this->spyAclGroupsHasRoless, true, true),
        ];
    }
}
