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
class SpyNewsletterTypeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_NEWSLETTER_TYPE = 'idNewsletterType';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_NEWSLETTER_SUBSCRIPTIONS = 'spyNewsletterSubscriptions';

    /**
     * @var integer|null
     */
    protected $idNewsletterType;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[]
     */
    protected $spyNewsletterSubscriptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_newsletter_type' => 'idNewsletterType',
        'idNewsletterType' => 'idNewsletterType',
        'IdNewsletterType' => 'idNewsletterType',
        'name' => 'name',
        'Name' => 'name',
        'spy_newsletter_subscriptions' => 'spyNewsletterSubscriptions',
        'spyNewsletterSubscriptions' => 'spyNewsletterSubscriptions',
        'SpyNewsletterSubscriptions' => 'spyNewsletterSubscriptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_NEWSLETTER_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_newsletter_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NEWSLETTER_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_newsletter_subscriptions',
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
    public static $entityNamespace = 'Orm\Zed\Newsletter\Persistence\SpyNewsletterType';


    /**
     * @module 
     *
     * @param integer|null $idNewsletterType
     *
     * @return $this
     */
    public function setIdNewsletterType($idNewsletterType)
    {
        $this->idNewsletterType = $idNewsletterType;
        $this->modifiedProperties[self::ID_NEWSLETTER_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdNewsletterType()
    {
        return $this->idNewsletterType;
    }

    /**
     * @module 
     *
     * @param integer|null $idNewsletterType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdNewsletterTypeOrFail($idNewsletterType)
    {
        if ($idNewsletterType === null) {
            $this->throwNullValueException(static::ID_NEWSLETTER_TYPE);
        }

        return $this->setIdNewsletterType($idNewsletterType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdNewsletterTypeOrFail()
    {
        if ($this->idNewsletterType === null) {
            $this->throwNullValueException(static::ID_NEWSLETTER_TYPE);
        }

        return $this->idNewsletterType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdNewsletterType()
    {
        $this->assertPropertyIsSet(self::ID_NEWSLETTER_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[] $spyNewsletterSubscriptions
     *
     * @return $this
     */
    public function setSpyNewsletterSubscriptions(ArrayObject $spyNewsletterSubscriptions)
    {
        $this->spyNewsletterSubscriptions = $spyNewsletterSubscriptions;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer[]
     */
    public function getSpyNewsletterSubscriptions()
    {
        return $this->spyNewsletterSubscriptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNewsletterSubscriptionEntityTransfer $spyNewsletterSubscriptions
     *
     * @return $this
     */
    public function addSpyNewsletterSubscriptions(SpyNewsletterSubscriptionEntityTransfer $spyNewsletterSubscriptions)
    {
        $this->spyNewsletterSubscriptions[] = $spyNewsletterSubscriptions;
        $this->modifiedProperties[self::SPY_NEWSLETTER_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNewsletterSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NEWSLETTER_SUBSCRIPTIONS);

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
                case 'idNewsletterType':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyNewsletterSubscriptions':
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
                case 'idNewsletterType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNewsletterSubscriptions':
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
                case 'idNewsletterType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNewsletterSubscriptions':
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
        $this->spyNewsletterSubscriptions = $this->spyNewsletterSubscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idNewsletterType' => $this->idNewsletterType,
            'name' => $this->name,
            'spyNewsletterSubscriptions' => $this->spyNewsletterSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_newsletter_type' => $this->idNewsletterType,
            'name' => $this->name,
            'spy_newsletter_subscriptions' => $this->spyNewsletterSubscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_newsletter_type' => $this->idNewsletterType instanceof AbstractTransfer ? $this->idNewsletterType->toArray(true, false) : $this->idNewsletterType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_newsletter_subscriptions' => $this->spyNewsletterSubscriptions instanceof AbstractTransfer ? $this->spyNewsletterSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->spyNewsletterSubscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idNewsletterType' => $this->idNewsletterType instanceof AbstractTransfer ? $this->idNewsletterType->toArray(true, true) : $this->idNewsletterType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyNewsletterSubscriptions' => $this->spyNewsletterSubscriptions instanceof AbstractTransfer ? $this->spyNewsletterSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->spyNewsletterSubscriptions, true, true),
        ];
    }
}
