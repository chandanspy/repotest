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
class SpyNewsletterSubscriberEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_NEWSLETTER_SUBSCRIBER = 'idNewsletterSubscriber';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const IS_CONFIRMED = 'isConfirmed';

    /**
     * @var string
     */
    public const SUBSCRIBER_KEY = 'subscriberKey';

    /**
     * @var string
     */
    public const SPY_CUSTOMER = 'spyCustomer';

    /**
     * @var string
     */
    public const SPY_NEWSLETTER_SUBSCRIPTIONS = 'spyNewsletterSubscriptions';

    /**
     * @var integer|null
     */
    protected $idNewsletterSubscriber;

    /**
     * @var integer|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var boolean|null
     */
    protected $isConfirmed;

    /**
     * @var string|null
     */
    protected $subscriberKey;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    protected $spyCustomer;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[]
     */
    protected $spyNewsletterSubscriptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_newsletter_subscriber' => 'idNewsletterSubscriber',
        'idNewsletterSubscriber' => 'idNewsletterSubscriber',
        'IdNewsletterSubscriber' => 'idNewsletterSubscriber',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'email' => 'email',
        'Email' => 'email',
        'is_confirmed' => 'isConfirmed',
        'isConfirmed' => 'isConfirmed',
        'IsConfirmed' => 'isConfirmed',
        'subscriber_key' => 'subscriberKey',
        'subscriberKey' => 'subscriberKey',
        'SubscriberKey' => 'subscriberKey',
        'spy_customer' => 'spyCustomer',
        'spyCustomer' => 'spyCustomer',
        'SpyCustomer' => 'spyCustomer',
        'spy_newsletter_subscriptions' => 'spyNewsletterSubscriptions',
        'spyNewsletterSubscriptions' => 'spyNewsletterSubscriptions',
        'SpyNewsletterSubscriptions' => 'spyNewsletterSubscriptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_NEWSLETTER_SUBSCRIBER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_newsletter_subscriber',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
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
        self::IS_CONFIRMED => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_confirmed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBSCRIBER_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'subscriber_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NEWSLETTER_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_newsletter_subscriptions',
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
    public static $entityNamespace = 'Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber';


    /**
     * @module 
     *
     * @param integer|null $idNewsletterSubscriber
     *
     * @return $this
     */
    public function setIdNewsletterSubscriber($idNewsletterSubscriber)
    {
        $this->idNewsletterSubscriber = $idNewsletterSubscriber;
        $this->modifiedProperties[self::ID_NEWSLETTER_SUBSCRIBER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdNewsletterSubscriber()
    {
        return $this->idNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @param integer|null $idNewsletterSubscriber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdNewsletterSubscriberOrFail($idNewsletterSubscriber)
    {
        if ($idNewsletterSubscriber === null) {
            $this->throwNullValueException(static::ID_NEWSLETTER_SUBSCRIBER);
        }

        return $this->setIdNewsletterSubscriber($idNewsletterSubscriber);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdNewsletterSubscriberOrFail()
    {
        if ($this->idNewsletterSubscriber === null) {
            $this->throwNullValueException(static::ID_NEWSLETTER_SUBSCRIBER);
        }

        return $this->idNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdNewsletterSubscriber()
    {
        $this->assertPropertyIsSet(self::ID_NEWSLETTER_SUBSCRIBER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isConfirmed
     *
     * @return $this
     */
    public function setIsConfirmed($isConfirmed)
    {
        $this->isConfirmed = $isConfirmed;
        $this->modifiedProperties[self::IS_CONFIRMED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsConfirmed()
    {
        return $this->isConfirmed;
    }

    /**
     * @module 
     *
     * @param boolean|null $isConfirmed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsConfirmedOrFail($isConfirmed)
    {
        if ($isConfirmed === null) {
            $this->throwNullValueException(static::IS_CONFIRMED);
        }

        return $this->setIsConfirmed($isConfirmed);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsConfirmedOrFail()
    {
        if ($this->isConfirmed === null) {
            $this->throwNullValueException(static::IS_CONFIRMED);
        }

        return $this->isConfirmed;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsConfirmed()
    {
        $this->assertPropertyIsSet(self::IS_CONFIRMED);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $subscriberKey
     *
     * @return $this
     */
    public function setSubscriberKey($subscriberKey)
    {
        $this->subscriberKey = $subscriberKey;
        $this->modifiedProperties[self::SUBSCRIBER_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSubscriberKey()
    {
        return $this->subscriberKey;
    }

    /**
     * @module 
     *
     * @param string|null $subscriberKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubscriberKeyOrFail($subscriberKey)
    {
        if ($subscriberKey === null) {
            $this->throwNullValueException(static::SUBSCRIBER_KEY);
        }

        return $this->setSubscriberKey($subscriberKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSubscriberKeyOrFail()
    {
        if ($this->subscriberKey === null) {
            $this->throwNullValueException(static::SUBSCRIBER_KEY);
        }

        return $this->subscriberKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubscriberKey()
    {
        $this->assertPropertyIsSet(self::SUBSCRIBER_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null $spyCustomer
     *
     * @return $this
     */
    public function setSpyCustomer(SpyCustomerEntityTransfer $spyCustomer = null)
    {
        $this->spyCustomer = $spyCustomer;
        $this->modifiedProperties[self::SPY_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    public function getSpyCustomer()
    {
        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $spyCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCustomerOrFail(SpyCustomerEntityTransfer $spyCustomer)
    {
        return $this->setSpyCustomer($spyCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer
     */
    public function getSpyCustomerOrFail()
    {
        if ($this->spyCustomer === null) {
            $this->throwNullValueException(static::SPY_CUSTOMER);
        }

        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomer()
    {
        $this->assertPropertyIsSet(self::SPY_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[] $spyNewsletterSubscriptions
     *
     * @return $this
     */
    public function setSpyNewsletterSubscriptions(ArrayObject $spyNewsletterSubscriptions)
    {
        $this->spyNewsletterSubscriptions = $spyNewsletterSubscriptions;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[]
     */
    public function getSpyNewsletterSubscriptions()
    {
        return $this->spyNewsletterSubscriptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer $spyNewsletterSubscriptions
     *
     * @return $this
     */
    public function addSpyNewsletterSubscriptions(SpyNewsletterSubscriptionEntityTransfer $spyNewsletterSubscriptions)
    {
        $this->spyNewsletterSubscriptions[] = $spyNewsletterSubscriptions;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNewsletterSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NEWSLETTER_SUBSCRIPTIONS);

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
                case 'idNewsletterSubscriber':
                case 'fkCustomer':
                case 'email':
                case 'isConfirmed':
                case 'subscriberKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCustomer':
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
                case 'spyNewsletterSubscriptions':
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
                case 'idNewsletterSubscriber':
                case 'fkCustomer':
                case 'email':
                case 'isConfirmed':
                case 'subscriberKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyNewsletterSubscriptions':
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
                case 'idNewsletterSubscriber':
                case 'fkCustomer':
                case 'email':
                case 'isConfirmed':
                case 'subscriberKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyNewsletterSubscriptions':
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
        $this->spyNewsletterSubscriptions = $this->spyNewsletterSubscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idNewsletterSubscriber' => $this->idNewsletterSubscriber,
            'fkCustomer' => $this->fkCustomer,
            'email' => $this->email,
            'isConfirmed' => $this->isConfirmed,
            'subscriberKey' => $this->subscriberKey,
            'spyCustomer' => $this->spyCustomer,
            'spyNewsletterSubscriptions' => $this->spyNewsletterSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_newsletter_subscriber' => $this->idNewsletterSubscriber,
            'fk_customer' => $this->fkCustomer,
            'email' => $this->email,
            'is_confirmed' => $this->isConfirmed,
            'subscriber_key' => $this->subscriberKey,
            'spy_customer' => $this->spyCustomer,
            'spy_newsletter_subscriptions' => $this->spyNewsletterSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_newsletter_subscriber' => $this->idNewsletterSubscriber instanceof AbstractTransfer ? $this->idNewsletterSubscriber->toArray(true, false) : $this->idNewsletterSubscriber,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'is_confirmed' => $this->isConfirmed instanceof AbstractTransfer ? $this->isConfirmed->toArray(true, false) : $this->isConfirmed,
            'subscriber_key' => $this->subscriberKey instanceof AbstractTransfer ? $this->subscriberKey->toArray(true, false) : $this->subscriberKey,
            'spy_customer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, false) : $this->spyCustomer,
            'spy_newsletter_subscriptions' => $this->spyNewsletterSubscriptions instanceof AbstractTransfer ? $this->spyNewsletterSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->spyNewsletterSubscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idNewsletterSubscriber' => $this->idNewsletterSubscriber instanceof AbstractTransfer ? $this->idNewsletterSubscriber->toArray(true, true) : $this->idNewsletterSubscriber,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'isConfirmed' => $this->isConfirmed instanceof AbstractTransfer ? $this->isConfirmed->toArray(true, true) : $this->isConfirmed,
            'subscriberKey' => $this->subscriberKey instanceof AbstractTransfer ? $this->subscriberKey->toArray(true, true) : $this->subscriberKey,
            'spyCustomer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, true) : $this->spyCustomer,
            'spyNewsletterSubscriptions' => $this->spyNewsletterSubscriptions instanceof AbstractTransfer ? $this->spyNewsletterSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->spyNewsletterSubscriptions, true, true),
        ];
    }
}
