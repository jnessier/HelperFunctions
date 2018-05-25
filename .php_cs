<?php
// Define excludes
$excludes = [
    'vendor',
    'app_root/vendor'
];

// Create finder
$finder = PhpCsFixer\Finder::create()
    ->exclude($excludes)
    ->in(__DIR__);

// Create config
return PhpCsFixer\Config::create()
        ->setRiskyAllowed(true)
        ->setRules([
            '@PSR1' => true,
            '@PSR2' => true,
            '@Symfony' => true,
            'phpdoc_to_comment' => false,
        ])
        ->setFinder($finder);
