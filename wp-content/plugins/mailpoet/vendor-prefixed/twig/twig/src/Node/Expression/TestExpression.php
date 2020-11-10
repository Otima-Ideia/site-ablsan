<?php
 namespace MailPoetVendor\Twig\Node\Expression; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; use MailPoetVendor\Twig\Node\Node; class TestExpression extends \MailPoetVendor\Twig\Node\Expression\CallExpression { public function __construct(\MailPoetVendor\Twig\Node\Node $node, string $name, \MailPoetVendor\Twig\Node\Node $arguments = null, int $lineno) { $nodes = ['node' => $node]; if (null !== $arguments) { $nodes['arguments'] = $arguments; } parent::__construct($nodes, ['name' => $name], $lineno); } public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $name = $this->getAttribute('name'); $test = $compiler->getEnvironment()->getTest($name); $this->setAttribute('name', $name); $this->setAttribute('type', 'test'); $this->setAttribute('arguments', $test->getArguments()); $this->setAttribute('callable', $test->getCallable()); $this->setAttribute('is_variadic', $test->isVariadic()); $this->compileCallable($compiler); } } \class_alias('MailPoetVendor\\Twig\\Node\\Expression\\TestExpression', 'MailPoetVendor\\Twig_Node_Expression_Test'); 