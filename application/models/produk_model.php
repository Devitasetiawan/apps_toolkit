<?php

class ProdukModel
{
    private $produkPerKategori = array(
        1 => array('Produk Wajan 1', 'Produk Wajan 2', 'Produk Wajan 3'),
        2 => array('Produk Kompor 1', 'Produk Kompor 2', 'Produk Kompor 3'),
        3 => array('Produk Panggangan 1', 'Produk Panggangan 2', 'Produk Panggangan 3'),
        4 => array('Produk Mixer 1', 'Produk Mixer 2', 'Produk Mixer 3'),
    );

    public function getProdukByKategori($kategori)
    {
        if (array_key_exists($kategori, $this->produkPerKategori)) {
            return $this->produkPerKategori[$kategori];
        } else {
            return array('error' => 'Kategori tidak valid');
        }
    }
}
