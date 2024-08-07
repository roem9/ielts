<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Main_model");
        $this->load->model("Other_model");
        $this->load->model("Soal_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
    }

    public function id($id_tes){
        $data['link'] = $this->Main_model->get_one("config", ['field' => "web admin"]);
        $data['background'] = $this->Main_model->get_one("config", ["field" => 'background']);
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
        ];

        $data['tes'] = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        $data['reload_page'] = $this->db->query("
            SELECT
                *
            FROM config
            WHERE field = 'reload_page'
        ")->row_array();

        $data['time_reload'] = $this->db->query("
            SELECT
                *
            FROM config
            WHERE field = 'time_reload'
        ")->row_array();

        if($data['tes']){
            $data['title'] = $data['tes']['nama_tes'];
            $data['id'] = $id_tes;
    
            if($data['tes']['tipe_soal'] == "Soal_002"){
                $this->load->view("pages/soal-ielts-002", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_GT_002"){
                $this->load->view("pages/soal-ielts-gt-002", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_GT_003"){
                $this->load->view("pages/soal-ielts-gt-003", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_003"){
                $this->load->view("pages/soal-ielts-003", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_Academic_Post_Test"){
                $this->load->view("pages/soal-ielts-academic-post-test", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_Academic_Pretest"){
                $this->load->view("pages/soal-ielts-academic-pretest", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_General_Post_Test"){
                $this->load->view("pages/soal-ielts-general-post-test", $data);
            } else if($data['tes']['tipe_soal'] == "Soal_General_Pretest"){
                $this->load->view("pages/soal-ielts-general-pretest", $data);
            }
        } else {
            $data['title'] = "Blank Link";
            $this->load->view("pages/blank", $data);
        }
    }

    public function writing($id_tes){

        $data['link'] = $this->Main_model->get_one("config", ['field' => "web admin"]);
        $data['background'] = $this->Main_model->get_one("config", ["field" => 'background']);
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
        ];

        $data['tes'] = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        if($data['tes']){
            $data['title'] = "Writing " . $data['tes']['nama_tes'];
            $data['id'] = $id_tes;
    
            if($data['tes']['tipe_soal'] == "Soal_002"){
                $this->load->view("pages/soal-ielts-writing-002", $data);
            }
        } else {
            $data['title'] = "Blank Link";
            $this->load->view("pages/blank", $data);
        }
    }

    public function cek_email(){
        $id_tes = $this->input->post("id_tes");
        $email = $this->input->post("email");
        $data = $this->Main_model->get_one("peserta_ielts", ["email" => $email, 'md5(id_tes)' => $id_tes]);
        if($data) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }

    public function password_check(){
        $id_tes = $this->input->post("id");
        $password = $this->input->post("password");
        $data = $this->Main_model->get_one("tes", ["password" => $password, "md5(id_tes)" => $id_tes]);
        if($data) {
            echo json_encode($data['id_tes']);
        }
    }

    public function add_jawaban_toefl(){
        $config = $this->config();

        $id_tes = $this->input->post("id_tes");
        $tes = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);
        $soal = $this->Main_model->get_one("soal", ["id_soal" => $tes['id_soal']]);
        $sesi = COUNT($this->Main_model->get_all("sesi_soal", ["id_soal" => $soal['id_soal']]));
        $id_sub = $this->input->post("kunci_sesi");
        
        $text = "";

        
        for ($i=1; $i < $sesi+1; $i++) {
            $benar = 0;
            $salah = 0;
            $nilai = "";
            $id = $id_sub[$i-1];
            $sub_soal = $this->Main_model->get_all("item_soal", ["id_sub" => $id, "item" => "soal"], 'urutan');
            $jawaban = $this->input->post("jawaban_sesi_".$i);
            // $jum_soal = COUNT($sub_soal);
            foreach ($sub_soal as $j => $sub_soal) {
                // from json to array 
                $string = trim(preg_replace('/\s+/', ' ', $sub_soal['data']));
                $txt_soal = json_decode($string, true );

                $sub_soal = $txt_soal['jawaban'];
                if($sub_soal == $jawaban[$j]){
                    $status = "benar";
                    $benar++;
                } else {
                    $status = "salah";
                    $salah++;
                }
                $no = $j+1;
                $text .= '['.$i.','.$no.',"'.$jawaban[$j].'","'.$status.'"],';
            }

            if($i == 1){
                $nilai_listening = $benar;
            } elseif ($i == 2) {
                $nilai_structure = $benar;
            } elseif ($i == 3) {
                $nilai_reading = $benar;
            }
        }

        
        $text = substr($text, 0, -1);
        $text = '{"jawaban":['.$text.']}';

        $data = [
            "id_tes" => $tes['id_tes'],
            "nama" => $this->input->post("nama"),
            "t4_lahir" => $this->input->post("t4_lahir"),
            "tgl_lahir" => $this->input->post("tgl_lahir"),
            "alamat" => $this->input->post("alamat"),
            "no_wa" => $this->input->post("no_wa"),
            "email" => $this->input->post("email"),
            "jk" => $this->input->post("jk"),
            "nilai_listening" => $nilai_listening,
            "nilai_structure" => $nilai_structure,
            "nilai_reading" => $nilai_reading,
            "text" => $text,
        ];

        $id = $this->Main_model->add_data("peserta_toefl", $data);

        // add barcode 
            if($tes['tipe_tes'] == 'Tes TOEFL Kolaborasi' || $tes['tipe_tes'] == 'Tes TOEFL Kursusan'){
                $this->add_sertifikat_toefl($id);
            }
        // add barcode 
        
        $skor = skor($nilai_listening, $nilai_structure, $nilai_reading);

        $replace_wa = array(
            ' ' => '%20',
            '"' => '%22'
        );

        $nama = str_replace(array_keys($replace_wa), $replace_wa, $this->input->post("nama"));
        $nama_tes = str_replace(array_keys($replace_wa), $replace_wa, $tes['nama_tes']);
        $tgl_tes = date("d-M-Y", strtotime($tes['tgl_tes']));

        $replacements = array(
            '$nama' => $this->input->post("nama"),
            '$t4_lahir' => $this->input->post("t4_lahir"),
            '$tgl_lahir' => tgl_indo($this->input->post("tgl_lahir")),
            '$alamat' => $this->input->post("alamat"),
            '$no_wa' => $this->input->post("no_wa"),
            '$email' => $this->input->post("email"),
            '$jk' => $this->input->post("jk"),
            '$nilai_listening' => poin("Listening", $nilai_listening),
            '$nilai_structure' => poin("Structure", $nilai_structure),
            '$nilai_reading' =>poin("Reading", $nilai_reading),
            '$tes' => $tes['nama_tes'],
            '$skor' => $skor,
            '$tgl_tes' => tgl_indo($tes["tgl_tes"], "lengkap"),
            '$tgl_pengumuman' => tgl_indo($tes["tgl_pengumuman"], "lengkap"),
            '$link' => "<a target='_blank' href='https://wa.me/+".$config[3]['value']."?text=Hi%20admin%2C%20saya%20ingin%20mengambil%20sertifikat%20hasil%20test%20TOEFL%20Prediction%20saya....%0A%0ANama%20%3A%20".$nama."%0ATanggal%20tes%20%3A%20".$tgl_tes."'>Ambil Sertifikat</a>",
        );

        $msg = str_replace(array_keys($replacements), $replacements, $tes['msg']);

        $this->session->set_flashdata('pesan', $msg);

        redirect(base_url("soal/id/".$id_tes), $data);
    }

    public function add_sertifikat_toefl($id){
        $data_config = $this->config();

        $peserta = $this->Main_model->get_one("peserta_toefl", ["id" => $id]);
        $tes = $this->Main_model->get_one("tes", ["id_tes" => $peserta['id_tes']]);
        
        $date_year = date('Y', strtotime($tes['tgl_tes']));
        $date_month = date('m', strtotime($tes['tgl_tes']));

        $this->db->select("CONVERT(no_doc, UNSIGNED INTEGER) AS num");
        $this->db->from("peserta_toefl as a");
        $this->db->join("tes as b", "a.id_tes = b.id_tes");
        $this->db->where("YEAR(tgl_tes)", $date_year);
        $this->db->where("MONTH(tgl_tes)", $date_month);
        $this->db->order_by("num", "DESC");
        $data = $this->db->get()->row_array();

        if($data) $no = $data['num']+1;
        else $no = 1;

        if($no > 0 && $no < 10) $no_doc = "00".$no;
        elseif($no >= 10 && $no < 100) $no_doc = "0".$no;
        elseif($no >= 100) $no_doc = $no;
        
        $this->load->library('qrcode/ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = "../".$data_config[4]['value']."/assets/"; //string, the default is application/cache/
        $config['errorlog']     = "../".$data_config[4]['value']."/assets/"; //string, the default is application/logs/
        $config['imagedir']     = "../".$data_config[4]['value']."/assets/qrcode/"; //direktori penyimpanan qr code
        
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        // $config['imagedir']     = './assets/qrcode/'; //direktori penyimpanan qr code

        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name=$id.'.png'; //buat name dari qr code sesuai dengan nim

        $params['data'] = $data_config[1]['value']."/sertifikat/no/".md5($id); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


        $data = $this->Main_model->edit_data("peserta_toefl", ["id" => $id], ["no_doc" => $no_doc]);
        // if($data) return 1;
        // else return 0;
    }

    public function add_jawaban(){
        $id_tes = $this->input->post("id_tes");
        $tes = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);
        $soal = $this->Main_model->get_one("soal", ["id_soal" => $tes['id_soal']]);
        $sesi = COUNT($this->Main_model->get_all("sesi_soal", ["id_soal" => $soal['id_soal']]));
        $id_sub = $this->input->post("kunci_sesi");
        
        $text = "";

        
        $benar = 0;
        $salah = 0;

        for ($i=1; $i < $sesi+1; $i++) {
            $id = $id_sub[$i-1];
            $sub_soal = $this->Main_model->get_all("item_soal", ["id_sub" => $id, "item" => "soal"], 'urutan');
            $jawaban = $this->input->post("jawaban_sesi_".$i);
            foreach ($sub_soal as $j => $sub_soal) {
                // from json to array 
                $string = trim(preg_replace('/\s+/', ' ', $sub_soal['data']));
                $txt_soal = json_decode($string, true );

                $sub_soal = $txt_soal['jawaban'];
                if($sub_soal == $jawaban[$j]){
                    $status = "benar";
                    $benar++;
                } else {
                    $status = "salah";
                    $salah++;
                }
                $no = $j+1;
                $text .= '['.$i.','.$no.',"'.$jawaban[$j].'","'.$status.'"],';
            }
        }

        
        $text = substr($text, 0, -1);
        $text = '{"jawaban":['.$text.']}';

        $data = [
            "id_tes" => $tes['id_tes'],
            "nama" => $this->input->post("nama"),
            "email" => $this->input->post("email"),
            "nilai" => $benar,
            "text" => $text,
        ];

        $this->Main_model->add_data("peserta", $data);
        $poin = $benar * $soal['poin'];

        $replacements = array(
            '$poin' => $poin,
            '$email' => $this->input->post("email"),
            '$nama' => $this->input->post("nama"),
            '$tes' => $tes['nama_tes'],
            '$tgl_tes' => tgl_indo($tes["tgl_tes"], "lengkap"),
            '$tgl_pengumuman' => tgl_indo($tes["tgl_pengumuman"], "lengkap"),
        );

        $msg = str_replace(array_keys($replacements), $replacements, $tes['msg']);

        $this->session->set_flashdata('pesan', $msg);

        redirect(base_url("soal/id/".$id_tes), $data);
    }

    public function tgl_indo($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return $hari . " " . $bulan . " " . $tahun;
    }
     
    function hari_ini($hari){
        // $hari = date ("D");
    
        switch($hari){
            case 'Sun':
                $hari_ini = "Ahad";
            break;
    
            case 'Mon':			
                $hari_ini = "Senin";
            break;
    
            case 'Tue':
                $hari_ini = "Selasa";
            break;
    
            case 'Wed':
                $hari_ini = "Rabu";
            break;
    
            case 'Thu':
                $hari_ini = "Kamis";
            break;
    
            case 'Fri':
                $hari_ini = "Jumat";
            break;
    
            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";		
            break;
        }
    
        return $hari_ini;
    
    }

    public function config(){
        $data = $this->Main_model->get_all("config");
        return $data;
    }

    public function add_jawaban_ielts(){
        $id_tes = $this->input->post("id_tes");
        $tes = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        if($tes['tipe_soal'] == "Soal_002"){
            $msg = $this->Soal_model->add_jawaban_soal_002();
        } else if($tes['tipe_soal'] == "Soal_GT_002"){
            $msg = $this->Soal_model->add_jawaban_soal_gt_002();
        } else if($tes['tipe_soal'] == "Soal_GT_003"){
            $msg = $this->Soal_model->add_jawaban_soal_gt_003();
        } else if($tes['tipe_soal'] == "Soal_003"){
            $msg = $this->Soal_model->add_jawaban_soal_003();
        } else if($tes['tipe_soal'] == "Soal_Academic_Post_Test"){
            $msg = $this->Soal_model->add_jawaban_soal_academic_post_test();
        } else if($tes['tipe_soal'] == "Soal_Academic_Pretest"){
            $msg = $this->Soal_model->add_jawaban_soal_academic_pretest();
        } else if($tes['tipe_soal'] == "Soal_General_Post_Test"){
            $msg = $this->Soal_model->add_jawaban_soal_general_post_test();
        } else if($tes['tipe_soal'] == "Soal_General_Pretest"){
            $msg = $this->Soal_model->add_jawaban_soal_general_pretest();
        }

        // $msg = 'Thank you for submitting your answer. Your answer will be assessed by our teacher and the report will be processed after three days';

        if($msg){
            $this->session->set_flashdata('pesan', $msg);
        } else {
            $this->session->set_flashdata('pesan', 'Thank you for submitting your answer');
        }

        redirect(base_url("soal/id/".$id_tes), $data);
    }

    public function add_jawaban_ielts_writing(){
        
        $id_tes = $this->input->post("id_tes");
        $email = $this->input->post("email");
        $writing_text = $this->input->post("text_writing");
        $text_writing = "";

        foreach ($writing_text as $writing_text) {
            $text_writing .= $writing_text . "|||";
        }

        $text_writing = substr($text_writing, 0, -3);

        $peserta = $this->Main_model->get_one("peserta_ielts", ["md5(id_tes)" => $id_tes, "email" => $email]);

        $data = [
            "text_writing" => $text_writing
        ];

        $this->Main_model->edit_data("peserta_ielts", ["id" => $peserta['id']], $data);

        $msg = "Terima kasih telah menyelesaikan IELTS Writing Prediction. Hasil IELTS Writing akan diproses untuk feedback oleh teachers TOP English";

        $this->session->set_flashdata('pesan', $msg);

        redirect(base_url("soal/writing/".$id_tes), $data);
    }
    
}

/* End of file Peserta.php */