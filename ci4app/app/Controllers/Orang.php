<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $OrangModel;

    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') :
            1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->orangMode->search($keyword);
        } else {
            $orang = $this->orangModel;
        }

        $data = [
            'title' => 'Daftar | Orang',
            'orang' => $orang->paginate(6, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage
            // 'orang' => $this->orangModel->findAll()
        ];
        return view('orang/index', $data);
    }
}
