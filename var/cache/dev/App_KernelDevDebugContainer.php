<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQUL8iUk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQUL8iUk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQUL8iUk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQUL8iUk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQUL8iUk\App_KernelDevDebugContainer([
    'container.build_hash' => 'QUL8iUk',
    'container.build_id' => '4b38df96',
    'container.build_time' => 1650864281,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQUL8iUk');
