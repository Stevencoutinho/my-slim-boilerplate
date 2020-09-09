<?php

namespace Classes\Controllers;

use Psr\Container\ContainerInterface;

abstract class Controller {
  /** @var \PDO */
  protected $db;
  /** @var Environment */
  protected $twig;

  public function __construct(ContainerInterface $container) {
    $this->db = $container['db'];
    $this->twig = $container['twig'];
  }
}