<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(false)
    ->setUsingCache(false)
    ->setFinder(
        PhpCsFixer\Finder::create()->in(__DIR__)
    )
    ->setRules([
        'blank_line_after_opening_tag' => true,
        'braces' => true,
        'elseif' => true,
        'encoding' => true,
        'function_declaration' => true,
        'include' => true,
        'blank_line_after_namespace' => true,
        'not_operator_with_successor_space' => true,
        'lowercase_constants' => true,
        'lowercase_keywords' => true,
        'method_argument_space' => true,
        'multiline_whitespace_before_semicolons' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag' => true,
        'phpdoc_no_access' => true,
        'phpdoc_no_package' => true,
        'phpdoc_scalar' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_var_without_name' => true,
        'single_blank_line_before_namespace' => true,
        'single_line_after_imports' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
    ]);
