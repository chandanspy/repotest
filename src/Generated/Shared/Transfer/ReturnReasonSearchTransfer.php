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
class ReturnReasonSearchTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_SALES_RETURN_REASON_SEARCH = 'idSalesReturnReasonSearch';

    /**
     * @var string
     */
    public const ID_SALES_RETURN_REASON = 'idSalesReturnReason';

    /**
     * @var string
     */
    public const GLOSSARY_KEY_REASON = 'glossaryKeyReason';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const STRUCTURED_DATA = 'structuredData';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $idSalesReturnReasonSearch;

    /**
     * @var int|null
     */
    protected $idSalesReturnReason;

    /**
     * @var string|null
     */
    protected $glossaryKeyReason;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string|null
     */
    protected $structuredData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_sales_return_reason_search' => 'idSalesReturnReasonSearch',
        'idSalesReturnReasonSearch' => 'idSalesReturnReasonSearch',
        'IdSalesReturnReasonSearch' => 'idSalesReturnReasonSearch',
        'id_sales_return_reason' => 'idSalesReturnReason',
        'idSalesReturnReason' => 'idSalesReturnReason',
        'IdSalesReturnReason' => 'idSalesReturnReason',
        'glossary_key_reason' => 'glossaryKeyReason',
        'glossaryKeyReason' => 'glossaryKeyReason',
        'GlossaryKeyReason' => 'glossaryKeyReason',
        'locale' => 'locale',
        'Locale' => 'locale',
        'type' => 'type',
        'Type' => 'type',
        'key' => 'key',
        'Key' => 'key',
        'data' => 'data',
        'Data' => 'data',
        'structured_data' => 'structuredData',
        'structuredData' => 'structuredData',
        'StructuredData' => 'structuredData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data',
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
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module SalesReturnPage|SalesReturnSearch|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getIdSalesReturnReasonSearch()
    {
        return $this->idSalesReturnReasonSearch;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @return int|null
     */
    public function getIdSalesReturnReason()
    {
        return $this->idSalesReturnReason;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getGlossaryKeyReason()
    {
        return $this->glossaryKeyReason;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param array|null $data
     *
     * @return $this
     */
    public function setData(array $data = null)
    {
        if ($data === null) {
            $data = [];
        }

        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module SalesReturnSearch
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module SalesReturnSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
     *
     * @return string|null
     */
    public function getStructuredData()
    {
        return $this->structuredData;
    }

    /**
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
     * @module SalesReturnSearch
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
                case 'name':
                case 'idSalesReturnReasonSearch':
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
                case 'structuredData':
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
                case 'name':
                case 'idSalesReturnReasonSearch':
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
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
                case 'name':
                case 'idSalesReturnReasonSearch':
                case 'idSalesReturnReason':
                case 'glossaryKeyReason':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
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
            'name' => $this->name,
            'idSalesReturnReasonSearch' => $this->idSalesReturnReasonSearch,
            'idSalesReturnReason' => $this->idSalesReturnReason,
            'glossaryKeyReason' => $this->glossaryKeyReason,
            'locale' => $this->locale,
            'type' => $this->type,
            'key' => $this->key,
            'data' => $this->data,
            'structuredData' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_sales_return_reason_search' => $this->idSalesReturnReasonSearch,
            'id_sales_return_reason' => $this->idSalesReturnReason,
            'glossary_key_reason' => $this->glossaryKeyReason,
            'locale' => $this->locale,
            'type' => $this->type,
            'key' => $this->key,
            'data' => $this->data,
            'structured_data' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_sales_return_reason_search' => $this->idSalesReturnReasonSearch instanceof AbstractTransfer ? $this->idSalesReturnReasonSearch->toArray(true, false) : $this->idSalesReturnReasonSearch,
            'id_sales_return_reason' => $this->idSalesReturnReason instanceof AbstractTransfer ? $this->idSalesReturnReason->toArray(true, false) : $this->idSalesReturnReason,
            'glossary_key_reason' => $this->glossaryKeyReason instanceof AbstractTransfer ? $this->glossaryKeyReason->toArray(true, false) : $this->glossaryKeyReason,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'structured_data' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, false) : $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idSalesReturnReasonSearch' => $this->idSalesReturnReasonSearch instanceof AbstractTransfer ? $this->idSalesReturnReasonSearch->toArray(true, true) : $this->idSalesReturnReasonSearch,
            'idSalesReturnReason' => $this->idSalesReturnReason instanceof AbstractTransfer ? $this->idSalesReturnReason->toArray(true, true) : $this->idSalesReturnReason,
            'glossaryKeyReason' => $this->glossaryKeyReason instanceof AbstractTransfer ? $this->glossaryKeyReason->toArray(true, true) : $this->glossaryKeyReason,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'structuredData' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, true) : $this->structuredData,
        ];
    }
}
