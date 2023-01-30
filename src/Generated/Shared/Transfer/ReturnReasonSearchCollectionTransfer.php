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
class ReturnReasonSearchCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RETURN_REASONS = 'returnReasons';

    /**
     * @var string
     */
    public const NB_RESULTS = 'nbResults';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ReturnReasonSearchTransfer[]
     */
    protected $returnReasons;

    /**
     * @var int|null
     */
    protected $nbResults;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'return_reasons' => 'returnReasons',
        'returnReasons' => 'returnReasons',
        'ReturnReasons' => 'returnReasons',
        'nb_results' => 'nbResults',
        'nbResults' => 'nbResults',
        'NbResults' => 'nbResults',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RETURN_REASONS => [
            'type' => 'Generated\Shared\Transfer\ReturnReasonSearchTransfer',
            'type_shim' => null,
            'name_underscore' => 'return_reasons',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NB_RESULTS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'nb_results',
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
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ReturnReasonSearchTransfer[] $returnReasons
     *
     * @return $this
     */
    public function setReturnReasons(ArrayObject $returnReasons)
    {
        $this->returnReasons = $returnReasons;
        $this->modifiedProperties[self::RETURN_REASONS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ReturnReasonSearchTransfer[]
     */
    public function getReturnReasons()
    {
        return $this->returnReasons;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ReturnReasonSearchTransfer $returnReason
     *
     * @return $this
     */
    public function addReturnReason(ReturnReasonSearchTransfer $returnReason)
    {
        $this->returnReasons[] = $returnReason;
        $this->modifiedProperties[self::RETURN_REASONS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnReasons()
    {
        $this->assertCollectionPropertyIsSet(self::RETURN_REASONS);

        return $this;
    }

    /**
     * @module SalesReturnSearch|SalesReturnsRestApi
     *
     * @param int|null $nbResults
     *
     * @return $this
     */
    public function setNbResults($nbResults)
    {
        $this->nbResults = $nbResults;
        $this->modifiedProperties[self::NB_RESULTS] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch|SalesReturnsRestApi
     *
     * @return int|null
     */
    public function getNbResults()
    {
        return $this->nbResults;
    }

    /**
     * @module SalesReturnSearch|SalesReturnsRestApi
     *
     * @param int|null $nbResults
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNbResultsOrFail($nbResults)
    {
        if ($nbResults === null) {
            $this->throwNullValueException(static::NB_RESULTS);
        }

        return $this->setNbResults($nbResults);
    }

    /**
     * @module SalesReturnSearch|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNbResultsOrFail()
    {
        if ($this->nbResults === null) {
            $this->throwNullValueException(static::NB_RESULTS);
        }

        return $this->nbResults;
    }

    /**
     * @module SalesReturnSearch|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNbResults()
    {
        $this->assertPropertyIsSet(self::NB_RESULTS);

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
                case 'nbResults':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'returnReasons':
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
                case 'nbResults':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnReasons':
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
                case 'nbResults':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnReasons':
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
        $this->returnReasons = $this->returnReasons ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'nbResults' => $this->nbResults,
            'returnReasons' => $this->returnReasons,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'nb_results' => $this->nbResults,
            'return_reasons' => $this->returnReasons,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'nb_results' => $this->nbResults instanceof AbstractTransfer ? $this->nbResults->toArray(true, false) : $this->nbResults,
            'return_reasons' => $this->returnReasons instanceof AbstractTransfer ? $this->returnReasons->toArray(true, false) : $this->addValuesToCollection($this->returnReasons, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'nbResults' => $this->nbResults instanceof AbstractTransfer ? $this->nbResults->toArray(true, true) : $this->nbResults,
            'returnReasons' => $this->returnReasons instanceof AbstractTransfer ? $this->returnReasons->toArray(true, true) : $this->addValuesToCollection($this->returnReasons, true, true),
        ];
    }
}
