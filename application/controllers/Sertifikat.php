<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model("Main_model");
    }
    
    public function no($id){
        // $peserta = $this->Main_model->get_one("peserta_ielts", ["md5(id)" => $id]);
        $data = $this->db->query("
            SELECT
                *
            FROM peserta_ielts as a 
            JOIN tes as b ON a.id_tes = b.id_tes
            WHERE md5(id) = '$id'
        ")->row_array();
        if($data){
            $data['title'] = 'Sertifikat';
            $data['no_doc'] = $data['no_doc'];
            $data['hari'] = date('d', strtotime($data['tgl_tes']));
            $data['tahun'] = date('y', strtotime($data['tgl_tes']));
            $data['bulan'] = getHurufBulan(date('m', strtotime($data['tgl_tes'])));

            $data['skor_listening'] = ielts_listening($data['nilai_listening']);
            $data['skor_reading'] = ielts_reading($data['nilai_reading'], $data['tipe_tes']);
            $data['skor_writing'] = $data['nilai_writing'];
            $data['skor_speaking'] = $data['nilai_speaking'];
            $data['overall'] = pembulatan_skor_ielts($data['skor_listening'],$data['skor_reading'],$data['skor_writing'],$data['skor_speaking']);

            $data['tgl_tes'] = date('Y-m-d', strtotime($data['tgl_tes']));
        }

        // $this->load->view("pages/layout/header-sertifikat", $peserta);
        // $this->load->view("pages/soal/".$page, $data);
        $background = $this->Main_model->get_one("config", ["field" => 'background']);
        $data['link'] = $this->Main_model->get_one("config", ['field' => "web admin"]);

        $data['background'] = $background;
        $this->load->view("pages/sertifikat", $data);
        // $this->load->view("pages/layout/footer");
    }
}

/* End of file Sertifikat.php */
