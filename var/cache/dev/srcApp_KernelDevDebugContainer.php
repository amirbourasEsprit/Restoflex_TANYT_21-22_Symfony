<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRY5IYkY\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRY5IYkY/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRY5IYkY.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRY5IYkY\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRY5IYkY\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RY5IYkY',
    'container.build_id' => '9c1e1900',
    'container.build_time' => 1652221025,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRY5IYkY');
