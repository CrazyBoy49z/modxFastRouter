<?php

require_once MODX_CORE_PATH . 'components/fastrouter/fastrouter.class.php';

$router = new FastRouter($modx);

if ($router->needDispatch()) {
    $router->dispatch();
} elseif ($router->isRoutesChunkUpdated($chunk->name)) {
    $router->clearCache();
}
