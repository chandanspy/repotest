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
class RestProductReviewsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RATING = 'rating';

    /**
     * @var string
     */
    public const NICKNAME = 'nickname';

    /**
     * @var string
     */
    public const SUMMARY = 'summary';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var int|null
     */
    protected $rating;

    /**
     * @var string|null
     */
    protected $nickname;

    /**
     * @var string|null
     */
    protected $summary;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'rating' => 'rating',
        'Rating' => 'rating',
        'nickname' => 'nickname',
        'Nickname' => 'nickname',
        'summary' => 'summary',
        'Summary' => 'summary',
        'description' => 'description',
        'Description' => 'description',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RATING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
     * @module ProductReviewsRestApi
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
                case 'rating':
                case 'nickname':
                case 'summary':
                case 'description':
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
                case 'rating':
                case 'nickname':
                case 'summary':
                case 'description':
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
                case 'rating':
                case 'nickname':
                case 'summary':
                case 'description':
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
            'rating' => $this->rating,
            'nickname' => $this->nickname,
            'summary' => $this->summary,
            'description' => $this->description,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'rating' => $this->rating,
            'nickname' => $this->nickname,
            'summary' => $this->summary,
            'description' => $this->description,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, false) : $this->rating,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, false) : $this->nickname,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, false) : $this->summary,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, true) : $this->rating,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, true) : $this->nickname,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, true) : $this->summary,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
        ];
    }
}
