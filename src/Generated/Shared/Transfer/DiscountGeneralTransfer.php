<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DiscountGeneralTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const DISCOUNT_TYPE = 'discountType';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const PRIORITY = 'priority';

    /**
     * @var int|null
     */
    protected $idDiscount;

    /**
     * @var string|null
     */
    protected $discountType;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var bool|null
     */
    protected $isExclusive;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var int|null
     */
    protected $priority;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'discount_type' => 'discountType',
        'discountType' => 'discountType',
        'DiscountType' => 'discountType',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'description' => 'description',
        'Description' => 'description',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'priority' => 'priority',
        'Priority' => 'priority',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISPLAY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_name',
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
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
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
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRIORITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'priority',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module DiscountPromotion|Discount
     *
     * @param int|null $idDiscount
     *
     * @return $this
     */
    public function setIdDiscount($idDiscount)
    {
        $this->idDiscount = $idDiscount;
        $this->modifiedProperties[self::ID_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @return int|null
     */
    public function getIdDiscount()
    {
        return $this->idDiscount;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param int|null $idDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountOrFail($idDiscount)
    {
        if ($idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->setIdDiscount($idDiscount);
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDiscountOrFail()
    {
        if ($this->idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->idDiscount;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscount()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $discountType
     *
     * @return $this
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        $this->modifiedProperties[self::DISCOUNT_TYPE] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @module Discount
     *
     * @param string|null $discountType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountTypeOrFail($discountType)
    {
        if ($discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->setDiscountType($discountType);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountTypeOrFail()
    {
        if ($this->discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->discountType;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountType()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_TYPE);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        $this->modifiedProperties[self::DISPLAY_NAME] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module Discount
     *
     * @param string|null $displayName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayNameOrFail($displayName)
    {
        if ($displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->setDisplayName($displayName);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayNameOrFail()
    {
        if ($this->displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->displayName;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayName()
    {
        $this->assertPropertyIsSet(self::DISPLAY_NAME);

        return $this;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module Discount
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module Discount
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param bool|null $isExclusive
     *
     * @return $this
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        $this->modifiedProperties[self::IS_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return bool|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module Discount
     *
     * @param bool|null $isExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExclusiveOrFail($isExclusive)
    {
        if ($isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->setIsExclusive($isExclusive);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExclusive()
    {
        $this->assertPropertyIsSet(self::IS_EXCLUSIVE);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param bool|null $isActive
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
     * @module Discount
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module Discount
     *
     * @param bool|null $isActive
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
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        $this->modifiedProperties[self::PRIORITY] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @param int|null $priority
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriorityOrFail($priority)
    {
        if ($priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->setPriority($priority);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriorityOrFail()
    {
        if ($this->priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriority()
    {
        $this->assertPropertyIsSet(self::PRIORITY);

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
                case 'idDiscount':
                case 'discountType':
                case 'displayName':
                case 'description':
                case 'validFrom':
                case 'validTo':
                case 'isExclusive':
                case 'isActive':
                case 'priority':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'storeRelation':
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
                case 'idDiscount':
                case 'discountType':
                case 'displayName':
                case 'description':
                case 'validFrom':
                case 'validTo':
                case 'isExclusive':
                case 'isActive':
                case 'priority':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
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
                case 'idDiscount':
                case 'discountType':
                case 'displayName':
                case 'description':
                case 'validFrom':
                case 'validTo':
                case 'isExclusive':
                case 'isActive':
                case 'priority':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
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
            'idDiscount' => $this->idDiscount,
            'discountType' => $this->discountType,
            'displayName' => $this->displayName,
            'description' => $this->description,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'isExclusive' => $this->isExclusive,
            'isActive' => $this->isActive,
            'priority' => $this->priority,
            'storeRelation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount,
            'discount_type' => $this->discountType,
            'display_name' => $this->displayName,
            'description' => $this->description,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'is_exclusive' => $this->isExclusive,
            'is_active' => $this->isActive,
            'priority' => $this->priority,
            'store_relation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'discount_type' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, false) : $this->discountType,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, false) : $this->priority,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'discountType' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, true) : $this->discountType,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, true) : $this->priority,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
        ];
    }
}
