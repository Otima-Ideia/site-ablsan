<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Intl\Intl; use MailPoetVendor\Symfony\Component\Validator\Constraint; use MailPoetVendor\Symfony\Component\Validator\ConstraintValidator; use MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException; class LocaleValidator extends \MailPoetVendor\Symfony\Component\Validator\ConstraintValidator { public function validate($value, \MailPoetVendor\Symfony\Component\Validator\Constraint $constraint) { if (!$constraint instanceof \MailPoetVendor\Symfony\Component\Validator\Constraints\Locale) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint, \MailPoetVendor\Symfony\Component\Validator\Constraints\Locale::class); } if (null === $value || '' === $value) { return; } if (!\is_scalar($value) && !(\is_object($value) && \method_exists($value, '__toString'))) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException($value, 'string'); } $value = (string) $value; $locales = \MailPoetVendor\Symfony\Component\Intl\Intl::getLocaleBundle()->getLocaleNames(); $aliases = \MailPoetVendor\Symfony\Component\Intl\Intl::getLocaleBundle()->getAliases(); if (!isset($locales[$value]) && !\in_array($value, $aliases)) { $this->context->buildViolation($constraint->message)->setParameter('{{ value }}', $this->formatValue($value))->setCode(\MailPoetVendor\Symfony\Component\Validator\Constraints\Locale::NO_SUCH_LOCALE_ERROR)->addViolation(); } } } 