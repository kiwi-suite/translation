<?php
/**
 * kiwi-suite/translation (https://github.com/kiwi-suite/translation)
 *
 * @package kiwi-suite/translation
 * @link https://github.com/kiwi-suite/translation
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Translation\Config;

use KiwiSuite\Contract\Application\ConfiguratorInterface;
use KiwiSuite\Contract\Application\ServiceRegistryInterface;

final class Configurator implements ConfiguratorInterface
{
    private $extractDirectories = [];

    private $extractTarget = "";

    private $defaultCatalogue = "";

    /**
     * @param string $directory
     */
    public function addExtractDirectory(string $directory): void
    {
        $this->extractDirectories[] = $directory;
    }

    /**
     * @return array
     */
    public function extractDirectories(): array
    {
        return $this->extractDirectories;
    }

    /**
     * @param string $extractTarget
     */
    public function setExtractTarget(string $extractTarget): void
    {
        $this->extractTarget = $extractTarget;
    }

    /**
     * @return string
     */
    public function extractTarget(): string
    {
        return $this->extractTarget;
    }

    /**
     * @param string $defaultCatalogue
     */
    public function setDefaultCatalogue(string $defaultCatalogue): void
    {
        $this->defaultCatalogue = $defaultCatalogue;
    }

    /**
     * @return string
     */
    public function defaultCatalogue(): string
    {
        return $this->defaultCatalogue;
    }

    /**
     * @param ServiceRegistryInterface $serviceRegistry
     * @return void
     */
    public function registerService(ServiceRegistryInterface $serviceRegistry): void
    {
        $serviceRegistry->add(Config::class, new Config($this));
    }
}