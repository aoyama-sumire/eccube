<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOJCfJlG\EccubeEccube_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOJCfJlG/EccubeEccube_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOJCfJlG.legacy');

    return;
}

if (!\class_exists(EccubeEccube_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOJCfJlG\EccubeEccube_KernelDevDebugContainer::class, EccubeEccube_KernelDevDebugContainer::class, false);
}

return new \ContainerOJCfJlG\EccubeEccube_KernelDevDebugContainer([
    'container.build_hash' => 'OJCfJlG',
    'container.build_id' => '8c2e06fc',
    'container.build_time' => 1650441187,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOJCfJlG');
