<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLUC67AN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLUC67AN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLUC67AN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLUC67AN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLUC67AN\App_KernelDevDebugContainer([
    'container.build_hash' => 'LUC67AN',
    'container.build_id' => '7c55ee6f',
    'container.build_time' => 1729122622,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLUC67AN');
