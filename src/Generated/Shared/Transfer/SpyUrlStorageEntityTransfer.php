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
class SpyUrlStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_URL_STORAGE = 'idUrlStorage';

    /**
     * @var string
     */
    public const FK_CATEGORYNODE = 'fkCategorynode';

    /**
     * @var string
     */
    public const FK_PAGE = 'fkPage';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_SET = 'fkProductSet';

    /**
     * @var string
     */
    public const FK_REDIRECT = 'fkRedirect';

    /**
     * @var string
     */
    public const FK_URL = 'fkUrl';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string|null
     */
    protected $idUrlStorage;

    /**
     * @var integer|null
     */
    protected $fkCategorynode;

    /**
     * @var integer|null
     */
    protected $fkPage;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductSet;

    /**
     * @var integer|null
     */
    protected $fkRedirect;

    /**
     * @var integer|null
     */
    protected $fkUrl;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_url_storage' => 'idUrlStorage',
        'idUrlStorage' => 'idUrlStorage',
        'IdUrlStorage' => 'idUrlStorage',
        'fk_categorynode' => 'fkCategorynode',
        'fkCategorynode' => 'fkCategorynode',
        'FkCategorynode' => 'fkCategorynode',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_product_set' => 'fkProductSet',
        'fkProductSet' => 'fkProductSet',
        'FkProductSet' => 'fkProductSet',
        'fk_redirect' => 'fkRedirect',
        'fkRedirect' => 'fkRedirect',
        'FkRedirect' => 'fkRedirect',
        'fk_url' => 'fkUrl',
        'fkUrl' => 'fkUrl',
        'FkUrl' => 'fkUrl',
        'url' => 'url',
        'Url' => 'url',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_URL_STORAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_url_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORYNODE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_categorynode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_REDIRECT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_URL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
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
    public static $entityNamespace = 'Orm\Zed\UrlStorage\Persistence\SpyUrlStorage';


    /**
     * @module 
     *
     * @param string|null $idUrlStorage
     *
     * @return $this
     */
    public function setIdUrlStorage($idUrlStorage)
    {
        $this->idUrlStorage = $idUrlStorage;
        $this->modifiedProperties[self::ID_URL_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdUrlStorage()
    {
        return $this->idUrlStorage;
    }

    /**
     * @module 
     *
     * @param string|null $idUrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUrlStorageOrFail($idUrlStorage)
    {
        if ($idUrlStorage === null) {
            $this->throwNullValueException(static::ID_URL_STORAGE);
        }

        return $this->setIdUrlStorage($idUrlStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdUrlStorageOrFail()
    {
        if ($this->idUrlStorage === null) {
            $this->throwNullValueException(static::ID_URL_STORAGE);
        }

        return $this->idUrlStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUrlStorage()
    {
        $this->assertPropertyIsSet(self::ID_URL_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategorynode
     *
     * @return $this
     */
    public function setFkCategorynode($fkCategorynode)
    {
        $this->fkCategorynode = $fkCategorynode;
        $this->modifiedProperties[self::FK_CATEGORYNODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategorynode()
    {
        return $this->fkCategorynode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategorynode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategorynodeOrFail($fkCategorynode)
    {
        if ($fkCategorynode === null) {
            $this->throwNullValueException(static::FK_CATEGORYNODE);
        }

        return $this->setFkCategorynode($fkCategorynode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategorynodeOrFail()
    {
        if ($this->fkCategorynode === null) {
            $this->throwNullValueException(static::FK_CATEGORYNODE);
        }

        return $this->fkCategorynode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategorynode()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORYNODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPage
     *
     * @return $this
     */
    public function setFkPage($fkPage)
    {
        $this->fkPage = $fkPage;
        $this->modifiedProperties[self::FK_PAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPageOrFail($fkPage)
    {
        if ($fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->setFkPage($fkPage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPageOrFail()
    {
        if ($this->fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->fkPage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPage()
    {
        $this->assertPropertyIsSet(self::FK_PAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductSet
     *
     * @return $this
     */
    public function setFkProductSet($fkProductSet)
    {
        $this->fkProductSet = $fkProductSet;
        $this->modifiedProperties[self::FK_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductSet()
    {
        return $this->fkProductSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductSetOrFail($fkProductSet)
    {
        if ($fkProductSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_SET);
        }

        return $this->setFkProductSet($fkProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductSetOrFail()
    {
        if ($this->fkProductSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_SET);
        }

        return $this->fkProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductSet()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkRedirect
     *
     * @return $this
     */
    public function setFkRedirect($fkRedirect)
    {
        $this->fkRedirect = $fkRedirect;
        $this->modifiedProperties[self::FK_REDIRECT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkRedirect()
    {
        return $this->fkRedirect;
    }

    /**
     * @module 
     *
     * @param integer|null $fkRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkRedirectOrFail($fkRedirect)
    {
        if ($fkRedirect === null) {
            $this->throwNullValueException(static::FK_REDIRECT);
        }

        return $this->setFkRedirect($fkRedirect);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkRedirectOrFail()
    {
        if ($this->fkRedirect === null) {
            $this->throwNullValueException(static::FK_REDIRECT);
        }

        return $this->fkRedirect;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkRedirect()
    {
        $this->assertPropertyIsSet(self::FK_REDIRECT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrl
     *
     * @return $this
     */
    public function setFkUrl($fkUrl)
    {
        $this->fkUrl = $fkUrl;
        $this->modifiedProperties[self::FK_URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUrl()
    {
        return $this->fkUrl;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUrlOrFail($fkUrl)
    {
        if ($fkUrl === null) {
            $this->throwNullValueException(static::FK_URL);
        }

        return $this->setFkUrl($fkUrl);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUrlOrFail()
    {
        if ($this->fkUrl === null) {
            $this->throwNullValueException(static::FK_URL);
        }

        return $this->fkUrl;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUrl()
    {
        $this->assertPropertyIsSet(self::FK_URL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module 
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

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
                case 'idUrlStorage':
                case 'fkCategorynode':
                case 'fkPage':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'fkRedirect':
                case 'fkUrl':
                case 'url':
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
                case 'idUrlStorage':
                case 'fkCategorynode':
                case 'fkPage':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'fkRedirect':
                case 'fkUrl':
                case 'url':
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
                case 'idUrlStorage':
                case 'fkCategorynode':
                case 'fkPage':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'fkRedirect':
                case 'fkUrl':
                case 'url':
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
            'idUrlStorage' => $this->idUrlStorage,
            'fkCategorynode' => $this->fkCategorynode,
            'fkPage' => $this->fkPage,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkProductSet' => $this->fkProductSet,
            'fkRedirect' => $this->fkRedirect,
            'fkUrl' => $this->fkUrl,
            'url' => $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_url_storage' => $this->idUrlStorage,
            'fk_categorynode' => $this->fkCategorynode,
            'fk_page' => $this->fkPage,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_product_set' => $this->fkProductSet,
            'fk_redirect' => $this->fkRedirect,
            'fk_url' => $this->fkUrl,
            'url' => $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_url_storage' => $this->idUrlStorage instanceof AbstractTransfer ? $this->idUrlStorage->toArray(true, false) : $this->idUrlStorage,
            'fk_categorynode' => $this->fkCategorynode instanceof AbstractTransfer ? $this->fkCategorynode->toArray(true, false) : $this->fkCategorynode,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_product_set' => $this->fkProductSet instanceof AbstractTransfer ? $this->fkProductSet->toArray(true, false) : $this->fkProductSet,
            'fk_redirect' => $this->fkRedirect instanceof AbstractTransfer ? $this->fkRedirect->toArray(true, false) : $this->fkRedirect,
            'fk_url' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, false) : $this->fkUrl,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUrlStorage' => $this->idUrlStorage instanceof AbstractTransfer ? $this->idUrlStorage->toArray(true, true) : $this->idUrlStorage,
            'fkCategorynode' => $this->fkCategorynode instanceof AbstractTransfer ? $this->fkCategorynode->toArray(true, true) : $this->fkCategorynode,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkProductSet' => $this->fkProductSet instanceof AbstractTransfer ? $this->fkProductSet->toArray(true, true) : $this->fkProductSet,
            'fkRedirect' => $this->fkRedirect instanceof AbstractTransfer ? $this->fkRedirect->toArray(true, true) : $this->fkRedirect,
            'fkUrl' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, true) : $this->fkUrl,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
        ];
    }
}
