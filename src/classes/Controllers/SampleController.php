<?php
namespace Classes\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Classes\Controllers\Controller;


class SampleController extends Controller {
  public function sample(Request $request, Response $response) {
    $assign = [];
    return $this->twig->render('index.html', $assign);
  }
}