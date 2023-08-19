<?php

namespace App\Controllers\Brand;

use \App\Controllers\BaseController;

class Get extends BaseController
{
    protected $brandModel;
    public function index()
    {
        $brands = $this->brandModel->findAll();

        if ($brands) {
            $response = [
                'status' => true,
                'message' => 'brands found.',
                'data' => $brands
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'No brands found.'
            ];
        }

        return $this->response->setJSON($response);
    }
}
