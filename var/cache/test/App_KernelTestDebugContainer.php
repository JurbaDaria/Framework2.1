<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4RXsmzA\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4RXsmzA/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container4RXsmzA.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container4RXsmzA\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \Container4RXsmzA\App_KernelTestDebugContainer([
    'container.build_hash' => '4RXsmzA',
    'container.build_id' => '0068bbc0',
    'container.build_time' => 1698941149,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4RXsmzA');
