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
class ProductReviewSummaryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVERAGE_RATING = 'averageRating';

    /**
     * @var string
     */
    public const MAXIMUM_RATING = 'maximumRating';

    /**
     * @var string
     */
    public const TOTAL_REVIEW = 'totalReview';

    /**
     * @var string
     */
    public const RATING_AGGREGATION = 'ratingAggregation';

    /**
     * @var float|null
     */
    protected $averageRating;

    /**
     * @var int|null
     */
    protected $maximumRating;

    /**
     * @var int|null
     */
    protected $totalReview;

    /**
     * @var array
     */
    protected $ratingAggregation = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'average_rating' => 'averageRating',
        'averageRating' => 'averageRating',
        'AverageRating' => 'averageRating',
        'maximum_rating' => 'maximumRating',
        'maximumRating' => 'maximumRating',
        'MaximumRating' => 'maximumRating',
        'total_review' => 'totalReview',
        'totalReview' => 'totalReview',
        'TotalReview' => 'totalReview',
        'rating_aggregation' => 'ratingAggregation',
        'ratingAggregation' => 'ratingAggregation',
        'RatingAggregation' => 'ratingAggregation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVERAGE_RATING => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'average_rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAXIMUM_RATING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'maximum_rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TOTAL_REVIEW => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_review',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RATING_AGGREGATION => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'rating_aggregation',
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
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @param float|null $averageRating
     *
     * @return $this
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
        $this->modifiedProperties[self::AVERAGE_RATING] = true;

        return $this;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @param float|null $averageRating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAverageRatingOrFail($averageRating)
    {
        if ($averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->setAverageRating($averageRating);
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getAverageRatingOrFail()
    {
        if ($this->averageRating === null) {
            $this->throwNullValueException(static::AVERAGE_RATING);
        }

        return $this->averageRating;
    }

    /**
     * @module ProductGroupWidget|ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAverageRating()
    {
        $this->assertPropertyIsSet(self::AVERAGE_RATING);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $maximumRating
     *
     * @return $this
     */
    public function setMaximumRating($maximumRating)
    {
        $this->maximumRating = $maximumRating;
        $this->modifiedProperties[self::MAXIMUM_RATING] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return int|null
     */
    public function getMaximumRating()
    {
        return $this->maximumRating;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $maximumRating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaximumRatingOrFail($maximumRating)
    {
        if ($maximumRating === null) {
            $this->throwNullValueException(static::MAXIMUM_RATING);
        }

        return $this->setMaximumRating($maximumRating);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaximumRatingOrFail()
    {
        if ($this->maximumRating === null) {
            $this->throwNullValueException(static::MAXIMUM_RATING);
        }

        return $this->maximumRating;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMaximumRating()
    {
        $this->assertPropertyIsSet(self::MAXIMUM_RATING);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $totalReview
     *
     * @return $this
     */
    public function setTotalReview($totalReview)
    {
        $this->totalReview = $totalReview;
        $this->modifiedProperties[self::TOTAL_REVIEW] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return int|null
     */
    public function getTotalReview()
    {
        return $this->totalReview;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param int|null $totalReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalReviewOrFail($totalReview)
    {
        if ($totalReview === null) {
            $this->throwNullValueException(static::TOTAL_REVIEW);
        }

        return $this->setTotalReview($totalReview);
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalReviewOrFail()
    {
        if ($this->totalReview === null) {
            $this->throwNullValueException(static::TOTAL_REVIEW);
        }

        return $this->totalReview;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalReview()
    {
        $this->assertPropertyIsSet(self::TOTAL_REVIEW);

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param array|null $ratingAggregation
     *
     * @return $this
     */
    public function setRatingAggregation(array $ratingAggregation = null)
    {
        if ($ratingAggregation === null) {
            $ratingAggregation = [];
        }

        $this->ratingAggregation = $ratingAggregation;
        $this->modifiedProperties[self::RATING_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @return array
     */
    public function getRatingAggregation()
    {
        return $this->ratingAggregation;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @param mixed $ratingAggregation
     *
     * @return $this
     */
    public function addRatingAggregation($ratingAggregation)
    {
        $this->ratingAggregation[] = $ratingAggregation;
        $this->modifiedProperties[self::RATING_AGGREGATION] = true;

        return $this;
    }

    /**
     * @module ProductReviewWidget|ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRatingAggregation()
    {
        $this->assertPropertyIsSet(self::RATING_AGGREGATION);

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
                case 'averageRating':
                case 'maximumRating':
                case 'totalReview':
                case 'ratingAggregation':
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
                case 'averageRating':
                case 'maximumRating':
                case 'totalReview':
                case 'ratingAggregation':
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
                case 'averageRating':
                case 'maximumRating':
                case 'totalReview':
                case 'ratingAggregation':
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
            'averageRating' => $this->averageRating,
            'maximumRating' => $this->maximumRating,
            'totalReview' => $this->totalReview,
            'ratingAggregation' => $this->ratingAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'average_rating' => $this->averageRating,
            'maximum_rating' => $this->maximumRating,
            'total_review' => $this->totalReview,
            'rating_aggregation' => $this->ratingAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'average_rating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, false) : $this->averageRating,
            'maximum_rating' => $this->maximumRating instanceof AbstractTransfer ? $this->maximumRating->toArray(true, false) : $this->maximumRating,
            'total_review' => $this->totalReview instanceof AbstractTransfer ? $this->totalReview->toArray(true, false) : $this->totalReview,
            'rating_aggregation' => $this->ratingAggregation instanceof AbstractTransfer ? $this->ratingAggregation->toArray(true, false) : $this->ratingAggregation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'averageRating' => $this->averageRating instanceof AbstractTransfer ? $this->averageRating->toArray(true, true) : $this->averageRating,
            'maximumRating' => $this->maximumRating instanceof AbstractTransfer ? $this->maximumRating->toArray(true, true) : $this->maximumRating,
            'totalReview' => $this->totalReview instanceof AbstractTransfer ? $this->totalReview->toArray(true, true) : $this->totalReview,
            'ratingAggregation' => $this->ratingAggregation instanceof AbstractTransfer ? $this->ratingAggregation->toArray(true, true) : $this->ratingAggregation,
        ];
    }
}
