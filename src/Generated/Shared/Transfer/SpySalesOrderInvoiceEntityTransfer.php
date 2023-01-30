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
class SpySalesOrderInvoiceEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_INVOICE = 'idSalesOrderInvoice';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const REFERENCE = 'reference';

    /**
     * @var string
     */
    public const ISSUE_DATE = 'issueDate';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const EMAIL_SENT = 'emailSent';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER = 'spySalesOrder';

    /**
     * @var integer|null
     */
    protected $idSalesOrderInvoice;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var string|null
     */
    protected $reference;

    /**
     * @var string|null
     */
    protected $issueDate;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var boolean|null
     */
    protected $emailSent;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $spySalesOrder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_invoice' => 'idSalesOrderInvoice',
        'idSalesOrderInvoice' => 'idSalesOrderInvoice',
        'IdSalesOrderInvoice' => 'idSalesOrderInvoice',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'reference' => 'reference',
        'Reference' => 'reference',
        'issue_date' => 'issueDate',
        'issueDate' => 'issueDate',
        'IssueDate' => 'issueDate',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'email_sent' => 'emailSent',
        'emailSent' => 'emailSent',
        'EmailSent' => 'emailSent',
        'spy_sales_order' => 'spySalesOrder',
        'spySalesOrder' => 'spySalesOrder',
        'SpySalesOrder' => 'spySalesOrder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_INVOICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_invoice',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISSUE_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'issue_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL_SENT => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'email_sent',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order',
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
    public static $entityNamespace = 'Orm\Zed\SalesInvoice\Persistence\SpySalesOrderInvoice';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderInvoice
     *
     * @return $this
     */
    public function setIdSalesOrderInvoice($idSalesOrderInvoice)
    {
        $this->idSalesOrderInvoice = $idSalesOrderInvoice;
        $this->modifiedProperties[self::ID_SALES_ORDER_INVOICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderInvoice()
    {
        return $this->idSalesOrderInvoice;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderInvoiceOrFail($idSalesOrderInvoice)
    {
        if ($idSalesOrderInvoice === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_INVOICE);
        }

        return $this->setIdSalesOrderInvoice($idSalesOrderInvoice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderInvoiceOrFail()
    {
        if ($this->idSalesOrderInvoice === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_INVOICE);
        }

        return $this->idSalesOrderInvoice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderInvoice()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_INVOICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        $this->modifiedProperties[self::REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @module 
     *
     * @param string|null $reference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReferenceOrFail($reference)
    {
        if ($reference === null) {
            $this->throwNullValueException(static::REFERENCE);
        }

        return $this->setReference($reference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReferenceOrFail()
    {
        if ($this->reference === null) {
            $this->throwNullValueException(static::REFERENCE);
        }

        return $this->reference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReference()
    {
        $this->assertPropertyIsSet(self::REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $issueDate
     *
     * @return $this
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        $this->modifiedProperties[self::ISSUE_DATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @module 
     *
     * @param string|null $issueDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIssueDateOrFail($issueDate)
    {
        if ($issueDate === null) {
            $this->throwNullValueException(static::ISSUE_DATE);
        }

        return $this->setIssueDate($issueDate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIssueDateOrFail()
    {
        if ($this->issueDate === null) {
            $this->throwNullValueException(static::ISSUE_DATE);
        }

        return $this->issueDate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIssueDate()
    {
        $this->assertPropertyIsSet(self::ISSUE_DATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $templatePath
     *
     * @return $this
     */
    public function setTemplatePath($templatePath)
    {
        $this->templatePath = $templatePath;
        $this->modifiedProperties[self::TEMPLATE_PATH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module 
     *
     * @param string|null $templatePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplatePathOrFail($templatePath)
    {
        if ($templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->setTemplatePath($templatePath);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplatePathOrFail()
    {
        if ($this->templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->templatePath;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplatePath()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_PATH);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $emailSent
     *
     * @return $this
     */
    public function setEmailSent($emailSent)
    {
        $this->emailSent = $emailSent;
        $this->modifiedProperties[self::EMAIL_SENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getEmailSent()
    {
        return $this->emailSent;
    }

    /**
     * @module 
     *
     * @param boolean|null $emailSent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailSentOrFail($emailSent)
    {
        if ($emailSent === null) {
            $this->throwNullValueException(static::EMAIL_SENT);
        }

        return $this->setEmailSent($emailSent);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getEmailSentOrFail()
    {
        if ($this->emailSent === null) {
            $this->throwNullValueException(static::EMAIL_SENT);
        }

        return $this->emailSent;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmailSent()
    {
        $this->assertPropertyIsSet(self::EMAIL_SENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $spySalesOrder
     *
     * @return $this
     */
    public function setSpySalesOrder(SpySalesOrderEntityTransfer $spySalesOrder = null)
    {
        $this->spySalesOrder = $spySalesOrder;
        $this->modifiedProperties[self::SPY_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getSpySalesOrder()
    {
        return $this->spySalesOrder;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $spySalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderOrFail(SpySalesOrderEntityTransfer $spySalesOrder)
    {
        return $this->setSpySalesOrder($spySalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getSpySalesOrderOrFail()
    {
        if ($this->spySalesOrder === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER);
        }

        return $this->spySalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrder()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER);

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
                case 'idSalesOrderInvoice':
                case 'fkSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'templatePath':
                case 'emailSent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrder':
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
                case 'idSalesOrderInvoice':
                case 'fkSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'templatePath':
                case 'emailSent':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrder':
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
                case 'idSalesOrderInvoice':
                case 'fkSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'templatePath':
                case 'emailSent':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrder':
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
            'idSalesOrderInvoice' => $this->idSalesOrderInvoice,
            'fkSalesOrder' => $this->fkSalesOrder,
            'reference' => $this->reference,
            'issueDate' => $this->issueDate,
            'templatePath' => $this->templatePath,
            'emailSent' => $this->emailSent,
            'spySalesOrder' => $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_invoice' => $this->idSalesOrderInvoice,
            'fk_sales_order' => $this->fkSalesOrder,
            'reference' => $this->reference,
            'issue_date' => $this->issueDate,
            'template_path' => $this->templatePath,
            'email_sent' => $this->emailSent,
            'spy_sales_order' => $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_invoice' => $this->idSalesOrderInvoice instanceof AbstractTransfer ? $this->idSalesOrderInvoice->toArray(true, false) : $this->idSalesOrderInvoice,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, false) : $this->reference,
            'issue_date' => $this->issueDate instanceof AbstractTransfer ? $this->issueDate->toArray(true, false) : $this->issueDate,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'email_sent' => $this->emailSent instanceof AbstractTransfer ? $this->emailSent->toArray(true, false) : $this->emailSent,
            'spy_sales_order' => $this->spySalesOrder instanceof AbstractTransfer ? $this->spySalesOrder->toArray(true, false) : $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderInvoice' => $this->idSalesOrderInvoice instanceof AbstractTransfer ? $this->idSalesOrderInvoice->toArray(true, true) : $this->idSalesOrderInvoice,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, true) : $this->reference,
            'issueDate' => $this->issueDate instanceof AbstractTransfer ? $this->issueDate->toArray(true, true) : $this->issueDate,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'emailSent' => $this->emailSent instanceof AbstractTransfer ? $this->emailSent->toArray(true, true) : $this->emailSent,
            'spySalesOrder' => $this->spySalesOrder instanceof AbstractTransfer ? $this->spySalesOrder->toArray(true, true) : $this->spySalesOrder,
        ];
    }
}
