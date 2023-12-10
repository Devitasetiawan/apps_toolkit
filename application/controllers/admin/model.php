<?php

require_once 'model.php';

class ProdukController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    public function tampilkanProdukByKategori($kategori)
    {
        $produk = $this->model->getProdukByKategori($kategori);
        echo json_encode($produk);
    }
}
