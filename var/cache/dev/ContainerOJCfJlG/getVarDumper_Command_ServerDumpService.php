<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.command.server_dump' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'debug-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ServerDumpPlaceholderCommand.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Server'.\DIRECTORY_SEPARATOR.'DumpServer.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'DumpDescriptorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'CliDescriptor.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'HtmlDescriptor.php';

$a = new \Symfony\Bridge\Monolog\Logger('debug');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
$a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
$a->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
$a->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
$a->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$a->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

$this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand(new \Symfony\Component\VarDumper\Server\DumpServer('', $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->load('getVarDumper_ContextualizedCliDumper_InnerService.php'))), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

$instance->setName('server:dump');

return $instance;
