<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'view\\' => array($baseDir . '/src/view'),
    'testmodel\\' => array($baseDir . '/test/model'),
    'testcontroller\\' => array($baseDir . '/test/controller'),
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/type-resolver/src', $vendorDir . '/phpdocumentor/reflection-docblock/src'),
    'model\\' => array($baseDir . '/src/model'),
    'controller\\' => array($baseDir . '/src/controller'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'DeepCopy\\' => array($vendorDir . '/myclabs/deep-copy/src/DeepCopy'),
);
