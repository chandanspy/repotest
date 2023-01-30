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
class CustomerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABILITY_NOTIFICATION_SUBSCRIPTION_SKUS = 'availabilityNotificationSubscriptionSkus';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const IS_ON_BEHALF = 'isOnBehalf';

    /**
     * @var string
     */
    public const COMPANY_USER_TRANSFER = 'companyUserTransfer';

    /**
     * @var string
     */
    public const IS_GUEST = 'isGuest';

    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const SEND_PASSWORD_TOKEN = 'sendPasswordToken';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const IS_ACTIVE_COMPANY_USER_EXISTS = 'isActiveCompanyUserExists';

    /**
     * @var string
     */
    public const COMPANY_USER_INVITATION_HASH = 'companyUserInvitationHash';

    /**
     * @var string
     */
    public const ADDRESSES = 'addresses';

    /**
     * @var string
     */
    public const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    /**
     * @var string
     */
    public const DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const IS_DIRTY = 'isDirty';

    /**
     * @var string
     */
    public const REGISTRATION_KEY = 'registrationKey';

    /**
     * @var string
     */
    public const REGISTERED = 'registered';

    /**
     * @var string
     */
    public const PERMISSIONS = 'permissions';

    /**
     * @var string
     */
    public const CUSTOMER_PRODUCT_LIST_COLLECTION = 'customerProductListCollection';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const GENDER = 'gender';

    /**
     * @var string
     */
    public const DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @var string
     */
    public const NEW_PASSWORD = 'newPassword';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_KEY = 'restorePasswordKey';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_LINK = 'restorePasswordLink';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_DATE = 'restorePasswordDate';

    /**
     * @var string
     */
    public const CONFIRMATION_LINK = 'confirmationLink';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const ANONYMIZED_AT = 'anonymizedAt';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string[]
     */
    protected $availabilityNotificationSubscriptionSkus = [];

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var bool|null
     */
    protected $isOnBehalf;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUserTransfer;

    /**
     * @var bool|null
     */
    protected $isGuest;

    /**
     * @var int|null
     */
    protected $fkUser;

    /**
     * @var bool|null
     */
    protected $sendPasswordToken;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var bool|null
     */
    protected $isActiveCompanyUserExists;

    /**
     * @var string|null
     */
    protected $companyUserInvitationHash;

    /**
     * @var \Generated\Shared\Transfer\AddressesTransfer|null
     */
    protected $addresses;

    /**
     * @var string|null
     */
    protected $defaultBillingAddress;

    /**
     * @var string|null
     */
    protected $defaultShippingAddress;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var bool|null
     */
    protected $isDirty;

    /**
     * @var string|null
     */
    protected $registrationKey;

    /**
     * @var string|null
     */
    protected $registered;

    /**
     * @var \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    protected $permissions;

    /**
     * @var \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null
     */
    protected $customerProductListCollection;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var string|null
     */
    protected $dateOfBirth;

    /**
     * @var string|null
     */
    protected $newPassword;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    protected $billingAddress;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    protected $shippingAddress;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $restorePasswordKey;

    /**
     * @var string|null
     */
    protected $restorePasswordLink;

    /**
     * @var string|null
     */
    protected $restorePasswordDate;

    /**
     * @var string|null
     */
    protected $confirmationLink;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $anonymizedAt;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'availability_notification_subscription_skus' => 'availabilityNotificationSubscriptionSkus',
        'availabilityNotificationSubscriptionSkus' => 'availabilityNotificationSubscriptionSkus',
        'AvailabilityNotificationSubscriptionSkus' => 'availabilityNotificationSubscriptionSkus',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'email' => 'email',
        'Email' => 'email',
        'is_on_behalf' => 'isOnBehalf',
        'isOnBehalf' => 'isOnBehalf',
        'IsOnBehalf' => 'isOnBehalf',
        'company_user_transfer' => 'companyUserTransfer',
        'companyUserTransfer' => 'companyUserTransfer',
        'CompanyUserTransfer' => 'companyUserTransfer',
        'is_guest' => 'isGuest',
        'isGuest' => 'isGuest',
        'IsGuest' => 'isGuest',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'send_password_token' => 'sendPasswordToken',
        'sendPasswordToken' => 'sendPasswordToken',
        'SendPasswordToken' => 'sendPasswordToken',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'is_active_company_user_exists' => 'isActiveCompanyUserExists',
        'isActiveCompanyUserExists' => 'isActiveCompanyUserExists',
        'IsActiveCompanyUserExists' => 'isActiveCompanyUserExists',
        'company_user_invitation_hash' => 'companyUserInvitationHash',
        'companyUserInvitationHash' => 'companyUserInvitationHash',
        'CompanyUserInvitationHash' => 'companyUserInvitationHash',
        'addresses' => 'addresses',
        'Addresses' => 'addresses',
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'default_shipping_address' => 'defaultShippingAddress',
        'defaultShippingAddress' => 'defaultShippingAddress',
        'DefaultShippingAddress' => 'defaultShippingAddress',
        'password' => 'password',
        'Password' => 'password',
        'is_dirty' => 'isDirty',
        'isDirty' => 'isDirty',
        'IsDirty' => 'isDirty',
        'registration_key' => 'registrationKey',
        'registrationKey' => 'registrationKey',
        'RegistrationKey' => 'registrationKey',
        'registered' => 'registered',
        'Registered' => 'registered',
        'permissions' => 'permissions',
        'Permissions' => 'permissions',
        'customer_product_list_collection' => 'customerProductListCollection',
        'customerProductListCollection' => 'customerProductListCollection',
        'CustomerProductListCollection' => 'customerProductListCollection',
        'username' => 'username',
        'Username' => 'username',
        'company' => 'company',
        'Company' => 'company',
        'gender' => 'gender',
        'Gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'dateOfBirth' => 'dateOfBirth',
        'DateOfBirth' => 'dateOfBirth',
        'new_password' => 'newPassword',
        'newPassword' => 'newPassword',
        'NewPassword' => 'newPassword',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'restore_password_key' => 'restorePasswordKey',
        'restorePasswordKey' => 'restorePasswordKey',
        'RestorePasswordKey' => 'restorePasswordKey',
        'restore_password_link' => 'restorePasswordLink',
        'restorePasswordLink' => 'restorePasswordLink',
        'RestorePasswordLink' => 'restorePasswordLink',
        'restore_password_date' => 'restorePasswordDate',
        'restorePasswordDate' => 'restorePasswordDate',
        'RestorePasswordDate' => 'restorePasswordDate',
        'confirmation_link' => 'confirmationLink',
        'confirmationLink' => 'confirmationLink',
        'ConfirmationLink' => 'confirmationLink',
        'message' => 'message',
        'Message' => 'message',
        'locale' => 'locale',
        'Locale' => 'locale',
        'anonymized_at' => 'anonymizedAt',
        'anonymizedAt' => 'anonymizedAt',
        'AnonymizedAt' => 'anonymizedAt',
        'phone' => 'phone',
        'Phone' => 'phone',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_SKUS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'availability_notification_subscription_skus',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ON_BEHALF => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_on_behalf',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user_transfer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_GUEST => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_guest',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_USER => [
            'type' => 'int',
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
        self::SEND_PASSWORD_TOKEN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'send_password_token',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE_COMPANY_USER_EXISTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active_company_user_exists',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_INVITATION_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation_hash',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\AddressesTransfer',
            'type_shim' => null,
            'name_underscore' => 'addresses',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_billing_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_SHIPPING_ADDRESS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_shipping_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DIRTY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_dirty',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGISTRATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'registration_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGISTERED => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'registered',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\PermissionCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'permissions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_PRODUCT_LIST_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CustomerProductListCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer_product_list_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GENDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'gender',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATE_OF_BIRTH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'date_of_birth',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEW_PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESTORE_PASSWORD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESTORE_PASSWORD_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESTORE_PASSWORD_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIRMATION_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'confirmation_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::ANONYMIZED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'anonymized_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PHONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'phone',
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
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification
     *
     * @param string[]|null $availabilityNotificationSubscriptionSkus
     *
     * @return $this
     */
    public function setAvailabilityNotificationSubscriptionSkus(array $availabilityNotificationSubscriptionSkus = null)
    {
        if ($availabilityNotificationSubscriptionSkus === null) {
            $availabilityNotificationSubscriptionSkus = [];
        }

        $this->availabilityNotificationSubscriptionSkus = $availabilityNotificationSubscriptionSkus;
        $this->modifiedProperties[self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_SKUS] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification
     *
     * @return string[]
     */
    public function getAvailabilityNotificationSubscriptionSkus()
    {
        return $this->availabilityNotificationSubscriptionSkus;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification
     *
     * @param string $availabilityNotificationSubscriptionSku
     *
     * @return $this
     */
    public function addAvailabilityNotificationSubscriptionSku($availabilityNotificationSubscriptionSku)
    {
        $this->availabilityNotificationSubscriptionSkus[] = $availabilityNotificationSubscriptionSku;
        $this->modifiedProperties[self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_SKUS] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityNotificationSubscriptionSkus()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION_SKUS);

        return $this;
    }

    /**
     * @module AvailabilityNotificationWidget|CustomerPage|MultiCartPage|OrderCancelWidget|PersistentCartSharePage|PersistentCartShareWidget|ProductReviewWidget|QuoteApprovalWidget|ResourceSharePage|SalesReturnPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|AgentAuthRestApi|Agent|AvailabilityNotification|CartCodesRestApi|CartsRestApi|CheckoutRestApi|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|Customer|CustomersRestApi|MultiCart|OauthCompanyUser|OauthCustomerConnector|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|ResourceShare|SalesReturn|SalesReturnsRestApi|Sales|SharedCart|SharedCartsRestApi|ShoppingListStorage|ShoppingList|ShoppingListsRestApi|UpSellingProductsRestApi
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationWidget|CustomerPage|MultiCartPage|OrderCancelWidget|PersistentCartSharePage|PersistentCartShareWidget|ProductReviewWidget|QuoteApprovalWidget|ResourceSharePage|SalesReturnPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|AgentAuthRestApi|Agent|AvailabilityNotification|CartCodesRestApi|CartsRestApi|CheckoutRestApi|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|Customer|CustomersRestApi|MultiCart|OauthCompanyUser|OauthCustomerConnector|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|ResourceShare|SalesReturn|SalesReturnsRestApi|Sales|SharedCart|SharedCartsRestApi|ShoppingListStorage|ShoppingList|ShoppingListsRestApi|UpSellingProductsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module AvailabilityNotificationWidget|CustomerPage|MultiCartPage|OrderCancelWidget|PersistentCartSharePage|PersistentCartShareWidget|ProductReviewWidget|QuoteApprovalWidget|ResourceSharePage|SalesReturnPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|AgentAuthRestApi|Agent|AvailabilityNotification|CartCodesRestApi|CartsRestApi|CheckoutRestApi|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|Customer|CustomersRestApi|MultiCart|OauthCompanyUser|OauthCustomerConnector|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|ResourceShare|SalesReturn|SalesReturnsRestApi|Sales|SharedCart|SharedCartsRestApi|ShoppingListStorage|ShoppingList|ShoppingListsRestApi|UpSellingProductsRestApi
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module AvailabilityNotificationWidget|CustomerPage|MultiCartPage|OrderCancelWidget|PersistentCartSharePage|PersistentCartShareWidget|ProductReviewWidget|QuoteApprovalWidget|ResourceSharePage|SalesReturnPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|AgentAuthRestApi|Agent|AvailabilityNotification|CartCodesRestApi|CartsRestApi|CheckoutRestApi|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|Customer|CustomersRestApi|MultiCart|OauthCompanyUser|OauthCustomerConnector|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|ResourceShare|SalesReturn|SalesReturnsRestApi|Sales|SharedCart|SharedCartsRestApi|ShoppingListStorage|ShoppingList|ShoppingListsRestApi|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module AvailabilityNotificationWidget|CustomerPage|MultiCartPage|OrderCancelWidget|PersistentCartSharePage|PersistentCartShareWidget|ProductReviewWidget|QuoteApprovalWidget|ResourceSharePage|SalesReturnPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|AgentAuthRestApi|Agent|AvailabilityNotification|CartCodesRestApi|CartsRestApi|CheckoutRestApi|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|Customer|CustomersRestApi|MultiCart|OauthCompanyUser|OauthCustomerConnector|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequest|Quote|ResourceShare|SalesReturn|SalesReturnsRestApi|Sales|SharedCart|SharedCartsRestApi|ShoppingListStorage|ShoppingList|ShoppingListsRestApi|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module AvailabilityNotificationWidget|CompanyUserAgentWidget|CustomerPage|NewsletterPage|NewsletterWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|AgentAuthRestApi|Agent|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|Newsletter|OauthCustomerConnector|SalesReturnGui|ShipmentGui
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationWidget|CompanyUserAgentWidget|CustomerPage|NewsletterPage|NewsletterWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|AgentAuthRestApi|Agent|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|Newsletter|OauthCustomerConnector|SalesReturnGui|ShipmentGui
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module AvailabilityNotificationWidget|CompanyUserAgentWidget|CustomerPage|NewsletterPage|NewsletterWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|AgentAuthRestApi|Agent|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|Newsletter|OauthCustomerConnector|SalesReturnGui|ShipmentGui
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module AvailabilityNotificationWidget|CompanyUserAgentWidget|CustomerPage|NewsletterPage|NewsletterWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|AgentAuthRestApi|Agent|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|Newsletter|OauthCustomerConnector|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module AvailabilityNotificationWidget|CompanyUserAgentWidget|CustomerPage|NewsletterPage|NewsletterWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|AgentAuthRestApi|Agent|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|Newsletter|OauthCustomerConnector|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|BusinessOnBehalf
     *
     * @param bool|null $isOnBehalf
     *
     * @return $this
     */
    public function setIsOnBehalf($isOnBehalf)
    {
        $this->isOnBehalf = $isOnBehalf;
        $this->modifiedProperties[self::IS_ON_BEHALF] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|BusinessOnBehalf
     *
     * @return bool|null
     */
    public function getIsOnBehalf()
    {
        return $this->isOnBehalf;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|BusinessOnBehalf
     *
     * @param bool|null $isOnBehalf
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOnBehalfOrFail($isOnBehalf)
    {
        if ($isOnBehalf === null) {
            $this->throwNullValueException(static::IS_ON_BEHALF);
        }

        return $this->setIsOnBehalf($isOnBehalf);
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|BusinessOnBehalf
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOnBehalfOrFail()
    {
        if ($this->isOnBehalf === null) {
            $this->throwNullValueException(static::IS_ON_BEHALF);
        }

        return $this->isOnBehalf;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|BusinessOnBehalf
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOnBehalf()
    {
        $this->assertPropertyIsSet(self::IS_ON_BEHALF);

        return $this;
    }

    /**
     * @module BusinessOnBehalfWidget|CartPage|CompanyPage|CompanyUserInvitationPage|CompanyWidget|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyRole|CompanySalesConnector|CompanyUserInvitation|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|OauthCompanyUser|PersistentCart|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUserTransfer
     *
     * @return $this
     */
    public function setCompanyUserTransfer(CompanyUserTransfer $companyUserTransfer = null)
    {
        $this->companyUserTransfer = $companyUserTransfer;
        $this->modifiedProperties[self::COMPANY_USER_TRANSFER] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalfWidget|CartPage|CompanyPage|CompanyUserInvitationPage|CompanyWidget|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyRole|CompanySalesConnector|CompanyUserInvitation|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|OauthCompanyUser|PersistentCart|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUserTransfer()
    {
        return $this->companyUserTransfer;
    }

    /**
     * @module BusinessOnBehalfWidget|CartPage|CompanyPage|CompanyUserInvitationPage|CompanyWidget|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyRole|CompanySalesConnector|CompanyUserInvitation|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|OauthCompanyUser|PersistentCart|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserTransferOrFail(CompanyUserTransfer $companyUserTransfer)
    {
        return $this->setCompanyUserTransfer($companyUserTransfer);
    }

    /**
     * @module BusinessOnBehalfWidget|CartPage|CompanyPage|CompanyUserInvitationPage|CompanyWidget|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyRole|CompanySalesConnector|CompanyUserInvitation|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|OauthCompanyUser|PersistentCart|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserTransferOrFail()
    {
        if ($this->companyUserTransfer === null) {
            $this->throwNullValueException(static::COMPANY_USER_TRANSFER);
        }

        return $this->companyUserTransfer;
    }

    /**
     * @module BusinessOnBehalfWidget|CartPage|CompanyPage|CompanyUserInvitationPage|CompanyWidget|PersistentCartShareWidget|QuoteApprovalWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyRole|CompanySalesConnector|CompanyUserInvitation|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|OauthCompanyUser|PersistentCart|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserTransfer()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_TRANSFER);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param bool|null $isGuest
     *
     * @return $this
     */
    public function setIsGuest($isGuest)
    {
        $this->isGuest = $isGuest;
        $this->modifiedProperties[self::IS_GUEST] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @return bool|null
     */
    public function getIsGuest()
    {
        return $this->isGuest;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param bool|null $isGuest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsGuestOrFail($isGuest)
    {
        if ($isGuest === null) {
            $this->throwNullValueException(static::IS_GUEST);
        }

        return $this->setIsGuest($isGuest);
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsGuestOrFail()
    {
        if ($this->isGuest === null) {
            $this->throwNullValueException(static::IS_GUEST);
        }

        return $this->isGuest;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsGuest()
    {
        $this->assertPropertyIsSet(self::IS_GUEST);

        return $this;
    }

    /**
     * @module CmsPage|CustomerUserConnector|Customer
     *
     * @param int|null $fkUser
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
     * @module CmsPage|CustomerUserConnector|Customer
     *
     * @return int|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module CmsPage|CustomerUserConnector|Customer
     *
     * @param int|null $fkUser
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
     * @module CmsPage|CustomerUserConnector|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkUserOrFail()
    {
        if ($this->fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->fkUser;
    }

    /**
     * @module CmsPage|CustomerUserConnector|Customer
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
     * @module CompanyPage|Customer
     *
     * @param bool|null $sendPasswordToken
     *
     * @return $this
     */
    public function setSendPasswordToken($sendPasswordToken)
    {
        $this->sendPasswordToken = $sendPasswordToken;
        $this->modifiedProperties[self::SEND_PASSWORD_TOKEN] = true;

        return $this;
    }

    /**
     * @module CompanyPage|Customer
     *
     * @return bool|null
     */
    public function getSendPasswordToken()
    {
        return $this->sendPasswordToken;
    }

    /**
     * @module CompanyPage|Customer
     *
     * @param bool|null $sendPasswordToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSendPasswordTokenOrFail($sendPasswordToken)
    {
        if ($sendPasswordToken === null) {
            $this->throwNullValueException(static::SEND_PASSWORD_TOKEN);
        }

        return $this->setSendPasswordToken($sendPasswordToken);
    }

    /**
     * @module CompanyPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSendPasswordTokenOrFail()
    {
        if ($this->sendPasswordToken === null) {
            $this->throwNullValueException(static::SEND_PASSWORD_TOKEN);
        }

        return $this->sendPasswordToken;
    }

    /**
     * @module CompanyPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSendPasswordToken()
    {
        $this->assertPropertyIsSet(self::SEND_PASSWORD_TOKEN);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|ShoppingListPage|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|ShoppingListPage|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|ShoppingListPage|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|ShoppingListPage|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|CompanyWidget|CustomerPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|SharedCartWidget|ShoppingListPage|AgentAuthRestApi|Agent|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyMailConnector|Customer|QuoteApproval|SalesReturnGui|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @param string|null $salutation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalutationOrFail($salutation)
    {
        if ($salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->setSalutation($salutation);
    }

    /**
     * @module CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalutationOrFail()
    {
        if ($this->salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->salutation;
    }

    /**
     * @module CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|CustomerReorderWidget|NewsletterPage|NewsletterWidget|SharedCartPage|Agent|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|Comment|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|ConfigurableBundleCartsRestApi|CustomerGroupDiscountConnector|CustomerGroup|CustomerNoteGui|Customer|CustomersRestApi|Newsletter|OauthCompanyUser|OauthCustomerConnector|PersistentCart|ProductCustomerPermission|Sales|ShipmentGui|ShoppingList|UpSellingProductsRestApi
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|CustomerReorderWidget|NewsletterPage|NewsletterWidget|SharedCartPage|Agent|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|Comment|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|ConfigurableBundleCartsRestApi|CustomerGroupDiscountConnector|CustomerGroup|CustomerNoteGui|Customer|CustomersRestApi|Newsletter|OauthCompanyUser|OauthCustomerConnector|PersistentCart|ProductCustomerPermission|Sales|ShipmentGui|ShoppingList|UpSellingProductsRestApi
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module CompanyPage|CustomerPage|CustomerReorderWidget|NewsletterPage|NewsletterWidget|SharedCartPage|Agent|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|Comment|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|ConfigurableBundleCartsRestApi|CustomerGroupDiscountConnector|CustomerGroup|CustomerNoteGui|Customer|CustomersRestApi|Newsletter|OauthCompanyUser|OauthCustomerConnector|PersistentCart|ProductCustomerPermission|Sales|ShipmentGui|ShoppingList|UpSellingProductsRestApi
     *
     * @param int|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module CompanyPage|CustomerPage|CustomerReorderWidget|NewsletterPage|NewsletterWidget|SharedCartPage|Agent|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|Comment|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|ConfigurableBundleCartsRestApi|CustomerGroupDiscountConnector|CustomerGroup|CustomerNoteGui|Customer|CustomersRestApi|Newsletter|OauthCompanyUser|OauthCustomerConnector|PersistentCart|ProductCustomerPermission|Sales|ShipmentGui|ShoppingList|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module CompanyPage|CustomerPage|CustomerReorderWidget|NewsletterPage|NewsletterWidget|SharedCartPage|Agent|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|Comment|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|ConfigurableBundleCartsRestApi|CustomerGroupDiscountConnector|CustomerGroup|CustomerNoteGui|Customer|CustomersRestApi|Newsletter|OauthCompanyUser|OauthCustomerConnector|PersistentCart|ProductCustomerPermission|Sales|ShipmentGui|ShoppingList|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @param bool|null $isActiveCompanyUserExists
     *
     * @return $this
     */
    public function setIsActiveCompanyUserExists($isActiveCompanyUserExists)
    {
        $this->isActiveCompanyUserExists = $isActiveCompanyUserExists;
        $this->modifiedProperties[self::IS_ACTIVE_COMPANY_USER_EXISTS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @return bool|null
     */
    public function getIsActiveCompanyUserExists()
    {
        return $this->isActiveCompanyUserExists;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @param bool|null $isActiveCompanyUserExists
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveCompanyUserExistsOrFail($isActiveCompanyUserExists)
    {
        if ($isActiveCompanyUserExists === null) {
            $this->throwNullValueException(static::IS_ACTIVE_COMPANY_USER_EXISTS);
        }

        return $this->setIsActiveCompanyUserExists($isActiveCompanyUserExists);
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveCompanyUserExistsOrFail()
    {
        if ($this->isActiveCompanyUserExists === null) {
            $this->throwNullValueException(static::IS_ACTIVE_COMPANY_USER_EXISTS);
        }

        return $this->isActiveCompanyUserExists;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActiveCompanyUserExists()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE_COMPANY_USER_EXISTS);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyUserInvitationHash
     *
     * @return $this
     */
    public function setCompanyUserInvitationHash($companyUserInvitationHash)
    {
        $this->companyUserInvitationHash = $companyUserInvitationHash;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_HASH] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getCompanyUserInvitationHash()
    {
        return $this->companyUserInvitationHash;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyUserInvitationHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserInvitationHashOrFail($companyUserInvitationHash)
    {
        if ($companyUserInvitationHash === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION_HASH);
        }

        return $this->setCompanyUserInvitationHash($companyUserInvitationHash);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyUserInvitationHashOrFail()
    {
        if ($this->companyUserInvitationHash === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION_HASH);
        }

        return $this->companyUserInvitationHash;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitationHash()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION_HASH);

        return $this;
    }

    /**
     * @module CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\AddressesTransfer|null $addresses
     *
     * @return $this
     */
    public function setAddresses(AddressesTransfer $addresses = null)
    {
        $this->addresses = $addresses;
        $this->modifiedProperties[self::ADDRESSES] = true;

        return $this;
    }

    /**
     * @module CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @return \Generated\Shared\Transfer\AddressesTransfer|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @module CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\AddressesTransfer $addresses
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddressesOrFail(AddressesTransfer $addresses)
    {
        return $this->setAddresses($addresses);
    }

    /**
     * @module CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AddressesTransfer
     */
    public function getAddressesOrFail()
    {
        if ($this->addresses === null) {
            $this->throwNullValueException(static::ADDRESSES);
        }

        return $this->addresses;
    }

    /**
     * @module CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddresses()
    {
        $this->assertPropertyIsSet(self::ADDRESSES);

        return $this;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param string|null $defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->modifiedProperties[self::DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @return string|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param string|null $defaultBillingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultBillingAddressOrFail($defaultBillingAddress)
    {
        if ($defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->setDefaultBillingAddress($defaultBillingAddress);
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultBillingAddressOrFail()
    {
        if ($this->defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param string|null $defaultShippingAddress
     *
     * @return $this
     */
    public function setDefaultShippingAddress($defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;
        $this->modifiedProperties[self::DEFAULT_SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @return string|null
     */
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @param string|null $defaultShippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultShippingAddressOrFail($defaultShippingAddress)
    {
        if ($defaultShippingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_SHIPPING_ADDRESS);
        }

        return $this->setDefaultShippingAddress($defaultShippingAddress);
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultShippingAddressOrFail()
    {
        if ($this->defaultShippingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_SHIPPING_ADDRESS);
        }

        return $this->defaultShippingAddress;
    }

    /**
     * @module CustomerPage|CheckoutRestApi|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultShippingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|OauthCustomerConnector
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|OauthCustomerConnector
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module CustomerPage|Customer|OauthCustomerConnector
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module CustomerPage|Customer|OauthCustomerConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module CustomerPage|Customer|OauthCustomerConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @param bool|null $isDirty
     *
     * @return $this
     */
    public function setIsDirty($isDirty)
    {
        $this->isDirty = $isDirty;
        $this->modifiedProperties[self::IS_DIRTY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @return bool|null
     */
    public function getIsDirty()
    {
        return $this->isDirty;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @param bool|null $isDirty
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDirtyOrFail($isDirty)
    {
        if ($isDirty === null) {
            $this->throwNullValueException(static::IS_DIRTY);
        }

        return $this->setIsDirty($isDirty);
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDirtyOrFail()
    {
        if ($this->isDirty === null) {
            $this->throwNullValueException(static::IS_DIRTY);
        }

        return $this->isDirty;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDirty()
    {
        $this->assertPropertyIsSet(self::IS_DIRTY);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @param string|null $registrationKey
     *
     * @return $this
     */
    public function setRegistrationKey($registrationKey)
    {
        $this->registrationKey = $registrationKey;
        $this->modifiedProperties[self::REGISTRATION_KEY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @return string|null
     */
    public function getRegistrationKey()
    {
        return $this->registrationKey;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @param string|null $registrationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegistrationKeyOrFail($registrationKey)
    {
        if ($registrationKey === null) {
            $this->throwNullValueException(static::REGISTRATION_KEY);
        }

        return $this->setRegistrationKey($registrationKey);
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegistrationKeyOrFail()
    {
        if ($this->registrationKey === null) {
            $this->throwNullValueException(static::REGISTRATION_KEY);
        }

        return $this->registrationKey;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegistrationKey()
    {
        $this->assertPropertyIsSet(self::REGISTRATION_KEY);

        return $this;
    }

    /**
     * @module CustomerPage|Customer
     *
     * @param string|null $registered
     *
     * @return $this
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
        $this->modifiedProperties[self::REGISTERED] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer
     *
     * @return string|null
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * @module CustomerPage|Customer
     *
     * @param string|null $registered
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegisteredOrFail($registered)
    {
        if ($registered === null) {
            $this->throwNullValueException(static::REGISTERED);
        }

        return $this->setRegistered($registered);
    }

    /**
     * @module CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegisteredOrFail()
    {
        if ($this->registered === null) {
            $this->throwNullValueException(static::REGISTERED);
        }

        return $this->registered;
    }

    /**
     * @module CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegistered()
    {
        $this->assertPropertyIsSet(self::REGISTERED);

        return $this;
    }

    /**
     * @module CompanyRole|SharedCart|ShoppingList
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer|null $permissions
     *
     * @return $this
     */
    public function setPermissions(PermissionCollectionTransfer $permissions = null)
    {
        $this->permissions = $permissions;
        $this->modifiedProperties[self::PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module CompanyRole|SharedCart|ShoppingList
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @module CompanyRole|SharedCart|ShoppingList
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer $permissions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPermissionsOrFail(PermissionCollectionTransfer $permissions)
    {
        return $this->setPermissions($permissions);
    }

    /**
     * @module CompanyRole|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer
     */
    public function getPermissionsOrFail()
    {
        if ($this->permissions === null) {
            $this->throwNullValueException(static::PERMISSIONS);
        }

        return $this->permissions;
    }

    /**
     * @module CompanyRole|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePermissions()
    {
        $this->assertPropertyIsSet(self::PERMISSIONS);

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null $customerProductListCollection
     *
     * @return $this
     */
    public function setCustomerProductListCollection(CustomerProductListCollectionTransfer $customerProductListCollection = null)
    {
        $this->customerProductListCollection = $customerProductListCollection;
        $this->modifiedProperties[self::CUSTOMER_PRODUCT_LIST_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @return \Generated\Shared\Transfer\CustomerProductListCollectionTransfer|null
     */
    public function getCustomerProductListCollection()
    {
        return $this->customerProductListCollection;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param \Generated\Shared\Transfer\CustomerProductListCollectionTransfer $customerProductListCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerProductListCollectionOrFail(CustomerProductListCollectionTransfer $customerProductListCollection)
    {
        return $this->setCustomerProductListCollection($customerProductListCollection);
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerProductListCollectionTransfer
     */
    public function getCustomerProductListCollectionOrFail()
    {
        if ($this->customerProductListCollection === null) {
            $this->throwNullValueException(static::CUSTOMER_PRODUCT_LIST_COLLECTION);
        }

        return $this->customerProductListCollection;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerProductListCollection()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_PRODUCT_LIST_COLLECTION);

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module CustomerUserConnector|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module Customer
     *
     * @param string|null $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail($company)
    {
        if ($company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->setCompany($company);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module Customer
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
     * @module Customer|CustomersRestApi
     *
     * @param string|null $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        $this->modifiedProperties[self::GENDER] = true;

        return $this;
    }

    /**
     * @module Customer|CustomersRestApi
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @module Customer|CustomersRestApi
     *
     * @param string|null $gender
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGenderOrFail($gender)
    {
        if ($gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->setGender($gender);
    }

    /**
     * @module Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGenderOrFail()
    {
        if ($this->gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->gender;
    }

    /**
     * @module Customer|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGender()
    {
        $this->assertPropertyIsSet(self::GENDER);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->modifiedProperties[self::DATE_OF_BIRTH] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @module Customer
     *
     * @param string|null $dateOfBirth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDateOfBirthOrFail($dateOfBirth)
    {
        if ($dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->setDateOfBirth($dateOfBirth);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDateOfBirthOrFail()
    {
        if ($this->dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->dateOfBirth;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDateOfBirth()
    {
        $this->assertPropertyIsSet(self::DATE_OF_BIRTH);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $newPassword
     *
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        $this->modifiedProperties[self::NEW_PASSWORD] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @module Customer
     *
     * @param string|null $newPassword
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewPasswordOrFail($newPassword)
    {
        if ($newPassword === null) {
            $this->throwNullValueException(static::NEW_PASSWORD);
        }

        return $this->setNewPassword($newPassword);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewPasswordOrFail()
    {
        if ($this->newPassword === null) {
            $this->throwNullValueException(static::NEW_PASSWORD);
        }

        return $this->newPassword;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewPassword()
    {
        $this->assertPropertyIsSet(self::NEW_PASSWORD);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(ArrayObject $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $billingAddress
     *
     * @return $this
     */
    public function addBillingAddress(AddressTransfer $billingAddress)
    {
        $this->billingAddress[] = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertCollectionPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[] $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(ArrayObject $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\AddressTransfer[]
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module Customer
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @return $this
     */
    public function addShippingAddress(AddressTransfer $shippingAddress)
    {
        $this->shippingAddress[] = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module Customer
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module Customer
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordKey
     *
     * @return $this
     */
    public function setRestorePasswordKey($restorePasswordKey)
    {
        $this->restorePasswordKey = $restorePasswordKey;
        $this->modifiedProperties[self::RESTORE_PASSWORD_KEY] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordKey()
    {
        return $this->restorePasswordKey;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordKeyOrFail($restorePasswordKey)
    {
        if ($restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->setRestorePasswordKey($restorePasswordKey);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordKeyOrFail()
    {
        if ($this->restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->restorePasswordKey;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordKey()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_KEY);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordLink
     *
     * @return $this
     */
    public function setRestorePasswordLink($restorePasswordLink)
    {
        $this->restorePasswordLink = $restorePasswordLink;
        $this->modifiedProperties[self::RESTORE_PASSWORD_LINK] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordLink()
    {
        return $this->restorePasswordLink;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordLinkOrFail($restorePasswordLink)
    {
        if ($restorePasswordLink === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_LINK);
        }

        return $this->setRestorePasswordLink($restorePasswordLink);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordLinkOrFail()
    {
        if ($this->restorePasswordLink === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_LINK);
        }

        return $this->restorePasswordLink;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordLink()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_LINK);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordDate
     *
     * @return $this
     */
    public function setRestorePasswordDate($restorePasswordDate)
    {
        $this->restorePasswordDate = $restorePasswordDate;
        $this->modifiedProperties[self::RESTORE_PASSWORD_DATE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getRestorePasswordDate()
    {
        return $this->restorePasswordDate;
    }

    /**
     * @module Customer
     *
     * @param string|null $restorePasswordDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordDateOrFail($restorePasswordDate)
    {
        if ($restorePasswordDate === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_DATE);
        }

        return $this->setRestorePasswordDate($restorePasswordDate);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordDateOrFail()
    {
        if ($this->restorePasswordDate === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_DATE);
        }

        return $this->restorePasswordDate;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordDate()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_DATE);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $confirmationLink
     *
     * @return $this
     */
    public function setConfirmationLink($confirmationLink)
    {
        $this->confirmationLink = $confirmationLink;
        $this->modifiedProperties[self::CONFIRMATION_LINK] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getConfirmationLink()
    {
        return $this->confirmationLink;
    }

    /**
     * @module Customer
     *
     * @param string|null $confirmationLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfirmationLinkOrFail($confirmationLink)
    {
        if ($confirmationLink === null) {
            $this->throwNullValueException(static::CONFIRMATION_LINK);
        }

        return $this->setConfirmationLink($confirmationLink);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfirmationLinkOrFail()
    {
        if ($this->confirmationLink === null) {
            $this->throwNullValueException(static::CONFIRMATION_LINK);
        }

        return $this->confirmationLink;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfirmationLink()
    {
        $this->assertPropertyIsSet(self::CONFIRMATION_LINK);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module Customer
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module Customer|Payment
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
     * @module Customer|Payment
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module Customer|Payment
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
     * @module Customer|Payment
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
     * @module Customer|Payment
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
     * @module Customer
     *
     * @param string|null $anonymizedAt
     *
     * @return $this
     */
    public function setAnonymizedAt($anonymizedAt)
    {
        $this->anonymizedAt = $anonymizedAt;
        $this->modifiedProperties[self::ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getAnonymizedAt()
    {
        return $this->anonymizedAt;
    }

    /**
     * @module Customer
     *
     * @param string|null $anonymizedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnonymizedAtOrFail($anonymizedAt)
    {
        if ($anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->setAnonymizedAt($anonymizedAt);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAnonymizedAtOrFail()
    {
        if ($this->anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->anonymizedAt;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::ANONYMIZED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->modifiedProperties[self::PHONE] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module Customer
     *
     * @param string|null $phone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPhoneOrFail($phone)
    {
        if ($phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->setPhone($phone);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPhoneOrFail()
    {
        if ($this->phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->phone;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePhone()
    {
        $this->assertPropertyIsSet(self::PHONE);

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
                case 'availabilityNotificationSubscriptionSkus':
                case 'customerReference':
                case 'email':
                case 'isOnBehalf':
                case 'isGuest':
                case 'fkUser':
                case 'sendPasswordToken':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'idCustomer':
                case 'isActiveCompanyUserExists':
                case 'companyUserInvitationHash':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'password':
                case 'isDirty':
                case 'registrationKey':
                case 'registered':
                case 'username':
                case 'company':
                case 'gender':
                case 'dateOfBirth':
                case 'newPassword':
                case 'createdAt':
                case 'updatedAt':
                case 'restorePasswordKey':
                case 'restorePasswordLink':
                case 'restorePasswordDate':
                case 'confirmationLink':
                case 'message':
                case 'anonymizedAt':
                case 'phone':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUserTransfer':
                case 'addresses':
                case 'permissions':
                case 'customerProductListCollection':
                case 'locale':
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
                case 'billingAddress':
                case 'shippingAddress':
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
                case 'availabilityNotificationSubscriptionSkus':
                case 'customerReference':
                case 'email':
                case 'isOnBehalf':
                case 'isGuest':
                case 'fkUser':
                case 'sendPasswordToken':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'idCustomer':
                case 'isActiveCompanyUserExists':
                case 'companyUserInvitationHash':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'password':
                case 'isDirty':
                case 'registrationKey':
                case 'registered':
                case 'username':
                case 'company':
                case 'gender':
                case 'dateOfBirth':
                case 'newPassword':
                case 'createdAt':
                case 'updatedAt':
                case 'restorePasswordKey':
                case 'restorePasswordLink':
                case 'restorePasswordDate':
                case 'confirmationLink':
                case 'message':
                case 'anonymizedAt':
                case 'phone':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserTransfer':
                case 'addresses':
                case 'permissions':
                case 'customerProductListCollection':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
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
                case 'availabilityNotificationSubscriptionSkus':
                case 'customerReference':
                case 'email':
                case 'isOnBehalf':
                case 'isGuest':
                case 'fkUser':
                case 'sendPasswordToken':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'idCustomer':
                case 'isActiveCompanyUserExists':
                case 'companyUserInvitationHash':
                case 'defaultBillingAddress':
                case 'defaultShippingAddress':
                case 'password':
                case 'isDirty':
                case 'registrationKey':
                case 'registered':
                case 'username':
                case 'company':
                case 'gender':
                case 'dateOfBirth':
                case 'newPassword':
                case 'createdAt':
                case 'updatedAt':
                case 'restorePasswordKey':
                case 'restorePasswordLink':
                case 'restorePasswordDate':
                case 'confirmationLink':
                case 'message':
                case 'anonymizedAt':
                case 'phone':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserTransfer':
                case 'addresses':
                case 'permissions':
                case 'customerProductListCollection':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'billingAddress':
                case 'shippingAddress':
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
        $this->billingAddress = $this->billingAddress ?: new ArrayObject();
        $this->shippingAddress = $this->shippingAddress ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'availabilityNotificationSubscriptionSkus' => $this->availabilityNotificationSubscriptionSkus,
            'customerReference' => $this->customerReference,
            'email' => $this->email,
            'isOnBehalf' => $this->isOnBehalf,
            'isGuest' => $this->isGuest,
            'fkUser' => $this->fkUser,
            'sendPasswordToken' => $this->sendPasswordToken,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'salutation' => $this->salutation,
            'idCustomer' => $this->idCustomer,
            'isActiveCompanyUserExists' => $this->isActiveCompanyUserExists,
            'companyUserInvitationHash' => $this->companyUserInvitationHash,
            'defaultBillingAddress' => $this->defaultBillingAddress,
            'defaultShippingAddress' => $this->defaultShippingAddress,
            'password' => $this->password,
            'isDirty' => $this->isDirty,
            'registrationKey' => $this->registrationKey,
            'registered' => $this->registered,
            'username' => $this->username,
            'company' => $this->company,
            'gender' => $this->gender,
            'dateOfBirth' => $this->dateOfBirth,
            'newPassword' => $this->newPassword,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'restorePasswordKey' => $this->restorePasswordKey,
            'restorePasswordLink' => $this->restorePasswordLink,
            'restorePasswordDate' => $this->restorePasswordDate,
            'confirmationLink' => $this->confirmationLink,
            'message' => $this->message,
            'anonymizedAt' => $this->anonymizedAt,
            'phone' => $this->phone,
            'companyUserTransfer' => $this->companyUserTransfer,
            'addresses' => $this->addresses,
            'permissions' => $this->permissions,
            'customerProductListCollection' => $this->customerProductListCollection,
            'locale' => $this->locale,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'availability_notification_subscription_skus' => $this->availabilityNotificationSubscriptionSkus,
            'customer_reference' => $this->customerReference,
            'email' => $this->email,
            'is_on_behalf' => $this->isOnBehalf,
            'is_guest' => $this->isGuest,
            'fk_user' => $this->fkUser,
            'send_password_token' => $this->sendPasswordToken,
            'last_name' => $this->lastName,
            'first_name' => $this->firstName,
            'salutation' => $this->salutation,
            'id_customer' => $this->idCustomer,
            'is_active_company_user_exists' => $this->isActiveCompanyUserExists,
            'company_user_invitation_hash' => $this->companyUserInvitationHash,
            'default_billing_address' => $this->defaultBillingAddress,
            'default_shipping_address' => $this->defaultShippingAddress,
            'password' => $this->password,
            'is_dirty' => $this->isDirty,
            'registration_key' => $this->registrationKey,
            'registered' => $this->registered,
            'username' => $this->username,
            'company' => $this->company,
            'gender' => $this->gender,
            'date_of_birth' => $this->dateOfBirth,
            'new_password' => $this->newPassword,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'restore_password_key' => $this->restorePasswordKey,
            'restore_password_link' => $this->restorePasswordLink,
            'restore_password_date' => $this->restorePasswordDate,
            'confirmation_link' => $this->confirmationLink,
            'message' => $this->message,
            'anonymized_at' => $this->anonymizedAt,
            'phone' => $this->phone,
            'company_user_transfer' => $this->companyUserTransfer,
            'addresses' => $this->addresses,
            'permissions' => $this->permissions,
            'customer_product_list_collection' => $this->customerProductListCollection,
            'locale' => $this->locale,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'availability_notification_subscription_skus' => $this->availabilityNotificationSubscriptionSkus instanceof AbstractTransfer ? $this->availabilityNotificationSubscriptionSkus->toArray(true, false) : $this->availabilityNotificationSubscriptionSkus,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'is_on_behalf' => $this->isOnBehalf instanceof AbstractTransfer ? $this->isOnBehalf->toArray(true, false) : $this->isOnBehalf,
            'is_guest' => $this->isGuest instanceof AbstractTransfer ? $this->isGuest->toArray(true, false) : $this->isGuest,
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'send_password_token' => $this->sendPasswordToken instanceof AbstractTransfer ? $this->sendPasswordToken->toArray(true, false) : $this->sendPasswordToken,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'is_active_company_user_exists' => $this->isActiveCompanyUserExists instanceof AbstractTransfer ? $this->isActiveCompanyUserExists->toArray(true, false) : $this->isActiveCompanyUserExists,
            'company_user_invitation_hash' => $this->companyUserInvitationHash instanceof AbstractTransfer ? $this->companyUserInvitationHash->toArray(true, false) : $this->companyUserInvitationHash,
            'default_billing_address' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, false) : $this->defaultBillingAddress,
            'default_shipping_address' => $this->defaultShippingAddress instanceof AbstractTransfer ? $this->defaultShippingAddress->toArray(true, false) : $this->defaultShippingAddress,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'is_dirty' => $this->isDirty instanceof AbstractTransfer ? $this->isDirty->toArray(true, false) : $this->isDirty,
            'registration_key' => $this->registrationKey instanceof AbstractTransfer ? $this->registrationKey->toArray(true, false) : $this->registrationKey,
            'registered' => $this->registered instanceof AbstractTransfer ? $this->registered->toArray(true, false) : $this->registered,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, false) : $this->gender,
            'date_of_birth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, false) : $this->dateOfBirth,
            'new_password' => $this->newPassword instanceof AbstractTransfer ? $this->newPassword->toArray(true, false) : $this->newPassword,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'restore_password_key' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, false) : $this->restorePasswordKey,
            'restore_password_link' => $this->restorePasswordLink instanceof AbstractTransfer ? $this->restorePasswordLink->toArray(true, false) : $this->restorePasswordLink,
            'restore_password_date' => $this->restorePasswordDate instanceof AbstractTransfer ? $this->restorePasswordDate->toArray(true, false) : $this->restorePasswordDate,
            'confirmation_link' => $this->confirmationLink instanceof AbstractTransfer ? $this->confirmationLink->toArray(true, false) : $this->confirmationLink,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'anonymized_at' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, false) : $this->anonymizedAt,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'company_user_transfer' => $this->companyUserTransfer instanceof AbstractTransfer ? $this->companyUserTransfer->toArray(true, false) : $this->companyUserTransfer,
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, false) : $this->addresses,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, false) : $this->permissions,
            'customer_product_list_collection' => $this->customerProductListCollection instanceof AbstractTransfer ? $this->customerProductListCollection->toArray(true, false) : $this->customerProductListCollection,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->addValuesToCollection($this->billingAddress, true, false),
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->addValuesToCollection($this->shippingAddress, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'availabilityNotificationSubscriptionSkus' => $this->availabilityNotificationSubscriptionSkus instanceof AbstractTransfer ? $this->availabilityNotificationSubscriptionSkus->toArray(true, true) : $this->availabilityNotificationSubscriptionSkus,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'isOnBehalf' => $this->isOnBehalf instanceof AbstractTransfer ? $this->isOnBehalf->toArray(true, true) : $this->isOnBehalf,
            'isGuest' => $this->isGuest instanceof AbstractTransfer ? $this->isGuest->toArray(true, true) : $this->isGuest,
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'sendPasswordToken' => $this->sendPasswordToken instanceof AbstractTransfer ? $this->sendPasswordToken->toArray(true, true) : $this->sendPasswordToken,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'isActiveCompanyUserExists' => $this->isActiveCompanyUserExists instanceof AbstractTransfer ? $this->isActiveCompanyUserExists->toArray(true, true) : $this->isActiveCompanyUserExists,
            'companyUserInvitationHash' => $this->companyUserInvitationHash instanceof AbstractTransfer ? $this->companyUserInvitationHash->toArray(true, true) : $this->companyUserInvitationHash,
            'defaultBillingAddress' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, true) : $this->defaultBillingAddress,
            'defaultShippingAddress' => $this->defaultShippingAddress instanceof AbstractTransfer ? $this->defaultShippingAddress->toArray(true, true) : $this->defaultShippingAddress,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'isDirty' => $this->isDirty instanceof AbstractTransfer ? $this->isDirty->toArray(true, true) : $this->isDirty,
            'registrationKey' => $this->registrationKey instanceof AbstractTransfer ? $this->registrationKey->toArray(true, true) : $this->registrationKey,
            'registered' => $this->registered instanceof AbstractTransfer ? $this->registered->toArray(true, true) : $this->registered,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, true) : $this->gender,
            'dateOfBirth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, true) : $this->dateOfBirth,
            'newPassword' => $this->newPassword instanceof AbstractTransfer ? $this->newPassword->toArray(true, true) : $this->newPassword,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'restorePasswordKey' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, true) : $this->restorePasswordKey,
            'restorePasswordLink' => $this->restorePasswordLink instanceof AbstractTransfer ? $this->restorePasswordLink->toArray(true, true) : $this->restorePasswordLink,
            'restorePasswordDate' => $this->restorePasswordDate instanceof AbstractTransfer ? $this->restorePasswordDate->toArray(true, true) : $this->restorePasswordDate,
            'confirmationLink' => $this->confirmationLink instanceof AbstractTransfer ? $this->confirmationLink->toArray(true, true) : $this->confirmationLink,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'anonymizedAt' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, true) : $this->anonymizedAt,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'companyUserTransfer' => $this->companyUserTransfer instanceof AbstractTransfer ? $this->companyUserTransfer->toArray(true, true) : $this->companyUserTransfer,
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, true) : $this->addresses,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, true) : $this->permissions,
            'customerProductListCollection' => $this->customerProductListCollection instanceof AbstractTransfer ? $this->customerProductListCollection->toArray(true, true) : $this->customerProductListCollection,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->addValuesToCollection($this->billingAddress, true, true),
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->addValuesToCollection($this->shippingAddress, true, true),
        ];
    }
}
