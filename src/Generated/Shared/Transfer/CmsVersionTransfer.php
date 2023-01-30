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
class CmsVersionTransfer extends AbstractTransfer
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
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const VERSION_NAME = 'versionName';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const FK_USER = 'fkUser';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var int|null
     */
    protected $idCmsVersion;

    /**
     * @var int|null
     */
    protected $fkCmsPage;

    /**
     * @var int|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $versionName;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var int|null
     */
    protected $fkUser;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

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
        'version' => 'version',
        'Version' => 'version',
        'version_name' => 'versionName',
        'versionName' => 'versionName',
        'VersionName' => 'versionName',
        'data' => 'data',
        'Data' => 'data',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'fk_user' => 'fkUser',
        'fkUser' => 'fkUser',
        'FkUser' => 'fkUser',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_VERSION => [
            'type' => 'int',
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
            'type' => 'int',
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
        self::VERSION => [
            'type' => 'int',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_USER => [
            'type' => 'int',
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
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
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
     * @module CmsGui|CmsUserConnector|Cms
     *
     * @param int|null $idCmsVersion
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
     * @module CmsGui|CmsUserConnector|Cms
     *
     * @return int|null
     */
    public function getIdCmsVersion()
    {
        return $this->idCmsVersion;
    }

    /**
     * @module CmsGui|CmsUserConnector|Cms
     *
     * @param int|null $idCmsVersion
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
     * @module CmsGui|CmsUserConnector|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsVersionOrFail()
    {
        if ($this->idCmsVersion === null) {
            $this->throwNullValueException(static::ID_CMS_VERSION);
        }

        return $this->idCmsVersion;
    }

    /**
     * @module CmsGui|CmsUserConnector|Cms
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
     * @module CmsGui|CmsPageDataImport|Cms
     *
     * @param int|null $fkCmsPage
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
     * @module CmsGui|CmsPageDataImport|Cms
     *
     * @return int|null
     */
    public function getFkCmsPage()
    {
        return $this->fkCmsPage;
    }

    /**
     * @module CmsGui|CmsPageDataImport|Cms
     *
     * @param int|null $fkCmsPage
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
     * @module CmsGui|CmsPageDataImport|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCmsPageOrFail()
    {
        if ($this->fkCmsPage === null) {
            $this->throwNullValueException(static::FK_CMS_PAGE);
        }

        return $this->fkCmsPage;
    }

    /**
     * @module CmsGui|CmsPageDataImport|Cms
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
     * @module CmsGui|Cms
     *
     * @param int|null $version
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
     * @module CmsGui|Cms
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $version
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
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @param int|null $fkUser
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
     * @module CmsGui|CmsUserConnector
     *
     * @return int|null
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @param int|null $fkUser
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
     * @module CmsGui|CmsUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkUserOrFail()
    {
        if ($this->fkUser === null) {
            $this->throwNullValueException(static::FK_USER);
        }

        return $this->fkUser;
    }

    /**
     * @module CmsGui|CmsUserConnector
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
     * @module CmsGui|CmsUserConnector
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CmsGui|CmsUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

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
                case 'version':
                case 'versionName':
                case 'data':
                case 'createdAt':
                case 'updatedAt':
                case 'fkUser':
                case 'firstName':
                case 'lastName':
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
                case 'idCmsVersion':
                case 'fkCmsPage':
                case 'version':
                case 'versionName':
                case 'data':
                case 'createdAt':
                case 'updatedAt':
                case 'fkUser':
                case 'firstName':
                case 'lastName':
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
                case 'idCmsVersion':
                case 'fkCmsPage':
                case 'version':
                case 'versionName':
                case 'data':
                case 'createdAt':
                case 'updatedAt':
                case 'fkUser':
                case 'firstName':
                case 'lastName':
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
            'idCmsVersion' => $this->idCmsVersion,
            'fkCmsPage' => $this->fkCmsPage,
            'version' => $this->version,
            'versionName' => $this->versionName,
            'data' => $this->data,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'fkUser' => $this->fkUser,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
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
            'version' => $this->version,
            'version_name' => $this->versionName,
            'data' => $this->data,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'fk_user' => $this->fkUser,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
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
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'version_name' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, false) : $this->versionName,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'fk_user' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, false) : $this->fkUser,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
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
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'versionName' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, true) : $this->versionName,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'fkUser' => $this->fkUser instanceof AbstractTransfer ? $this->fkUser->toArray(true, true) : $this->fkUser,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
        ];
    }
}
