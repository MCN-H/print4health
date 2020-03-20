<?php

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
    ->exclude(['__snapshots__', 'Migrations'])
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@PHPUnit60Migration:risky' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        'declare_strict_types' => true,
        'single_blank_line_before_namespace' => true,
        'array_syntax' => ['syntax' => 'short'],
        'is_null' => true,
        'no_unused_imports' => true,
        'trailing_comma_in_multiline_array' => true,
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => true,
        'compact_nullable_typehint' => true,
        'no_alternative_syntax' => true,
        'no_empty_statement' => true,
        'modernize_types_casting' => true,
        'ordered_imports' => [
            'imports_order' => ["const", "class", "function"],
        ],
    ])
    ->setFinder($finder)
;