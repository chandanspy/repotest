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
class SpyNavigationStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_NAVIGATION_STORAGE = 'idNavigationStorage';

    /**
     * @var string
     */
    public const FK_NAVIGATION = 'fkNavigation';

    /**
     * @var string
     */
    public const NAVIGATION_KEY = 'navigationKey';

    /**
     * @var string|null
     */
    protected $idNavigationStorage;

    /**
     * @var integer|null
     */
    protected $fkNavigation;

    /**
     * @var string|null
     */
    protected $navigationKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_navigation_storage' => 'idNavigationStorage',
        'idNavigationStorage' => 'idNavigationStorage',
        'IdNavigationStorage' => 'idNavigationStorage',
        'fk_navigation' => 'fkNavigation',
        'fkNavigation' => 'fkNavigation',
        'FkNavigation' => 'fkNavigation',
        'navigation_key' => 'navigationKey',
        'navigationKey' => 'navigationKey',
        'NavigationKey' => 'navigationKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_NAVIGATION_STORAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_navigation_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_NAVIGATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_navigation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAVIGATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'navigation_key',
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
    public static $entityNamespace = 'Orm\Zed\NavigationStorage\Persistence\SpyNavigationStorage';


    /**
     * @module 
     *
     * @param string|null $idNavigationStorage
     *
     * @return $this
     */
    public function setIdNavigationStorage($idNavigationStorage)
    {
        $this->idNavigationStorage = $idNavigationStorage;
        $this->modifiedProperties[self::ID_NAVIGATION_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdNavigationStorage()
    {
        return $this->idNavigationStorage;
    }

    /**
     * @module 
     *
     * @param string|null $idNavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdNavigationStorageOrFail($idNavigationStorage)
    {
        if ($idNavigationStorage === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_STORAGE);
        }

        return $this->setIdNavigationStorage($idNavigationStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdNavigationStorageOrFail()
    {
        if ($this->idNavigationStorage === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_STORAGE);
        }

        return $this->idNavigationStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdNavigationStorage()
    {
        $this->assertPropertyIsSet(self::ID_NAVIGATION_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNavigation
     *
     * @return $this
     */
    public function setFkNavigation($fkNavigation)
    {
        $this->fkNavigation = $fkNavigation;
        $this->modifiedProperties[self::FK_NAVIGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkNavigation()
    {
        return $this->fkNavigation;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNavigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkNavigationOrFail($fkNavigation)
    {
        if ($fkNavigation === null) {
            $this->throwNullValueException(static::FK_NAVIGATION);
        }

        return $this->setFkNavigation($fkNavigation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkNavigationOrFail()
    {
        if ($this->fkNavigation === null) {
            $this->throwNullValueException(static::FK_NAVIGATION);
        }

        return $this->fkNavigation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkNavigation()
    {
        $this->assertPropertyIsSet(self::FK_NAVIGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $navigationKey
     *
     * @return $this
     */
    public function setNavigationKey($navigationKey)
    {
        $this->navigationKey = $navigationKey;
        $this->modifiedProperties[self::NAVIGATION_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getNavigationKey()
    {
        return $this->navigationKey;
    }

    /**
     * @module 
     *
     * @param string|null $navigationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNavigationKeyOrFail($navigationKey)
    {
        if ($navigationKey === null) {
            $this->throwNullValueException(static::NAVIGATION_KEY);
        }

        return $this->setNavigationKey($navigationKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNavigationKeyOrFail()
    {
        if ($this->navigationKey === null) {
            $this->throwNullValueException(static::NAVIGATION_KEY);
        }

        return $this->navigationKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNavigationKey()
    {
        $this->assertPropertyIsSet(self::NAVIGATION_KEY);

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
                case 'idNavigationStorage':
                case 'fkNavigation':
                case 'navigationKey':
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
                case 'idNavigationStorage':
                case 'fkNavigation':
                case 'navigationKey':
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
                case 'idNavigationStorage':
                case 'fkNavigation':
                case 'navigationKey':
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
            'idNavigationStorage' => $this->idNavigationStorage,
            'fkNavigation' => $this->fkNavigation,
            'navigationKey' => $this->navigationKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_storage' => $this->idNavigationStorage,
            'fk_navigation' => $this->fkNavigation,
            'navigation_key' => $this->navigationKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_storage' => $this->idNavigationStorage instanceof AbstractTransfer ? $this->idNavigationStorage->toArray(true, false) : $this->idNavigationStorage,
            'fk_navigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, false) : $this->fkNavigation,
            'navigation_key' => $this->navigationKey instanceof AbstractTransfer ? $this->navigationKey->toArray(true, false) : $this->navigationKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idNavigationStorage' => $this->idNavigationStorage instanceof AbstractTransfer ? $this->idNavigationStorage->toArray(true, true) : $this->idNavigationStorage,
            'fkNavigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, true) : $this->fkNavigation,
            'navigationKey' => $this->navigationKey instanceof AbstractTransfer ? $this->navigationKey->toArray(true, true) : $this->navigationKey,
        ];
    }
}
