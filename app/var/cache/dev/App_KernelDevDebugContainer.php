<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOIpAxhA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOIpAxhA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOIpAxhA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOIpAxhA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOIpAxhA\App_KernelDevDebugContainer([
    'container.build_hash' => 'OIpAxhA',
    'container.build_id' => '964d3dfa',
    'container.build_time' => 1610116716,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOIpAxhA');
