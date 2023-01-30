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
class ProductSearchPreferencesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ATTRIBUTE_KEY = 'idProductAttributeKey';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const FULL_TEXT = 'fullText';

    /**
     * @var string
     */
    public const FULL_TEXT_BOOSTED = 'fullTextBoosted';

    /**
     * @var string
     */
    public const SUGGESTION_TERMS = 'suggestionTerms';

    /**
     * @var string
     */
    public const COMPLETION_TERMS = 'completionTerms';

    /**
     * @var int|null
     */
    protected $idProductAttributeKey;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var bool|null
     */
    protected $fullText;

    /**
     * @var bool|null
     */
    protected $fullTextBoosted;

    /**
     * @var bool|null
     */
    protected $suggestionTerms;

    /**
     * @var bool|null
     */
    protected $completionTerms;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_attribute_key' => 'idProductAttributeKey',
        'idProductAttributeKey' => 'idProductAttributeKey',
        'IdProductAttributeKey' => 'idProductAttributeKey',
        'key' => 'key',
        'Key' => 'key',
        'full_text' => 'fullText',
        'fullText' => 'fullText',
        'FullText' => 'fullText',
        'full_text_boosted' => 'fullTextBoosted',
        'fullTextBoosted' => 'fullTextBoosted',
        'FullTextBoosted' => 'fullTextBoosted',
        'suggestion_terms' => 'suggestionTerms',
        'suggestionTerms' => 'suggestionTerms',
        'SuggestionTerms' => 'suggestionTerms',
        'completion_terms' => 'completionTerms',
        'completionTerms' => 'completionTerms',
        'CompletionTerms' => 'completionTerms',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_attribute_key',
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
        self::FULL_TEXT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'full_text',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FULL_TEXT_BOOSTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'full_text_boosted',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUGGESTION_TERMS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'suggestion_terms',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPLETION_TERMS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'completion_terms',
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
     * @module ProductSearch
     *
     * @param int|null $idProductAttributeKey
     *
     * @return $this
     */
    public function setIdProductAttributeKey($idProductAttributeKey)
    {
        $this->idProductAttributeKey = $idProductAttributeKey;
        $this->modifiedProperties[self::ID_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return int|null
     */
    public function getIdProductAttributeKey()
    {
        return $this->idProductAttributeKey;
    }

    /**
     * @module ProductSearch
     *
     * @param int|null $idProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAttributeKeyOrFail($idProductAttributeKey)
    {
        if ($idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->setIdProductAttributeKey($idProductAttributeKey);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAttributeKeyOrFail()
    {
        if ($this->idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->idProductAttributeKey;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module ProductSearch
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
     * @module ProductSearch
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductSearch
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
     * @module ProductSearch
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
     * @module ProductSearch
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
     * @module ProductSearch
     *
     * @param bool|null $fullText
     *
     * @return $this
     */
    public function setFullText($fullText)
    {
        $this->fullText = $fullText;
        $this->modifiedProperties[self::FULL_TEXT] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return bool|null
     */
    public function getFullText()
    {
        return $this->fullText;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $fullText
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFullTextOrFail($fullText)
    {
        if ($fullText === null) {
            $this->throwNullValueException(static::FULL_TEXT);
        }

        return $this->setFullText($fullText);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getFullTextOrFail()
    {
        if ($this->fullText === null) {
            $this->throwNullValueException(static::FULL_TEXT);
        }

        return $this->fullText;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFullText()
    {
        $this->assertPropertyIsSet(self::FULL_TEXT);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $fullTextBoosted
     *
     * @return $this
     */
    public function setFullTextBoosted($fullTextBoosted)
    {
        $this->fullTextBoosted = $fullTextBoosted;
        $this->modifiedProperties[self::FULL_TEXT_BOOSTED] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return bool|null
     */
    public function getFullTextBoosted()
    {
        return $this->fullTextBoosted;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $fullTextBoosted
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFullTextBoostedOrFail($fullTextBoosted)
    {
        if ($fullTextBoosted === null) {
            $this->throwNullValueException(static::FULL_TEXT_BOOSTED);
        }

        return $this->setFullTextBoosted($fullTextBoosted);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getFullTextBoostedOrFail()
    {
        if ($this->fullTextBoosted === null) {
            $this->throwNullValueException(static::FULL_TEXT_BOOSTED);
        }

        return $this->fullTextBoosted;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFullTextBoosted()
    {
        $this->assertPropertyIsSet(self::FULL_TEXT_BOOSTED);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $suggestionTerms
     *
     * @return $this
     */
    public function setSuggestionTerms($suggestionTerms)
    {
        $this->suggestionTerms = $suggestionTerms;
        $this->modifiedProperties[self::SUGGESTION_TERMS] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return bool|null
     */
    public function getSuggestionTerms()
    {
        return $this->suggestionTerms;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $suggestionTerms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSuggestionTermsOrFail($suggestionTerms)
    {
        if ($suggestionTerms === null) {
            $this->throwNullValueException(static::SUGGESTION_TERMS);
        }

        return $this->setSuggestionTerms($suggestionTerms);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSuggestionTermsOrFail()
    {
        if ($this->suggestionTerms === null) {
            $this->throwNullValueException(static::SUGGESTION_TERMS);
        }

        return $this->suggestionTerms;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuggestionTerms()
    {
        $this->assertPropertyIsSet(self::SUGGESTION_TERMS);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $completionTerms
     *
     * @return $this
     */
    public function setCompletionTerms($completionTerms)
    {
        $this->completionTerms = $completionTerms;
        $this->modifiedProperties[self::COMPLETION_TERMS] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return bool|null
     */
    public function getCompletionTerms()
    {
        return $this->completionTerms;
    }

    /**
     * @module ProductSearch
     *
     * @param bool|null $completionTerms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompletionTermsOrFail($completionTerms)
    {
        if ($completionTerms === null) {
            $this->throwNullValueException(static::COMPLETION_TERMS);
        }

        return $this->setCompletionTerms($completionTerms);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getCompletionTermsOrFail()
    {
        if ($this->completionTerms === null) {
            $this->throwNullValueException(static::COMPLETION_TERMS);
        }

        return $this->completionTerms;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompletionTerms()
    {
        $this->assertPropertyIsSet(self::COMPLETION_TERMS);

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
                case 'idProductAttributeKey':
                case 'key':
                case 'fullText':
                case 'fullTextBoosted':
                case 'suggestionTerms':
                case 'completionTerms':
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
                case 'idProductAttributeKey':
                case 'key':
                case 'fullText':
                case 'fullTextBoosted':
                case 'suggestionTerms':
                case 'completionTerms':
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
                case 'idProductAttributeKey':
                case 'key':
                case 'fullText':
                case 'fullTextBoosted':
                case 'suggestionTerms':
                case 'completionTerms':
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
            'idProductAttributeKey' => $this->idProductAttributeKey,
            'key' => $this->key,
            'fullText' => $this->fullText,
            'fullTextBoosted' => $this->fullTextBoosted,
            'suggestionTerms' => $this->suggestionTerms,
            'completionTerms' => $this->completionTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey,
            'key' => $this->key,
            'full_text' => $this->fullText,
            'full_text_boosted' => $this->fullTextBoosted,
            'suggestion_terms' => $this->suggestionTerms,
            'completion_terms' => $this->completionTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, false) : $this->idProductAttributeKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'full_text' => $this->fullText instanceof AbstractTransfer ? $this->fullText->toArray(true, false) : $this->fullText,
            'full_text_boosted' => $this->fullTextBoosted instanceof AbstractTransfer ? $this->fullTextBoosted->toArray(true, false) : $this->fullTextBoosted,
            'suggestion_terms' => $this->suggestionTerms instanceof AbstractTransfer ? $this->suggestionTerms->toArray(true, false) : $this->suggestionTerms,
            'completion_terms' => $this->completionTerms instanceof AbstractTransfer ? $this->completionTerms->toArray(true, false) : $this->completionTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAttributeKey' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, true) : $this->idProductAttributeKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'fullText' => $this->fullText instanceof AbstractTransfer ? $this->fullText->toArray(true, true) : $this->fullText,
            'fullTextBoosted' => $this->fullTextBoosted instanceof AbstractTransfer ? $this->fullTextBoosted->toArray(true, true) : $this->fullTextBoosted,
            'suggestionTerms' => $this->suggestionTerms instanceof AbstractTransfer ? $this->suggestionTerms->toArray(true, true) : $this->suggestionTerms,
            'completionTerms' => $this->completionTerms instanceof AbstractTransfer ? $this->completionTerms->toArray(true, true) : $this->completionTerms,
        ];
    }
}
