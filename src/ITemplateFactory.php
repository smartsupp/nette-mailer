<?php

declare(strict_types=1);

namespace Smartsupp\Mailer;

interface ITemplateFactory
{
    public function create(string $name, string $lang): Template;
}
