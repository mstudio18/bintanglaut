<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('banner_model');
      $this->load->library('upload');
      $this->load->library('pagination');
  }

  public function index(){


          $cari = $this->input->get('cari');
          $page = $this->input->get('per_page');

          $search = array('id' => $cari );

          $batas =  9; // 9 data per page
          if(!$page):
              $offset = 0;
          else:
              $offset = $page;
          endif;

          $config['page_query_string'] = TRUE;
      		$config['base_url'] 				 = base_url().'index.php/banner/?cari='.$cari;
      		$config['total_rows'] 			 = $this->banner_model->jumlah_row($search);

      		$config['per_page'] 				 = $batas;
      		$config['uri_segment'] 			 = $page;

      		$config['full_tag_open'] 		= '<ul class="pagination">';
      		$config['full_tag_close'] 	= '<ul>';

      		$config['first_link'] 			= 'first';
      		$config['first_tag_open'] 	= '<li><a>';
      		$config['first_tag_close'] 	= '</a></li>';

      		$config['last_link'] 				= 'last';
      		$config['last_tag_open']	 	= '<li><a>';
      		$config['last_tag_close'] 	= '</a></li>';

      		$config['next_link'] 				= '&raquo;';
      		$config['next_tag_open'] 		= '<li><a>';
      		$config['next_tag_close'] 	= '</a></li>';

      		$config['prev_link'] 				= '&laquo;';
      		$config['prev_tag_open'] 		= '<li><a>';
      		$config['prev_tag_close'] 	= '</a></li>';

      		$config['cur_tag_open'] 		= '<li class="active"><a>';
      		$config['cur_tag_close'] 		= '</a></li>';

      		$config['num_tag_open'] 		= '<li><a>';
      		$config['num_tag_close'] 		= '</a></li>';

          $this->pagination->initialize($config);
          $data['pagination']	 = $this->pagination->create_links();
          $data['jumlah_page'] = $page;


          $data['data'] = $this->banner_model->get($batas,$offset,$search);

      		$this->load->view('banner/banner',$data);

  }

  public function tambah()
  {
      return $this->load->view('banner/tambah_data');
  }

  public function insertdata()
  {

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
                            'image'       => $foto['file_name']
	                        );
							$this->banner_model->insert($data);
              redirect('banner');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }
  }

    public function edit($id)
    {
        $kondisi = array('id' => $id );

        $data['data'] = $this->banner_model->get_by_id($kondisi);
        return $this->load->view('banner/edit_data',$data);
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');

        $path = './assets/picture/';

        $kondisi = array('id' => $id );

        // get foto
        $config['upload_path'] = './assets/picture';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

  	    if (!empty($_FILES['fotopost']['name'])) {
  	        if ( $this->upload->do_upload('fotopost') ) {
  	            $foto = $this->upload->data();
  	            $data = array(
                              'image'       => $foto['file_name']
  	                        );
                // hapus foto pada direktori
                @unlink($path.$this->input->post('filelama'));

  							$this->banner_model->update($data,$kondisi);
                redirect('banner');
  	        }else {
                die("gagal update");
  	        }
  	    }else {
  	      echo "tidak masuk";
  	    }

    }
}
