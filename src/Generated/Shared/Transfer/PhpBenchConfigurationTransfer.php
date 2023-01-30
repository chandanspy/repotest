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
class PhpBenchConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TEST_DIRECTORY = 'testDirectory';

    /**
     * @var string
     */
    public const ITERATIONS = 'iterations';

    /**
     * @var string
     */
    public const REVOLUTIONS = 'revolutions';

    /**
     * @var string
     */
    public const REPORT = 'report';

    /**
     * @var string|null
     */
    protected $testDirectory;

    /**
     * @var int|null
     */
    protected $iterations;

    /**
     * @var int|null
     */
    protected $revolutions;

    /**
     * @var string|null
     */
    protected $report;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'test_directory' => 'testDirectory',
        'testDirectory' => 'testDirectory',
        'TestDirectory' => 'testDirectory',
        'iterations' => 'iterations',
        'Iterations' => 'iterations',
        'revolutions' => 'revolutions',
        'Revolutions' => 'revolutions',
        'report' => 'report',
        'Report' => 'report',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TEST_DIRECTORY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'test_directory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITERATIONS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'iterations',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVOLUTIONS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'revolutions',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REPORT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'report',
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
     * @module Benchmark
     *
     * @param string|null $testDirectory
     *
     * @return $this
     */
    public function setTestDirectory($testDirectory)
    {
        $this->testDirectory = $testDirectory;
        $this->modifiedProperties[self::TEST_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @return string|null
     */
    public function getTestDirectory()
    {
        return $this->testDirectory;
    }

    /**
     * @module Benchmark
     *
     * @param string|null $testDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTestDirectoryOrFail($testDirectory)
    {
        if ($testDirectory === null) {
            $this->throwNullValueException(static::TEST_DIRECTORY);
        }

        return $this->setTestDirectory($testDirectory);
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTestDirectoryOrFail()
    {
        if ($this->testDirectory === null) {
            $this->throwNullValueException(static::TEST_DIRECTORY);
        }

        return $this->testDirectory;
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTestDirectory()
    {
        $this->assertPropertyIsSet(self::TEST_DIRECTORY);

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @param int|null $iterations
     *
     * @return $this
     */
    public function setIterations($iterations)
    {
        $this->iterations = $iterations;
        $this->modifiedProperties[self::ITERATIONS] = true;

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @return int|null
     */
    public function getIterations()
    {
        return $this->iterations;
    }

    /**
     * @module Benchmark
     *
     * @param int|null $iterations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIterationsOrFail($iterations)
    {
        if ($iterations === null) {
            $this->throwNullValueException(static::ITERATIONS);
        }

        return $this->setIterations($iterations);
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIterationsOrFail()
    {
        if ($this->iterations === null) {
            $this->throwNullValueException(static::ITERATIONS);
        }

        return $this->iterations;
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIterations()
    {
        $this->assertPropertyIsSet(self::ITERATIONS);

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @param int|null $revolutions
     *
     * @return $this
     */
    public function setRevolutions($revolutions)
    {
        $this->revolutions = $revolutions;
        $this->modifiedProperties[self::REVOLUTIONS] = true;

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @return int|null
     */
    public function getRevolutions()
    {
        return $this->revolutions;
    }

    /**
     * @module Benchmark
     *
     * @param int|null $revolutions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRevolutionsOrFail($revolutions)
    {
        if ($revolutions === null) {
            $this->throwNullValueException(static::REVOLUTIONS);
        }

        return $this->setRevolutions($revolutions);
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRevolutionsOrFail()
    {
        if ($this->revolutions === null) {
            $this->throwNullValueException(static::REVOLUTIONS);
        }

        return $this->revolutions;
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRevolutions()
    {
        $this->assertPropertyIsSet(self::REVOLUTIONS);

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @param string|null $report
     *
     * @return $this
     */
    public function setReport($report)
    {
        $this->report = $report;
        $this->modifiedProperties[self::REPORT] = true;

        return $this;
    }

    /**
     * @module Benchmark
     *
     * @return string|null
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @module Benchmark
     *
     * @param string|null $report
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReportOrFail($report)
    {
        if ($report === null) {
            $this->throwNullValueException(static::REPORT);
        }

        return $this->setReport($report);
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReportOrFail()
    {
        if ($this->report === null) {
            $this->throwNullValueException(static::REPORT);
        }

        return $this->report;
    }

    /**
     * @module Benchmark
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReport()
    {
        $this->assertPropertyIsSet(self::REPORT);

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
                case 'testDirectory':
                case 'iterations':
                case 'revolutions':
                case 'report':
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
                case 'testDirectory':
                case 'iterations':
                case 'revolutions':
                case 'report':
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
                case 'testDirectory':
                case 'iterations':
                case 'revolutions':
                case 'report':
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
            'testDirectory' => $this->testDirectory,
            'iterations' => $this->iterations,
            'revolutions' => $this->revolutions,
            'report' => $this->report,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'test_directory' => $this->testDirectory,
            'iterations' => $this->iterations,
            'revolutions' => $this->revolutions,
            'report' => $this->report,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'test_directory' => $this->testDirectory instanceof AbstractTransfer ? $this->testDirectory->toArray(true, false) : $this->testDirectory,
            'iterations' => $this->iterations instanceof AbstractTransfer ? $this->iterations->toArray(true, false) : $this->iterations,
            'revolutions' => $this->revolutions instanceof AbstractTransfer ? $this->revolutions->toArray(true, false) : $this->revolutions,
            'report' => $this->report instanceof AbstractTransfer ? $this->report->toArray(true, false) : $this->report,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'testDirectory' => $this->testDirectory instanceof AbstractTransfer ? $this->testDirectory->toArray(true, true) : $this->testDirectory,
            'iterations' => $this->iterations instanceof AbstractTransfer ? $this->iterations->toArray(true, true) : $this->iterations,
            'revolutions' => $this->revolutions instanceof AbstractTransfer ? $this->revolutions->toArray(true, true) : $this->revolutions,
            'report' => $this->report instanceof AbstractTransfer ? $this->report->toArray(true, true) : $this->report,
        ];
    }
}
