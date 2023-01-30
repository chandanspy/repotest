<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CommentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMMENT = 'idComment';

    /**
     * @var string
     */
    public const ID_COMMENT_THREAD = 'idCommentThread';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const COMMENT_TAGS = 'commentTags';

    /**
     * @var string
     */
    public const TAG_NAMES = 'tagNames';

    /**
     * @var string
     */
    public const IS_UPDATED = 'isUpdated';

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
    public const ID_SALES_ORDER_COMMENT = 'idSalesOrderComment';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var int|null
     */
    protected $idComment;

    /**
     * @var int|null
     */
    protected $idCommentThread;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CommentTagTransfer[]
     */
    protected $commentTags;

    /**
     * @var array
     */
    protected $tagNames = [];

    /**
     * @var bool|null
     */
    protected $isUpdated;

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
    protected $idSalesOrderComment;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var int|null
     */
    protected $fkSalesOrder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_comment' => 'idComment',
        'idComment' => 'idComment',
        'IdComment' => 'idComment',
        'id_comment_thread' => 'idCommentThread',
        'idCommentThread' => 'idCommentThread',
        'IdCommentThread' => 'idCommentThread',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'customer' => 'customer',
        'Customer' => 'customer',
        'message' => 'message',
        'Message' => 'message',
        'comment_tags' => 'commentTags',
        'commentTags' => 'commentTags',
        'CommentTags' => 'commentTags',
        'tag_names' => 'tagNames',
        'tagNames' => 'tagNames',
        'TagNames' => 'tagNames',
        'is_updated' => 'isUpdated',
        'isUpdated' => 'isUpdated',
        'IsUpdated' => 'isUpdated',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'id_sales_order_comment' => 'idSalesOrderComment',
        'idSalesOrderComment' => 'idSalesOrderComment',
        'IdSalesOrderComment' => 'idSalesOrderComment',
        'username' => 'username',
        'Username' => 'username',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMMENT => [
            'type' => 'int',
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
        self::ID_COMMENT_THREAD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_comment_thread',
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
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::COMMENT_TAGS => [
            'type' => 'Generated\Shared\Transfer\CommentTagTransfer',
            'type_shim' => null,
            'name_underscore' => 'comment_tags',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAG_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'tag_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_UPDATED => [
            'type' => 'bool',
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
        self::ID_SALES_ORDER_COMMENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_comment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @param int|null $idComment
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @return int|null
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @param int|null $idComment
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCommentOrFail()
    {
        if ($this->idComment === null) {
            $this->throwNullValueException(static::ID_COMMENT);
        }

        return $this->idComment;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|Comment
     *
     * @param int|null $idCommentThread
     *
     * @return $this
     */
    public function setIdCommentThread($idCommentThread)
    {
        $this->idCommentThread = $idCommentThread;
        $this->modifiedProperties[self::ID_COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @return int|null
     */
    public function getIdCommentThread()
    {
        return $this->idCommentThread;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param int|null $idCommentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCommentThreadOrFail($idCommentThread)
    {
        if ($idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->setIdCommentThread($idCommentThread);
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCommentThreadOrFail()
    {
        if ($this->idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->idCommentThread;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCommentThread()
    {
        $this->assertPropertyIsSet(self::ID_COMMENT_THREAD);

        return $this;
    }

    /**
     * @module CommentWidget|Comment
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
     * @module CommentWidget|Comment
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CommentWidget|Comment
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
     * @module CommentWidget|Comment
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
     * @module CommentWidget|Comment
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
     * @module CommentWidget|Comment
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|Comment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CommentTagTransfer[] $commentTags
     *
     * @return $this
     */
    public function setCommentTags(ArrayObject $commentTags)
    {
        $this->commentTags = $commentTags;
        $this->modifiedProperties[self::COMMENT_TAGS] = true;

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CommentTagTransfer[]
     */
    public function getCommentTags()
    {
        return $this->commentTags;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param \Generated\Shared\Transfer\CommentTagTransfer $commentTag
     *
     * @return $this
     */
    public function addCommentTag(CommentTagTransfer $commentTag)
    {
        $this->commentTags[] = $commentTag;
        $this->modifiedProperties[self::COMMENT_TAGS] = true;

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCommentTags()
    {
        $this->assertCollectionPropertyIsSet(self::COMMENT_TAGS);

        return $this;
    }

    /**
     * @module CommentWidget
     *
     * @param array|null $tagNames
     *
     * @return $this
     */
    public function setTagNames(array $tagNames = null)
    {
        if ($tagNames === null) {
            $tagNames = [];
        }

        $this->tagNames = $tagNames;
        $this->modifiedProperties[self::TAG_NAMES] = true;

        return $this;
    }

    /**
     * @module CommentWidget
     *
     * @return array
     */
    public function getTagNames()
    {
        return $this->tagNames;
    }

    /**
     * @module CommentWidget
     *
     * @param mixed $tagNames
     *
     * @return $this
     */
    public function addTagNames($tagNames)
    {
        $this->tagNames[] = $tagNames;
        $this->modifiedProperties[self::TAG_NAMES] = true;

        return $this;
    }

    /**
     * @module CommentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTagNames()
    {
        $this->assertPropertyIsSet(self::TAG_NAMES);

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param bool|null $isUpdated
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
     * @module CommentWidget|Comment
     *
     * @return bool|null
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param bool|null $isUpdated
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
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsUpdatedOrFail()
    {
        if ($this->isUpdated === null) {
            $this->throwNullValueException(static::IS_UPDATED);
        }

        return $this->isUpdated;
    }

    /**
     * @module CommentWidget|Comment
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CommentWidget|CustomerPage|Checkout|Comment|SalesDataExport|Sales
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
     * @module CustomerPage|Checkout|Sales
     *
     * @param int|null $idSalesOrderComment
     *
     * @return $this
     */
    public function setIdSalesOrderComment($idSalesOrderComment)
    {
        $this->idSalesOrderComment = $idSalesOrderComment;
        $this->modifiedProperties[self::ID_SALES_ORDER_COMMENT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @return int|null
     */
    public function getIdSalesOrderComment()
    {
        return $this->idSalesOrderComment;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @param int|null $idSalesOrderComment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderCommentOrFail($idSalesOrderComment)
    {
        if ($idSalesOrderComment === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_COMMENT);
        }

        return $this->setIdSalesOrderComment($idSalesOrderComment);
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderCommentOrFail()
    {
        if ($this->idSalesOrderComment === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_COMMENT);
        }

        return $this->idSalesOrderComment;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderComment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_COMMENT);

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|SalesDataExport|Sales
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|SalesDataExport|Sales
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module CustomerPage|Checkout|SalesDataExport|Sales
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module CustomerPage|Checkout|SalesDataExport|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module CustomerPage|Checkout|SalesDataExport|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @param int|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @return int|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @param int|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module CustomerPage|Checkout|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

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
                case 'idCommentThread':
                case 'uuid':
                case 'message':
                case 'tagNames':
                case 'isUpdated':
                case 'createdAt':
                case 'updatedAt':
                case 'idSalesOrderComment':
                case 'username':
                case 'fkSalesOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customer':
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
                case 'commentTags':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idComment':
                case 'idCommentThread':
                case 'uuid':
                case 'message':
                case 'tagNames':
                case 'isUpdated':
                case 'createdAt':
                case 'updatedAt':
                case 'idSalesOrderComment':
                case 'username':
                case 'fkSalesOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'commentTags':
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
                case 'idCommentThread':
                case 'uuid':
                case 'message':
                case 'tagNames':
                case 'isUpdated':
                case 'createdAt':
                case 'updatedAt':
                case 'idSalesOrderComment':
                case 'username':
                case 'fkSalesOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'commentTags':
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
        $this->commentTags = $this->commentTags ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idComment' => $this->idComment,
            'idCommentThread' => $this->idCommentThread,
            'uuid' => $this->uuid,
            'message' => $this->message,
            'tagNames' => $this->tagNames,
            'isUpdated' => $this->isUpdated,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'idSalesOrderComment' => $this->idSalesOrderComment,
            'username' => $this->username,
            'fkSalesOrder' => $this->fkSalesOrder,
            'customer' => $this->customer,
            'commentTags' => $this->commentTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_comment' => $this->idComment,
            'id_comment_thread' => $this->idCommentThread,
            'uuid' => $this->uuid,
            'message' => $this->message,
            'tag_names' => $this->tagNames,
            'is_updated' => $this->isUpdated,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'id_sales_order_comment' => $this->idSalesOrderComment,
            'username' => $this->username,
            'fk_sales_order' => $this->fkSalesOrder,
            'customer' => $this->customer,
            'comment_tags' => $this->commentTags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_comment' => $this->idComment instanceof AbstractTransfer ? $this->idComment->toArray(true, false) : $this->idComment,
            'id_comment_thread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, false) : $this->idCommentThread,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'tag_names' => $this->tagNames instanceof AbstractTransfer ? $this->tagNames->toArray(true, false) : $this->tagNames,
            'is_updated' => $this->isUpdated instanceof AbstractTransfer ? $this->isUpdated->toArray(true, false) : $this->isUpdated,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'id_sales_order_comment' => $this->idSalesOrderComment instanceof AbstractTransfer ? $this->idSalesOrderComment->toArray(true, false) : $this->idSalesOrderComment,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'comment_tags' => $this->commentTags instanceof AbstractTransfer ? $this->commentTags->toArray(true, false) : $this->addValuesToCollection($this->commentTags, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idComment' => $this->idComment instanceof AbstractTransfer ? $this->idComment->toArray(true, true) : $this->idComment,
            'idCommentThread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, true) : $this->idCommentThread,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'tagNames' => $this->tagNames instanceof AbstractTransfer ? $this->tagNames->toArray(true, true) : $this->tagNames,
            'isUpdated' => $this->isUpdated instanceof AbstractTransfer ? $this->isUpdated->toArray(true, true) : $this->isUpdated,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'idSalesOrderComment' => $this->idSalesOrderComment instanceof AbstractTransfer ? $this->idSalesOrderComment->toArray(true, true) : $this->idSalesOrderComment,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'commentTags' => $this->commentTags instanceof AbstractTransfer ? $this->commentTags->toArray(true, true) : $this->addValuesToCollection($this->commentTags, true, true),
        ];
    }
}
