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
class OrderInvoiceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_INVOICE = 'idSalesOrderInvoice';

    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

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
    public const EMAIL_SENT = 'emailSent';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const RENDERED_INVOICE = 'renderedInvoice';

    /**
     * @var int|null
     */
    protected $idSalesOrderInvoice;

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var string|null
     */
    protected $reference;

    /**
     * @var string|null
     */
    protected $issueDate;

    /**
     * @var bool|null
     */
    protected $emailSent;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var string|null
     */
    protected $renderedInvoice;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_invoice' => 'idSalesOrderInvoice',
        'idSalesOrderInvoice' => 'idSalesOrderInvoice',
        'IdSalesOrderInvoice' => 'idSalesOrderInvoice',
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'reference' => 'reference',
        'Reference' => 'reference',
        'issue_date' => 'issueDate',
        'issueDate' => 'issueDate',
        'IssueDate' => 'issueDate',
        'email_sent' => 'emailSent',
        'emailSent' => 'emailSent',
        'EmailSent' => 'emailSent',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'rendered_invoice' => 'renderedInvoice',
        'renderedInvoice' => 'renderedInvoice',
        'RenderedInvoice' => 'renderedInvoice',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_INVOICE => [
            'type' => 'int',
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
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
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
        self::EMAIL_SENT => [
            'type' => 'bool',
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
        self::RENDERED_INVOICE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'rendered_invoice',
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
     * @module SalesInvoice
     *
     * @param int|null $idSalesOrderInvoice
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
     * @module SalesInvoice
     *
     * @return int|null
     */
    public function getIdSalesOrderInvoice()
    {
        return $this->idSalesOrderInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @param int|null $idSalesOrderInvoice
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
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderInvoiceOrFail()
    {
        if ($this->idSalesOrderInvoice === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_INVOICE);
        }

        return $this->idSalesOrderInvoice;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder($idSalesOrder)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return int|null
     */
    public function getIdSalesOrder()
    {
        return $this->idSalesOrder;
    }

    /**
     * @module SalesInvoice
     *
     * @param int|null $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail($idSalesOrder)
    {
        if ($idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail()
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @param bool|null $emailSent
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
     * @module SalesInvoice
     *
     * @return bool|null
     */
    public function getEmailSent()
    {
        return $this->emailSent;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $emailSent
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
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getEmailSentOrFail()
    {
        if ($this->emailSent === null) {
            $this->throwNullValueException(static::EMAIL_SENT);
        }

        return $this->emailSent;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @param string|null $renderedInvoice
     *
     * @return $this
     */
    public function setRenderedInvoice($renderedInvoice)
    {
        $this->renderedInvoice = $renderedInvoice;
        $this->modifiedProperties[self::RENDERED_INVOICE] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return string|null
     */
    public function getRenderedInvoice()
    {
        return $this->renderedInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @param string|null $renderedInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRenderedInvoiceOrFail($renderedInvoice)
    {
        if ($renderedInvoice === null) {
            $this->throwNullValueException(static::RENDERED_INVOICE);
        }

        return $this->setRenderedInvoice($renderedInvoice);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRenderedInvoiceOrFail()
    {
        if ($this->renderedInvoice === null) {
            $this->throwNullValueException(static::RENDERED_INVOICE);
        }

        return $this->renderedInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRenderedInvoice()
    {
        $this->assertPropertyIsSet(self::RENDERED_INVOICE);

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
                case 'idSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'emailSent':
                case 'templatePath':
                case 'renderedInvoice':
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
                case 'idSalesOrderInvoice':
                case 'idSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'emailSent':
                case 'templatePath':
                case 'renderedInvoice':
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
                case 'idSalesOrderInvoice':
                case 'idSalesOrder':
                case 'reference':
                case 'issueDate':
                case 'emailSent':
                case 'templatePath':
                case 'renderedInvoice':
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
            'idSalesOrderInvoice' => $this->idSalesOrderInvoice,
            'idSalesOrder' => $this->idSalesOrder,
            'reference' => $this->reference,
            'issueDate' => $this->issueDate,
            'emailSent' => $this->emailSent,
            'templatePath' => $this->templatePath,
            'renderedInvoice' => $this->renderedInvoice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_invoice' => $this->idSalesOrderInvoice,
            'id_sales_order' => $this->idSalesOrder,
            'reference' => $this->reference,
            'issue_date' => $this->issueDate,
            'email_sent' => $this->emailSent,
            'template_path' => $this->templatePath,
            'rendered_invoice' => $this->renderedInvoice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_invoice' => $this->idSalesOrderInvoice instanceof AbstractTransfer ? $this->idSalesOrderInvoice->toArray(true, false) : $this->idSalesOrderInvoice,
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, false) : $this->reference,
            'issue_date' => $this->issueDate instanceof AbstractTransfer ? $this->issueDate->toArray(true, false) : $this->issueDate,
            'email_sent' => $this->emailSent instanceof AbstractTransfer ? $this->emailSent->toArray(true, false) : $this->emailSent,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'rendered_invoice' => $this->renderedInvoice instanceof AbstractTransfer ? $this->renderedInvoice->toArray(true, false) : $this->renderedInvoice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderInvoice' => $this->idSalesOrderInvoice instanceof AbstractTransfer ? $this->idSalesOrderInvoice->toArray(true, true) : $this->idSalesOrderInvoice,
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'reference' => $this->reference instanceof AbstractTransfer ? $this->reference->toArray(true, true) : $this->reference,
            'issueDate' => $this->issueDate instanceof AbstractTransfer ? $this->issueDate->toArray(true, true) : $this->issueDate,
            'emailSent' => $this->emailSent instanceof AbstractTransfer ? $this->emailSent->toArray(true, true) : $this->emailSent,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'renderedInvoice' => $this->renderedInvoice instanceof AbstractTransfer ? $this->renderedInvoice->toArray(true, true) : $this->renderedInvoice,
        ];
    }
}
