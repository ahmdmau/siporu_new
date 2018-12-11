<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{
    
    public function process($id)
    {   
        foreach ($this->cart->contents() as $item) {
            $id_ukm = $item['id_ukm'];
        }
        $invoices = array(
            'date' => date('Y-m-d H:i:s'),
            'due_date' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            'id_pembeli' => $id,
            'status' => 'unpaid',
            'id_ukm' => $id_ukm
        );

        $this->db->insert('invoices', $invoices);
        $invoices_id = $this->db->insert_id();

        // masukan ke table order
        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoices' => $invoices_id,
                'id_produk' => $item['id'],
                'id_ukm' => $item['id_ukm'],
                'nama_produk' => $item['name'],
                'qty' => $item['qty'],
                'harga' => $item['price'],
                'id_pembeli' => $id
            );

            $this->db->insert('orders', $data);
        }

        return true;
    }

    public function all($id)
    {
        $hasil = $this->db->where('id_ukm', $id)->get('invoices');
        return $hasil->result();
    }

    public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('id', $invoice_id)->limit(1)->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }
    
    public function get_order_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('id_invoices', $invoice_id)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
    public function konfirmasi_pesanan($id_invoice)
    {
        $this->db->where('id', $id_invoice)->update('invoices', array('status'=>'paid'));
        return true;    
    }
}