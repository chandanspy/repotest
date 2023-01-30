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
class AvailabilityNotificationSubscriptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SUBSCRIPTION_KEY = 'subscriptionKey';

    /**
     * @var string
     */
    public const SKU = 'sku';

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
    public const ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION = 'idAvailabilityNotificationSubscription';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string|null
     */
    protected $subscriptionKey;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var int|null
     */
    protected $idAvailabilityNotificationSubscription;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'subscription_key' => 'subscriptionKey',
        'subscriptionKey' => 'subscriptionKey',
        'SubscriptionKey' => 'subscriptionKey',
        'sku' => 'sku',
        'Sku' => 'sku',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'email' => 'email',
        'Email' => 'email',
        'id_availability_notification_subscription' => 'idAvailabilityNotificationSubscription',
        'idAvailabilityNotificationSubscription' => 'idAvailabilityNotificationSubscription',
        'IdAvailabilityNotificationSubscription' => 'idAvailabilityNotificationSubscription',
        'store' => 'store',
        'Store' => 'store',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SUBSCRIPTION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'subscription_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
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
        self::ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_availability_notification_subscription',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
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
    ];

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param string|null $subscriptionKey
     *
     * @return $this
     */
    public function setSubscriptionKey($subscriptionKey)
    {
        $this->subscriptionKey = $subscriptionKey;
        $this->modifiedProperties[self::SUBSCRIPTION_KEY] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return string|null
     */
    public function getSubscriptionKey()
    {
        return $this->subscriptionKey;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param string|null $subscriptionKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubscriptionKeyOrFail($subscriptionKey)
    {
        if ($subscriptionKey === null) {
            $this->throwNullValueException(static::SUBSCRIPTION_KEY);
        }

        return $this->setSubscriptionKey($subscriptionKey);
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSubscriptionKeyOrFail()
    {
        if ($this->subscriptionKey === null) {
            $this->throwNullValueException(static::SUBSCRIPTION_KEY);
        }

        return $this->subscriptionKey;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubscriptionKey()
    {
        $this->assertPropertyIsSet(self::SUBSCRIPTION_KEY);

        return $this;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module AvailabilityNotificationPage|AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotificationWidget|AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param int|null $idAvailabilityNotificationSubscription
     *
     * @return $this
     */
    public function setIdAvailabilityNotificationSubscription($idAvailabilityNotificationSubscription)
    {
        $this->idAvailabilityNotificationSubscription = $idAvailabilityNotificationSubscription;
        $this->modifiedProperties[self::ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return int|null
     */
    public function getIdAvailabilityNotificationSubscription()
    {
        return $this->idAvailabilityNotificationSubscription;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param int|null $idAvailabilityNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAvailabilityNotificationSubscriptionOrFail($idAvailabilityNotificationSubscription)
    {
        if ($idAvailabilityNotificationSubscription === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->setIdAvailabilityNotificationSubscription($idAvailabilityNotificationSubscription);
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdAvailabilityNotificationSubscriptionOrFail()
    {
        if ($this->idAvailabilityNotificationSubscription === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->idAvailabilityNotificationSubscription;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAvailabilityNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::ID_AVAILABILITY_NOTIFICATION_SUBSCRIPTION);

        return $this;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
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
     * @module AvailabilityNotification|AvailabilityNotificationsRestApi
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
                case 'subscriptionKey':
                case 'sku':
                case 'customerReference':
                case 'email':
                case 'idAvailabilityNotificationSubscription':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'store':
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
                case 'subscriptionKey':
                case 'sku':
                case 'customerReference':
                case 'email':
                case 'idAvailabilityNotificationSubscription':
                    $values[$arrayKey] = $value;

                    break;
                case 'store':
                case 'locale':
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
                case 'subscriptionKey':
                case 'sku':
                case 'customerReference':
                case 'email':
                case 'idAvailabilityNotificationSubscription':
                    $values[$arrayKey] = $value;

                    break;
                case 'store':
                case 'locale':
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
            'subscriptionKey' => $this->subscriptionKey,
            'sku' => $this->sku,
            'customerReference' => $this->customerReference,
            'email' => $this->email,
            'idAvailabilityNotificationSubscription' => $this->idAvailabilityNotificationSubscription,
            'store' => $this->store,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'subscription_key' => $this->subscriptionKey,
            'sku' => $this->sku,
            'customer_reference' => $this->customerReference,
            'email' => $this->email,
            'id_availability_notification_subscription' => $this->idAvailabilityNotificationSubscription,
            'store' => $this->store,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'subscription_key' => $this->subscriptionKey instanceof AbstractTransfer ? $this->subscriptionKey->toArray(true, false) : $this->subscriptionKey,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'id_availability_notification_subscription' => $this->idAvailabilityNotificationSubscription instanceof AbstractTransfer ? $this->idAvailabilityNotificationSubscription->toArray(true, false) : $this->idAvailabilityNotificationSubscription,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'subscriptionKey' => $this->subscriptionKey instanceof AbstractTransfer ? $this->subscriptionKey->toArray(true, true) : $this->subscriptionKey,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'idAvailabilityNotificationSubscription' => $this->idAvailabilityNotificationSubscription instanceof AbstractTransfer ? $this->idAvailabilityNotificationSubscription->toArray(true, true) : $this->idAvailabilityNotificationSubscription,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
