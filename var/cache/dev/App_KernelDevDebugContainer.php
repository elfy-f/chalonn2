<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1DEoC7N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1DEoC7N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1DEoC7N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1DEoC7N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1DEoC7N\App_KernelDevDebugContainer([
    'container.build_hash' => '1DEoC7N',
    'container.build_id' => '48f8849a',
    'container.build_time' => 1638542083,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1DEoC7N');
