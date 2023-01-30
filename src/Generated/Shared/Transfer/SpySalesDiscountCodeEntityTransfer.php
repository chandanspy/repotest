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
class SpySalesDiscountCodeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_DISCOUNT_CODE = 'idSalesDiscountCode';

    /**
     * @var string
     */
    public const FK_SALES_DISCOUNT = 'fkSalesDiscount';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const CODEPOOL_NAME = 'codepoolName';

    /**
     * @var string
     */
    public const IS_ONCE_PER_CUSTOMER = 'isOncePerCustomer';

    /**
     * @var string
     */
    public const IS_REFUNDABLE = 'isRefundable';

    /**
     * @var string
     */
    public const IS_REUSABLE = 'isReusable';

    /**
     * @var string
     */
    public const DISCOUNT = 'discount';

    /**
     * @var integer|null
     */
    protected $idSalesDiscountCode;

    /**
     * @var integer|null
     */
    protected $fkSalesDiscount;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $codepoolName;

    /**
     * @var boolean|null
     */
    protected $isOncePerCustomer;

    /**
     * @var boolean|null
     */
    protected $isRefundable;

    /**
     * @var boolean|null
     */
    protected $isReusable;

    /**
     * @var \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer|null
     */
    protected $discount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_discount_code' => 'idSalesDiscountCode',
        'idSalesDiscountCode' => 'idSalesDiscountCode',
        'IdSalesDiscountCode' => 'idSalesDiscountCode',
        'fk_sales_discount' => 'fkSalesDiscount',
        'fkSalesDiscount' => 'fkSalesDiscount',
        'FkSalesDiscount' => 'fkSalesDiscount',
        'code' => 'code',
        'Code' => 'code',
        'codepool_name' => 'codepoolName',
        'codepoolName' => 'codepoolName',
        'CodepoolName' => 'codepoolName',
        'is_once_per_customer' => 'isOncePerCustomer',
        'isOncePerCustomer' => 'isOncePerCustomer',
        'IsOncePerCustomer' => 'isOncePerCustomer',
        'is_refundable' => 'isRefundable',
        'isRefundable' => 'isRefundable',
        'IsRefundable' => 'isRefundable',
        'is_reusable' => 'isReusable',
        'isReusable' => 'isReusable',
        'IsReusable' => 'isReusable',
        'discount' => 'discount',
        'Discount' => 'discount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_DISCOUNT_CODE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_discount_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_DISCOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CODEPOOL_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'codepool_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ONCE_PER_CUSTOMER => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_once_per_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_REFUNDABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_refundable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_REUSABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_reusable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT => [
            'type' => 'Generated\Shared\Transfer\SpySalesDiscountEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesDiscountCode';


    /**
     * @module 
     *
     * @param integer|null $idSalesDiscountCode
     *
     * @return $this
     */
    public function setIdSalesDiscountCode($idSalesDiscountCode)
    {
        $this->idSalesDiscountCode = $idSalesDiscountCode;
        $this->modifiedProperties[self::ID_SALES_DISCOUNT_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesDiscountCode()
    {
        return $this->idSalesDiscountCode;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesDiscountCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesDiscountCodeOrFail($idSalesDiscountCode)
    {
        if ($idSalesDiscountCode === null) {
            $this->throwNullValueException(static::ID_SALES_DISCOUNT_CODE);
        }

        return $this->setIdSalesDiscountCode($idSalesDiscountCode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesDiscountCodeOrFail()
    {
        if ($this->idSalesDiscountCode === null) {
            $this->throwNullValueException(static::ID_SALES_DISCOUNT_CODE);
        }

        return $this->idSalesDiscountCode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesDiscountCode()
    {
        $this->assertPropertyIsSet(self::ID_SALES_DISCOUNT_CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesDiscount
     *
     * @return $this
     */
    public function setFkSalesDiscount($fkSalesDiscount)
    {
        $this->fkSalesDiscount = $fkSalesDiscount;
        $this->modifiedProperties[self::FK_SALES_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesDiscount()
    {
        return $this->fkSalesDiscount;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesDiscountOrFail($fkSalesDiscount)
    {
        if ($fkSalesDiscount === null) {
            $this->throwNullValueException(static::FK_SALES_DISCOUNT);
        }

        return $this->setFkSalesDiscount($fkSalesDiscount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesDiscountOrFail()
    {
        if ($this->fkSalesDiscount === null) {
            $this->throwNullValueException(static::FK_SALES_DISCOUNT);
        }

        return $this->fkSalesDiscount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesDiscount()
    {
        $this->assertPropertyIsSet(self::FK_SALES_DISCOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module 
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $codepoolName
     *
     * @return $this
     */
    public function setCodepoolName($codepoolName)
    {
        $this->codepoolName = $codepoolName;
        $this->modifiedProperties[self::CODEPOOL_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCodepoolName()
    {
        return $this->codepoolName;
    }

    /**
     * @module 
     *
     * @param string|null $codepoolName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodepoolNameOrFail($codepoolName)
    {
        if ($codepoolName === null) {
            $this->throwNullValueException(static::CODEPOOL_NAME);
        }

        return $this->setCodepoolName($codepoolName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodepoolNameOrFail()
    {
        if ($this->codepoolName === null) {
            $this->throwNullValueException(static::CODEPOOL_NAME);
        }

        return $this->codepoolName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCodepoolName()
    {
        $this->assertPropertyIsSet(self::CODEPOOL_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isOncePerCustomer
     *
     * @return $this
     */
    public function setIsOncePerCustomer($isOncePerCustomer)
    {
        $this->isOncePerCustomer = $isOncePerCustomer;
        $this->modifiedProperties[self::IS_ONCE_PER_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsOncePerCustomer()
    {
        return $this->isOncePerCustomer;
    }

    /**
     * @module 
     *
     * @param boolean|null $isOncePerCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOncePerCustomerOrFail($isOncePerCustomer)
    {
        if ($isOncePerCustomer === null) {
            $this->throwNullValueException(static::IS_ONCE_PER_CUSTOMER);
        }

        return $this->setIsOncePerCustomer($isOncePerCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsOncePerCustomerOrFail()
    {
        if ($this->isOncePerCustomer === null) {
            $this->throwNullValueException(static::IS_ONCE_PER_CUSTOMER);
        }

        return $this->isOncePerCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOncePerCustomer()
    {
        $this->assertPropertyIsSet(self::IS_ONCE_PER_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isRefundable
     *
     * @return $this
     */
    public function setIsRefundable($isRefundable)
    {
        $this->isRefundable = $isRefundable;
        $this->modifiedProperties[self::IS_REFUNDABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsRefundable()
    {
        return $this->isRefundable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isRefundable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRefundableOrFail($isRefundable)
    {
        if ($isRefundable === null) {
            $this->throwNullValueException(static::IS_REFUNDABLE);
        }

        return $this->setIsRefundable($isRefundable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsRefundableOrFail()
    {
        if ($this->isRefundable === null) {
            $this->throwNullValueException(static::IS_REFUNDABLE);
        }

        return $this->isRefundable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRefundable()
    {
        $this->assertPropertyIsSet(self::IS_REFUNDABLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isReusable
     *
     * @return $this
     */
    public function setIsReusable($isReusable)
    {
        $this->isReusable = $isReusable;
        $this->modifiedProperties[self::IS_REUSABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsReusable()
    {
        return $this->isReusable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isReusable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsReusableOrFail($isReusable)
    {
        if ($isReusable === null) {
            $this->throwNullValueException(static::IS_REUSABLE);
        }

        return $this->setIsReusable($isReusable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsReusableOrFail()
    {
        if ($this->isReusable === null) {
            $this->throwNullValueException(static::IS_REUSABLE);
        }

        return $this->isReusable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsReusable()
    {
        $this->assertPropertyIsSet(self::IS_REUSABLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer|null $discount
     *
     * @return $this
     */
    public function setDiscount(SpySalesDiscountEntityTransfer $discount = null)
    {
        $this->discount = $discount;
        $this->modifiedProperties[self::DISCOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer $discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountOrFail(SpySalesDiscountEntityTransfer $discount)
    {
        return $this->setDiscount($discount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesDiscountEntityTransfer
     */
    public function getDiscountOrFail()
    {
        if ($this->discount === null) {
            $this->throwNullValueException(static::DISCOUNT);
        }

        return $this->discount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscount()
    {
        $this->assertPropertyIsSet(self::DISCOUNT);

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
                case 'idSalesDiscountCode':
                case 'fkSalesDiscount':
                case 'code':
                case 'codepoolName':
                case 'isOncePerCustomer':
                case 'isRefundable':
                case 'isReusable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'discount':
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
                case 'idSalesDiscountCode':
                case 'fkSalesDiscount':
                case 'code':
                case 'codepoolName':
                case 'isOncePerCustomer':
                case 'isRefundable':
                case 'isReusable':
                    $values[$arrayKey] = $value;

                    break;
                case 'discount':
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
                case 'idSalesDiscountCode':
                case 'fkSalesDiscount':
                case 'code':
                case 'codepoolName':
                case 'isOncePerCustomer':
                case 'isRefundable':
                case 'isReusable':
                    $values[$arrayKey] = $value;

                    break;
                case 'discount':
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
            'idSalesDiscountCode' => $this->idSalesDiscountCode,
            'fkSalesDiscount' => $this->fkSalesDiscount,
            'code' => $this->code,
            'codepoolName' => $this->codepoolName,
            'isOncePerCustomer' => $this->isOncePerCustomer,
            'isRefundable' => $this->isRefundable,
            'isReusable' => $this->isReusable,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_discount_code' => $this->idSalesDiscountCode,
            'fk_sales_discount' => $this->fkSalesDiscount,
            'code' => $this->code,
            'codepool_name' => $this->codepoolName,
            'is_once_per_customer' => $this->isOncePerCustomer,
            'is_refundable' => $this->isRefundable,
            'is_reusable' => $this->isReusable,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_discount_code' => $this->idSalesDiscountCode instanceof AbstractTransfer ? $this->idSalesDiscountCode->toArray(true, false) : $this->idSalesDiscountCode,
            'fk_sales_discount' => $this->fkSalesDiscount instanceof AbstractTransfer ? $this->fkSalesDiscount->toArray(true, false) : $this->fkSalesDiscount,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'codepool_name' => $this->codepoolName instanceof AbstractTransfer ? $this->codepoolName->toArray(true, false) : $this->codepoolName,
            'is_once_per_customer' => $this->isOncePerCustomer instanceof AbstractTransfer ? $this->isOncePerCustomer->toArray(true, false) : $this->isOncePerCustomer,
            'is_refundable' => $this->isRefundable instanceof AbstractTransfer ? $this->isRefundable->toArray(true, false) : $this->isRefundable,
            'is_reusable' => $this->isReusable instanceof AbstractTransfer ? $this->isReusable->toArray(true, false) : $this->isReusable,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, false) : $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesDiscountCode' => $this->idSalesDiscountCode instanceof AbstractTransfer ? $this->idSalesDiscountCode->toArray(true, true) : $this->idSalesDiscountCode,
            'fkSalesDiscount' => $this->fkSalesDiscount instanceof AbstractTransfer ? $this->fkSalesDiscount->toArray(true, true) : $this->fkSalesDiscount,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'codepoolName' => $this->codepoolName instanceof AbstractTransfer ? $this->codepoolName->toArray(true, true) : $this->codepoolName,
            'isOncePerCustomer' => $this->isOncePerCustomer instanceof AbstractTransfer ? $this->isOncePerCustomer->toArray(true, true) : $this->isOncePerCustomer,
            'isRefundable' => $this->isRefundable instanceof AbstractTransfer ? $this->isRefundable->toArray(true, true) : $this->isRefundable,
            'isReusable' => $this->isReusable instanceof AbstractTransfer ? $this->isReusable->toArray(true, true) : $this->isReusable,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, true) : $this->discount,
        ];
    }
}
