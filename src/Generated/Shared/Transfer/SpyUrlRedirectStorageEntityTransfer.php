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
class SpyUrlRedirectStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_URL_REDIRECT_STORAGE = 'idUrlRedirectStorage';

    /**
     * @var string
     */
    public const FK_URL_REDIRECT = 'fkUrlRedirect';

    /**
     * @var string|null
     */
    protected $idUrlRedirectStorage;

    /**
     * @var integer|null
     */
    protected $fkUrlRedirect;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_url_redirect_storage' => 'idUrlRedirectStorage',
        'idUrlRedirectStorage' => 'idUrlRedirectStorage',
        'IdUrlRedirectStorage' => 'idUrlRedirectStorage',
        'fk_url_redirect' => 'fkUrlRedirect',
        'fkUrlRedirect' => 'fkUrlRedirect',
        'FkUrlRedirect' => 'fkUrlRedirect',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_URL_REDIRECT_STORAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_url_redirect_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_URL_REDIRECT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_url_redirect',
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
    public static $entityNamespace = 'Orm\Zed\UrlStorage\Persistence\SpyUrlRedirectStorage';


    /**
     * @module 
     *
     * @param string|null $idUrlRedirectStorage
     *
     * @return $this
     */
    public function setIdUrlRedirectStorage($idUrlRedirectStorage)
    {
        $this->idUrlRedirectStorage = $idUrlRedirectStorage;
        $this->modifiedProperties[self::ID_URL_REDIRECT_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdUrlRedirectStorage()
    {
        return $this->idUrlRedirectStorage;
    }

    /**
     * @module 
     *
     * @param string|null $idUrlRedirectStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUrlRedirectStorageOrFail($idUrlRedirectStorage)
    {
        if ($idUrlRedirectStorage === null) {
            $this->throwNullValueException(static::ID_URL_REDIRECT_STORAGE);
        }

        return $this->setIdUrlRedirectStorage($idUrlRedirectStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdUrlRedirectStorageOrFail()
    {
        if ($this->idUrlRedirectStorage === null) {
            $this->throwNullValueException(static::ID_URL_REDIRECT_STORAGE);
        }

        return $this->idUrlRedirectStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUrlRedirectStorage()
    {
        $this->assertPropertyIsSet(self::ID_URL_REDIRECT_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrlRedirect
     *
     * @return $this
     */
    public function setFkUrlRedirect($fkUrlRedirect)
    {
        $this->fkUrlRedirect = $fkUrlRedirect;
        $this->modifiedProperties[self::FK_URL_REDIRECT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUrlRedirect()
    {
        return $this->fkUrlRedirect;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrlRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUrlRedirectOrFail($fkUrlRedirect)
    {
        if ($fkUrlRedirect === null) {
            $this->throwNullValueException(static::FK_URL_REDIRECT);
        }

        return $this->setFkUrlRedirect($fkUrlRedirect);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUrlRedirectOrFail()
    {
        if ($this->fkUrlRedirect === null) {
            $this->throwNullValueException(static::FK_URL_REDIRECT);
        }

        return $this->fkUrlRedirect;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUrlRedirect()
    {
        $this->assertPropertyIsSet(self::FK_URL_REDIRECT);

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
                case 'idUrlRedirectStorage':
                case 'fkUrlRedirect':
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
                case 'idUrlRedirectStorage':
                case 'fkUrlRedirect':
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
                case 'idUrlRedirectStorage':
                case 'fkUrlRedirect':
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
            'idUrlRedirectStorage' => $this->idUrlRedirectStorage,
            'fkUrlRedirect' => $this->fkUrlRedirect,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_url_redirect_storage' => $this->idUrlRedirectStorage,
            'fk_url_redirect' => $this->fkUrlRedirect,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_url_redirect_storage' => $this->idUrlRedirectStorage instanceof AbstractTransfer ? $this->idUrlRedirectStorage->toArray(true, false) : $this->idUrlRedirectStorage,
            'fk_url_redirect' => $this->fkUrlRedirect instanceof AbstractTransfer ? $this->fkUrlRedirect->toArray(true, false) : $this->fkUrlRedirect,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUrlRedirectStorage' => $this->idUrlRedirectStorage instanceof AbstractTransfer ? $this->idUrlRedirectStorage->toArray(true, true) : $this->idUrlRedirectStorage,
            'fkUrlRedirect' => $this->fkUrlRedirect instanceof AbstractTransfer ? $this->fkUrlRedirect->toArray(true, true) : $this->fkUrlRedirect,
        ];
    }
}
