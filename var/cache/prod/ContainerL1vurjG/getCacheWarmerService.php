<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerAggregate.php';

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->load('getTemplating_CacheWarmer_TemplatePathsService.php'));
    yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->load('getValidator_Mapping_CacheWarmerService.php'));
    yield 2 => ($this->privates['translation.warmer'] ?? $this->load('getTranslation_WarmerService.php'));
    yield 3 => ($this->privates['router.cache_warmer'] ?? $this->load('getRouter_CacheWarmerService.php'));
    yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->load('getAnnotations_CacheWarmerService.php'));
    yield 5 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->load('getSerializer_Mapping_CacheWarmerService.php'));
    yield 6 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->load('getDoctrine_Orm_ProxyCacheWarmerService.php'));
    yield 7 => ($this->privates['twig.cache_warmer'] ?? $this->load('getTwig_CacheWarmerService.php'));
    yield 8 => ($this->privates['twig.template_cache_warmer'] ?? $this->load('getTwig_TemplateCacheWarmerService.php'));
    yield 9 => ($this->privates['exercise_html_purifier.cache_warmer.serializer'] ?? $this->load('getExerciseHtmlPurifier_CacheWarmer_SerializerService.php'));
}, 10), false, ($this->targetDir.''.'/EccubeEccube_KernelProdContainerDeprecations.log'));