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
class ReturnReasonTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RETURN_REASON = 'idSalesReturnReason';

    /**
     * @var string
     */
    public const GLOSSARY_KEY_REASON = 'glossaryKeyReason';

    /**
     * @var int|null
     */
    protected $idSalesReturnReason;

    /**
     * @var string|null
     */
    protected $glossaryKeyReason;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_return_reason' => 'idSalesReturnReason',
        'idSalesReturnReason' => 'idSalesReturnReason',
        'IdSalesReturnReason' => 'idSalesReturnReason',
        'glossary_key_reason' => 'glossaryKeyReason',
        'glossaryKeyReason' => 'glossaryKeyReason',
        'GlossaryKeyReason' => 'glossaryKeyReason',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RETURN_REASON => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_return_reason',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GLOSSARY_KEY_REASON => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'glossary_key_reason',
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
     * @module SalesReturnPage|SalesReturnSearch|SalesReturn
     *
     * @param int|null $idSalesReturnReason
     *
     * @return $this
     */
    public function setIdSalesReturnReason($idSalesReturnReason)
    {
        $this->idSalesReturnReason = $idSalesReturnReason;
        $this->modifiedProperties[self::ID_SALES_RETURN_REASON] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturn
     *
     * @return int|null
     */
    public function getIdSalesReturnReason()
    {
        return $this->idSalesReturnReason;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturn
     *
     * @param int|null $idSalesReturnReason
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReturnReasonOrFail($idSalesReturnReason)
    {
        if ($idSalesReturnReason === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_REASON);
        }

        return $this->setIdSalesReturnReason($idSalesReturnReason);
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReturnReasonOrFail()
    {
        if ($this->idSalesReturnReason === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_REASON);
        }

        return $this->idSalesReturnReason;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReturnReason()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RETURN_REASON);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturnSearch|SalesReturn|SalesReturnsRestApi
     *
     * @param string|null $glossaryKeyReason
     *
     * @return $this
     */
    public function setGlossaryKeyReason($glossaryKeyReason)
    {
        $this->glossaryKeyReason = $glossaryKeyReason;
        $this->modifiedProperties[self::GLOSSARY_KEY_REASON] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturnSearch|SalesReturn|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getGlossaryKeyReason()
    {
        return $this->glossaryKeyReason;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturnSearch|SalesReturn|SalesReturnsRestApi
     *
     * @param string|null $glossaryKeyReason
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGlossaryKeyReasonOrFail($glossaryKeyReason)
    {
        if ($glossaryKeyReason === null) {
            $this->throwNullValueException(static::GLOSSARY_KEY_REASON);
        }

        return $this->setGlossaryKeyReason($glossaryKeyReason);
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturnSearch|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGlossaryKeyReasonOrFail()
    {
        if ($this->glossaryKeyReason === null) {
            $this->throwNullValueException(static::GLOSSARY_KEY_REASON);
        }

        return $this->glossaryKeyReason;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturnSearch|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGlossaryKeyReason()
    {
        $this->assertPropertyIsSet(self::GLOSSARY_KEY_REASON);

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
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
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
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
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
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
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
            'idSalesReturnReason' => $this->idSalesReturnReason,
            'glossaryKeyReason' => $this->glossaryKeyReason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_reason' => $this->idSalesReturnReason,
            'glossary_key_reason' => $this->glossaryKeyReason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_reason' => $this->idSalesReturnReason instanceof AbstractTransfer ? $this->idSalesReturnReason->toArray(true, false) : $this->idSalesReturnReason,
            'glossary_key_reason' => $this->glossaryKeyReason instanceof AbstractTransfer ? $this->glossaryKeyReason->toArray(true, false) : $this->glossaryKeyReason,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReturnReason' => $this->idSalesReturnReason instanceof AbstractTransfer ? $this->idSalesReturnReason->toArray(true, true) : $this->idSalesReturnReason,
            'glossaryKeyReason' => $this->glossaryKeyReason instanceof AbstractTransfer ? $this->glossaryKeyReason->toArray(true, true) : $this->glossaryKeyReason,
        ];
    }
}
