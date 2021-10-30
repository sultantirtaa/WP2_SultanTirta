<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Sultanshoes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Sultanshoes_model');
    }

    public function index()
    {
        $this->load->view('v_inputshoes');
        $this->load->library('form_validation');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('np', 'Nama Pembeli', 'required',
        ['required' => 'Nama tidak boleh kosong']);

        $this->form_validation->set_rules('nh', 'No Handphone', 'required',
        ['required' => 'No Handphone tidak boleh kosong']);

        $this->form_validation->set_rules('ms', 'Merk Sepatu', 'required',
        ['required' => 'Merk Sepatu harus di pilih']);

        $this->form_validation->set_rules('us', 'Ukuran Sepatu', 'required',
        ['required' => 'Ukuran Sepatu harus di pilih']);

        if ($this->form_validation->run() != true)
        {
            $this->load->view('v_inputshoes');
        }
        else
        {
            $data = [
                'np' => $this->input->post('np'),
                'nh' => $this->input->post('nh'),
                'ms' => $this->input->post('ms'),
                'us' => $this->input->post('us'),
                'harga' => $this->Sultanshoes_model->proses($this->input->post('ms'))
            ];

            $this->load->view('v_outputshoes', $data);
        }
    }
}
