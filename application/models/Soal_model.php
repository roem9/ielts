<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {

    public function add_jawaban_soal_002(){
        
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["7.50"],
            ],
            [
                "no" => 2,
                "jawaban" => ["Park Square"],
            ],
            [
                "no" => 3,
                "jawaban" => ["Media"],
            ],
            [
                "no" => 4,
                "jawaban" => ["Weather"],
            ],
            [
                "no" => 5,
                "jawaban" => ["First Letter"],
            ],
            [
                "no" => 6,
                "jawaban" => ["social bonds"],
            ],
            [
                "no" => 7,
                "jawaban" => ["brains"],
            ],
            [
                "no" => 8,
                "jawaban" => ["sound"],
            ],
            [
                "no" => 9,
                "jawaban" => ["silent singing"],
            ],
            [
                "no" => 10,
                "jawaban" => ["feet"],
            ],
            [
                "no" => 11,
                "jawaban" => ["the playground", "playground"],
            ],
            [
                "no" => 12,
                "jawaban" => ["feedback"],
            ],
            [
                "no" => 13,
                "jawaban" => ["update"],
            ],
            [
                "no" => 14,
                "jawaban" => ["extra space"],
            ],
            [
                "no" => 15,
                "jawaban" => ["C"],
            ],
            [
                "no" => 16,
                "jawaban" => ["G"],
            ],
            [
                "no" => 17,
                "jawaban" => ["I"],
            ],
            [
                "no" => 18,
                "jawaban" => ["E"],
            ],
            [
                "no" => 19,
                "jawaban" => ["D"],
            ],
            [
                "no" => 20,
                "jawaban" => ["B"],
            ],
            [
                "no" => 21,
                "jawaban" => ["C. she had been inspired by a particular book"],
            ],
            [
                "no" => 22,
                "jawaban" => ["A. the effect of teacher discipline"],
            ],
            [
                "no" => 23,
                "jawaban" => ["B. girls were more negative about school than boys"],
            ],
            [
                "no" => 24,
                "jawaban" => ["A. teachers should be flexible in unpredictable ways"],
            ],
            [
                "no" => 25,
                "jawaban" => ["B. reflect on her own research experience in an interesting way"],
            ],
            [
                "no" => 26,
                "jawaban" => ["E"],
            ],
            [
                "no" => 27,
                "jawaban" => ["G"],
            ],
            [
                "no" => 28,
                "jawaban" => ["A"],
            ],
            [
                "no" => 29,
                "jawaban" => ["D"],
            ],
            [
                "no" => 30,
                "jawaban" => ["B"],
            ],
            [
                "no" => 31,
                "jawaban" => ["C. not be known for many, many years"],
            ],
            [
                "no" => 32,
                "jawaban" => ["A. an existing problem even worse"],
            ],
            [
                "no" => 33,
                "jawaban" => ["3", "three"],
            ],
            [
                "no" => 34,
                "jawaban" => ["Greenland"],
            ],
            [
                "no" => 35,
                "jawaban" => ["snow"],
            ],
            [
                "no" => 36,
                "jawaban" => ["freshwater"],
            ],
            [
                "no" => 37,
                "jawaban" => ["12", "twelve"],
            ],
            [
                "no" => 38,
                "jawaban" => ["cattle"],
            ],
            [
                "no" => 39,
                "jawaban" => ["time"],
            ],
            [
                "no" => 40,
                "jawaban" => ["expensive"],
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["VIII"],
            ],
            [
                "no" => 2,
                "jawaban" => ["I"],
            ],
            [
                "no" => 3,
                "jawaban" => ["VI"],
            ],
            [
                "no" => 4,
                "jawaban" => ["III"],
            ],
            [
                "no" => 5,
                "jawaban" => ["VII"],
            ],
            [
                "no" => 6,
                "jawaban" => ["IV"],
            ],
            [
                "no" => 7,
                "jawaban" => ["farming"],
            ],
            [
                "no" => 8,
                "jawaban" => ["sea mammals", "fish"],
            ],
            [
                "no" => 9,
                "jawaban" => ["sea mammals", "fish"],
            ],
            [
                "no" => 10,
                "jawaban" => ["thule"],
            ],
            [
                "no" => 11,
                "jawaban" => ["islands"],
            ],
            [
                "no" => 12,
                "jawaban" => ["nomadic"],
            ],
            [
                "no" => 13,
                "jawaban" => ["nature"],
            ],
            [
                "no" => 14,
                "jawaban" => ["imported"],
            ],
            [
                "no" => 15,
                "jawaban" => ["failure"],
            ],
            [
                "no" => 16,
                "jawaban" => ["garage"],
            ],
            [
                "no" => 17,
                "jawaban" => ["anatomy"],
            ],
            [
                "no" => 18,
                "jawaban" => ["puppets"],
            ],
            [
                "no" => 19,
                "jawaban" => ["special service"],
            ],
            [
                "no" => 20,
                "jawaban" => ["sword fight"],
            ],
            [
                "no" => 21,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 22,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 23,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 24,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 25,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 26,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 27,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 28,
                "jawaban" => ["C. 7.22"],
            ],
            [
                "no" => 29,
                "jawaban" => ["D. Exercise after breakfast"],
            ],
            [
                "no" => 30,
                "jawaban" => ["B. Taking supplements at breakfast"],
            ],
            [
                "no" => 31,
                "jawaban" => ["A. Mid-afternoon"],
            ],
            [
                "no" => 32,
                "jawaban" => ["D. Eat a light meal"],
            ],
            [
                "no" => 33,
                "jawaban" => ["C. To introduce chronobiology and describe some practical applications"],
            ],
            [
                "no" => 34,
                "jawaban" => ["oil content"],
            ],
            [
                "no" => 35,
                "jawaban" => ["fertiliser enhanced"],
            ],
            [
                "no" => 36,
                "jawaban" => ["centrifugation"],
            ],
            [
                "no" => 37,
                "jawaban" => ["floatation"],
            ],
            [
                "no" => 38,
                "jawaban" => ["destabilized"],
            ],
            [
                "no" => 39,
                "jawaban" => ["pulling"],
            ],
            [
                "no" => 40,
                "jawaban" => ["thicker"],
            ],
        ];

        $jawaban_ietls = "";

        $benar_listening = 0;
        foreach ($_POST['jawaban_listening'] as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = strtolower($data_jawaban_listening);
            }

            if (in_array(trim(strtolower($jawaban)), $data_jawaban)){
                $status = "Benar";
                $benar_listening++;
            } else {
                $status = "Salah";
            }

            $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $benar_reading = 0;
        foreach ($_POST['jawaban_reading'] as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = strtolower($data_jawaban_reading);
            }

            if($i == 8){
                if(strtolower($_POST['jawaban_reading'][7]) == 'sea mamals' && strtolower($_POST['jawaban_reading'][8]) == 'fish'){
                    $jawaban_ietls .= 'Reading&&&sea mamals&&&Benar|||Reading&&&fish&&&Benar|||';
                    $benar_reading = $benar_reading + 2;
                } else if(strtolower($_POST['jawaban_reading'][7]) == 'fish' && strtolower($_POST['jawaban_reading'][8]) == 'sea mamals'){
                    $jawaban_ietls .= 'Reading&&&fish&&&Benar|||Reading&&&sea mamals&&&Benar|||';
                    $benar_reading = $benar_reading + 2;
                } else if(strtolower($_POST['jawaban_reading'][7]) == 'fish'){
                    $jawaban_ietls .= 'Reading&&&fish&&&Benar|||Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][8])).'&&&Salah|||';
                    $benar_reading++;
                } else if(strtolower($_POST['jawaban_reading'][7]) == 'sea mamals'){
                    $jawaban_ietls .= 'Reading&&&sea mamals&&&Benar|||Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][8])).'&&&Salah|||';
                    $benar_reading++;
                } else if(strtolower($_POST['jawaban_reading'][8]) == 'fish'){
                    $jawaban_ietls .= 'Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][7])).'&&&Salah|||Reading&&&fish&&&Benar|||';
                    $benar_reading++;
                } else if(strtolower($_POST['jawaban_reading'][8]) == 'sea mamals'){
                    $jawaban_ietls .= 'Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][7])).'&&&Salah|||Reading&&&sea mamals&&&Benar|||';
                    $benar_reading++;
                } else {
                    $jawaban_ietls .= 'Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][7])).'&&&Salah|||Reading&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_reading'][8])).'&&&Salah|||';
                }
            } else if($i != 7) {
                if (in_array(trim(strtolower($jawaban)), $data_jawaban)){
                    $status = "Benar";
                    $benar_reading++;
                } else {
                    $status = "Salah";
                }
    
                $jawaban_ietls .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            }
        }

        $jawaban_ietls = substr($jawaban_ietls, 0, -3);

        $id_tes = $this->input->post("id_tes");

        $tes = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        $writing_text = $this->input->post("text_writing");
        $text_writing = "";

        foreach ($writing_text as $writing_text) {
            $text_writing .= $writing_text . "|||";
        }

        $text_writing = substr($text_writing, 0, -3);
        
        $data = [
            "id_tes" => $tes['id_tes'],
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email" => $this->input->post("email"),
            "nilai_listening" => $benar_listening,
            "nilai_reading" => $benar_reading,
            "text_listening_reading" => $jawaban_ietls,
            "text_writing" => $text_writing
        ];

        $id = $this->Main_model->add_data("peserta_ielts", $data);

        $replace_wa = array(
            ' ' => '%20',
            '"' => '%22'
        );
        $tgl_tes = date("d-M-Y", strtotime($tes['tgl_tes']));

        $replacements = array(
            '$first_name' => $this->input->post("first_name"),
            '$last_name' => $this->input->post("last_name"),
            '$email' => $this->input->post("email"),
            '$benar_listening' => $benar_listening,
            '$benar_reading' => $benar_reading,
            '$tes' => $tes['nama_tes'],
            '$tgl_tes' => tgl_indo($tes["tgl_tes"], "lengkap"),
            '$tgl_pengumuman' => tgl_indo($tes["tgl_pengumuman"], "lengkap"),
        );

        $msg = str_replace(array_keys($replacements), $replacements, $tes['msg']);

        return $msg;
    }

    public function add_jawaban_soal_gt_002(){
        
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["Taxi", "Cab"]
            ],
            [
                "no" => 2,
                "jawaban" => ["City Center"]
            ],
            [
                "no" => 3,
                "jawaban" => ["Wait"]
            ],
            [
                "no" => 4,
                "jawaban" => ["Door-to-door", "Door to door"]
            ],
            [
                "no" => 5,
                "jawaban" => ["Reserve"]
            ],
            [
                "no" => 6,
                "jawaban" => ["the 17th of October", "17th of October", "17th October", "17 October", "October 17"]
            ],
            [
                "no" => 7,
                "jawaban" => ["12.30"]
            ],
            [
                "no" => 8,
                "jawaban" => ["Thomson"]
            ],
            [
                "no" => 9,
                "jawaban" => ["AC 936", "AC936"]
            ],
            [
                "no" => 10,
                "jawaban" => ["3303845020456837"]
            ],
            [
                "no" => 11,
                "jawaban" => ["B. 20 years."]
            ],
            [
                "no" => 12,
                "jawaban" => ["A. France."]
            ],
            [
                "no" => 13,
                "jawaban" => ["B. drama"]
            ],
            [
                "no" => 14,
                "jawaban" => ["C. 10.30 p.m."]
            ],
            [
                "no" => 15,
                "jawaban" => ["C. must be taken out at the time of booking."]
            ],
            [
                "no" => 16,
                "jawaban" => ["A. a free gift."]
            ],
            [
                "no" => 17,
                "jawaban" => ["C"]
            ],
            [
                "no" => 18,
                "jawaban" => ["A"]
            ],
            [
                "no" => 19,
                "jawaban" => ["C"]
            ],
            [
                "no" => 20,
                "jawaban" => ["B"]
            ],
            [
                "no" => 21,
                "jawaban" => ["Attitude", "Attitudes"]
            ],
            [
                "no" => 22,
                "jawaban" => ["Gender", "Sex"]
            ],
            [
                "no" => 23,
                "jawaban" => ["Creativity", "Creativeness"]
            ],
            [
                "no" => 24,
                "jawaban" => ["A. potential leaders."]
            ],
            [
                "no" => 25,
                "jawaban" => ["B. balance conflicting needs."]
            ],
            [
                "no" => 26,
                "jawaban" => ["A. can think independently."]
            ],
            [
                "no" => 27,
                "jawaban" => ["B. encourage co-operation early on."]
            ],
            [
                "no" => 28,
                "jawaban" => ["Culture"]
            ],
            [
                "no" => 29,
                "jawaban" => ["Profit", "Profits"]
            ],
            [
                "no" => 30,
                "jawaban" => ["Stress", "Strain"]
            ],
            [
                "no" => 31,
                "jawaban" => ["April"]
            ],
            [
                "no" => 32,
                "jawaban" => ["Children"]
            ],
            [
                "no" => 33,
                "jawaban" => ["Repeated"]
            ],
            [
                "no" => 34,
                "jawaban" => ["Human"]
            ],
            [
                "no" => 35,
                "jawaban" => ["Magic"]
            ],
            [
                "no" => 36,
                "jawaban" => ["Distance"]
            ],
            [
                "no" => 37,
                "jawaban" => ["Culture"]
            ],
            [
                "no" => 38,
                "jawaban" => ["Fire", "Fires"]
            ],
            [
                "no" => 39,
                "jawaban" => ["Touching"]
            ],
            [
                "no" => 40,
                "jawaban" => ["Intact"]
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["18"],
            ],
            [
                "no" => 2,
                "jawaban" => ["2833","3328"],
            ],
            [
                "no" => 3,
                "jawaban" => ["32"],
            ],
            [
                "no" => 4,
                "jawaban" => ["Monthly", "Every month", "Each month"],
            ],
            [
                "no" => 5,
                "jawaban" => ["A"],
            ],
            [
                "no" => 6,
                "jawaban" => ["C"],
            ],
            [
                "no" => 7,
                "jawaban" => ["AE", "EA"],
            ],
            [
                "no" => 8,
                "jawaban" => ["E"],
            ],
            [
                "no" => 9,
                "jawaban" => ["B"],
            ],
            [
                "no" => 10,
                "jawaban" => ["D"],
            ],
            [
                "no" => 11,
                "jawaban" => ["C"],
            ],
            [
                "no" => 12,
                "jawaban" => ["A"],
            ],
            [
                "no" => 13,
                "jawaban" => ["B"],
            ],
            [
                "no" => 14,
                "jawaban" => ["D"],
            ],
            [
                "no" => 15,
                "jawaban" => ["B"],
            ],
            [
                "no" => 16,
                "jawaban" => ["C. a place to live only."],
            ],
            [
                "no" => 17,
                "jawaban" => ["B. not allowed in University housing"],
            ],
            [
                "no" => 18,
                "jawaban" => ["A. full-time students only"],
            ],
            [
                "no" => 19,
                "jawaban" => ["B. plentiful"],
            ],
            [
                "no" => 20,
                "jawaban" => ["$68.50"],
            ],
            [
                "no" => 21,
                "jawaban" => ["$154"],
            ],
            [
                "no" => 22,
                "jawaban" => ["21"],
            ],
            [
                "no" => 23,
                "jawaban" => ["17"],
            ],
            [
                "no" => 24,
                "jawaban" => ["Boronia"],
            ],
            [
                "no" => 25,
                "jawaban" => ["Women"],
            ],
            [
                "no" => 26,
                "jawaban" => ["1969"],
            ],
            [
                "no" => 27,
                "jawaban" => ["280"],
            ],
            [
                "no" => 28,
                "jawaban" => ["D"],
            ],
            [
                "no" => 29,
                "jawaban" => ["Pre-secondary", "Pre secondary"],
            ],
            [
                "no" => 30,
                "jawaban" => ["Supported secondary"],
            ],
            [
                "no" => 31,
                "jawaban" => ["Secondary"],
            ],
            [
                "no" => 32,
                "jawaban" => ["English"],
            ],
            [
                "no" => 33,
                "jawaban" => ["Science"],
            ],
            [
                "no" => 34,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 35,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 36,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 37,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 38,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 39,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 40,
                "jawaban" => ["TRUE"],
            ],
        ];

        $jawaban_ietls = "";

        $benar_listening = 0;
        foreach ($_POST['jawaban_listening'] as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = strtolower($data_jawaban_listening);
            }

            if (in_array(trim(strtolower($jawaban)), $data_jawaban)){
                $status = "Benar";
                $benar_listening++;
            } else {
                $status = "Salah";
            }

            $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $benar_reading = 0;
        foreach ($_POST['jawaban_reading'] as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_reading[$i]['jawaban'] as $j => $data_jawaban_reading) {
                $data_jawaban[$j] = strtolower($data_jawaban_reading);
            }

            if (in_array(trim(strtolower($jawaban)), $data_jawaban)){
                $status = "Benar";
                $benar_reading++;
            } else {
                $status = "Salah";
            }

            $jawaban_ietls .= 'Reading&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
        }

        $jawaban_ietls = substr($jawaban_ietls, 0, -3);

        $id_tes = $this->input->post("id_tes");

        $tes = $this->Main_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        $writing_text = $this->input->post("text_writing");
        $text_writing = "";

        foreach ($writing_text as $writing_text) {
            $text_writing .= $writing_text . "|||";
        }

        $text_writing = substr($text_writing, 0, -3);
        
        $data = [
            "id_tes" => $tes['id_tes'],
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email" => $this->input->post("email"),
            "nilai_listening" => $benar_listening,
            "nilai_reading" => $benar_reading,
            "text_listening_reading" => $jawaban_ietls,
            "text_writing" => $text_writing
        ];

        $id = $this->Main_model->add_data("peserta_ielts", $data);

        $replace_wa = array(
            ' ' => '%20',
            '"' => '%22'
        );
        $tgl_tes = date("d-M-Y", strtotime($tes['tgl_tes']));

        $replacements = array(
            '$first_name' => $this->input->post("first_name"),
            '$last_name' => $this->input->post("last_name"),
            '$email' => $this->input->post("email"),
            '$benar_listening' => $benar_listening,
            '$benar_reading' => $benar_reading,
            '$tes' => $tes['nama_tes'],
            '$tgl_tes' => tgl_indo($tes["tgl_tes"], "lengkap"),
            '$tgl_pengumuman' => tgl_indo($tes["tgl_pengumuman"], "lengkap"),
        );

        $msg = str_replace(array_keys($replacements), $replacements, $tes['msg']);

        return $msg;
    }
}

/* End of file Other_model.php */
