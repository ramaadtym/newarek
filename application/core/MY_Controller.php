<?php 
class MY_Controller extends CI_Controller
{
    function login_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $page = basename($_SERVER['PHP_SELF']);
        $data['page'] = $page;
        switch ($page){
            case 'index.php':
                $data['nama']= 'Aplikasi Rekrutmen Mobile Innovation ';
                break;

            case 'Dashboard':
                $data['nama']= 'Dashboard | Arek Motion Laboratory';

                break;
        }
        $this->load->view('template/index', $data);
    }
    function laman($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $page = basename($_SERVER['PHP_SELF']);
        $data['page'] = $page;
        switch ($page){
            case 'index.php':
                $data['nama']= 'Aplikasi Rekrutmen Mobile Innovation ';
                break;

            case 'Dashboard':
                $data['nama']= 'Dashboard | Arek Motion Laboratory';
                break;
            case 'Register':
                $data['nama']= 'Registerasi Akun | Arek Motion Laboratory';
                break;
            case 'Home':
                $data['nama']= 'Dashboard | Arek Motion Laboratory';
                break;
            case 'Daftar':
                $data['nama']= 'Biodata Diri | Arek Motion Laboratory';
                break;
            case 'Unggah':
                $data['nama']= 'Unggah Berkas | Arek Motion Laboratory';
                break;
            case 'Alur':
                $data['nama']= 'Alur Pendaftaran | Arek Motion Laboratory';
                break;
            case 'Minat':
                $data['nama']= 'Profil Peminatan | Arek Motion Laboratory';
                break;
            case 'Syarat':
                $data['nama']= 'Profil Peminatan | Arek Motion Laboratory';
                break;    
            default:
                redirect('Home');
                break;
        }
        $this->load->view('template/indexb4', $data);
    }
     function profil($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
         $this->load->view('template/index_profil', $data);
     }
     function paspor($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
         $this->load->view('template/index_paspor', $data);
     }
     function panitia($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
         $this->load->view('template/index_panitia', $data);
     }
    // function dashboard_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/dashboard/index', $data);
    // }
    // function klas_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/kls/index', $data);
    // }
    // function presensi_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/presensi/index', $data);
    // }
    // function matkul_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/matkul/index', $data);
    // }
    // function mhs_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/mahasiswa/index', $data);
    // }
}
?>