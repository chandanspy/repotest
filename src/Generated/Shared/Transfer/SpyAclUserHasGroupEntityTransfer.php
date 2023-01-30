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
class SpyAclUserHasGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const FK_ACL_GROUP = 'fkAclGroup';

    /**
     * @var string
     */
    public const SPY_USER = 'spyUser';

    /**
     * @var string
     */
    public const SPY_ACL_GROUP = 'spyAclGroup';

    /**
     * @var integer|null
     */
    protected $fkUser;

    /**
     * @var integer|null
     */
    protected $fkAclGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    protected $spyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyAclGroupEntityTransfer|null
     */
    protected $spyAclGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'fk_acl_group' => 'fkAclGroup',
        'fkAclGroup' => 'fkAclGroup',
        'FkAclGroup' => 'fkAclGroup',
        'spy_user' => 'spyUser',
        'spyUser' => 'spyUser',
        'SpyUser' => 'spyUser',
        'spy_acl_group' => 'spyAclGroup',
        'spyAclGroup' => 'spyAclGroup',
        'SpyAclGroup' => 'spyAclGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_user',
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
        self::SPY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_user',
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
    public static $entityNamespace = 'Orm\Zed\Acl\Persistence\SpyAclUserHasGroup';


    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @return $this
     */
    public function setFkUser($fkUser)
    {
        $this->fkUser = $fkUser;
        $this->modifiedProperties[self::FK_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUserOrFail($fkUser)
    {
        if ($fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->setFkUser($fkUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUserOrFail()
    {
        if ($this->fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUser()
    {
        $this->assertPropertyIsSet(self::FK_USER);

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
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer|null $spyUser
     *
     * @return $this
     */
    public function setSpyUser(SpyUserEntityTransfer $spyUser = null)
    {
        $this->spyUser = $spyUser;
        $this->modifiedProperties[self::SPY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    public function getSpyUser()
    {
        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $spyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyUserOrFail(SpyUserEntityTransfer $spyUser)
    {
        return $this->setSpyUser($spyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer
     */
    public function getSpyUserOrFail()
    {
        if ($this->spyUser === null) {
            $this->throwNullValueException(static::SPY_USER);
        }

        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUser()
    {
        $this->assertPropertyIsSet(self::SPY_USER);

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
                case 'fkUser':
                case 'fkAclGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyUser':
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
                case 'fkUser':
                case 'fkAclGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
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
                case 'fkUser':
                case 'fkAclGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
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
            'fkUser' => $this->fkUser,
            'fkAclGroup' => $this->fkAclGroup,
            'spyUser' => $this->spyUser,
            'spyAclGroup' => $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_user' => $this->fkUser,
            'fk_acl_group' => $this->fkAclGroup,
            'spy_user' => $this->spyUser,
            'spy_acl_group' => $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'fk_acl_group' => $this->fkAclGroup instanceof AbstractTransfer ? $this->fkAclGroup->toArray(true, false) : $this->fkAclGroup,
            'spy_user' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, false) : $this->spyUser,
            'spy_acl_group' => $this->spyAclGroup instanceof AbstractTransfer ? $this->spyAclGroup->toArray(true, false) : $this->spyAclGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'fkAclGroup' => $this->fkAclGroup instanceof AbstractTransfer ? $this->fkAclGroup->toArray(true, true) : $this->fkAclGroup,
            'spyUser' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, true) : $this->spyUser,
            'spyAclGroup' => $this->spyAclGroup instanceof AbstractTransfer ? $this->spyAclGroup->toArray(true, true) : $this->spyAclGroup,
        ];
    }
}
