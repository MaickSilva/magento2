<?php

namespace Hibrido\HelloExample\Controller\Examples;

class Index extends \Magento\Framework\App\Action\Action
{
  public function execute() {
    echo 'Hello.';
    die();
  }
}