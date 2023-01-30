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
class SpyPaymentProviderEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PAYMENT_PROVIDER = 'idPaymentProvider';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDER_KEY = 'paymentProviderKey';

    /**
     * @var string
     */
    public const SPY_PAYMENT_METHODS = 'spyPaymentMethods';

    /**
     * @var integer|null
     */
    protected $idPaymentProvider;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $paymentProviderKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodEntityTransfer[]
     */
    protected $spyPaymentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_payment_provider' => 'idPaymentProvider',
        'idPaymentProvider' => 'idPaymentProvider',
        'IdPaymentProvider' => 'idPaymentProvider',
        'name' => 'name',
        'Name' => 'name',
        'payment_provider_key' => 'paymentProviderKey',
        'paymentProviderKey' => 'paymentProviderKey',
        'PaymentProviderKey' => 'paymentProviderKey',
        'spy_payment_methods' => 'spyPaymentMethods',
        'spyPaymentMethods' => 'spyPaymentMethods',
        'SpyPaymentMethods' => 'spyPaymentMethods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PAYMENT_PROVIDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_payment_provider',
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
        self::PAYMENT_PROVIDER_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_provider_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PAYMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\SpyPaymentMethodEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_payment_methods',
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
    public static $entityNamespace = 'Orm\Zed\Payment\Persistence\SpyPaymentProvider';


    /**
     * @module 
     *
     * @param integer|null $idPaymentProvider
     *
     * @return $this
     */
    public function setIdPaymentProvider($idPaymentProvider)
    {
        $this->idPaymentProvider = $idPaymentProvider;
        $this->modifiedProperties[self::ID_PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPaymentProvider()
    {
        return $this->idPaymentProvider;
    }

    /**
     * @module 
     *
     * @param integer|null $idPaymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPaymentProviderOrFail($idPaymentProvider)
    {
        if ($idPaymentProvider === null) {
            $this->throwNullValueException(static::ID_PAYMENT_PROVIDER);
        }

        return $this->setIdPaymentProvider($idPaymentProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPaymentProviderOrFail()
    {
        if ($this->idPaymentProvider === null) {
            $this->throwNullValueException(static::ID_PAYMENT_PROVIDER);
        }

        return $this->idPaymentProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPaymentProvider()
    {
        $this->assertPropertyIsSet(self::ID_PAYMENT_PROVIDER);

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
     * @param string|null $paymentProviderKey
     *
     * @return $this
     */
    public function setPaymentProviderKey($paymentProviderKey)
    {
        $this->paymentProviderKey = $paymentProviderKey;
        $this->modifiedProperties[self::PAYMENT_PROVIDER_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPaymentProviderKey()
    {
        return $this->paymentProviderKey;
    }

    /**
     * @module 
     *
     * @param string|null $paymentProviderKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderKeyOrFail($paymentProviderKey)
    {
        if ($paymentProviderKey === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_KEY);
        }

        return $this->setPaymentProviderKey($paymentProviderKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentProviderKeyOrFail()
    {
        if ($this->paymentProviderKey === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_KEY);
        }

        return $this->paymentProviderKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviderKey()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodEntityTransfer[] $spyPaymentMethods
     *
     * @return $this
     */
    public function setSpyPaymentMethods(ArrayObject $spyPaymentMethods)
    {
        $this->spyPaymentMethods = $spyPaymentMethods;
        $this->modifiedProperties[self::SPY_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodEntityTransfer[]
     */
    public function getSpyPaymentMethods()
    {
        return $this->spyPaymentMethods;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPaymentMethodEntityTransfer $spyPaymentMethods
     *
     * @return $this
     */
    public function addSpyPaymentMethods(SpyPaymentMethodEntityTransfer $spyPaymentMethods)
    {
        $this->spyPaymentMethods[] = $spyPaymentMethods;
        $this->modifiedProperties[self::SPY_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPaymentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PAYMENT_METHODS);

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
                case 'idPaymentProvider':
                case 'name':
                case 'paymentProviderKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPaymentMethods':
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
                case 'idPaymentProvider':
                case 'name':
                case 'paymentProviderKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPaymentMethods':
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
                case 'idPaymentProvider':
                case 'name':
                case 'paymentProviderKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPaymentMethods':
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
        $this->spyPaymentMethods = $this->spyPaymentMethods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPaymentProvider' => $this->idPaymentProvider,
            'name' => $this->name,
            'paymentProviderKey' => $this->paymentProviderKey,
            'spyPaymentMethods' => $this->spyPaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_provider' => $this->idPaymentProvider,
            'name' => $this->name,
            'payment_provider_key' => $this->paymentProviderKey,
            'spy_payment_methods' => $this->spyPaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_provider' => $this->idPaymentProvider instanceof AbstractTransfer ? $this->idPaymentProvider->toArray(true, false) : $this->idPaymentProvider,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'payment_provider_key' => $this->paymentProviderKey instanceof AbstractTransfer ? $this->paymentProviderKey->toArray(true, false) : $this->paymentProviderKey,
            'spy_payment_methods' => $this->spyPaymentMethods instanceof AbstractTransfer ? $this->spyPaymentMethods->toArray(true, false) : $this->addValuesToCollection($this->spyPaymentMethods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPaymentProvider' => $this->idPaymentProvider instanceof AbstractTransfer ? $this->idPaymentProvider->toArray(true, true) : $this->idPaymentProvider,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'paymentProviderKey' => $this->paymentProviderKey instanceof AbstractTransfer ? $this->paymentProviderKey->toArray(true, true) : $this->paymentProviderKey,
            'spyPaymentMethods' => $this->spyPaymentMethods instanceof AbstractTransfer ? $this->spyPaymentMethods->toArray(true, true) : $this->addValuesToCollection($this->spyPaymentMethods, true, true),
        ];
    }
}
