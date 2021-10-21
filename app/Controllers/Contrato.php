<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContratoModel;

class Contrato extends BaseController
{
    public function index()
    {
        $contratoModel = new ContratoModel();

        $data['title'] = 'Lista de contratos';
        $data['empresas'] = $contratoModel->getAll();

        echo view('templates/header', $data);
        echo view('contrato/index', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        $contratoModel = new ContratoModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'empresa' => 'required|max_length[150]',
            'cnpj'  => 'required|max_length[18]',
            'dataInicio' => 'required',
            'dataFim' => 'required',
            'descricao' => 'required|max_length[255]'
        ])) {
            $contratoModel->save([
                'empresa' => $this->request->getPost('empresa'),
                'cnpj' => $this->request->getPost('cnpj'),
                'dataInicio' => $this->request->getPost('dataInicio'),
                'dataFim' => $this->request->getPost('dataFim'),
                'descricao' => $this->request->getPost('descricao'),
            ]);

            return redirect()->route('/');
        } else {
            $data['title'] = 'Create';

            echo view('templates/header', $data);
            echo view('contrato/create', $data);
            echo view('templates/footer', $data);
        }
    }
}
