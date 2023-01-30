<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCommentEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMMENT = 'idComment';

    /**
     * @var string
     */
    public const FK_COMMENT_THREAD = 'fkCommentThread';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const IS_DELETED = 'isDeleted';

    /**
     * @var string
     */
    public const IS_UPDATED = 'isUpdated';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_CUSTOMER = 'spyCustomer';

    /**
     * @var string
     */
    public const SPY_COMMENT_THREAD = 'spyCommentThread';

    /**
     * @var string
     */
    public const SPY_COMMENT_TO_COMMENT_TAGS = 'spyCommentToCommentTags';

    /**
     * @var integer|null
     */
    protected $idComment;

    /**
     * @var integer|null
     */
    protected $fkCommentThread;

    /**
     * @var integer|null
     */
    protected $fkCustomer;

    /**
     * @var boolean|null
     */
    protected $isDeleted;

    /**
     * @var boolean|null
     */
    protected $isUpdated;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    protected $spyCustomer;

    /**
     * @var \Generated\Shared\Transfer\SpyCommentThreadEntityTransfer|null
     */
    protected $spyCommentThread;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCommentToCommentTagEntityTransfer[]
     */
    protected $spyCommentToCommentTags;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_comment' => 'idComment',
        'idComment' => 'idComment',
        'IdComment' => 'idComment',
        'fk_comment_thread' => 'fkCommentThread',
        'fkCommentThread' => 'fkCommentThread',
        'FkCommentThread' => 'fkCommentThread',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'is_deleted' => 'isDeleted',
        'isDeleted' => 'isDeleted',
        'IsDeleted' => 'isDeleted',
        'is_updated' => 'isUpdated',
        'isUpdated' => 'isUpdated',
        'IsUpdated' => 'isUpdated',
        'key' => 'key',
        'Key' => 'key',
        'message' => 'message',
        'Message' => 'message',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_customer' => 'spyCustomer',
        'spyCustomer' => 'spyCustomer',
        'SpyCustomer' => 'spyCustomer',
        'spy_comment_thread' => 'spyCommentThread',
        'spyCommentThread' => 'spyCommentThread',
        'SpyCommentThread' => 'spyCommentThread',
        'spy_comment_to_comment_tags' => 'spyCommentToCommentTags',
        'spyCommentToCommentTags' => 'spyCommentToCommentTags',
        'SpyCommentToCommentTags' => 'spyCommentToCommentTags',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_comment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMMENT_THREAD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_comment_thread',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DELETED => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_deleted',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_UPDATED => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_updated',
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
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMMENT_THREAD => [
            'type' => 'Generated\Shared\Transfer\SpyCommentThreadEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comment_thread',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMMENT_TO_COMMENT_TAGS => [
            'type' => 'Generated\Shared\Transfer\SpyCommentToCommentTagEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comment_to_comment_tags',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\Comment\Persistence\SpyComment';


    /**
     * @module 
     *
     * @param integer|null $idComment
     *
     * @return $this
     */
    public function setIdComment($idComment)
    {
        $this->idComment = $idComment;
        $this->modifiedProperties[self::ID_COMMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * @module 
     *
     * @param integer|null $idComment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCommentOrFail($idComment)
    {
        if ($idComment === null) {
            $this->throwNullValueException(static::ID_COMMENT);
        }

        return $this->setIdComment($idComment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCommentOrFail()
    {
        if ($this->idComment === null) {
            $this->throwNullValueException(static::ID_COMMENT);
        }

        return $this->idComment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdComment()
    {
        $this->assertPropertyIsSet(self::ID_COMMENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCommentThread
     *
     * @return $this
     */
    public function setFkCommentThread($fkCommentThread)
    {
        $this->fkCommentThread = $fkCommentThread;
        $this->modifiedProperties[self::FK_COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCommentThread()
    {
        return $this->fkCommentThread;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCommentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCommentThreadOrFail($fkCommentThread)
    {
        if ($fkCommentThread === null) {
            $this->throwNullValueException(static::FK_COMMENT_THREAD);
        }

        return $this->setFkCommentThread($fkCommentThread);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCommentThreadOrFail()
    {
        if ($this->fkCommentThread === null) {
            $this->throwNullValueException(static::FK_COMMENT_THREAD);
        }

        return $this->fkCommentThread;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCommentThread()
    {
        $this->assertPropertyIsSet(self::FK_COMMENT_THREAD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        $this->modifiedProperties[self::IS_DELETED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDeleted
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDeletedOrFail($isDeleted)
    {
        if ($isDeleted === null) {
            $this->throwNullValueException(static::IS_DELETED);
        }

        return $this->setIsDeleted($isDeleted);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDeletedOrFail()
    {
        if ($this->isDeleted === null) {
            $this->throwNullValueException(static::IS_DELETED);
        }

        return $this->isDeleted;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDeleted()
    {
        $this->assertPropertyIsSet(self::IS_DELETED);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isUpdated
     *
     * @return $this
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        $this->modifiedProperties[self::IS_UPDATED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * @module 
     *
     * @param boolean|null $isUpdated
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsUpdatedOrFail($isUpdated)
    {
        if ($isUpdated === null) {
            $this->throwNullValueException(static::IS_UPDATED);
        }

        return $this->setIsUpdated($isUpdated);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsUpdatedOrFail()
    {
        if ($this->isUpdated === null) {
            $this->throwNullValueException(static::IS_UPDATED);
        }

        return $this->isUpdated;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsUpdated()
    {
        $this->assertPropertyIsSet(self::IS_UPDATED);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module 
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null $spyCustomer
     *
     * @return $this
     */
    public function setSpyCustomer(SpyCustomerEntityTransfer $spyCustomer = null)
    {
        $this->spyCustomer = $spyCustomer;
        $this->modifiedProperties[self::SPY_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    public function getSpyCustomer()
    {
        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $spyCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCustomerOrFail(SpyCustomerEntityTransfer $spyCustomer)
    {
        return $this->setSpyCustomer($spyCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer
     */
    public function getSpyCustomerOrFail()
    {
        if ($this->spyCustomer === null) {
            $this->throwNullValueException(static::SPY_CUSTOMER);
        }

        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomer()
    {
        $this->assertPropertyIsSet(self::SPY_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentThreadEntityTransfer|null $spyCommentThread
     *
     * @return $this
     */
    public function setSpyCommentThread(SpyCommentThreadEntityTransfer $spyCommentThread = null)
    {
        $this->spyCommentThread = $spyCommentThread;
        $this->modifiedProperties[self::SPY_COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCommentThreadEntityTransfer|null
     */
    public function getSpyCommentThread()
    {
        return $this->spyCommentThread;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentThreadEntityTransfer $spyCommentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCommentThreadOrFail(SpyCommentThreadEntityTransfer $spyCommentThread)
    {
        return $this->setSpyCommentThread($spyCommentThread);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCommentThreadEntityTransfer
     */
    public function getSpyCommentThreadOrFail()
    {
        if ($this->spyCommentThread === null) {
            $this->throwNullValueException(static::SPY_COMMENT_THREAD);
        }

        return $this->spyCommentThread;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCommentThread()
    {
        $this->assertPropertyIsSet(self::SPY_COMMENT_THREAD);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCommentToCommentTagEntityTransfer[] $spyCommentToCommentTags
     *
     * @return $this
     */
    public function setSpyCommentToCommentTags(ArrayObject $spyCommentToCommentTags)
    {
        $this->spyCommentToCommentTags = $spyCommentToCommentTags;
        $this->modifiedProperties[self::SPY_COMMENT_TO_COMMENT_TAGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCommentToCommentTagEntityTransfer[]
     */
    public function getSpyCommentToCommentTags()
    {
        return $this->spyCommentToCommentTags;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentToCommentTagEntityTransfer $spyCommentToCommentTags
     *
     * @return $this
     */
    public function addSpyCommentToCommentTags(SpyCommentToCommentTagEntityTransfer $spyCommentToCommentTags)
    {
        $this->spyCommentToCommentTags[] = $spyCommentToCommentTags;
        $this->modifiedProperties[self::SPY_COMMENT_TO_COMMENT_TAGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCommentToCommentTags()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMMENT_TO_COMMENT_TAGS);

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
                case 'idComment':
                case 'fkCommentThread':
                case 'fkCustomer':
                case 'isDeleted':
                case 'isUpdated':
                case 'key':
                case 'message':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCustomer':
                case 'spyCommentThread':
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
                case 'spyCommentToCommentTags':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idComment':
                case 'fkCommentThread':
                case 'fkCustomer':
                case 'isDeleted':
                case 'isUpdated':
                case 'key':
                case 'message':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                case 'spyCommentThread':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCommentToCommentTags':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idComment':
                case 'fkCommentThread':
                case 'fkCustomer':
                case 'isDeleted':
                case 'isUpdated':
                case 'key':
                case 'message':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                case 'spyCommentThread':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCommentToCommentTags':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyCommentToCommentTags = $this->spyCommentToCommentTags ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idComment' => $this->idComment,
            'fkCommentThread' => $this->fkCommentThread,
            'fkCustomer' => $this->fkCustomer,
            'isDeleted' => $this->isDeleted,
            'isUpdated' => $this->isUpdated,
            'key' => $this->key,
            'message' => $this->message,
            'uuid' => $this->uuid,
            'spyCustomer' => $this->spyCustomer,
            'spyCommentThread' => $this->spyCommentThread,
            'spyCommentToCommentTags' => $this->spyCommentToCommentTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_comment' => $this->idComment,
            'fk_comment_thread' => $this->fkCommentThread,
            'fk_customer' => $this->fkCustomer,
            'is_deleted' => $this->isDeleted,
            'is_updated' => $this->isUpdated,
            'key' => $this->key,
            'message' => $this->message,
            'uuid' => $this->uuid,
            'spy_customer' => $this->spyCustomer,
            'spy_comment_thread' => $this->spyCommentThread,
            'spy_comment_to_comment_tags' => $this->spyCommentToCommentTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_comment' => $this->idComment instanceof AbstractTransfer ? $this->idComment->toArray(true, false) : $this->idComment,
            'fk_comment_thread' => $this->fkCommentThread instanceof AbstractTransfer ? $this->fkCommentThread->toArray(true, false) : $this->fkCommentThread,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'is_deleted' => $this->isDeleted instanceof AbstractTransfer ? $this->isDeleted->toArray(true, false) : $this->isDeleted,
            'is_updated' => $this->isUpdated instanceof AbstractTransfer ? $this->isUpdated->toArray(true, false) : $this->isUpdated,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_customer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, false) : $this->spyCustomer,
            'spy_comment_thread' => $this->spyCommentThread instanceof AbstractTransfer ? $this->spyCommentThread->toArray(true, false) : $this->spyCommentThread,
            'spy_comment_to_comment_tags' => $this->spyCommentToCommentTags instanceof AbstractTransfer ? $this->spyCommentToCommentTags->toArray(true, false) : $this->addValuesToCollection($this->spyCommentToCommentTags, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idComment' => $this->idComment instanceof AbstractTransfer ? $this->idComment->toArray(true, true) : $this->idComment,
            'fkCommentThread' => $this->fkCommentThread instanceof AbstractTransfer ? $this->fkCommentThread->toArray(true, true) : $this->fkCommentThread,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'isDeleted' => $this->isDeleted instanceof AbstractTransfer ? $this->isDeleted->toArray(true, true) : $this->isDeleted,
            'isUpdated' => $this->isUpdated instanceof AbstractTransfer ? $this->isUpdated->toArray(true, true) : $this->isUpdated,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyCustomer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, true) : $this->spyCustomer,
            'spyCommentThread' => $this->spyCommentThread instanceof AbstractTransfer ? $this->spyCommentThread->toArray(true, true) : $this->spyCommentThread,
            'spyCommentToCommentTags' => $this->spyCommentToCommentTags instanceof AbstractTransfer ? $this->spyCommentToCommentTags->toArray(true, true) : $this->addValuesToCollection($this->spyCommentToCommentTags, true, true),
        ];
    }
}
