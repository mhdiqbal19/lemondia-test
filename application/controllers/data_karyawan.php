<?php
    class Data_karyawan extends CI_Controller{

        public function index(){
            $data['karyawan'] = $this->model_karyawan->tampil_data()->result();
            $this->load->view('templates_admin/header'); 
            $this->load->view('templates_admin/sidebar'); 
            $this->load->view('admin/data_karyawan',$data); 
            $this->load->view('templates_admin/footer'); 
        }

        public function tambah_aksi()
        {
            $nama		= $this->input->post('nama');
            $contact	= $this->input->post('contact');
            $massage	= $this->input->post('massage');
            $date		= $this->input->post('date');
    
            $data = array(
                'nama'		=> $nama,
                'contact'	=> $contact,
                'massage'	=> $massage,
                'date'	    => $date,
    
            );
            
            $this->model_karyawan->tambah_karyawan($data, 'karyawan');
            redirect('data_karyawan/index');
        }
        
        public function hapus($id)
        {
            $where = array('id' => $id);
            $this->model_karyawan->hapus_data($where,'karyawan');
            redirect('data_karyawan/index'); 
        }

        public function edit($id)
        {
            $where = array('id' =>$id);
            $data['karyawan'] = $this->model_karyawan->edit_karyawan($where,'karyawan')->result();

            $this->load->view('templates_admin/header.php'); 
            $this->load->view('templates_admin/sidebar.php'); 
            $this->load->view('admin/edit_karyawan.php',$data); 
            $this->load->view('templates_admin/footer.php'); 
        }

        public function update()
        {
            $id         = $this->input->post('id');
            $nama       = $this->input->post('nama');
            $contact    = $this->input->post('contact');
            $massage    = $this->input->post('massage');
            $date       = $this->input->post('date');


            $data = array (
                'nama'     => $nama,
                'contact'  => $contact,
                'massage'  => $massage,
                'date'     => $date,
            );

            $where = array(
                'id'     => $id
            );

            $this->model_karyawan->update_data($where,$data, 'karyawan');
            redirect('data_karyawan/index');
        }
    
    }

?>