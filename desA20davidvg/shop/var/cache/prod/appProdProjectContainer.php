<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL0e04oi\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL0e04oi/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerL0e04oi.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerL0e04oi\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerL0e04oi\appProdProjectContainer([
    'container.build_hash' => 'L0e04oi',
    'container.build_id' => 'fb7dba64',
    'container.build_time' => 1647027281,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL0e04oi');
