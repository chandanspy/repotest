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
class MailTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const AVAILABILITY_NOTIFICATION_SUBSCRIPTION_MAIL_DATA = 'availabilityNotificationSubscriptionMailData';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const INVITATION_LINK = 'invitationLink';

    /**
     * @var string
     */
    public const COMPANY_USER_INVITATION = 'companyUserInvitation';

    /**
     * @var string
     */
    public const SENDER = 'sender';

    /**
     * @var string
     */
    public const RECIPIENTS = 'recipients';

    /**
     * @var string
     */
    public const RECIPIENT_BCCS = 'recipientBccs';

    /**
     * @var string
     */
    public const SUBJECT = 'subject';

    /**
     * @var string
     */
    public const TEMPLATES = 'templates';

    /**
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * @var string
     */
    public const ATTACHMENTS = 'attachments';

    /**
     * @var string
     */
    public const NEWSLETTER_SUBSCRIBER = 'newsletterSubscriber';

    /**
     * @var string
     */
    public const NEWSLETTER_TYPE = 'newsletterType';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const FROM_NAME = 'fromName';

    /**
     * @var string
     */
    public const FROM_EMAIL = 'fromEmail';

    /**
     * @var string
     */
    public const MERGE = 'merge';

    /**
     * @var string
     */
    public const MERGE_LANGUAGE = 'mergeLanguage';

    /**
     * @var string
     */
    public const GLOBAL_MERGE_VARS = 'globalMergeVars';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const SHIPMENT_GROUPS = 'shipmentGroups';

    /**
     * @var string
     */
    public const ORDER_INVOICE = 'orderInvoice';

    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var string
     */
    public const RESET_PASSWORD_LINK = 'resetPasswordLink';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer|null
     */
    protected $availabilityNotificationSubscriptionMailData;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \Generated\Shared\Transfer\CompanyTransfer|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $invitationLink;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null
     */
    protected $companyUserInvitation;

    /**
     * @var \Generated\Shared\Transfer\MailSenderTransfer|null
     */
    protected $sender;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[]
     */
    protected $recipients;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[]
     */
    protected $recipientBccs;

    /**
     * @var string|null
     */
    protected $subject;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MailTemplateTransfer[]
     */
    protected $templates;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MailHeaderTransfer[]
     */
    protected $headers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MailAttachmentTransfer[]
     */
    protected $attachments;

    /**
     * @var \Generated\Shared\Transfer\NewsletterSubscriberTransfer|null
     */
    protected $newsletterSubscriber;

    /**
     * @var \Generated\Shared\Transfer\NewsletterTypeTransfer|null
     */
    protected $newsletterType;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var string|null
     */
    protected $fromName;

    /**
     * @var string|null
     */
    protected $fromEmail;

    /**
     * @var bool|null
     */
    protected $merge;

    /**
     * @var string|null
     */
    protected $mergeLanguage;

    /**
     * @var string[]
     */
    protected $globalMergeVars = [];

    /**
     * @var \Generated\Shared\Transfer\OrderTransfer|null
     */
    protected $order;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShipmentGroupTransfer[]
     */
    protected $shipmentGroups;

    /**
     * @var \Generated\Shared\Transfer\OrderInvoiceTransfer|null
     */
    protected $orderInvoice;

    /**
     * @var \Generated\Shared\Transfer\UserTransfer|null
     */
    protected $user;

    /**
     * @var string|null
     */
    protected $resetPasswordLink;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'availability_notification_subscription_mail_data' => 'availabilityNotificationSubscriptionMailData',
        'availabilityNotificationSubscriptionMailData' => 'availabilityNotificationSubscriptionMailData',
        'AvailabilityNotificationSubscriptionMailData' => 'availabilityNotificationSubscriptionMailData',
        'locale' => 'locale',
        'Locale' => 'locale',
        'customer' => 'customer',
        'Customer' => 'customer',
        'company' => 'company',
        'Company' => 'company',
        'invitation_link' => 'invitationLink',
        'invitationLink' => 'invitationLink',
        'InvitationLink' => 'invitationLink',
        'company_user_invitation' => 'companyUserInvitation',
        'companyUserInvitation' => 'companyUserInvitation',
        'CompanyUserInvitation' => 'companyUserInvitation',
        'sender' => 'sender',
        'Sender' => 'sender',
        'recipients' => 'recipients',
        'Recipients' => 'recipients',
        'recipient_bccs' => 'recipientBccs',
        'recipientBccs' => 'recipientBccs',
        'RecipientBccs' => 'recipientBccs',
        'subject' => 'subject',
        'Subject' => 'subject',
        'templates' => 'templates',
        'Templates' => 'templates',
        'headers' => 'headers',
        'Headers' => 'headers',
        'attachments' => 'attachments',
        'Attachments' => 'attachments',
        'newsletter_subscriber' => 'newsletterSubscriber',
        'newsletterSubscriber' => 'newsletterSubscriber',
        'NewsletterSubscriber' => 'newsletterSubscriber',
        'newsletter_type' => 'newsletterType',
        'newsletterType' => 'newsletterType',
        'NewsletterType' => 'newsletterType',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'from_name' => 'fromName',
        'fromName' => 'fromName',
        'FromName' => 'fromName',
        'from_email' => 'fromEmail',
        'fromEmail' => 'fromEmail',
        'FromEmail' => 'fromEmail',
        'merge' => 'merge',
        'Merge' => 'merge',
        'merge_language' => 'mergeLanguage',
        'mergeLanguage' => 'mergeLanguage',
        'MergeLanguage' => 'mergeLanguage',
        'global_merge_vars' => 'globalMergeVars',
        'globalMergeVars' => 'globalMergeVars',
        'GlobalMergeVars' => 'globalMergeVars',
        'order' => 'order',
        'Order' => 'order',
        'shipment_groups' => 'shipmentGroups',
        'shipmentGroups' => 'shipmentGroups',
        'ShipmentGroups' => 'shipmentGroups',
        'order_invoice' => 'orderInvoice',
        'orderInvoice' => 'orderInvoice',
        'OrderInvoice' => 'orderInvoice',
        'user' => 'user',
        'User' => 'user',
        'reset_password_link' => 'resetPasswordLink',
        'resetPasswordLink' => 'resetPasswordLink',
        'ResetPasswordLink' => 'resetPasswordLink',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_MAIL_DATA => [
            'type' => 'Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'availability_notification_subscription_mail_data',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY => [
            'type' => 'Generated\Shared\Transfer\CompanyTransfer',
            'type_shim' => null,
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INVITATION_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'invitation_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_INVITATION => [
            'type' => 'Generated\Shared\Transfer\CompanyUserInvitationTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SENDER => [
            'type' => 'Generated\Shared\Transfer\MailSenderTransfer',
            'type_shim' => null,
            'name_underscore' => 'sender',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RECIPIENTS => [
            'type' => 'Generated\Shared\Transfer\MailRecipientTransfer',
            'type_shim' => null,
            'name_underscore' => 'recipients',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RECIPIENT_BCCS => [
            'type' => 'Generated\Shared\Transfer\MailRecipientTransfer',
            'type_shim' => null,
            'name_underscore' => 'recipient_bccs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBJECT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'subject',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATES => [
            'type' => 'Generated\Shared\Transfer\MailTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'templates',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEADERS => [
            'type' => 'Generated\Shared\Transfer\MailHeaderTransfer',
            'type_shim' => null,
            'name_underscore' => 'headers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTACHMENTS => [
            'type' => 'Generated\Shared\Transfer\MailAttachmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'attachments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEWSLETTER_SUBSCRIBER => [
            'type' => 'Generated\Shared\Transfer\NewsletterSubscriberTransfer',
            'type_shim' => null,
            'name_underscore' => 'newsletter_subscriber',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEWSLETTER_TYPE => [
            'type' => 'Generated\Shared\Transfer\NewsletterTypeTransfer',
            'type_shim' => null,
            'name_underscore' => 'newsletter_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FROM_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'from_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FROM_EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'from_email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERGE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'merge',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERGE_LANGUAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merge_language',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GLOBAL_MERGE_VARS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'global_merge_vars',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\OrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_GROUPS => [
            'type' => 'Generated\Shared\Transfer\ShipmentGroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_INVOICE => [
            'type' => 'Generated\Shared\Transfer\OrderInvoiceTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_invoice',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USER => [
            'type' => 'Generated\Shared\Transfer\UserTransfer',
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
        self::RESET_PASSWORD_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reset_password_link',
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
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|UserPasswordResetExtension|UserPasswordResetMail
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|UserPasswordResetExtension|UserPasswordResetMail
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|UserPasswordResetExtension|UserPasswordResetMail
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|UserPasswordResetExtension|UserPasswordResetMail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|UserPasswordResetExtension|UserPasswordResetMail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer|null $availabilityNotificationSubscriptionMailData
     *
     * @return $this
     */
    public function setAvailabilityNotificationSubscriptionMailData(AvailabilityNotificationSubscriptionMailDataTransfer $availabilityNotificationSubscriptionMailData = null)
    {
        $this->availabilityNotificationSubscriptionMailData = $availabilityNotificationSubscriptionMailData;
        $this->modifiedProperties[self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_MAIL_DATA] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer|null
     */
    public function getAvailabilityNotificationSubscriptionMailData()
    {
        return $this->availabilityNotificationSubscriptionMailData;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer $availabilityNotificationSubscriptionMailData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityNotificationSubscriptionMailDataOrFail(AvailabilityNotificationSubscriptionMailDataTransfer $availabilityNotificationSubscriptionMailData)
    {
        return $this->setAvailabilityNotificationSubscriptionMailData($availabilityNotificationSubscriptionMailData);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionMailDataTransfer
     */
    public function getAvailabilityNotificationSubscriptionMailDataOrFail()
    {
        if ($this->availabilityNotificationSubscriptionMailData === null) {
            $this->throwNullValueException(static::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_MAIL_DATA);
        }

        return $this->availabilityNotificationSubscriptionMailData;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityNotificationSubscriptionMailData()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_MAIL_DATA);

        return $this;
    }

    /**
     * @module AvailabilityNotification|Customer|Mail|Newsletter|Oms|SalesInvoice
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|Customer|Mail|Newsletter|Oms|SalesInvoice
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module AvailabilityNotification|Customer|Mail|Newsletter|Oms|SalesInvoice
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module AvailabilityNotification|Customer|Mail|Newsletter|Oms|SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module AvailabilityNotification|Customer|Mail|Newsletter|Oms|SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module CompanyMailConnector|Customer
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CompanyMailConnector|Customer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CompanyMailConnector|Customer
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CompanyMailConnector|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CompanyMailConnector|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module CompanyMailConnector
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer|null $company
     *
     * @return $this
     */
    public function setCompany(CompanyTransfer $company = null)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyMailConnector
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CompanyMailConnector
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail(CompanyTransfer $company)
    {
        return $this->setCompany($company);
    }

    /**
     * @module CompanyMailConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module CompanyMailConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompany()
    {
        $this->assertPropertyIsSet(self::COMPANY);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param string|null $invitationLink
     *
     * @return $this
     */
    public function setInvitationLink($invitationLink)
    {
        $this->invitationLink = $invitationLink;
        $this->modifiedProperties[self::INVITATION_LINK] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return string|null
     */
    public function getInvitationLink()
    {
        return $this->invitationLink;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param string|null $invitationLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInvitationLinkOrFail($invitationLink)
    {
        if ($invitationLink === null) {
            $this->throwNullValueException(static::INVITATION_LINK);
        }

        return $this->setInvitationLink($invitationLink);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getInvitationLinkOrFail()
    {
        if ($this->invitationLink === null) {
            $this->throwNullValueException(static::INVITATION_LINK);
        }

        return $this->invitationLink;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInvitationLink()
    {
        $this->assertPropertyIsSet(self::INVITATION_LINK);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null $companyUserInvitation
     *
     * @return $this
     */
    public function setCompanyUserInvitation(CompanyUserInvitationTransfer $companyUserInvitation = null)
    {
        $this->companyUserInvitation = $companyUserInvitation;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null
     */
    public function getCompanyUserInvitation()
    {
        return $this->companyUserInvitation;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param \Generated\Shared\Transfer\CompanyUserInvitationTransfer $companyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserInvitationOrFail(CompanyUserInvitationTransfer $companyUserInvitation)
    {
        return $this->setCompanyUserInvitation($companyUserInvitation);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserInvitationTransfer
     */
    public function getCompanyUserInvitationOrFail()
    {
        if ($this->companyUserInvitation === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION);
        }

        return $this->companyUserInvitation;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitation()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION);

        return $this;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailSenderTransfer|null $sender
     *
     * @return $this
     */
    public function setSender(MailSenderTransfer $sender = null)
    {
        $this->sender = $sender;
        $this->modifiedProperties[self::SENDER] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return \Generated\Shared\Transfer\MailSenderTransfer|null
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailSenderTransfer $sender
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSenderOrFail(MailSenderTransfer $sender)
    {
        return $this->setSender($sender);
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MailSenderTransfer
     */
    public function getSenderOrFail()
    {
        if ($this->sender === null) {
            $this->throwNullValueException(static::SENDER);
        }

        return $this->sender;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSender()
    {
        $this->assertPropertyIsSet(self::SENDER);

        return $this;
    }

    /**
     * @module Mail|Newsletter|UserPasswordResetMail|User
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[] $recipients
     *
     * @return $this
     */
    public function setRecipients(ArrayObject $recipients)
    {
        $this->recipients = $recipients;
        $this->modifiedProperties[self::RECIPIENTS] = true;

        return $this;
    }

    /**
     * @module Mail|Newsletter|UserPasswordResetMail|User
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @module Mail|Newsletter|UserPasswordResetMail|User
     *
     * @param \Generated\Shared\Transfer\MailRecipientTransfer $recipient
     *
     * @return $this
     */
    public function addRecipient(MailRecipientTransfer $recipient)
    {
        $this->recipients[] = $recipient;
        $this->modifiedProperties[self::RECIPIENTS] = true;

        return $this;
    }

    /**
     * @module Mail|Newsletter|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRecipients()
    {
        $this->assertCollectionPropertyIsSet(self::RECIPIENTS);

        return $this;
    }

    /**
     * @module Mail
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[] $recipientBccs
     *
     * @return $this
     */
    public function setRecipientBccs(ArrayObject $recipientBccs)
    {
        $this->recipientBccs = $recipientBccs;
        $this->modifiedProperties[self::RECIPIENT_BCCS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MailRecipientTransfer[]
     */
    public function getRecipientBccs()
    {
        return $this->recipientBccs;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailRecipientTransfer $recipientBcc
     *
     * @return $this
     */
    public function addRecipientBcc(MailRecipientTransfer $recipientBcc)
    {
        $this->recipientBccs[] = $recipientBcc;
        $this->modifiedProperties[self::RECIPIENT_BCCS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRecipientBccs()
    {
        $this->assertCollectionPropertyIsSet(self::RECIPIENT_BCCS);

        return $this;
    }

    /**
     * @module Mail|Newsletter
     *
     * @param string|null $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        $this->modifiedProperties[self::SUBJECT] = true;

        return $this;
    }

    /**
     * @module Mail|Newsletter
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @module Mail|Newsletter
     *
     * @param string|null $subject
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubjectOrFail($subject)
    {
        if ($subject === null) {
            $this->throwNullValueException(static::SUBJECT);
        }

        return $this->setSubject($subject);
    }

    /**
     * @module Mail|Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSubjectOrFail()
    {
        if ($this->subject === null) {
            $this->throwNullValueException(static::SUBJECT);
        }

        return $this->subject;
    }

    /**
     * @module Mail|Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubject()
    {
        $this->assertPropertyIsSet(self::SUBJECT);

        return $this;
    }

    /**
     * @module Mail
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MailTemplateTransfer[] $templates
     *
     * @return $this
     */
    public function setTemplates(ArrayObject $templates)
    {
        $this->templates = $templates;
        $this->modifiedProperties[self::TEMPLATES] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MailTemplateTransfer[]
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailTemplateTransfer $template
     *
     * @return $this
     */
    public function addTemplate(MailTemplateTransfer $template)
    {
        $this->templates[] = $template;
        $this->modifiedProperties[self::TEMPLATES] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplates()
    {
        $this->assertCollectionPropertyIsSet(self::TEMPLATES);

        return $this;
    }

    /**
     * @module Mail
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MailHeaderTransfer[] $headers
     *
     * @return $this
     */
    public function setHeaders(ArrayObject $headers)
    {
        $this->headers = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MailHeaderTransfer[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailHeaderTransfer $header
     *
     * @return $this
     */
    public function addHeader(MailHeaderTransfer $header)
    {
        $this->headers[] = $header;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeaders()
    {
        $this->assertCollectionPropertyIsSet(self::HEADERS);

        return $this;
    }

    /**
     * @module Mail
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MailAttachmentTransfer[] $attachments
     *
     * @return $this
     */
    public function setAttachments(ArrayObject $attachments)
    {
        $this->attachments = $attachments;
        $this->modifiedProperties[self::ATTACHMENTS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MailAttachmentTransfer[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @module Mail
     *
     * @param \Generated\Shared\Transfer\MailAttachmentTransfer $attachment
     *
     * @return $this
     */
    public function addAttachment(MailAttachmentTransfer $attachment)
    {
        $this->attachments[] = $attachment;
        $this->modifiedProperties[self::ATTACHMENTS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttachments()
    {
        $this->assertCollectionPropertyIsSet(self::ATTACHMENTS);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param \Generated\Shared\Transfer\NewsletterSubscriberTransfer|null $newsletterSubscriber
     *
     * @return $this
     */
    public function setNewsletterSubscriber(NewsletterSubscriberTransfer $newsletterSubscriber = null)
    {
        $this->newsletterSubscriber = $newsletterSubscriber;
        $this->modifiedProperties[self::NEWSLETTER_SUBSCRIBER] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return \Generated\Shared\Transfer\NewsletterSubscriberTransfer|null
     */
    public function getNewsletterSubscriber()
    {
        return $this->newsletterSubscriber;
    }

    /**
     * @module Newsletter
     *
     * @param \Generated\Shared\Transfer\NewsletterSubscriberTransfer $newsletterSubscriber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewsletterSubscriberOrFail(NewsletterSubscriberTransfer $newsletterSubscriber)
    {
        return $this->setNewsletterSubscriber($newsletterSubscriber);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NewsletterSubscriberTransfer
     */
    public function getNewsletterSubscriberOrFail()
    {
        if ($this->newsletterSubscriber === null) {
            $this->throwNullValueException(static::NEWSLETTER_SUBSCRIBER);
        }

        return $this->newsletterSubscriber;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewsletterSubscriber()
    {
        $this->assertPropertyIsSet(self::NEWSLETTER_SUBSCRIBER);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param \Generated\Shared\Transfer\NewsletterTypeTransfer|null $newsletterType
     *
     * @return $this
     */
    public function setNewsletterType(NewsletterTypeTransfer $newsletterType = null)
    {
        $this->newsletterType = $newsletterType;
        $this->modifiedProperties[self::NEWSLETTER_TYPE] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return \Generated\Shared\Transfer\NewsletterTypeTransfer|null
     */
    public function getNewsletterType()
    {
        return $this->newsletterType;
    }

    /**
     * @module Newsletter
     *
     * @param \Generated\Shared\Transfer\NewsletterTypeTransfer $newsletterType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewsletterTypeOrFail(NewsletterTypeTransfer $newsletterType)
    {
        return $this->setNewsletterType($newsletterType);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NewsletterTypeTransfer
     */
    public function getNewsletterTypeOrFail()
    {
        if ($this->newsletterType === null) {
            $this->throwNullValueException(static::NEWSLETTER_TYPE);
        }

        return $this->newsletterType;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewsletterType()
    {
        $this->assertPropertyIsSet(self::NEWSLETTER_TYPE);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        $this->modifiedProperties[self::TEMPLATE_NAME] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $templateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateNameOrFail($templateName)
    {
        if ($templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->setTemplateName($templateName);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateNameOrFail()
    {
        if ($this->templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->templateName;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateName()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_NAME);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $fromName
     *
     * @return $this
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        $this->modifiedProperties[self::FROM_NAME] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $fromName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFromNameOrFail($fromName)
    {
        if ($fromName === null) {
            $this->throwNullValueException(static::FROM_NAME);
        }

        return $this->setFromName($fromName);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFromNameOrFail()
    {
        if ($this->fromName === null) {
            $this->throwNullValueException(static::FROM_NAME);
        }

        return $this->fromName;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFromName()
    {
        $this->assertPropertyIsSet(self::FROM_NAME);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $fromEmail
     *
     * @return $this
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;
        $this->modifiedProperties[self::FROM_EMAIL] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $fromEmail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFromEmailOrFail($fromEmail)
    {
        if ($fromEmail === null) {
            $this->throwNullValueException(static::FROM_EMAIL);
        }

        return $this->setFromEmail($fromEmail);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFromEmailOrFail()
    {
        if ($this->fromEmail === null) {
            $this->throwNullValueException(static::FROM_EMAIL);
        }

        return $this->fromEmail;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFromEmail()
    {
        $this->assertPropertyIsSet(self::FROM_EMAIL);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param bool|null $merge
     *
     * @return $this
     */
    public function setMerge($merge)
    {
        $this->merge = $merge;
        $this->modifiedProperties[self::MERGE] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return bool|null
     */
    public function getMerge()
    {
        return $this->merge;
    }

    /**
     * @module Newsletter
     *
     * @param bool|null $merge
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMergeOrFail($merge)
    {
        if ($merge === null) {
            $this->throwNullValueException(static::MERGE);
        }

        return $this->setMerge($merge);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getMergeOrFail()
    {
        if ($this->merge === null) {
            $this->throwNullValueException(static::MERGE);
        }

        return $this->merge;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerge()
    {
        $this->assertPropertyIsSet(self::MERGE);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $mergeLanguage
     *
     * @return $this
     */
    public function setMergeLanguage($mergeLanguage)
    {
        $this->mergeLanguage = $mergeLanguage;
        $this->modifiedProperties[self::MERGE_LANGUAGE] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return string|null
     */
    public function getMergeLanguage()
    {
        return $this->mergeLanguage;
    }

    /**
     * @module Newsletter
     *
     * @param string|null $mergeLanguage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMergeLanguageOrFail($mergeLanguage)
    {
        if ($mergeLanguage === null) {
            $this->throwNullValueException(static::MERGE_LANGUAGE);
        }

        return $this->setMergeLanguage($mergeLanguage);
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMergeLanguageOrFail()
    {
        if ($this->mergeLanguage === null) {
            $this->throwNullValueException(static::MERGE_LANGUAGE);
        }

        return $this->mergeLanguage;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMergeLanguage()
    {
        $this->assertPropertyIsSet(self::MERGE_LANGUAGE);

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @param string[] $globalMergeVars
     *
     * @return $this
     */
    public function setGlobalMergeVars($globalMergeVars)
    {
        if ($globalMergeVars === null) {
            $globalMergeVars = [];
        }

        $this->globalMergeVars = $globalMergeVars;
        $this->modifiedProperties[self::GLOBAL_MERGE_VARS] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @return string[]
     */
    public function getGlobalMergeVars()
    {
        return $this->globalMergeVars;
    }

    /**
     * @module Newsletter
     *
     * @param string|int $globalMergeVarsKey
     * @param string $globalMergeVarsValue
     *
     * @return $this
     */
    public function addGlobalMergeVars($globalMergeVarsKey, $globalMergeVarsValue)
    {
        $this->globalMergeVars[$globalMergeVarsKey] = $globalMergeVarsValue;
        $this->modifiedProperties[self::GLOBAL_MERGE_VARS] = true;

        return $this;
    }

    /**
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGlobalMergeVars()
    {
        $this->assertPropertyIsSet(self::GLOBAL_MERGE_VARS);

        return $this;
    }

    /**
     * @module Oms|SalesInvoice
     *
     * @param \Generated\Shared\Transfer\OrderTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(OrderTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module Oms|SalesInvoice
     *
     * @return \Generated\Shared\Transfer\OrderTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module Oms|SalesInvoice
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(OrderTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module Oms|SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module Oms|SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

        return $this;
    }

    /**
     * @module Oms|Shipment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShipmentGroupTransfer[] $shipmentGroups
     *
     * @return $this
     */
    public function setShipmentGroups(ArrayObject $shipmentGroups)
    {
        $this->shipmentGroups = $shipmentGroups;
        $this->modifiedProperties[self::SHIPMENT_GROUPS] = true;

        return $this;
    }

    /**
     * @module Oms|Shipment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShipmentGroupTransfer[]
     */
    public function getShipmentGroups()
    {
        return $this->shipmentGroups;
    }

    /**
     * @module Oms|Shipment
     *
     * @param \Generated\Shared\Transfer\ShipmentGroupTransfer $shipmentGroup
     *
     * @return $this
     */
    public function addShipmentGroup(ShipmentGroupTransfer $shipmentGroup)
    {
        $this->shipmentGroups[] = $shipmentGroup;
        $this->modifiedProperties[self::SHIPMENT_GROUPS] = true;

        return $this;
    }

    /**
     * @module Oms|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENT_GROUPS);

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @param \Generated\Shared\Transfer\OrderInvoiceTransfer|null $orderInvoice
     *
     * @return $this
     */
    public function setOrderInvoice(OrderInvoiceTransfer $orderInvoice = null)
    {
        $this->orderInvoice = $orderInvoice;
        $this->modifiedProperties[self::ORDER_INVOICE] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return \Generated\Shared\Transfer\OrderInvoiceTransfer|null
     */
    public function getOrderInvoice()
    {
        return $this->orderInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @param \Generated\Shared\Transfer\OrderInvoiceTransfer $orderInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderInvoiceOrFail(OrderInvoiceTransfer $orderInvoice)
    {
        return $this->setOrderInvoice($orderInvoice);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderInvoiceTransfer
     */
    public function getOrderInvoiceOrFail()
    {
        if ($this->orderInvoice === null) {
            $this->throwNullValueException(static::ORDER_INVOICE);
        }

        return $this->orderInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderInvoice()
    {
        $this->assertPropertyIsSet(self::ORDER_INVOICE);

        return $this;
    }

    /**
     * @module UserPasswordResetMail|User
     *
     * @param \Generated\Shared\Transfer\UserTransfer|null $user
     *
     * @return $this
     */
    public function setUser(UserTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module UserPasswordResetMail|User
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @module UserPasswordResetMail|User
     *
     * @param \Generated\Shared\Transfer\UserTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(UserTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function getUserOrFail()
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module UserPasswordResetMail|User
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
     * @module UserPasswordResetMail
     *
     * @param string|null $resetPasswordLink
     *
     * @return $this
     */
    public function setResetPasswordLink($resetPasswordLink)
    {
        $this->resetPasswordLink = $resetPasswordLink;
        $this->modifiedProperties[self::RESET_PASSWORD_LINK] = true;

        return $this;
    }

    /**
     * @module UserPasswordResetMail
     *
     * @return string|null
     */
    public function getResetPasswordLink()
    {
        return $this->resetPasswordLink;
    }

    /**
     * @module UserPasswordResetMail
     *
     * @param string|null $resetPasswordLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResetPasswordLinkOrFail($resetPasswordLink)
    {
        if ($resetPasswordLink === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_LINK);
        }

        return $this->setResetPasswordLink($resetPasswordLink);
    }

    /**
     * @module UserPasswordResetMail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResetPasswordLinkOrFail()
    {
        if ($this->resetPasswordLink === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_LINK);
        }

        return $this->resetPasswordLink;
    }

    /**
     * @module UserPasswordResetMail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResetPasswordLink()
    {
        $this->assertPropertyIsSet(self::RESET_PASSWORD_LINK);

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
                case 'type':
                case 'invitationLink':
                case 'subject':
                case 'templateName':
                case 'fromName':
                case 'fromEmail':
                case 'merge':
                case 'mergeLanguage':
                case 'globalMergeVars':
                case 'resetPasswordLink':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'availabilityNotificationSubscriptionMailData':
                case 'locale':
                case 'customer':
                case 'company':
                case 'companyUserInvitation':
                case 'sender':
                case 'newsletterSubscriber':
                case 'newsletterType':
                case 'order':
                case 'orderInvoice':
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
                case 'recipients':
                case 'recipientBccs':
                case 'templates':
                case 'headers':
                case 'attachments':
                case 'shipmentGroups':
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
                case 'type':
                case 'invitationLink':
                case 'subject':
                case 'templateName':
                case 'fromName':
                case 'fromEmail':
                case 'merge':
                case 'mergeLanguage':
                case 'globalMergeVars':
                case 'resetPasswordLink':
                    $values[$arrayKey] = $value;

                    break;
                case 'availabilityNotificationSubscriptionMailData':
                case 'locale':
                case 'customer':
                case 'company':
                case 'companyUserInvitation':
                case 'sender':
                case 'newsletterSubscriber':
                case 'newsletterType':
                case 'order':
                case 'orderInvoice':
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'recipients':
                case 'recipientBccs':
                case 'templates':
                case 'headers':
                case 'attachments':
                case 'shipmentGroups':
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
                case 'type':
                case 'invitationLink':
                case 'subject':
                case 'templateName':
                case 'fromName':
                case 'fromEmail':
                case 'merge':
                case 'mergeLanguage':
                case 'globalMergeVars':
                case 'resetPasswordLink':
                    $values[$arrayKey] = $value;

                    break;
                case 'availabilityNotificationSubscriptionMailData':
                case 'locale':
                case 'customer':
                case 'company':
                case 'companyUserInvitation':
                case 'sender':
                case 'newsletterSubscriber':
                case 'newsletterType':
                case 'order':
                case 'orderInvoice':
                case 'user':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'recipients':
                case 'recipientBccs':
                case 'templates':
                case 'headers':
                case 'attachments':
                case 'shipmentGroups':
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
        $this->recipients = $this->recipients ?: new ArrayObject();
        $this->recipientBccs = $this->recipientBccs ?: new ArrayObject();
        $this->templates = $this->templates ?: new ArrayObject();
        $this->headers = $this->headers ?: new ArrayObject();
        $this->attachments = $this->attachments ?: new ArrayObject();
        $this->shipmentGroups = $this->shipmentGroups ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type,
            'invitationLink' => $this->invitationLink,
            'subject' => $this->subject,
            'templateName' => $this->templateName,
            'fromName' => $this->fromName,
            'fromEmail' => $this->fromEmail,
            'merge' => $this->merge,
            'mergeLanguage' => $this->mergeLanguage,
            'globalMergeVars' => $this->globalMergeVars,
            'resetPasswordLink' => $this->resetPasswordLink,
            'availabilityNotificationSubscriptionMailData' => $this->availabilityNotificationSubscriptionMailData,
            'locale' => $this->locale,
            'customer' => $this->customer,
            'company' => $this->company,
            'companyUserInvitation' => $this->companyUserInvitation,
            'sender' => $this->sender,
            'newsletterSubscriber' => $this->newsletterSubscriber,
            'newsletterType' => $this->newsletterType,
            'order' => $this->order,
            'orderInvoice' => $this->orderInvoice,
            'user' => $this->user,
            'recipients' => $this->recipients,
            'recipientBccs' => $this->recipientBccs,
            'templates' => $this->templates,
            'headers' => $this->headers,
            'attachments' => $this->attachments,
            'shipmentGroups' => $this->shipmentGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'invitation_link' => $this->invitationLink,
            'subject' => $this->subject,
            'template_name' => $this->templateName,
            'from_name' => $this->fromName,
            'from_email' => $this->fromEmail,
            'merge' => $this->merge,
            'merge_language' => $this->mergeLanguage,
            'global_merge_vars' => $this->globalMergeVars,
            'reset_password_link' => $this->resetPasswordLink,
            'availability_notification_subscription_mail_data' => $this->availabilityNotificationSubscriptionMailData,
            'locale' => $this->locale,
            'customer' => $this->customer,
            'company' => $this->company,
            'company_user_invitation' => $this->companyUserInvitation,
            'sender' => $this->sender,
            'newsletter_subscriber' => $this->newsletterSubscriber,
            'newsletter_type' => $this->newsletterType,
            'order' => $this->order,
            'order_invoice' => $this->orderInvoice,
            'user' => $this->user,
            'recipients' => $this->recipients,
            'recipient_bccs' => $this->recipientBccs,
            'templates' => $this->templates,
            'headers' => $this->headers,
            'attachments' => $this->attachments,
            'shipment_groups' => $this->shipmentGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'invitation_link' => $this->invitationLink instanceof AbstractTransfer ? $this->invitationLink->toArray(true, false) : $this->invitationLink,
            'subject' => $this->subject instanceof AbstractTransfer ? $this->subject->toArray(true, false) : $this->subject,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'from_name' => $this->fromName instanceof AbstractTransfer ? $this->fromName->toArray(true, false) : $this->fromName,
            'from_email' => $this->fromEmail instanceof AbstractTransfer ? $this->fromEmail->toArray(true, false) : $this->fromEmail,
            'merge' => $this->merge instanceof AbstractTransfer ? $this->merge->toArray(true, false) : $this->merge,
            'merge_language' => $this->mergeLanguage instanceof AbstractTransfer ? $this->mergeLanguage->toArray(true, false) : $this->mergeLanguage,
            'global_merge_vars' => $this->globalMergeVars instanceof AbstractTransfer ? $this->globalMergeVars->toArray(true, false) : $this->globalMergeVars,
            'reset_password_link' => $this->resetPasswordLink instanceof AbstractTransfer ? $this->resetPasswordLink->toArray(true, false) : $this->resetPasswordLink,
            'availability_notification_subscription_mail_data' => $this->availabilityNotificationSubscriptionMailData instanceof AbstractTransfer ? $this->availabilityNotificationSubscriptionMailData->toArray(true, false) : $this->availabilityNotificationSubscriptionMailData,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'company_user_invitation' => $this->companyUserInvitation instanceof AbstractTransfer ? $this->companyUserInvitation->toArray(true, false) : $this->companyUserInvitation,
            'sender' => $this->sender instanceof AbstractTransfer ? $this->sender->toArray(true, false) : $this->sender,
            'newsletter_subscriber' => $this->newsletterSubscriber instanceof AbstractTransfer ? $this->newsletterSubscriber->toArray(true, false) : $this->newsletterSubscriber,
            'newsletter_type' => $this->newsletterType instanceof AbstractTransfer ? $this->newsletterType->toArray(true, false) : $this->newsletterType,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'order_invoice' => $this->orderInvoice instanceof AbstractTransfer ? $this->orderInvoice->toArray(true, false) : $this->orderInvoice,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
            'recipients' => $this->recipients instanceof AbstractTransfer ? $this->recipients->toArray(true, false) : $this->addValuesToCollection($this->recipients, true, false),
            'recipient_bccs' => $this->recipientBccs instanceof AbstractTransfer ? $this->recipientBccs->toArray(true, false) : $this->addValuesToCollection($this->recipientBccs, true, false),
            'templates' => $this->templates instanceof AbstractTransfer ? $this->templates->toArray(true, false) : $this->addValuesToCollection($this->templates, true, false),
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, false) : $this->addValuesToCollection($this->headers, true, false),
            'attachments' => $this->attachments instanceof AbstractTransfer ? $this->attachments->toArray(true, false) : $this->addValuesToCollection($this->attachments, true, false),
            'shipment_groups' => $this->shipmentGroups instanceof AbstractTransfer ? $this->shipmentGroups->toArray(true, false) : $this->addValuesToCollection($this->shipmentGroups, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'invitationLink' => $this->invitationLink instanceof AbstractTransfer ? $this->invitationLink->toArray(true, true) : $this->invitationLink,
            'subject' => $this->subject instanceof AbstractTransfer ? $this->subject->toArray(true, true) : $this->subject,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'fromName' => $this->fromName instanceof AbstractTransfer ? $this->fromName->toArray(true, true) : $this->fromName,
            'fromEmail' => $this->fromEmail instanceof AbstractTransfer ? $this->fromEmail->toArray(true, true) : $this->fromEmail,
            'merge' => $this->merge instanceof AbstractTransfer ? $this->merge->toArray(true, true) : $this->merge,
            'mergeLanguage' => $this->mergeLanguage instanceof AbstractTransfer ? $this->mergeLanguage->toArray(true, true) : $this->mergeLanguage,
            'globalMergeVars' => $this->globalMergeVars instanceof AbstractTransfer ? $this->globalMergeVars->toArray(true, true) : $this->globalMergeVars,
            'resetPasswordLink' => $this->resetPasswordLink instanceof AbstractTransfer ? $this->resetPasswordLink->toArray(true, true) : $this->resetPasswordLink,
            'availabilityNotificationSubscriptionMailData' => $this->availabilityNotificationSubscriptionMailData instanceof AbstractTransfer ? $this->availabilityNotificationSubscriptionMailData->toArray(true, true) : $this->availabilityNotificationSubscriptionMailData,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'companyUserInvitation' => $this->companyUserInvitation instanceof AbstractTransfer ? $this->companyUserInvitation->toArray(true, true) : $this->companyUserInvitation,
            'sender' => $this->sender instanceof AbstractTransfer ? $this->sender->toArray(true, true) : $this->sender,
            'newsletterSubscriber' => $this->newsletterSubscriber instanceof AbstractTransfer ? $this->newsletterSubscriber->toArray(true, true) : $this->newsletterSubscriber,
            'newsletterType' => $this->newsletterType instanceof AbstractTransfer ? $this->newsletterType->toArray(true, true) : $this->newsletterType,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'orderInvoice' => $this->orderInvoice instanceof AbstractTransfer ? $this->orderInvoice->toArray(true, true) : $this->orderInvoice,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
            'recipients' => $this->recipients instanceof AbstractTransfer ? $this->recipients->toArray(true, true) : $this->addValuesToCollection($this->recipients, true, true),
            'recipientBccs' => $this->recipientBccs instanceof AbstractTransfer ? $this->recipientBccs->toArray(true, true) : $this->addValuesToCollection($this->recipientBccs, true, true),
            'templates' => $this->templates instanceof AbstractTransfer ? $this->templates->toArray(true, true) : $this->addValuesToCollection($this->templates, true, true),
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, true) : $this->addValuesToCollection($this->headers, true, true),
            'attachments' => $this->attachments instanceof AbstractTransfer ? $this->attachments->toArray(true, true) : $this->addValuesToCollection($this->attachments, true, true),
            'shipmentGroups' => $this->shipmentGroups instanceof AbstractTransfer ? $this->shipmentGroups->toArray(true, true) : $this->addValuesToCollection($this->shipmentGroups, true, true),
        ];
    }
}
