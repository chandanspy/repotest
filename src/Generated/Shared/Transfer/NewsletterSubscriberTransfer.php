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
class NewsletterSubscriberTransfer extends AbstractTransfer
{
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
    public const SUBSCRIBER_KEY = 'subscriberKey';

    /**
     * @var string
     */
    public const ID_NEWSLETTER_SUBSCRIBER = 'idNewsletterSubscriber';

    /**
     * @var string
     */
    public const IS_CONFIRMED = 'isConfirmed';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $subscriberKey;

    /**
     * @var int|null
     */
    protected $idNewsletterSubscriber;

    /**
     * @var bool|null
     */
    protected $isConfirmed;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'email' => 'email',
        'Email' => 'email',
        'subscriber_key' => 'subscriberKey',
        'subscriberKey' => 'subscriberKey',
        'SubscriberKey' => 'subscriberKey',
        'id_newsletter_subscriber' => 'idNewsletterSubscriber',
        'idNewsletterSubscriber' => 'idNewsletterSubscriber',
        'IdNewsletterSubscriber' => 'idNewsletterSubscriber',
        'is_confirmed' => 'isConfirmed',
        'isConfirmed' => 'isConfirmed',
        'IsConfirmed' => 'isConfirmed',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_CUSTOMER => [
            'type' => 'int',
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
        self::ID_NEWSLETTER_SUBSCRIBER => [
            'type' => 'int',
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
        self::IS_CONFIRMED => [
            'type' => 'bool',
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @param int|null $fkCustomer
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @return int|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @param int|null $fkCustomer
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
     *
     * @return string|null
     */
    public function getSubscriberKey()
    {
        return $this->subscriberKey;
    }

    /**
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module NewsletterPage|NewsletterWidget|Newsletter
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
     * @module Newsletter
     *
     * @param int|null $idNewsletterSubscriber
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
     * @module Newsletter
     *
     * @return int|null
     */
    public function getIdNewsletterSubscriber()
    {
        return $this->idNewsletterSubscriber;
    }

    /**
     * @module Newsletter
     *
     * @param int|null $idNewsletterSubscriber
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
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdNewsletterSubscriberOrFail()
    {
        if ($this->idNewsletterSubscriber === null) {
            $this->throwNullValueException(static::ID_NEWSLETTER_SUBSCRIBER);
        }

        return $this->idNewsletterSubscriber;
    }

    /**
     * @module Newsletter
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
     * @module Newsletter
     *
     * @param bool|null $isConfirmed
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
     * @module Newsletter
     *
     * @return bool|null
     */
    public function getIsConfirmed()
    {
        return $this->isConfirmed;
    }

    /**
     * @module Newsletter
     *
     * @param bool|null $isConfirmed
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
     * @module Newsletter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsConfirmedOrFail()
    {
        if ($this->isConfirmed === null) {
            $this->throwNullValueException(static::IS_CONFIRMED);
        }

        return $this->isConfirmed;
    }

    /**
     * @module Newsletter
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
     * @module Newsletter
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
     * @module Newsletter
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module Newsletter
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
     * @module Newsletter
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
     * @module Newsletter
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
                case 'fkCustomer':
                case 'email':
                case 'subscriberKey':
                case 'idNewsletterSubscriber':
                case 'isConfirmed':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'fkCustomer':
                case 'email':
                case 'subscriberKey':
                case 'idNewsletterSubscriber':
                case 'isConfirmed':
                    $values[$arrayKey] = $value;

                    break;
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
                case 'fkCustomer':
                case 'email':
                case 'subscriberKey':
                case 'idNewsletterSubscriber':
                case 'isConfirmed':
                    $values[$arrayKey] = $value;

                    break;
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
            'fkCustomer' => $this->fkCustomer,
            'email' => $this->email,
            'subscriberKey' => $this->subscriberKey,
            'idNewsletterSubscriber' => $this->idNewsletterSubscriber,
            'isConfirmed' => $this->isConfirmed,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_customer' => $this->fkCustomer,
            'email' => $this->email,
            'subscriber_key' => $this->subscriberKey,
            'id_newsletter_subscriber' => $this->idNewsletterSubscriber,
            'is_confirmed' => $this->isConfirmed,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'subscriber_key' => $this->subscriberKey instanceof AbstractTransfer ? $this->subscriberKey->toArray(true, false) : $this->subscriberKey,
            'id_newsletter_subscriber' => $this->idNewsletterSubscriber instanceof AbstractTransfer ? $this->idNewsletterSubscriber->toArray(true, false) : $this->idNewsletterSubscriber,
            'is_confirmed' => $this->isConfirmed instanceof AbstractTransfer ? $this->isConfirmed->toArray(true, false) : $this->isConfirmed,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'subscriberKey' => $this->subscriberKey instanceof AbstractTransfer ? $this->subscriberKey->toArray(true, true) : $this->subscriberKey,
            'idNewsletterSubscriber' => $this->idNewsletterSubscriber instanceof AbstractTransfer ? $this->idNewsletterSubscriber->toArray(true, true) : $this->idNewsletterSubscriber,
            'isConfirmed' => $this->isConfirmed instanceof AbstractTransfer ? $this->isConfirmed->toArray(true, true) : $this->isConfirmed,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
