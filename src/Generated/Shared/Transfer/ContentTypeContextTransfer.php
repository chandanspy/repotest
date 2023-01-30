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
class ContentTypeContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CONTENT = 'idContent';

    /**
     * @var string
     */
    public const TERM = 'term';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var int|null
     */
    protected $idContent;

    /**
     * @var string|null
     */
    protected $term;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_content' => 'idContent',
        'idContent' => 'idContent',
        'IdContent' => 'idContent',
        'term' => 'term',
        'Term' => 'term',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONTENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TERM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'term',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
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
    ];

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param int|null $idContent
     *
     * @return $this
     */
    public function setIdContent($idContent)
    {
        $this->idContent = $idContent;
        $this->modifiedProperties[self::ID_CONTENT] = true;

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentProductSet|ContentProduct|ContentStorage
     *
     * @return int|null
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param int|null $idContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdContentOrFail($idContent)
    {
        if ($idContent === null) {
            $this->throwNullValueException(static::ID_CONTENT);
        }

        return $this->setIdContent($idContent);
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentProductSet|ContentProduct|ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdContentOrFail()
    {
        if ($this->idContent === null) {
            $this->throwNullValueException(static::ID_CONTENT);
        }

        return $this->idContent;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentProductSet|ContentProduct|ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdContent()
    {
        $this->assertPropertyIsSet(self::ID_CONTENT);

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param string|null $term
     *
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;
        $this->modifiedProperties[self::TERM] = true;

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param string|null $term
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTermOrFail($term)
    {
        if ($term === null) {
            $this->throwNullValueException(static::TERM);
        }

        return $this->setTerm($term);
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTermOrFail()
    {
        if ($this->term === null) {
            $this->throwNullValueException(static::TERM);
        }

        return $this->term;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTerm()
    {
        $this->assertPropertyIsSet(self::TERM);

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @param mixed $parameters
     *
     * @return $this
     */
    public function addParameters($parameters)
    {
        $this->parameters[] = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ContentProductSetWidget|ContentBanner|ContentFile|ContentNavigation|ContentProductSet|ContentProduct|ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module ContentBanner|ContentProduct|ContentStorage
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
     * @module ContentBanner|ContentProduct|ContentStorage
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ContentBanner|ContentProduct|ContentStorage
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
     * @module ContentBanner|ContentProduct|ContentStorage
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
     * @module ContentBanner|ContentProduct|ContentStorage
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
                case 'idContent':
                case 'term':
                case 'parameters':
                case 'key':
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
                case 'idContent':
                case 'term':
                case 'parameters':
                case 'key':
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
                case 'idContent':
                case 'term':
                case 'parameters':
                case 'key':
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
            'idContent' => $this->idContent,
            'term' => $this->term,
            'parameters' => $this->parameters,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_content' => $this->idContent,
            'term' => $this->term,
            'parameters' => $this->parameters,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_content' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, false) : $this->idContent,
            'term' => $this->term instanceof AbstractTransfer ? $this->term->toArray(true, false) : $this->term,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idContent' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, true) : $this->idContent,
            'term' => $this->term instanceof AbstractTransfer ? $this->term->toArray(true, true) : $this->term,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
        ];
    }
}
