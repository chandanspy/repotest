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
class SpyCommentToCommentTagEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_COMMENT = 'fkComment';

    /**
     * @var string
     */
    public const FK_COMMENT_TAG = 'fkCommentTag';

    /**
     * @var string
     */
    public const SPY_COMMENT = 'spyComment';

    /**
     * @var string
     */
    public const SPY_COMMENT_TAG = 'spyCommentTag';

    /**
     * @var integer|null
     */
    protected $fkComment;

    /**
     * @var integer|null
     */
    protected $fkCommentTag;

    /**
     * @var \Generated\Shared\Transfer\SpyCommentEntityTransfer|null
     */
    protected $spyComment;

    /**
     * @var \Generated\Shared\Transfer\SpyCommentTagEntityTransfer|null
     */
    protected $spyCommentTag;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_comment' => 'fkComment',
        'fkComment' => 'fkComment',
        'FkComment' => 'fkComment',
        'fk_comment_tag' => 'fkCommentTag',
        'fkCommentTag' => 'fkCommentTag',
        'FkCommentTag' => 'fkCommentTag',
        'spy_comment' => 'spyComment',
        'spyComment' => 'spyComment',
        'SpyComment' => 'spyComment',
        'spy_comment_tag' => 'spyCommentTag',
        'spyCommentTag' => 'spyCommentTag',
        'SpyCommentTag' => 'spyCommentTag',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_COMMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_comment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMMENT_TAG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_comment_tag',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMMENT => [
            'type' => 'Generated\Shared\Transfer\SpyCommentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMMENT_TAG => [
            'type' => 'Generated\Shared\Transfer\SpyCommentTagEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comment_tag',
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
    public static $entityNamespace = 'Orm\Zed\Comment\Persistence\SpyCommentToCommentTag';


    /**
     * @module 
     *
     * @param integer|null $fkComment
     *
     * @return $this
     */
    public function setFkComment($fkComment)
    {
        $this->fkComment = $fkComment;
        $this->modifiedProperties[self::FK_COMMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkComment()
    {
        return $this->fkComment;
    }

    /**
     * @module 
     *
     * @param integer|null $fkComment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCommentOrFail($fkComment)
    {
        if ($fkComment === null) {
            $this->throwNullValueException(static::FK_COMMENT);
        }

        return $this->setFkComment($fkComment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCommentOrFail()
    {
        if ($this->fkComment === null) {
            $this->throwNullValueException(static::FK_COMMENT);
        }

        return $this->fkComment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkComment()
    {
        $this->assertPropertyIsSet(self::FK_COMMENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCommentTag
     *
     * @return $this
     */
    public function setFkCommentTag($fkCommentTag)
    {
        $this->fkCommentTag = $fkCommentTag;
        $this->modifiedProperties[self::FK_COMMENT_TAG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCommentTag()
    {
        return $this->fkCommentTag;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCommentTag
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCommentTagOrFail($fkCommentTag)
    {
        if ($fkCommentTag === null) {
            $this->throwNullValueException(static::FK_COMMENT_TAG);
        }

        return $this->setFkCommentTag($fkCommentTag);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCommentTagOrFail()
    {
        if ($this->fkCommentTag === null) {
            $this->throwNullValueException(static::FK_COMMENT_TAG);
        }

        return $this->fkCommentTag;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCommentTag()
    {
        $this->assertPropertyIsSet(self::FK_COMMENT_TAG);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentEntityTransfer|null $spyComment
     *
     * @return $this
     */
    public function setSpyComment(SpyCommentEntityTransfer $spyComment = null)
    {
        $this->spyComment = $spyComment;
        $this->modifiedProperties[self::SPY_COMMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCommentEntityTransfer|null
     */
    public function getSpyComment()
    {
        return $this->spyComment;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentEntityTransfer $spyComment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCommentOrFail(SpyCommentEntityTransfer $spyComment)
    {
        return $this->setSpyComment($spyComment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCommentEntityTransfer
     */
    public function getSpyCommentOrFail()
    {
        if ($this->spyComment === null) {
            $this->throwNullValueException(static::SPY_COMMENT);
        }

        return $this->spyComment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyComment()
    {
        $this->assertPropertyIsSet(self::SPY_COMMENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentTagEntityTransfer|null $spyCommentTag
     *
     * @return $this
     */
    public function setSpyCommentTag(SpyCommentTagEntityTransfer $spyCommentTag = null)
    {
        $this->spyCommentTag = $spyCommentTag;
        $this->modifiedProperties[self::SPY_COMMENT_TAG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCommentTagEntityTransfer|null
     */
    public function getSpyCommentTag()
    {
        return $this->spyCommentTag;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentTagEntityTransfer $spyCommentTag
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCommentTagOrFail(SpyCommentTagEntityTransfer $spyCommentTag)
    {
        return $this->setSpyCommentTag($spyCommentTag);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCommentTagEntityTransfer
     */
    public function getSpyCommentTagOrFail()
    {
        if ($this->spyCommentTag === null) {
            $this->throwNullValueException(static::SPY_COMMENT_TAG);
        }

        return $this->spyCommentTag;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCommentTag()
    {
        $this->assertPropertyIsSet(self::SPY_COMMENT_TAG);

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
                case 'fkComment':
                case 'fkCommentTag':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyComment':
                case 'spyCommentTag':
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
                case 'fkComment':
                case 'fkCommentTag':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyComment':
                case 'spyCommentTag':
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
                case 'fkComment':
                case 'fkCommentTag':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyComment':
                case 'spyCommentTag':
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
            'fkComment' => $this->fkComment,
            'fkCommentTag' => $this->fkCommentTag,
            'spyComment' => $this->spyComment,
            'spyCommentTag' => $this->spyCommentTag,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_comment' => $this->fkComment,
            'fk_comment_tag' => $this->fkCommentTag,
            'spy_comment' => $this->spyComment,
            'spy_comment_tag' => $this->spyCommentTag,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_comment' => $this->fkComment instanceof AbstractTransfer ? $this->fkComment->toArray(true, false) : $this->fkComment,
            'fk_comment_tag' => $this->fkCommentTag instanceof AbstractTransfer ? $this->fkCommentTag->toArray(true, false) : $this->fkCommentTag,
            'spy_comment' => $this->spyComment instanceof AbstractTransfer ? $this->spyComment->toArray(true, false) : $this->spyComment,
            'spy_comment_tag' => $this->spyCommentTag instanceof AbstractTransfer ? $this->spyCommentTag->toArray(true, false) : $this->spyCommentTag,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkComment' => $this->fkComment instanceof AbstractTransfer ? $this->fkComment->toArray(true, true) : $this->fkComment,
            'fkCommentTag' => $this->fkCommentTag instanceof AbstractTransfer ? $this->fkCommentTag->toArray(true, true) : $this->fkCommentTag,
            'spyComment' => $this->spyComment instanceof AbstractTransfer ? $this->spyComment->toArray(true, true) : $this->spyComment,
            'spyCommentTag' => $this->spyCommentTag instanceof AbstractTransfer ? $this->spyCommentTag->toArray(true, true) : $this->spyCommentTag,
        ];
    }
}
