<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWjDNawL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWjDNawL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWjDNawL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWjDNawL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWjDNawL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WjDNawL',
    'container.build_id' => 'f5435d91',
    'container.build_time' => 1646685534,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWjDNawL');