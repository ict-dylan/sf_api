<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CORSFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // $method = $_SERVER['REQUEST_METHOD'];
        // header('Access-Control-Allow-Origin: *');
        // if ($method == "OPTIONS") {
        //     header("HTTP/1.1 200 OK");
        //     header("Access-Control-Allow-Origin: *");
        //     header('Access-Control-Allow-Headers: content-type, timeout');
        //     die();
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
?>