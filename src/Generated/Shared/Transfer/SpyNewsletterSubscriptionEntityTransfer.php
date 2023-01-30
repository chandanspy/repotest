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
class SpyNewsletterSubscriptionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_NEWSLETTER_SUBSCRIBER = 'fkNewsletterSubscriber';

    /**
     * @var string
     */
    public const FK_NEWSLETTER_TYPE = 'fkNewsletterType';

    /**
     * @var string
     */
    public const SPY_NEWSLETTER_SUBSCRIBER = 'spyNewsletterSubscriber';

    /**
     * @var string
     */
    public const SPY_NEWSLETTER_TYPE = 'spyNewsletterType';

    /**
     * @var integer|null
     */
    protected $fkNewsletterSubscriber;

    /**
     * @var integer|null
     */
    protected $fkNewsletterType;

    /**
     * @var \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer|null
     */
    protected $spyNewsletterSubscriber;

    /**
     * @var \Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer|null
     */
    protected $spyNewsletterType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_newsletter_subscriber' => 'fkNewsletterSubscriber',
        'fkNewsletterSubscriber' => 'fkNewsletterSubscriber',
        'FkNewsletterSubscriber' => 'fkNewsletterSubscriber',
        'fk_newsletter_type' => 'fkNewsletterType',
        'fkNewsletterType' => 'fkNewsletterType',
        'FkNewsletterType' => 'fkNewsletterType',
        'spy_newsletter_subscriber' => 'spyNewsletterSubscriber',
        'spyNewsletterSubscriber' => 'spyNewsletterSubscriber',
        'SpyNewsletterSubscriber' => 'spyNewsletterSubscriber',
        'spy_newsletter_type' => 'spyNewsletterType',
        'spyNewsletterType' => 'spyNewsletterType',
        'SpyNewsletterType' => 'spyNewsletterType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_NEWSLETTER_SUBSCRIBER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_newsletter_subscriber',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_NEWSLETTER_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_newsletter_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NEWSLETTER_SUBSCRIBER => [
            'type' => 'Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_newsletter_subscriber',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NEWSLETTER_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_newsletter_type',
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
    public static $entityNamespace = 'Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription';


    /**
     * @module 
     *
     * @param integer|null $fkNewsletterSubscriber
     *
     * @return $this
     */
    public function setFkNewsletterSubscriber($fkNewsletterSubscriber)
    {
        $this->fkNewsletterSubscriber = $fkNewsletterSubscriber;
        $this->modifiedProperties[self::FK_NEWSLETTER_SUBSCRIBER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkNewsletterSubscriber()
    {
        return $this->fkNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNewsletterSubscriber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkNewsletterSubscriberOrFail($fkNewsletterSubscriber)
    {
        if ($fkNewsletterSubscriber === null) {
            $this->throwNullValueException(static::FK_NEWSLETTER_SUBSCRIBER);
        }

        return $this->setFkNewsletterSubscriber($fkNewsletterSubscriber);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkNewsletterSubscriberOrFail()
    {
        if ($this->fkNewsletterSubscriber === null) {
            $this->throwNullValueException(static::FK_NEWSLETTER_SUBSCRIBER);
        }

        return $this->fkNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkNewsletterSubscriber()
    {
        $this->assertPropertyIsSet(self::FK_NEWSLETTER_SUBSCRIBER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNewsletterType
     *
     * @return $this
     */
    public function setFkNewsletterType($fkNewsletterType)
    {
        $this->fkNewsletterType = $fkNewsletterType;
        $this->modifiedProperties[self::FK_NEWSLETTER_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkNewsletterType()
    {
        return $this->fkNewsletterType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNewsletterType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkNewsletterTypeOrFail($fkNewsletterType)
    {
        if ($fkNewsletterType === null) {
            $this->throwNullValueException(static::FK_NEWSLETTER_TYPE);
        }

        return $this->setFkNewsletterType($fkNewsletterType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkNewsletterTypeOrFail()
    {
        if ($this->fkNewsletterType === null) {
            $this->throwNullValueException(static::FK_NEWSLETTER_TYPE);
        }

        return $this->fkNewsletterType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkNewsletterType()
    {
        $this->assertPropertyIsSet(self::FK_NEWSLETTER_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer|null $spyNewsletterSubscriber
     *
     * @return $this
     */
    public function setSpyNewsletterSubscriber(SpyNewsletterSubscriberEntityTransfer $spyNewsletterSubscriber = null)
    {
        $this->spyNewsletterSubscriber = $spyNewsletterSubscriber;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIBER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer|null
     */
    public function getSpyNewsletterSubscriber()
    {
        return $this->spyNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer $spyNewsletterSubscriber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyNewsletterSubscriberOrFail(SpyNewsletterSubscriberEntityTransfer $spyNewsletterSubscriber)
    {
        return $this->setSpyNewsletterSubscriber($spyNewsletterSubscriber);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyNewsletterSubscriberEntityTransfer
     */
    public function getSpyNewsletterSubscriberOrFail()
    {
        if ($this->spyNewsletterSubscriber === null) {
            $this->throwNullValueException(static::SPY_NEWSLETTER_SUBSCRIBER);
        }

        return $this->spyNewsletterSubscriber;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNewsletterSubscriber()
    {
        $this->assertPropertyIsSet(self::SPY_NEWSLETTER_SUBSCRIBER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer|null $spyNewsletterType
     *
     * @return $this
     */
    public function setSpyNewsletterType(SpyNewsletterTypeEntityTransfer $spyNewsletterType = null)
    {
        $this->spyNewsletterType = $spyNewsletterType;
        $this->modifiedProperties[self::SPY_NEWSLETTER_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer|null
     */
    public function getSpyNewsletterType()
    {
        return $this->spyNewsletterType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer $spyNewsletterType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyNewsletterTypeOrFail(SpyNewsletterTypeEntityTransfer $spyNewsletterType)
    {
        return $this->setSpyNewsletterType($spyNewsletterType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyNewsletterTypeEntityTransfer
     */
    public function getSpyNewsletterTypeOrFail()
    {
        if ($this->spyNewsletterType === null) {
            $this->throwNullValueException(static::SPY_NEWSLETTER_TYPE);
        }

        return $this->spyNewsletterType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNewsletterType()
    {
        $this->assertPropertyIsSet(self::SPY_NEWSLETTER_TYPE);

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
                case 'fkNewsletterSubscriber':
                case 'fkNewsletterType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyNewsletterSubscriber':
                case 'spyNewsletterType':
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
                case 'fkNewsletterSubscriber':
                case 'fkNewsletterType':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNewsletterSubscriber':
                case 'spyNewsletterType':
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
                case 'fkNewsletterSubscriber':
                case 'fkNewsletterType':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNewsletterSubscriber':
                case 'spyNewsletterType':
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
            'fkNewsletterSubscriber' => $this->fkNewsletterSubscriber,
            'fkNewsletterType' => $this->fkNewsletterType,
            'spyNewsletterSubscriber' => $this->spyNewsletterSubscriber,
            'spyNewsletterType' => $this->spyNewsletterType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_newsletter_subscriber' => $this->fkNewsletterSubscriber,
            'fk_newsletter_type' => $this->fkNewsletterType,
            'spy_newsletter_subscriber' => $this->spyNewsletterSubscriber,
            'spy_newsletter_type' => $this->spyNewsletterType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_newsletter_subscriber' => $this->fkNewsletterSubscriber instanceof AbstractTransfer ? $this->fkNewsletterSubscriber->toArray(true, false) : $this->fkNewsletterSubscriber,
            'fk_newsletter_type' => $this->fkNewsletterType instanceof AbstractTransfer ? $this->fkNewsletterType->toArray(true, false) : $this->fkNewsletterType,
            'spy_newsletter_subscriber' => $this->spyNewsletterSubscriber instanceof AbstractTransfer ? $this->spyNewsletterSubscriber->toArray(true, false) : $this->spyNewsletterSubscriber,
            'spy_newsletter_type' => $this->spyNewsletterType instanceof AbstractTransfer ? $this->spyNewsletterType->toArray(true, false) : $this->spyNewsletterType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkNewsletterSubscriber' => $this->fkNewsletterSubscriber instanceof AbstractTransfer ? $this->fkNewsletterSubscriber->toArray(true, true) : $this->fkNewsletterSubscriber,
            'fkNewsletterType' => $this->fkNewsletterType instanceof AbstractTransfer ? $this->fkNewsletterType->toArray(true, true) : $this->fkNewsletterType,
            'spyNewsletterSubscriber' => $this->spyNewsletterSubscriber instanceof AbstractTransfer ? $this->spyNewsletterSubscriber->toArray(true, true) : $this->spyNewsletterSubscriber,
            'spyNewsletterType' => $this->spyNewsletterType instanceof AbstractTransfer ? $this->spyNewsletterType->toArray(true, true) : $this->spyNewsletterType,
        ];
    }
}
