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
class AvailabilityNotificationSubscriptionMailDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IMAGE_URL = 'productImageUrl';

    /**
     * @var string
     */
    public const PRODUCT_URL = 'productUrl';

    /**
     * @var string
     */
    public const PRODUCT_NAME = 'productName';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE = 'productConcrete';

    /**
     * @var string
     */
    public const AVAILABILITY_UNSUBSCRIPTION_LINK = 'availabilityUnsubscriptionLink';

    /**
     * @var string
     */
    public const AVAILABILITY_NOTIFICATION_SUBSCRIPTION = 'availabilityNotificationSubscription';

    /**
     * @var string|null
     */
    protected $productImageUrl;

    /**
     * @var string|null
     */
    protected $productUrl;

    /**
     * @var string|null
     */
    protected $productName;

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    protected $productConcrete;

    /**
     * @var string|null
     */
    protected $availabilityUnsubscriptionLink;

    /**
     * @var \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer|null
     */
    protected $availabilityNotificationSubscription;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_image_url' => 'productImageUrl',
        'productImageUrl' => 'productImageUrl',
        'ProductImageUrl' => 'productImageUrl',
        'product_url' => 'productUrl',
        'productUrl' => 'productUrl',
        'ProductUrl' => 'productUrl',
        'product_name' => 'productName',
        'productName' => 'productName',
        'ProductName' => 'productName',
        'product_concrete' => 'productConcrete',
        'productConcrete' => 'productConcrete',
        'ProductConcrete' => 'productConcrete',
        'availability_unsubscription_link' => 'availabilityUnsubscriptionLink',
        'availabilityUnsubscriptionLink' => 'availabilityUnsubscriptionLink',
        'AvailabilityUnsubscriptionLink' => 'availabilityUnsubscriptionLink',
        'availability_notification_subscription' => 'availabilityNotificationSubscription',
        'availabilityNotificationSubscription' => 'availabilityNotificationSubscription',
        'AvailabilityNotificationSubscription' => 'availabilityNotificationSubscription',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IMAGE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_image_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY_UNSUBSCRIPTION_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'availability_unsubscription_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'availability_notification_subscription',
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
     * @module AvailabilityNotification
     *
     * @param string|null $productImageUrl
     *
     * @return $this
     */
    public function setProductImageUrl($productImageUrl)
    {
        $this->productImageUrl = $productImageUrl;
        $this->modifiedProperties[self::PRODUCT_IMAGE_URL] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return string|null
     */
    public function getProductImageUrl()
    {
        return $this->productImageUrl;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $productImageUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductImageUrlOrFail($productImageUrl)
    {
        if ($productImageUrl === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_URL);
        }

        return $this->setProductImageUrl($productImageUrl);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductImageUrlOrFail()
    {
        if ($this->productImageUrl === null) {
            $this->throwNullValueException(static::PRODUCT_IMAGE_URL);
        }

        return $this->productImageUrl;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageUrl()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGE_URL);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $productUrl
     *
     * @return $this
     */
    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
        $this->modifiedProperties[self::PRODUCT_URL] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return string|null
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $productUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductUrlOrFail($productUrl)
    {
        if ($productUrl === null) {
            $this->throwNullValueException(static::PRODUCT_URL);
        }

        return $this->setProductUrl($productUrl);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductUrlOrFail()
    {
        if ($this->productUrl === null) {
            $this->throwNullValueException(static::PRODUCT_URL);
        }

        return $this->productUrl;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductUrl()
    {
        $this->assertPropertyIsSet(self::PRODUCT_URL);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        $this->modifiedProperties[self::PRODUCT_NAME] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $productName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductNameOrFail($productName)
    {
        if ($productName === null) {
            $this->throwNullValueException(static::PRODUCT_NAME);
        }

        return $this->setProductName($productName);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductNameOrFail()
    {
        if ($this->productName === null) {
            $this->throwNullValueException(static::PRODUCT_NAME);
        }

        return $this->productName;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductName()
    {
        $this->assertPropertyIsSet(self::PRODUCT_NAME);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer|null $productConcrete
     *
     * @return $this
     */
    public function setProductConcrete(ProductConcreteTransfer $productConcrete = null)
    {
        $this->productConcrete = $productConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    public function getProductConcrete()
    {
        return $this->productConcrete;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteOrFail(ProductConcreteTransfer $productConcrete)
    {
        return $this->setProductConcrete($productConcrete);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function getProductConcreteOrFail()
    {
        if ($this->productConcrete === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE);
        }

        return $this->productConcrete;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcrete()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $availabilityUnsubscriptionLink
     *
     * @return $this
     */
    public function setAvailabilityUnsubscriptionLink($availabilityUnsubscriptionLink)
    {
        $this->availabilityUnsubscriptionLink = $availabilityUnsubscriptionLink;
        $this->modifiedProperties[self::AVAILABILITY_UNSUBSCRIPTION_LINK] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return string|null
     */
    public function getAvailabilityUnsubscriptionLink()
    {
        return $this->availabilityUnsubscriptionLink;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param string|null $availabilityUnsubscriptionLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityUnsubscriptionLinkOrFail($availabilityUnsubscriptionLink)
    {
        if ($availabilityUnsubscriptionLink === null) {
            $this->throwNullValueException(static::AVAILABILITY_UNSUBSCRIPTION_LINK);
        }

        return $this->setAvailabilityUnsubscriptionLink($availabilityUnsubscriptionLink);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAvailabilityUnsubscriptionLinkOrFail()
    {
        if ($this->availabilityUnsubscriptionLink === null) {
            $this->throwNullValueException(static::AVAILABILITY_UNSUBSCRIPTION_LINK);
        }

        return $this->availabilityUnsubscriptionLink;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityUnsubscriptionLink()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_UNSUBSCRIPTION_LINK);

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer|null $availabilityNotificationSubscription
     *
     * @return $this
     */
    public function setAvailabilityNotificationSubscription(AvailabilityNotificationSubscriptionTransfer $availabilityNotificationSubscription = null)
    {
        $this->availabilityNotificationSubscription = $availabilityNotificationSubscription;
        $this->modifiedProperties[self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification
     *
     * @return \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer|null
     */
    public function getAvailabilityNotificationSubscription()
    {
        return $this->availabilityNotificationSubscription;
    }

    /**
     * @module AvailabilityNotification
     *
     * @param \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer $availabilityNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityNotificationSubscriptionOrFail(AvailabilityNotificationSubscriptionTransfer $availabilityNotificationSubscription)
    {
        return $this->setAvailabilityNotificationSubscription($availabilityNotificationSubscription);
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AvailabilityNotificationSubscriptionTransfer
     */
    public function getAvailabilityNotificationSubscriptionOrFail()
    {
        if ($this->availabilityNotificationSubscription === null) {
            $this->throwNullValueException(static::AVAILABILITY_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->availabilityNotificationSubscription;
    }

    /**
     * @module AvailabilityNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_NOTIFICATION_SUBSCRIPTION);

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
                case 'productImageUrl':
                case 'productUrl':
                case 'productName':
                case 'availabilityUnsubscriptionLink':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConcrete':
                case 'availabilityNotificationSubscription':
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
                case 'productImageUrl':
                case 'productUrl':
                case 'productName':
                case 'availabilityUnsubscriptionLink':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcrete':
                case 'availabilityNotificationSubscription':
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
                case 'productImageUrl':
                case 'productUrl':
                case 'productName':
                case 'availabilityUnsubscriptionLink':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcrete':
                case 'availabilityNotificationSubscription':
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
            'productImageUrl' => $this->productImageUrl,
            'productUrl' => $this->productUrl,
            'productName' => $this->productName,
            'availabilityUnsubscriptionLink' => $this->availabilityUnsubscriptionLink,
            'productConcrete' => $this->productConcrete,
            'availabilityNotificationSubscription' => $this->availabilityNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_image_url' => $this->productImageUrl,
            'product_url' => $this->productUrl,
            'product_name' => $this->productName,
            'availability_unsubscription_link' => $this->availabilityUnsubscriptionLink,
            'product_concrete' => $this->productConcrete,
            'availability_notification_subscription' => $this->availabilityNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_image_url' => $this->productImageUrl instanceof AbstractTransfer ? $this->productImageUrl->toArray(true, false) : $this->productImageUrl,
            'product_url' => $this->productUrl instanceof AbstractTransfer ? $this->productUrl->toArray(true, false) : $this->productUrl,
            'product_name' => $this->productName instanceof AbstractTransfer ? $this->productName->toArray(true, false) : $this->productName,
            'availability_unsubscription_link' => $this->availabilityUnsubscriptionLink instanceof AbstractTransfer ? $this->availabilityUnsubscriptionLink->toArray(true, false) : $this->availabilityUnsubscriptionLink,
            'product_concrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, false) : $this->productConcrete,
            'availability_notification_subscription' => $this->availabilityNotificationSubscription instanceof AbstractTransfer ? $this->availabilityNotificationSubscription->toArray(true, false) : $this->availabilityNotificationSubscription,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productImageUrl' => $this->productImageUrl instanceof AbstractTransfer ? $this->productImageUrl->toArray(true, true) : $this->productImageUrl,
            'productUrl' => $this->productUrl instanceof AbstractTransfer ? $this->productUrl->toArray(true, true) : $this->productUrl,
            'productName' => $this->productName instanceof AbstractTransfer ? $this->productName->toArray(true, true) : $this->productName,
            'availabilityUnsubscriptionLink' => $this->availabilityUnsubscriptionLink instanceof AbstractTransfer ? $this->availabilityUnsubscriptionLink->toArray(true, true) : $this->availabilityUnsubscriptionLink,
            'productConcrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, true) : $this->productConcrete,
            'availabilityNotificationSubscription' => $this->availabilityNotificationSubscription instanceof AbstractTransfer ? $this->availabilityNotificationSubscription->toArray(true, true) : $this->availabilityNotificationSubscription,
        ];
    }
}
