<?php
    function tgl_batch($tgl){
        $data = explode("-", $tgl);
        $tahun = $data[0];
        $bulan = $data[1];
        $hari = $data[2];
        $hari_name = hari_ini(date("D", strtotime($tgl)));

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

        return $hari_name . ", " . $hari . " " . $bulan . " " . $tahun;
    }

    function hari_ini($hari){
        switch($hari){
            case 'Sun':
                $hari_ini = "Minggu";
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

    function tgl_indo($tgl, $lengkap = ""){
        $data = explode("-", $tgl);
        $hari = $data[2];
        $bulan = $data[1];
        $tahun = $data[0];

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

        if($lengkap == "lengkap"){
            return hari_ini(date("D", strtotime($tgl))) . ", " . $hari . " " . $bulan . " " . $tahun;
        } else {
            return $hari . " " . $bulan . " " . $tahun;
        }
    }

    function tgl_akad($tgl){
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

        return "Tanggal " . $hari . " Bulan " . $bulan . " Tahun " . $tahun;
    }

    function bulan_tahun($tgl){
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

        return "Bulan <b>" . $bulan . "</b> Tahun <b>" . $tahun . "</b>";
    }

    function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    
        return $file_ary;
    }

    function getRomawi($bln){
        switch ($bln){
            case 1: 
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    function getHurufBulan($bln){
        switch ($bln){
            case 1: 
                return "A";
                break;
            case 2:
                return "B";
                break;
            case 3:
                return "C";
                break;
            case 4:
                return "D";
                break;
            case 5:
                return "E";
                break;
            case 6:
                return "F";
                break;
            case 7:
                return "G";
                break;
            case 8:
                return "H";
                break;
            case 9:
                return "I";
                break;
            case 10:
                return "J";
                break;
            case 11:
                return "K";
                break;
            case 12:
                return "L";
                break;
        }
    }

    function tablerIcon($icon, $margin = ""){
        return '
            <svg width="24" height="24" class="alert-icon '.$margin.'">
                <use xlink:href="'.base_url().'assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-'.$icon.'" />
            </svg>';
    }

    function peserta($peserta_latihan, $peserta_toefl){
        if($peserta_latihan > $peserta_toefl) return $peserta_latihan;
        else return $peserta_toefl;
    }

    function poin($tipe, $soal){
        $CI =& get_instance();
        $CI->db->from("nilai_toefl");
        $CI->db->where(["tipe" => $tipe, "soal" => $soal]);
        $data = $CI->db->get()->row_array();
        return $data['poin'];
    }

    function skor($nilai_listening, $nilai_structure, $nilai_reading){
        return round(((poin("Listening", $nilai_listening) + poin("Structure", $nilai_structure) + poin("Reading", $nilai_reading)) * 10) / 3);
    }

    function config(){
        $CI =& get_instance();
        $CI->db->from("config");
        $data = $CI->db->get()->result_array();
        return $data;
    }

    // soal ielts 
        function soal_isian_ielts($name){
            return '<input type="text" class="ps-2 pe-2 form form-control form-control-flush form-autosize" style="background: #DBE7F6 !important;width: 100px;display: inline" name="'.$name.'" autocomplete="off">';
        }

        function soal_pg_ielts($data_soal){
            return '
                <div class="mb-4">
                    <div class="mb-3">
                        '.$data_soal['no'].') '.$data_soal['soal'].'
                        <input type="hidden" name="'.$data_soal['name'].'">
                    </div>
                    '.pilihan_pg_ielts($data_soal).'
                </div>
            ';
        }

        function pilihan_pg_ielts($data_soal){
            $data_pilihan = "";
            foreach ($data_soal['pilihan'] as $pilihan) {
                $data_pilihan .= '
                    <div class="mb-3">
                        <label>
                            <input type="radio" data-id="'.$data_soal['name'].'" name="radio-'.$data_soal['name'].'-'.$data_soal['no'].'" value="'.$pilihan.'"> 
                            '.$pilihan.'
                        </label>
                    </div>
                ';
            }

            return $data_pilihan;
        }

        function arrowIcon(){
            return '<center>'.tablerIcon("arrow-narrow-down", "mb-1 mt-1").'</center>';
        }
    // soal ielts 

    function ielts_listening($benar){
        if($benar >= 39 && $benar <= 40){
            return 9;
        } else if($benar >= 37 && $benar <= 38){
            return 8.5;
        } else if($benar >= 35 && $benar <= 36){
            return 8;
        } else if($benar >= 32 && $benar <= 34){
            return 7.5;
        } else if($benar >= 30 && $benar <= 31){
            return 7;
        } else if($benar >= 26 && $benar <= 29){
            return 6.5;
        } else if($benar >= 23 && $benar <= 25){
            return 6;
        } else if($benar >= 18 && $benar <= 22){
            return 5.5;
        } else if($benar >= 16 && $benar <= 17){
            return 5;
        } else if($benar >= 13 && $benar <= 15){
            return 4.5;
        } else if($benar >= 11 && $benar <= 12){
            return 4;
        } else if($benar >= 8 && $benar <= 10){
            return 3.5;
        } else if($benar >= 6 && $benar <= 7){
            return 3;
        } else if($benar >= 4 && $benar <= 5){
            return 2.5;
        } else {
            return 0;
        }
    }

    function ielts_reading($benar, $tipe_tes){
        if($tipe_tes == "IELTS Academic"){
            if($benar >= 39 && $benar <= 40){
                return 9;
            } else if($benar >= 37 && $benar <= 38){
                return 8.5;
            } else if($benar >= 35 && $benar <= 36){
                return 8;
            } else if($benar >= 33 && $benar <= 34){
                return 7.5;
            } else if($benar >= 30 && $benar <= 32){
                return 7;
            } else if($benar >= 27 && $benar <= 29){
                return 6.5;
            } else if($benar >= 23 && $benar <= 26){
                return 6;
            } else if($benar >= 19 && $benar <= 22){
                return 5.5;
            } else if($benar >= 15 && $benar <= 18){
                return 5;
            } else if($benar >= 13 && $benar <= 14){
                return 4.5;
            } else if($benar >= 10 && $benar <= 12){
                return 4;
            } else if($benar >= 8 && $benar <= 9){
                return 3.5;
            } else if($benar >= 6 && $benar <= 7){
                return 3;
            } else if($benar >= 4 && $benar <= 5){
                return 2.5;
            } else if($benar >= 2 && $benar <= 3){
                return 2;
            } else {
                return 1;
            }
        } else if($tipe_tes == "General Training"){
            if($benar == 40){
                return 9;
            } else if($benar == 39){
                return 8.5;
            } else if($benar >= 37 && $benar <= 38){
                return 8;
            } else if($benar == 36){
                return 7.5;
            } else if($benar >= 34 && $benar <= 35){
                return 7;
            } else if($benar >= 32 && $benar <= 33){
                return 6.5;
            } else if($benar >= 30 && $benar <= 31){
                return 6;
            } else if($benar >= 27 && $benar <= 29){
                return 5.5;
            } else if($benar >= 23 && $benar <= 26){
                return 5;
            } else if($benar >= 19 && $benar <= 22){
                return 4.5;
            } else if($benar >= 15 && $benar <= 18){
                return 4;
            } else if($benar >= 12 && $benar <= 14){
                return 3.5;
            } else if($benar >= 9 && $benar <= 11){
                return 3;
            } else if($benar >= 6 && $benar <= 8){
                return 2.5;
            } else if($benar >= 3 && $benar <= 5){
                return 2;
            } else {
                return 0;
            }
        }
    }

    function skor_ielts($nilai_listening, $nilai_reading, $nilai_writing, $nilai_speaking){
        $skor = ($nilai_listening + $nilai_reading + $nilai_writing + $nilai_speaking) / 4;

        return $skor;
    }

    function pembulatan_skor_ielts($nilai_listening, $nilai_reading, $nilai_writing, $nilai_speaking){
        $skor = ($nilai_listening + $nilai_reading + $nilai_writing + $nilai_speaking) / 4;

        $whole = intval($skor); // 1234
        $decimal1 = $skor - $whole; // 0.44000000000005 uh oh! that's why it needs... (see next line)
        $decimal2 = round($decimal1, 2); // 0.44 this will round off the excess numbers
        $decimal = substr($decimal2, 2);

        if($decimal < 25) return $whole ;
        else if($decimal >= 25 && $decimal < 50) return $whole + 0.5;
        else if($decimal >= 50 && $decimal <= 100) return $whole + 1;
        else return $whole;
    }

    
    function no_doc($no){
        $no_doc = "";
        if($no > 0 && $no < 10) $no_doc = "00".$no;
        elseif($no >= 10 && $no < 100) $no_doc = "0".$no;
        elseif($no >= 100) $no_doc = $no;
    
        return $no_doc;
    }