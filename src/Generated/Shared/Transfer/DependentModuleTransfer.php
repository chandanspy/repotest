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
class DependentModuleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ORGANIZATION = 'organization';

    /**
     * @var string
     */
    public const APPLICATION = 'application';

    /**
     * @var string
     */
    public const LAYER = 'layer';

    /**
     * @var string
     */
    public const OPTIONS = 'options';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\OrganizationTransfer|null
     */
    protected $organization;

    /**
     * @var \Generated\Shared\Transfer\ApplicationTransfer|null
     */
    protected $application;

    /**
     * @var \Generated\Shared\Transfer\LayerTransfer|null
     */
    protected $layer;

    /**
     * @var \Generated\Shared\Transfer\OptionsTransfer|null
     */
    protected $options;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'organization' => 'organization',
        'Organization' => 'organization',
        'application' => 'application',
        'Application' => 'application',
        'layer' => 'layer',
        'Layer' => 'layer',
        'options' => 'options',
        'Options' => 'options',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ORGANIZATION => [
            'type' => 'Generated\Shared\Transfer\OrganizationTransfer',
            'type_shim' => null,
            'name_underscore' => 'organization',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLICATION => [
            'type' => 'Generated\Shared\Transfer\ApplicationTransfer',
            'type_shim' => null,
            'name_underscore' => 'application',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAYER => [
            'type' => 'Generated\Shared\Transfer\LayerTransfer',
            'type_shim' => null,
            'name_underscore' => 'layer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPTIONS => [
            'type' => 'Generated\Shared\Transfer\OptionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'options',
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
     * @module SprykGui
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
     * @module SprykGui
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
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
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\OrganizationTransfer|null $organization
     *
     * @return $this
     */
    public function setOrganization(OrganizationTransfer $organization = null)
    {
        $this->organization = $organization;
        $this->modifiedProperties[self::ORGANIZATION] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\OrganizationTransfer|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\OrganizationTransfer $organization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrganizationOrFail(OrganizationTransfer $organization)
    {
        return $this->setOrganization($organization);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrganizationTransfer
     */
    public function getOrganizationOrFail()
    {
        if ($this->organization === null) {
            $this->throwNullValueException(static::ORGANIZATION);
        }

        return $this->organization;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrganization()
    {
        $this->assertPropertyIsSet(self::ORGANIZATION);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ApplicationTransfer|null $application
     *
     * @return $this
     */
    public function setApplication(ApplicationTransfer $application = null)
    {
        $this->application = $application;
        $this->modifiedProperties[self::APPLICATION] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\ApplicationTransfer|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\ApplicationTransfer $application
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationOrFail(ApplicationTransfer $application)
    {
        return $this->setApplication($application);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ApplicationTransfer
     */
    public function getApplicationOrFail()
    {
        if ($this->application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->application;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplication()
    {
        $this->assertPropertyIsSet(self::APPLICATION);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\LayerTransfer|null $layer
     *
     * @return $this
     */
    public function setLayer(LayerTransfer $layer = null)
    {
        $this->layer = $layer;
        $this->modifiedProperties[self::LAYER] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\LayerTransfer|null
     */
    public function getLayer()
    {
        return $this->layer;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\LayerTransfer $layer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLayerOrFail(LayerTransfer $layer)
    {
        return $this->setLayer($layer);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LayerTransfer
     */
    public function getLayerOrFail()
    {
        if ($this->layer === null) {
            $this->throwNullValueException(static::LAYER);
        }

        return $this->layer;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLayer()
    {
        $this->assertPropertyIsSet(self::LAYER);

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\OptionsTransfer|null $options
     *
     * @return $this
     */
    public function setOptions(OptionsTransfer $options = null)
    {
        $this->options = $options;
        $this->modifiedProperties[self::OPTIONS] = true;

        return $this;
    }

    /**
     * @module SprykGui
     *
     * @return \Generated\Shared\Transfer\OptionsTransfer|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @module SprykGui
     *
     * @param \Generated\Shared\Transfer\OptionsTransfer $options
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOptionsOrFail(OptionsTransfer $options)
    {
        return $this->setOptions($options);
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OptionsTransfer
     */
    public function getOptionsOrFail()
    {
        if ($this->options === null) {
            $this->throwNullValueException(static::OPTIONS);
        }

        return $this->options;
    }

    /**
     * @module SprykGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptions()
    {
        $this->assertPropertyIsSet(self::OPTIONS);

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
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'organization':
                case 'application':
                case 'layer':
                case 'options':
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
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'organization':
                case 'application':
                case 'layer':
                case 'options':
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
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'organization':
                case 'application':
                case 'layer':
                case 'options':
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
            'name' => $this->name,
            'organization' => $this->organization,
            'application' => $this->application,
            'layer' => $this->layer,
            'options' => $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'organization' => $this->organization,
            'application' => $this->application,
            'layer' => $this->layer,
            'options' => $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'organization' => $this->organization instanceof AbstractTransfer ? $this->organization->toArray(true, false) : $this->organization,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, false) : $this->application,
            'layer' => $this->layer instanceof AbstractTransfer ? $this->layer->toArray(true, false) : $this->layer,
            'options' => $this->options instanceof AbstractTransfer ? $this->options->toArray(true, false) : $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'organization' => $this->organization instanceof AbstractTransfer ? $this->organization->toArray(true, true) : $this->organization,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, true) : $this->application,
            'layer' => $this->layer instanceof AbstractTransfer ? $this->layer->toArray(true, true) : $this->layer,
            'options' => $this->options instanceof AbstractTransfer ? $this->options->toArray(true, true) : $this->options,
        ];
    }
}
