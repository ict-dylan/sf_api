<?php

namespace App\Controllers;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function getAccount($department, $company, $division)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('accounts');
        $builder->where('division', $division);
        $builder->where('company', $company);
        $builder->where('department', $department);
        $query = $builder->get();
        $response = $query->getResult();
        foreach ($response as $row) {
            $data = [
                'Code' => $this->response->getStatusCode(),
                'Message' => $this->response->getReason(),
                'SF_ID' => $row->sf_id
            ];
            return json_encode($data);
        }
    }
}
