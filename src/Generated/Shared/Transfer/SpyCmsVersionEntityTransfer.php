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
class SpyCmsVersionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_VERSION = 'idCmsVersion';

    /**
     * @var string
     */
    public const FK_CMS_PAGE = 'fkCmsPage';

    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const VERSION_NAME = 'versionName';

    /**
     * @var string
     */
    public const SPY_USER = 'spyUser';

    /**
     * @var string
     */
    public const SPY_CMS_PAGE = 'spyCmsPage';

    /**
     * @var integer|null
     */
    protected $idCmsVersion;

    /**
     * @var integer|null
     */
    protected $fkCmsPage;

    /**
     * @var integer|null
     */
    protected $fkUser;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var integer|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $versionName;

    /**
     * @var \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    protected $spyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null
     */
    protected $spyCmsPage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_version' => 'idCmsVersion',
        'idCmsVersion' => 'idCmsVersion',
        'IdCmsVersion' => 'idCmsVersion',
        'fk_cms_page' => 'fkCmsPage',
        'fkCmsPage' => 'fkCmsPage',
        'FkCmsPage' => 'fkCmsPage',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'data' => 'data',
        'Data' => 'data',
        'version' => 'version',
        'Version' => 'version',
        'version_name' => 'versionName',
        'versionName' => 'versionName',
        'VersionName' => 'versionName',
        'spy_user' => 'spyUser',
        'spyUser' => 'spyUser',
        'SpyUser' => 'spyUser',
        'spy_cms_page' => 'spyCmsPage',
        'spyCmsPage' => 'spyCmsPage',
        'SpyCmsPage' => 'spyCmsPage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_VERSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_PAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'string',
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
        self::VERSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VERSION_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'version_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_PAGE => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_page',
            'is_collection' => false,
            'is_transfer' => true,
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
    public static $entityNamespace = 'Orm\Zed\Cms\Persistence\SpyCmsVersion';


    /**
     * @module 
     *
     * @param integer|null $idCmsVersion
     *
     * @return $this
     */
    public function setIdCmsVersion($idCmsVersion)
    {
        $this->idCmsVersion = $idCmsVersion;
        $this->modifiedProperties[self::ID_CMS_VERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsVersion()
    {
        return $this->idCmsVersion;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsVersion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsVersionOrFail($idCmsVersion)
    {
        if ($idCmsVersion === null) {
            $this->throwNullValueException(static::ID_CMS_VERSION);
        }

        return $this->setIdCmsVersion($idCmsVersion);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsVersionOrFail()
    {
        if ($this->idCmsVersion === null) {
            $this->throwNullValueException(static::ID_CMS_VERSION);
        }

        return $this->idCmsVersion;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsVersion()
    {
        $this->assertPropertyIsSet(self::ID_CMS_VERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsPage
     *
     * @return $this
     */
    public function setFkCmsPage($fkCmsPage)
    {
        $this->fkCmsPage = $fkCmsPage;
        $this->modifiedProperties[self::FK_CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsPage()
    {
        return $this->fkCmsPage;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsPageOrFail($fkCmsPage)
    {
        if ($fkCmsPage === null) {
            $this->throwNullValueException(static::FK_CMS_PAGE);
        }

        return $this->setFkCmsPage($fkCmsPage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsPageOrFail()
    {
        if ($this->fkCmsPage === null) {
            $this->throwNullValueException(static::FK_CMS_PAGE);
        }

        return $this->fkCmsPage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsPage()
    {
        $this->assertPropertyIsSet(self::FK_CMS_PAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @return $this
     */
    public function setFkUser($fkUser)
    {
        $this->fkUser = $fkUser;
        $this->modifiedProperties[self::FK_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUserOrFail($fkUser)
    {
        if ($fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->setFkUser($fkUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUserOrFail()
    {
        if ($this->fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->fkUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUser()
    {
        $this->assertPropertyIsSet(self::FK_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail($data)
    {
        if ($data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->setData($data);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->modifiedProperties[self::VERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module 
     *
     * @param integer|null $version
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionOrFail($version)
    {
        if ($version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->setVersion($version);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersion()
    {
        $this->assertPropertyIsSet(self::VERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;
        $this->modifiedProperties[self::VERSION_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * @module 
     *
     * @param string|null $versionName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionNameOrFail($versionName)
    {
        if ($versionName === null) {
            $this->throwNullValueException(static::VERSION_NAME);
        }

        return $this->setVersionName($versionName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVersionNameOrFail()
    {
        if ($this->versionName === null) {
            $this->throwNullValueException(static::VERSION_NAME);
        }

        return $this->versionName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersionName()
    {
        $this->assertPropertyIsSet(self::VERSION_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer|null $spyUser
     *
     * @return $this
     */
    public function setSpyUser(SpyUserEntityTransfer $spyUser = null)
    {
        $this->spyUser = $spyUser;
        $this->modifiedProperties[self::SPY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    public function getSpyUser()
    {
        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $spyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyUserOrFail(SpyUserEntityTransfer $spyUser)
    {
        return $this->setSpyUser($spyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer
     */
    public function getSpyUserOrFail()
    {
        if ($this->spyUser === null) {
            $this->throwNullValueException(static::SPY_USER);
        }

        return $this->spyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUser()
    {
        $this->assertPropertyIsSet(self::SPY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null $spyCmsPage
     *
     * @return $this
     */
    public function setSpyCmsPage(SpyCmsPageEntityTransfer $spyCmsPage = null)
    {
        $this->spyCmsPage = $spyCmsPage;
        $this->modifiedProperties[self::SPY_CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null
     */
    public function getSpyCmsPage()
    {
        return $this->spyCmsPage;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageEntityTransfer $spyCmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCmsPageOrFail(SpyCmsPageEntityTransfer $spyCmsPage)
    {
        return $this->setSpyCmsPage($spyCmsPage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsPageEntityTransfer
     */
    public function getSpyCmsPageOrFail()
    {
        if ($this->spyCmsPage === null) {
            $this->throwNullValueException(static::SPY_CMS_PAGE);
        }

        return $this->spyCmsPage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsPage()
    {
        $this->assertPropertyIsSet(self::SPY_CMS_PAGE);

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
                case 'idCmsVersion':
                case 'fkCmsPage':
                case 'fkUser':
                case 'data':
                case 'version':
                case 'versionName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyUser':
                case 'spyCmsPage':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'idCmsVersion':
                case 'fkCmsPage':
                case 'fkUser':
                case 'data':
                case 'version':
                case 'versionName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
                case 'spyCmsPage':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idCmsVersion':
                case 'fkCmsPage':
                case 'fkUser':
                case 'data':
                case 'version':
                case 'versionName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUser':
                case 'spyCmsPage':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idCmsVersion' => $this->idCmsVersion,
            'fkCmsPage' => $this->fkCmsPage,
            'fkUser' => $this->fkUser,
            'data' => $this->data,
            'version' => $this->version,
            'versionName' => $this->versionName,
            'spyUser' => $this->spyUser,
            'spyCmsPage' => $this->spyCmsPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_version' => $this->idCmsVersion,
            'fk_cms_page' => $this->fkCmsPage,
            'fk_user' => $this->fkUser,
            'data' => $this->data,
            'version' => $this->version,
            'version_name' => $this->versionName,
            'spy_user' => $this->spyUser,
            'spy_cms_page' => $this->spyCmsPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_version' => $this->idCmsVersion instanceof AbstractTransfer ? $this->idCmsVersion->toArray(true, false) : $this->idCmsVersion,
            'fk_cms_page' => $this->fkCmsPage instanceof AbstractTransfer ? $this->fkCmsPage->toArray(true, false) : $this->fkCmsPage,
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'version_name' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, false) : $this->versionName,
            'spy_user' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, false) : $this->spyUser,
            'spy_cms_page' => $this->spyCmsPage instanceof AbstractTransfer ? $this->spyCmsPage->toArray(true, false) : $this->spyCmsPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsVersion' => $this->idCmsVersion instanceof AbstractTransfer ? $this->idCmsVersion->toArray(true, true) : $this->idCmsVersion,
            'fkCmsPage' => $this->fkCmsPage instanceof AbstractTransfer ? $this->fkCmsPage->toArray(true, true) : $this->fkCmsPage,
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'versionName' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, true) : $this->versionName,
            'spyUser' => $this->spyUser instanceof AbstractTransfer ? $this->spyUser->toArray(true, true) : $this->spyUser,
            'spyCmsPage' => $this->spyCmsPage instanceof AbstractTransfer ? $this->spyCmsPage->toArray(true, true) : $this->spyCmsPage,
        ];
    }
}
