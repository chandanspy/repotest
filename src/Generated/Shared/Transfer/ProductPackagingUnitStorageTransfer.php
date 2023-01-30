<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductPackagingUnitStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const TYPE_NAME = 'typeName';

    /**
     * @var string
     */
    public const ID_LEAD_PRODUCT = 'idLeadProduct';

    /**
     * @var string
     */
    public const DEFAULT_AMOUNT = 'defaultAmount';

    /**
     * @var string
     */
    public const IS_AMOUNT_VARIABLE = 'isAmountVariable';

    /**
     * @var string
     */
    public const AMOUNT_MIN = 'amountMin';

    /**
     * @var string
     */
    public const AMOUNT_MAX = 'amountMax';

    /**
     * @var string
     */
    public const AMOUNT_INTERVAL = 'amountInterval';

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var string|null
     */
    protected $typeName;

    /**
     * @var int|null
     */
    protected $idLeadProduct;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $defaultAmount;

    /**
     * @var bool|null
     */
    protected $isAmountVariable;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMin;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMax;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountInterval;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'type_name' => 'typeName',
        'typeName' => 'typeName',
        'TypeName' => 'typeName',
        'id_lead_product' => 'idLeadProduct',
        'idLeadProduct' => 'idLeadProduct',
        'IdLeadProduct' => 'idLeadProduct',
        'default_amount' => 'defaultAmount',
        'defaultAmount' => 'defaultAmount',
        'DefaultAmount' => 'defaultAmount',
        'is_amount_variable' => 'isAmountVariable',
        'isAmountVariable' => 'isAmountVariable',
        'IsAmountVariable' => 'isAmountVariable',
        'amount_min' => 'amountMin',
        'amountMin' => 'amountMin',
        'AmountMin' => 'amountMin',
        'amount_max' => 'amountMax',
        'amountMax' => 'amountMax',
        'AmountMax' => 'amountMax',
        'amount_interval' => 'amountInterval',
        'amountInterval' => 'amountInterval',
        'AmountInterval' => 'amountInterval',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_LEAD_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_lead_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'default_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AMOUNT_VARIABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_amount_variable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MIN => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MAX => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_INTERVAL => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_interval',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|null $typeName
     *
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        $this->modifiedProperties[self::TYPE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return string|null
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|null $typeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeNameOrFail($typeName)
    {
        if ($typeName === null) {
            $this->throwNullValueException(static::TYPE_NAME);
        }

        return $this->setTypeName($typeName);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeNameOrFail()
    {
        if ($this->typeName === null) {
            $this->throwNullValueException(static::TYPE_NAME);
        }

        return $this->typeName;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTypeName()
    {
        $this->assertPropertyIsSet(self::TYPE_NAME);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param int|null $idLeadProduct
     *
     * @return $this
     */
    public function setIdLeadProduct($idLeadProduct)
    {
        $this->idLeadProduct = $idLeadProduct;
        $this->modifiedProperties[self::ID_LEAD_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return int|null
     */
    public function getIdLeadProduct()
    {
        return $this->idLeadProduct;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param int|null $idLeadProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLeadProductOrFail($idLeadProduct)
    {
        if ($idLeadProduct === null) {
            $this->throwNullValueException(static::ID_LEAD_PRODUCT);
        }

        return $this->setIdLeadProduct($idLeadProduct);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdLeadProductOrFail()
    {
        if ($this->idLeadProduct === null) {
            $this->throwNullValueException(static::ID_LEAD_PRODUCT);
        }

        return $this->idLeadProduct;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLeadProduct()
    {
        $this->assertPropertyIsSet(self::ID_LEAD_PRODUCT);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $defaultAmount
     *
     * @return $this
     */
    public function setDefaultAmount($defaultAmount = null)
    {
        if ($defaultAmount !== null && !$defaultAmount instanceof Decimal) {
            $defaultAmount = new Decimal($defaultAmount);
        }

        $this->defaultAmount = $defaultAmount;
        $this->modifiedProperties[self::DEFAULT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getDefaultAmount()
    {
        return $this->defaultAmount;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $defaultAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultAmountOrFail($defaultAmount)
    {
        if ($defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->setDefaultAmount($defaultAmount);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getDefaultAmountOrFail()
    {
        if ($this->defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->defaultAmount;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultAmount()
    {
        $this->assertPropertyIsSet(self::DEFAULT_AMOUNT);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param bool|null $isAmountVariable
     *
     * @return $this
     */
    public function setIsAmountVariable($isAmountVariable)
    {
        $this->isAmountVariable = $isAmountVariable;
        $this->modifiedProperties[self::IS_AMOUNT_VARIABLE] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return bool|null
     */
    public function getIsAmountVariable()
    {
        return $this->isAmountVariable;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param bool|null $isAmountVariable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAmountVariableOrFail($isAmountVariable)
    {
        if ($isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->setIsAmountVariable($isAmountVariable);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAmountVariableOrFail()
    {
        if ($this->isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->isAmountVariable;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAmountVariable()
    {
        $this->assertPropertyIsSet(self::IS_AMOUNT_VARIABLE);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMin
     *
     * @return $this
     */
    public function setAmountMin($amountMin = null)
    {
        if ($amountMin !== null && !$amountMin instanceof Decimal) {
            $amountMin = new Decimal($amountMin);
        }

        $this->amountMin = $amountMin;
        $this->modifiedProperties[self::AMOUNT_MIN] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMin()
    {
        return $this->amountMin;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMinOrFail($amountMin)
    {
        if ($amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->setAmountMin($amountMin);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMinOrFail()
    {
        if ($this->amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->amountMin;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMin()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MIN);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMax
     *
     * @return $this
     */
    public function setAmountMax($amountMax = null)
    {
        if ($amountMax !== null && !$amountMax instanceof Decimal) {
            $amountMax = new Decimal($amountMax);
        }

        $this->amountMax = $amountMax;
        $this->modifiedProperties[self::AMOUNT_MAX] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMax()
    {
        return $this->amountMax;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMaxOrFail($amountMax)
    {
        if ($amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->setAmountMax($amountMax);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMaxOrFail()
    {
        if ($this->amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->amountMax;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMax()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MAX);

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountInterval
     *
     * @return $this
     */
    public function setAmountInterval($amountInterval = null)
    {
        if ($amountInterval !== null && !$amountInterval instanceof Decimal) {
            $amountInterval = new Decimal($amountInterval);
        }

        $this->amountInterval = $amountInterval;
        $this->modifiedProperties[self::AMOUNT_INTERVAL] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountInterval()
    {
        return $this->amountInterval;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountInterval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountIntervalOrFail($amountInterval)
    {
        if ($amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->setAmountInterval($amountInterval);
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountIntervalOrFail()
    {
        if ($this->amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->amountInterval;
    }

    /**
     * @module ProductPackagingUnitWidget|ProductPackagingUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountInterval()
    {
        $this->assertPropertyIsSet(self::AMOUNT_INTERVAL);

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
                case 'idProduct':
                case 'typeName':
                case 'idLeadProduct':
                case 'isAmountVariable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
                case 'amountInterval':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idProduct':
                case 'typeName':
                case 'idLeadProduct':
                case 'isAmountVariable':
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
                case 'amountInterval':
                    $values[$arrayKey] = $value;

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
                case 'idProduct':
                case 'typeName':
                case 'idLeadProduct':
                case 'isAmountVariable':
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
                case 'amountInterval':
                    $values[$arrayKey] = $value;

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
            'idProduct' => $this->idProduct,
            'typeName' => $this->typeName,
            'idLeadProduct' => $this->idLeadProduct,
            'isAmountVariable' => $this->isAmountVariable,
            'defaultAmount' => $this->defaultAmount,
            'amountMin' => $this->amountMin,
            'amountMax' => $this->amountMax,
            'amountInterval' => $this->amountInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct,
            'type_name' => $this->typeName,
            'id_lead_product' => $this->idLeadProduct,
            'is_amount_variable' => $this->isAmountVariable,
            'default_amount' => $this->defaultAmount,
            'amount_min' => $this->amountMin,
            'amount_max' => $this->amountMax,
            'amount_interval' => $this->amountInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'type_name' => $this->typeName instanceof AbstractTransfer ? $this->typeName->toArray(true, false) : $this->typeName,
            'id_lead_product' => $this->idLeadProduct instanceof AbstractTransfer ? $this->idLeadProduct->toArray(true, false) : $this->idLeadProduct,
            'is_amount_variable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, false) : $this->isAmountVariable,
            'default_amount' => $this->defaultAmount,
            'amount_min' => $this->amountMin,
            'amount_max' => $this->amountMax,
            'amount_interval' => $this->amountInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'typeName' => $this->typeName instanceof AbstractTransfer ? $this->typeName->toArray(true, true) : $this->typeName,
            'idLeadProduct' => $this->idLeadProduct instanceof AbstractTransfer ? $this->idLeadProduct->toArray(true, true) : $this->idLeadProduct,
            'isAmountVariable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, true) : $this->isAmountVariable,
            'defaultAmount' => $this->defaultAmount,
            'amountMin' => $this->amountMin,
            'amountMax' => $this->amountMax,
            'amountInterval' => $this->amountInterval,
        ];
    }
}
