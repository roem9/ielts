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
                "jawaban" => ["<b>C.</b> she had been inspired by a particular book"],
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>A.</b> the effect of teacher discipline"],
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>B.</b> girls were more negative about school than boys"],
            ],
            [
                "no" => 24,
                "jawaban" => ["<b>A.</b> teachers should be flexible in unpredictable ways"],
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>B.</b> reflect on her own research experience in an interesting way"],
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
                "jawaban" => ["<b>C.</b> not be known for many, many years"],
            ],
            [
                "no" => 32,
                "jawaban" => ["<b>A.</b> an existing problem even worse"],
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
                "jawaban" => ["<b>B.</b> 20 years."]
            ],
            [
                "no" => 12,
                "jawaban" => ["<b>A.</b> France."]
            ],
            [
                "no" => 13,
                "jawaban" => ["<b>B.</b> drama"]
            ],
            [
                "no" => 14,
                "jawaban" => ["<b>C.</b> 10.30 p.m."]
            ],
            [
                "no" => 15,
                "jawaban" => ["<b>C.</b> must be taken out at the time of booking."]
            ],
            [
                "no" => 16,
                "jawaban" => ["<b>A.</b> a free gift."]
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
                "jawaban" => ["<b>A.</b> potential leaders."]
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>B.</b> balance conflicting needs."]
            ],
            [
                "no" => 26,
                "jawaban" => ["<b>A.</b> can think independently."]
            ],
            [
                "no" => 27,
                "jawaban" => ["<b>B.</b> encourage co-operation early on."]
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
                "jawaban" => ["<b>C.</b> a place to live only."],
            ],
            [
                "no" => 17,
                "jawaban" => ["<b>B.</b> not allowed in University housing"],
            ],
            [
                "no" => 18,
                "jawaban" => ["<b>A.</b> full-time students only"],
            ],
            [
                "no" => 19,
                "jawaban" => ["<b>B.</b> plentiful"],
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

    public function add_jawaban_soal_gt_003(){
        
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["CAFE"]
            ],
            [
                "no" => 2,
                "jawaban" => ["9AM", "NINE AM", "9", "NINE O’CLOCK", "9 O’CLOCK"]
            ],
            [
                "no" => 3,
                "jawaban" => ["5", "FIVE KM", "FIVE KILOMETRES", "5 KILOMETRES"]
            ],
            [
                "no" => 4,
                "jawaban" => ["BARCODE"]
            ],
            [
                "no" => 5,
                "jawaban" => ["WEBSITE"]
            ],
            [
                "no" => 6,
                "jawaban" => ["1.50"]
            ],
            [
                "no" => 7,
                "jawaban" => ["MAUGHAN"]
            ],
            [
                "no" => 8,
                "jawaban" => ["01444732900"]
            ],
            [
                "no" => 9,
                "jawaban" => ["GUIDING", "GUIDE"]
            ],
            [
                "no" => 10,
                "jawaban" => ["TAKING", "PHOTOGRAPHS", "TAKE PHOTOS"]
            ],
            [
                "no" => 11,
                "jawaban" => ["SHARKS"]
            ],
            [
                "no" => 12,
                "jawaban" => ["OLD FISHING VILLAGE"]
            ],
            [
                "no" => 13,
                "jawaban" => ["SHOPPING"]
            ],
            [
                "no" => 14,
                "jawaban" => ["WATER FOUNTAIN"]
            ],
            [
                "no" => 15,
                "jawaban" => ["STUDENT CARD"]
            ],
            [
                "no" => 16,
                "jawaban" => ["FIFTY", "50 MINUTES", "FIFTY MINS"]
            ],
            [
                "no" => 17,
                "jawaban" => ["MUSEUM"]
            ],
            [
                "no" => 18,
                "jawaban" => ["TOURIST OFFICE"]
            ],
            [
                "no" => 19,
                "jawaban" => ["RAINWEAR"]
            ],
            [
                "no" => 20,
                "jawaban" => ["E-TICKET"]
            ],
            [
                "no" => 21,
                "jawaban" => ["<b>C.</b> become outdated."]
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>A.</b> is too slow"]
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>B.</b> the system does not handle course options."]
            ],
            [
                "no" => 24,
                "jawaban" => ["<b>A.</b> students should create their own timetables"]
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>C.</b> be more economical"]
            ],
            [
                "no" => 26,
                "jawaban" => ["<b>B.</b> four or five months."]
            ],
            [
                "no" => 27,
                "jawaban" => ["SENIOR MANAGEMENT", "SENIOR MANAGERS"]
            ],
            [
                "no" => 28,
                "jawaban" => ["PROJECT REQUEST"]
            ],
            [
                "no" => 29,
                "jawaban" => ["MEETING"]
            ],
            [
                "no" => 30,
                "jawaban" => ["CONFERENCE CALL"]
            ],
            [
                "no" => 31,
                "jawaban" => ["29,000 YEARS", "29.000 YEARS", "29000 YEARS"]
            ],
            [
                "no" => 32,
                "jawaban" => ["SOUTHERN", "SOUTH EUROPE"]
            ],
            [
                "no" => 33,
                "jawaban" => ["WATER"]
            ],
            [
                "no" => 34,
                "jawaban" => ["MINERALS"]
            ],
            [
                "no" => 35,
                "jawaban" => ["WHITE GOLD"]
            ],
            [
                "no" => 36,
                "jawaban" => ["CHINA STONE"]
            ],
            [
                "no" => 37,
                "jawaban" => ["COOLING", "COOLING DOWN"]
            ],
            [
                "no" => 38,
                "jawaban" => ["WINDOWS"]
            ],
            [
                "no" => 39,
                "jawaban" => ["VOLCANIC ASH"]
            ],
            [
                "no" => 40,
                "jawaban" => ["HARBORS", "HARBOURS"]
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["C"],
            ],
            [
                "no" => 2,
                "jawaban" => ["A"],
            ],
            [
                "no" => 3,
                "jawaban" => ["B"],
            ],
            [
                "no" => 4,
                "jawaban" => ["E"],
            ],
            [
                "no" => 5,
                "jawaban" => ["D"],
            ],
            [
                "no" => 6,
                "jawaban" => ["A"],
            ],
            [
                "no" => 7,
                "jawaban" => ["B"],
            ],
            [
                "no" => 8,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 9,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 10,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 11,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 12,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 13,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 14,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 15,
                "jawaban" => ["EMAILS"],
            ],
            [
                "no" => 16,
                "jawaban" => ["IMPACT ASSESSMENT"],
            ],
            [
                "no" => 17,
                "jawaban" => ["EQUIPMENT"],
            ],
            [
                "no" => 18,
                "jawaban" => ["QUALITY"],
            ],
            [
                "no" => 19,
                "jawaban" => ["CRIME"],
            ],
            [
                "no" => 20,
                "jawaban" => ["VIRUSES", "COMPUTER VIRUSES"],
            ],
            [
                "no" => 21,
                "jawaban" => ["CONFIDENTIAL HELPLINES", "HELPLINES"],
            ],
            [
                "no" => 22,
                "jawaban" => ["QUESTIONNAIRE"],
            ],
            [
                "no" => 23,
                "jawaban" => ["ACCOUNT"],
            ],
            [
                "no" => 24,
                "jawaban" => ["10 DAYS"],
            ],
            [
                "no" => 25,
                "jawaban" => ["COMPLETE"],
            ],
            [
                "no" => 26,
                "jawaban" => ["EMPLOYER"],
            ],
            [
                "no" => 27,
                "jawaban" => ["REFUND"],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>B.</b> New breeds of cattle have led to an increase in TB."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>A.</b> was introduced from outside Africa."],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>C.</b> linked to insect attacks on these vegetables."],
            ],
            [
                "no" => 31,
                "jawaban" => ["<b>D.</b> aphids would not have caused so much damage to the crops."],
            ],
            [
                "no" => 32,
                "jawaban" => ["<b>A.</b> the virus was unfamiliar to them."],
            ],
            [
                "no" => 33,
                "jawaban" => ["B"],
            ],
            [
                "no" => 34,
                "jawaban" => ["D"],
            ],
            [
                "no" => 35,
                "jawaban" => ["A"],
            ],
            [
                "no" => 36,
                "jawaban" => ["B"],
            ],
            [
                "no" => 37,
                "jawaban" => ["TETSE FLY"],
            ],
            [
                "no" => 38,
                "jawaban" => ["IMMUNE SYSTEM"],
            ],
            [
                "no" => 39,
                "jawaban" => ["PROTEIN", "PROTEINS"],
            ],
            [
                "no" => 40,
                "jawaban" => ["CATTLE"],
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

    public function add_jawaban_soal_003(){
        
        $jawaban_listening = [
            [
                "no" => 1,
                "jawaban" => ["7.30"],
            ],
            [
                "no" => 2,
                "jawaban" => ["PENCILS"],
            ],
            [
                "no" => 3,
                "jawaban" => ["TOP"],
            ],
            [
                "no" => 4,
                "jawaban" => ["AUGUST"],
            ],
            [
                "no" => 5,
                "jawaban" => ["INSTRUCTIONS"],
            ],
            [
                "no" => 6,
                "jawaban" => ["55"],
            ],
            [
                "no" => 7,
                "jawaban" => ["BEGINNERS"],
            ],
            [
                "no" => 8,
                "jawaban" => ["KAHUI"],
            ],
            [
                "no" => 9,
                "jawaban" => ["BATTERY"],
            ],
            [
                "no" => 10,
                "jawaban" => ["SHOW"],
            ],
            [
                "no" => 11,
                "jawaban" => ["B", "E"],
            ],
            [
                "no" => 12,
                "jawaban" => ["E", "B"],
            ],
            [
                "no" => 13,
                "jawaban" => ["B", "C"],
            ],
            [
                "no" => 14,
                "jawaban" => ["C", "B"],
            ],
            [
                "no" => 15,
                "jawaban" => ["G"],
            ],
            [
                "no" => 16,
                "jawaban" => ["I"],
            ],
            [
                "no" => 17,
                "jawaban" => ["B"],
            ],
            [
                "no" => 18,
                "jawaban" => ["E"],
            ],
            [
                "no" => 19,
                "jawaban" => ["C"],
            ],
            [
                "no" => 20,
                "jawaban" => ["A"],
            ],
            [
                "no" => 21,
                "jawaban" => ["<b>C.</b> It included liquid waste as well as solid water."],
            ],
            [
                "no" => 22,
                "jawaban" => ["<b>A.</b> food production."],
            ],
            [
                "no" => 23,
                "jawaban" => ["<b>B.</b> the origin of food products."],
            ],
            [
                "no" => 24,
                "jawaban" => ["<b>C.</b> the economic effect"],
            ],
            [
                "no" => 25,
                "jawaban" => ["<b>A.</b> handing out a questionnaire."],
            ],
            [
                "no" => 26,
                "jawaban" => ["G"],
            ],
            [
                "no" => 27,
                "jawaban" => ["A"],
            ],
            [
                "no" => 28,
                "jawaban" => ["D"],
            ],
            [
                "no" => 29,
                "jawaban" => ["C"],
            ],
            [
                "no" => 30,
                "jawaban" => ["E"],
            ],
            [
                "no" => 31,
                "jawaban" => ["FOOD"],
            ],
            [
                "no" => 32,
                "jawaban" => ["HERO"],
            ],
            [
                "no" => 33,
                "jawaban" => ["FEATHERS"],
            ],
            [
                "no" => 34,
                "jawaban" => ["SHELLS"],
            ],
            [
                "no" => 35,
                "jawaban" => ["DIAMOND"],
            ],
            [
                "no" => 36,
                "jawaban" => ["SHARK"],
            ],
            [
                "no" => 37,
                "jawaban" => ["TEETH"],
            ],
            [
                "no" => 38,
                "jawaban" => ["MESSAGES"],
            ],
            [
                "no" => 39,
                "jawaban" => ["MEETING"],
            ],
            [
                "no" => 40,
                "jawaban" => ["ESCAPE"],
            ],
        ];

        $jawaban_reading = [
            [
                "no" => 1,
                "jawaban" => ["B"],
            ],
            [
                "no" => 2,
                "jawaban" => ["F"],
            ],
            [
                "no" => 3,
                "jawaban" => ["B"],
            ],
            [
                "no" => 4,
                "jawaban" => ["E"],
            ],
            [
                "no" => 5,
                "jawaban" => ["A"],
            ],
            [
                "no" => 6,
                "jawaban" => ["B"],
            ],
            [
                "no" => 7,
                "jawaban" => ["C"],
            ],
            [
                "no" => 8,
                "jawaban" => ["ANIMALS"],
            ],
            [
                "no" => 9,
                "jawaban" => ["CHILDBIRTH"],
            ],
            [
                "no" => 10,
                "jawaban" => ["PLACEBO"],
            ],
            [
                "no" => 11,
                "jawaban" => ["GAME"],
            ],
            [
                "no" => 12,
                "jawaban" => ["STRANGERS"],
            ],
            [
                "no" => 13,
                "jawaban" => ["NAMES"],
            ],
            [
                "no" => 14,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 15,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 16,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 17,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 18,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 19,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 20,
                "jawaban" => ["GATES"],
            ],
            [
                "no" => 21,
                "jawaban" => ["CLAMP"],
            ],
            [
                "no" => 22,
                "jawaban" => ["AXLE"],
            ],
            [
                "no" => 23,
                "jawaban" => ["COGS"],
            ],
            [
                "no" => 24,
                "jawaban" => ["AQUEDUCT"],
            ],
            [
                "no" => 25,
                "jawaban" => ["WALL"],
            ],
            [
                "no" => 26,
                "jawaban" => ["LOCKS"],
            ],
            [
                "no" => 27,
                "jawaban" => ["<b>C.</b> our tendency to be influenced by the opinions of others."],
            ],
            [
                "no" => 28,
                "jawaban" => ["<b>D.</b> have the ability to perceive the intention behind works of art."],
            ],
            [
                "no" => 29,
                "jawaban" => ["<b>B.</b> find it satisfying to work out what a painting represents."],
            ],
            [
                "no" => 30,
                "jawaban" => ["<b>A.</b> They are more carefully put together than they appear."],
            ],
            [
                "no" => 31,
                "jawaban" => ["EMOTIONS"],
            ],
            [
                "no" => 32,
                "jawaban" => ["COMPLEXITY"],
            ],
            [
                "no" => 33,
                "jawaban" => ["IMAGES"],
            ],
            [
                "no" => 34,
                "jawaban" => ["NOT GIVEN"],
            ],
            [
                "no" => 35,
                "jawaban" => ["TRUE"],
            ],
            [
                "no" => 36,
                "jawaban" => ["FALSE"],
            ],
            [
                "no" => 37,
                "jawaban" => ["FALSE"],
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
                "jawaban" => ["<b>A.</b> Some scientific insights into how the brain responds to abstract art"],
            ],
        ];

        $jawaban_ietls = "";

        $benar_listening = 0;
        foreach ($_POST['jawaban_listening'] as $i => $jawaban) {
            $data_jawaban = [];

            foreach ($jawaban_listening[$i]['jawaban'] as $j => $data_jawaban_listening) {
                $data_jawaban[$j] = strtolower($data_jawaban_listening);
            }

            // if($i == 11){
            //     if(strtolower($_POST['jawaban_listening'][10]) == 'B' && strtolower($_POST['jawaban_listening'][11]) == 'E'){
            //         $jawaban_ietls .= 'Listening&&&B&&&Benar|||Listening&&&E&&&Benar|||';
            //         $benar_listening = $benar_listening + 2;
            //     } else if(strtolower($_POST['jawaban_listening'][10]) == 'E' && strtolower($_POST['jawaban_listening'][11]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&E&&&Benar|||Listening&&&B&&&Benar|||';
            //         $benar_listening = $benar_listening + 2;
            //     } else if(strtolower($_POST['jawaban_listening'][10]) == 'E'){
            //         $jawaban_ietls .= 'Listening&&&E&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][11])).'&&&Salah|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][10]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&B&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][11])).'&&&Salah|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][11]) == 'E'){
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][10])).'&&&Salah|||Listening&&&E&&&Benar|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][11]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][10])).'&&&Salah|||Listening&&&B&&&Benar|||';
            //         $benar_listening++;
            //     } else {
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][10])).'&&&Salah|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][11])).'&&&Salah|||';
            //     }
            // } else if($i == 13){
            //     if(strtolower($_POST['jawaban_listening'][12]) == 'B' && strtolower($_POST['jawaban_listening'][13]) == 'C'){
            //         $jawaban_ietls .= 'Listening&&&B&&&Benar|||Listening&&&C&&&Benar|||';
            //         $benar_listening = $benar_listening + 2;
            //     } else if(strtolower($_POST['jawaban_listening'][12]) == 'C' && strtolower($_POST['jawaban_listening'][13]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&C&&&Benar|||Listening&&&B&&&Benar|||';
            //         $benar_listening = $benar_listening + 2;
            //     } else if(strtolower($_POST['jawaban_listening'][12]) == 'C'){
            //         $jawaban_ietls .= 'Listening&&&C&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][13])).'&&&Salah|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][12]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&B&&&Benar|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][13])).'&&&Salah|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][13]) == 'C'){
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][12])).'&&&Salah|||Listening&&&C&&&Benar|||';
            //         $benar_listening++;
            //     } else if(strtolower($_POST['jawaban_listening'][13]) == 'B'){
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][12])).'&&&Salah|||Listening&&&B&&&Benar|||';
            //         $benar_listening++;
            //     } else {
            //         $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][12])).'&&&Salah|||Listening&&&'.trim(str_replace('"', "&quot;", $_POST['jawaban_listening'][13])).'&&&Salah|||';
            //     }
            // } else if($i != 10 && $i != 12){
                if (in_array(trim(strtolower($jawaban)), $data_jawaban)){
                    $status = "Benar";
                    $benar_listening++;
                } else {
                    $status = "Salah";
                }
    
                $jawaban_ietls .= 'Listening&&&'.trim(str_replace('"', "&quot;", $jawaban)).'&&&'.$status.'|||';
            // }
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
