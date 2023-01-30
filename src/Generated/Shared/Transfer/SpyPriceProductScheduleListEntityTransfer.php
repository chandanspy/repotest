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
class SpyPriceProductScheduleListEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_SCHEDULE_LIST = 'idPriceProductScheduleList';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULES = 'spyPriceProductSchedules';

    /**
     * @var string|null
     */
    protected $idPriceProductScheduleList;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var integer|null
     */
    protected $fkUser;

    /**
     * @var \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    protected $user;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    protected $spyPriceProductSchedules;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_schedule_list' => 'idPriceProductScheduleList',
        'idPriceProductScheduleList' => 'idPriceProductScheduleList',
        'IdPriceProductScheduleList' => 'idPriceProductScheduleList',
        'name' => 'name',
        'Name' => 'name',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'user' => 'user',
        'User' => 'user',
        'spy_price_product_schedules' => 'spyPriceProductSchedules',
        'spyPriceProductSchedules' => 'spyPriceProductSchedules',
        'SpyPriceProductSchedules' => 'spyPriceProductSchedules',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_SCHEDULE_LIST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_schedule_list',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::USER => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_SCHEDULES => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_schedules',
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
    public static $entityNamespace = 'Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList';


    /**
     * @module 
     *
     * @param string|null $idPriceProductScheduleList
     *
     * @return $this
     */
    public function setIdPriceProductScheduleList($idPriceProductScheduleList)
    {
        $this->idPriceProductScheduleList = $idPriceProductScheduleList;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_SCHEDULE_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdPriceProductScheduleList()
    {
        return $this->idPriceProductScheduleList;
    }

    /**
     * @module 
     *
     * @param string|null $idPriceProductScheduleList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductScheduleListOrFail($idPriceProductScheduleList)
    {
        if ($idPriceProductScheduleList === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->setIdPriceProductScheduleList($idPriceProductScheduleList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPriceProductScheduleListOrFail()
    {
        if ($this->idPriceProductScheduleList === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->idPriceProductScheduleList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductScheduleList()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_SCHEDULE_LIST);

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
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

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
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer|null $user
     *
     * @return $this
     */
    public function setUser(SpyUserEntityTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(SpyUserEntityTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer
     */
    public function getUserOrFail()
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUser()
    {
        $this->assertPropertyIsSet(self::USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[] $spyPriceProductSchedules
     *
     * @return $this
     */
    public function setSpyPriceProductSchedules(ArrayObject $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer[]
     */
    public function getSpyPriceProductSchedules()
    {
        return $this->spyPriceProductSchedules;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules
     *
     * @return $this
     */
    public function addSpyPriceProductSchedules(SpyPriceProductScheduleEntityTransfer $spyPriceProductSchedules)
    {
        $this->spyPriceProductSchedules[] = $spyPriceProductSchedules;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductSchedules()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_SCHEDULES);

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
                case 'idPriceProductScheduleList':
                case 'name':
                case 'isActive':
                case 'fkUser':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'user':
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
                case 'spyPriceProductSchedules':
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
                case 'idPriceProductScheduleList':
                case 'name':
                case 'isActive':
                case 'fkUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPriceProductSchedules':
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
                case 'idPriceProductScheduleList':
                case 'name':
                case 'isActive':
                case 'fkUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPriceProductSchedules':
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
        $this->spyPriceProductSchedules = $this->spyPriceProductSchedules ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPriceProductScheduleList' => $this->idPriceProductScheduleList,
            'name' => $this->name,
            'isActive' => $this->isActive,
            'fkUser' => $this->fkUser,
            'user' => $this->user,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule_list' => $this->idPriceProductScheduleList,
            'name' => $this->name,
            'is_active' => $this->isActive,
            'fk_user' => $this->fkUser,
            'user' => $this->user,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule_list' => $this->idPriceProductScheduleList instanceof AbstractTransfer ? $this->idPriceProductScheduleList->toArray(true, false) : $this->idPriceProductScheduleList,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
            'spy_price_product_schedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductScheduleList' => $this->idPriceProductScheduleList instanceof AbstractTransfer ? $this->idPriceProductScheduleList->toArray(true, true) : $this->idPriceProductScheduleList,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
            'spyPriceProductSchedules' => $this->spyPriceProductSchedules instanceof AbstractTransfer ? $this->spyPriceProductSchedules->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductSchedules, true, true),
        ];
    }
}
