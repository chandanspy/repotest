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
class ProductReviewRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const RATING = 'rating';

    /**
     * @var string
     */
    public const SUMMARY = 'summary';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const NICKNAME = 'nickname';

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var int|null
     */
    protected $rating;

    /**
     * @var string|null
     */
    protected $summary;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $nickname;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'rating' => 'rating',
        'Rating' => 'rating',
        'summary' => 'summary',
        'Summary' => 'summary',
        'description' => 'description',
        'Description' => 'description',
        'nickname' => 'nickname',
        'Nickname' => 'nickname',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RATING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUMMARY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'summary',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NICKNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'nickname',
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
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
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
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
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
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
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
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
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
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module ProductReviewWidget|ProductReview|ProductReviewsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        $this->modifiedProperties[self::RATING] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $rating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRatingOrFail($rating)
    {
        if ($rating === null) {
            $this->throwNullValueException(static::RATING);
        }

        return $this->setRating($rating);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRatingOrFail()
    {
        if ($this->rating === null) {
            $this->throwNullValueException(static::RATING);
        }

        return $this->rating;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRating()
    {
        $this->assertPropertyIsSet(self::RATING);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        $this->modifiedProperties[self::SUMMARY] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $summary
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSummaryOrFail($summary)
    {
        if ($summary === null) {
            $this->throwNullValueException(static::SUMMARY);
        }

        return $this->setSummary($summary);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSummaryOrFail()
    {
        if ($this->summary === null) {
            $this->throwNullValueException(static::SUMMARY);
        }

        return $this->summary;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSummary()
    {
        $this->assertPropertyIsSet(self::SUMMARY);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        $this->modifiedProperties[self::NICKNAME] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param string|null $nickname
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNicknameOrFail($nickname)
    {
        if ($nickname === null) {
            $this->throwNullValueException(static::NICKNAME);
        }

        return $this->setNickname($nickname);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNicknameOrFail()
    {
        if ($this->nickname === null) {
            $this->throwNullValueException(static::NICKNAME);
        }

        return $this->nickname;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNickname()
    {
        $this->assertPropertyIsSet(self::NICKNAME);

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
                case 'customerReference':
                case 'idProductAbstract':
                case 'localeName':
                case 'rating':
                case 'summary':
                case 'description':
                case 'nickname':
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
                case 'customerReference':
                case 'idProductAbstract':
                case 'localeName':
                case 'rating':
                case 'summary':
                case 'description':
                case 'nickname':
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
                case 'customerReference':
                case 'idProductAbstract':
                case 'localeName':
                case 'rating':
                case 'summary':
                case 'description':
                case 'nickname':
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
            'customerReference' => $this->customerReference,
            'idProductAbstract' => $this->idProductAbstract,
            'localeName' => $this->localeName,
            'rating' => $this->rating,
            'summary' => $this->summary,
            'description' => $this->description,
            'nickname' => $this->nickname,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'customer_reference' => $this->customerReference,
            'id_product_abstract' => $this->idProductAbstract,
            'locale_name' => $this->localeName,
            'rating' => $this->rating,
            'summary' => $this->summary,
            'description' => $this->description,
            'nickname' => $this->nickname,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, false) : $this->rating,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, false) : $this->summary,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, false) : $this->nickname,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, true) : $this->rating,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, true) : $this->summary,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, true) : $this->nickname,
        ];
    }
}
