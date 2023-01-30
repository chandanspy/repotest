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
class SpySalesReturnReasonSearchEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RETURN_REASON_SEARCH = 'idSalesReturnReasonSearch';

    /**
     * @var string
     */
    public const FK_SALES_RETURN_REASON = 'fkSalesReturnReason';

    /**
     * @var string
     */
    public const STRUCTURED_DATA = 'structuredData';

    /**
     * @var string|null
     */
    protected $idSalesReturnReasonSearch;

    /**
     * @var integer|null
     */
    protected $fkSalesReturnReason;

    /**
     * @var string|null
     */
    protected $structuredData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_return_reason_search' => 'idSalesReturnReasonSearch',
        'idSalesReturnReasonSearch' => 'idSalesReturnReasonSearch',
        'IdSalesReturnReasonSearch' => 'idSalesReturnReasonSearch',
        'fk_sales_return_reason' => 'fkSalesReturnReason',
        'fkSalesReturnReason' => 'fkSalesReturnReason',
        'FkSalesReturnReason' => 'fkSalesReturnReason',
        'structured_data' => 'structuredData',
        'structuredData' => 'structuredData',
        'StructuredData' => 'structuredData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RETURN_REASON_SEARCH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_sales_return_reason_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_RETURN_REASON => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_return_reason',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRUCTURED_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'structured_data',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\SalesReturnSearch\Persistence\SpySalesReturnReasonSearch';


    /**
     * @module 
     *
     * @param string|null $idSalesReturnReasonSearch
     *
     * @return $this
     */
    public function setIdSalesReturnReasonSearch($idSalesReturnReasonSearch)
    {
        $this->idSalesReturnReasonSearch = $idSalesReturnReasonSearch;
        $this->modifiedProperties[self::ID_SALES_RETURN_REASON_SEARCH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdSalesReturnReasonSearch()
    {
        return $this->idSalesReturnReasonSearch;
    }

    /**
     * @module 
     *
     * @param string|null $idSalesReturnReasonSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReturnReasonSearchOrFail($idSalesReturnReasonSearch)
    {
        if ($idSalesReturnReasonSearch === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_REASON_SEARCH);
        }

        return $this->setIdSalesReturnReasonSearch($idSalesReturnReasonSearch);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdSalesReturnReasonSearchOrFail()
    {
        if ($this->idSalesReturnReasonSearch === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN_REASON_SEARCH);
        }

        return $this->idSalesReturnReasonSearch;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReturnReasonSearch()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RETURN_REASON_SEARCH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesReturnReason
     *
     * @return $this
     */
    public function setFkSalesReturnReason($fkSalesReturnReason)
    {
        $this->fkSalesReturnReason = $fkSalesReturnReason;
        $this->modifiedProperties[self::FK_SALES_RETURN_REASON] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesReturnReason()
    {
        return $this->fkSalesReturnReason;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesReturnReason
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesReturnReasonOrFail($fkSalesReturnReason)
    {
        if ($fkSalesReturnReason === null) {
            $this->throwNullValueException(static::FK_SALES_RETURN_REASON);
        }

        return $this->setFkSalesReturnReason($fkSalesReturnReason);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesReturnReasonOrFail()
    {
        if ($this->fkSalesReturnReason === null) {
            $this->throwNullValueException(static::FK_SALES_RETURN_REASON);
        }

        return $this->fkSalesReturnReason;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesReturnReason()
    {
        $this->assertPropertyIsSet(self::FK_SALES_RETURN_REASON);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $structuredData
     *
     * @return $this
     */
    public function setStructuredData($structuredData)
    {
        $this->structuredData = $structuredData;
        $this->modifiedProperties[self::STRUCTURED_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStructuredData()
    {
        return $this->structuredData;
    }

    /**
     * @module 
     *
     * @param string|null $structuredData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStructuredDataOrFail($structuredData)
    {
        if ($structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->setStructuredData($structuredData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStructuredDataOrFail()
    {
        if ($this->structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->structuredData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStructuredData()
    {
        $this->assertPropertyIsSet(self::STRUCTURED_DATA);

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
                case 'idSalesReturnReasonSearch':
                case 'fkSalesReturnReason':
                case 'structuredData':
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
                case 'idSalesReturnReasonSearch':
                case 'fkSalesReturnReason':
                case 'structuredData':
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
                case 'idSalesReturnReasonSearch':
                case 'fkSalesReturnReason':
                case 'structuredData':
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
            'idSalesReturnReasonSearch' => $this->idSalesReturnReasonSearch,
            'fkSalesReturnReason' => $this->fkSalesReturnReason,
            'structuredData' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_reason_search' => $this->idSalesReturnReasonSearch,
            'fk_sales_return_reason' => $this->fkSalesReturnReason,
            'structured_data' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return_reason_search' => $this->idSalesReturnReasonSearch instanceof AbstractTransfer ? $this->idSalesReturnReasonSearch->toArray(true, false) : $this->idSalesReturnReasonSearch,
            'fk_sales_return_reason' => $this->fkSalesReturnReason instanceof AbstractTransfer ? $this->fkSalesReturnReason->toArray(true, false) : $this->fkSalesReturnReason,
            'structured_data' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, false) : $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReturnReasonSearch' => $this->idSalesReturnReasonSearch instanceof AbstractTransfer ? $this->idSalesReturnReasonSearch->toArray(true, true) : $this->idSalesReturnReasonSearch,
            'fkSalesReturnReason' => $this->fkSalesReturnReason instanceof AbstractTransfer ? $this->fkSalesReturnReason->toArray(true, true) : $this->fkSalesReturnReason,
            'structuredData' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, true) : $this->structuredData,
        ];
    }
}
