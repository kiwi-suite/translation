<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Translation;

use Ixocreate\Application\ServiceManager\ServiceManagerConfigurator;
use Ixocreate\Translation\Translator\Factory\TranslatorFactory;
use Ixocreate\Translation\Translator\Translator;

/** @var ServiceManagerConfigurator $serviceManager */
$serviceManager->addFactory(Translator::class, TranslatorFactory::class);
