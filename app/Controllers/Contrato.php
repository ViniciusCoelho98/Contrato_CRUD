<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContratoModel;

class Contrato extends BaseController
{
    public function index()
    {
        $contratoModel = new ContratoModel();

        $data['title'] = 'List';
        $data['contratos'] = $contratoModel->getAll();

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

    public function edit($id = null)
    {
        $contratoModel = new ContratoModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'empresa' => 'required|max_length[150]',
            'cnpj'  => 'required|max_length[18]',
            'dataInicio' => 'required',
            'dataFim' => 'required',
            'descricao' => 'required|max_length[255]'
        ])) {
            $id = $this->request->getPost('id');
            $data = [
                'empresa' => $this->request->getPost('empresa'),
                'cnpj'  => $this->request->getPost('cnpj'),
                'dataInicio'  => $this->request->getPost('dataInicio'),
                'dataFim'  => $this->request->getPost('dataFim'),
                'descricao'  => $this->request->getPost('descricao'),
            ];

            if ($this->request->getPost('datafim') >= $this->request->getPost('datainicio')) {
                $contratoModel->update($id, $data);

                return redirect()->route('/');
            } else {
                return false;
            }
        } else {
            $data['title'] = 'Edit';
            $data['contrato'] = $contratoModel->getOne($id);

            echo view('templates/header', $data);
            echo view('contrato/edit', $data);
            echo view('templates/footer', $data);
        }
    }

    public function delete($id)
    {
        $contratoModel = new ContratoModel();

        $contratoModel->delete($id);

        return redirect()->route('/');
    }
}
