<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('artikel_model');
      $this->load->library('upload');
      $this->load->library('pagination');
  }

  // fungsi untuk mengambil data
	public function index()
	{

      $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('judul' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'index.php/artikel/?cari='.$cari;
  		$config['total_rows'] 			 = $this->artikel_model->jumlah_row($search);

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


      $data['data'] = $this->artikel_model->get($batas,$offset,$search);

  		$this->load->view('artikel',$data);
	}

  // untuk menampilkan halaman tambah data
  public function tambah()
  {
      return $this->load->view('tambah_data');
  }

  // untuk memasukan data ke database
  public function insertdata()
  {
      $judul   = $this->input->post('judul');
      $artikel = $this->input->post('artikel');

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
	                          'judul'       => $judul,
                            'foto'       => $foto['file_name'],
	                          'artikel'     => $artikel,
	                        );
							$this->artikel_model->insert($data);
              redirect('');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "<script type='text/javascript'>
        $(function () {
          $('.toastrDefaultError').click(function () {
            toastr['error']('Are you the six fingered man?')
          });
        });
        </script>";
      redirect('artikel/tambah');
	    }

  }

  // delete
  public function deletedata($id,$foto)
  {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id' => $id );
      $this->artikel_model->delete($where);
      return redirect('');
  }

  // edit
  public function edit($id)
  {
      $kondisi = array('id' => $id );

      $data['data'] = $this->artikel_model->get_by_id($kondisi);
      return $this->load->view('edit_data',$data);
  }

  // update
  public function updatedata()
  {
      $id   = $this->input->post('id');
      $name = $this->input->post('judul');
      $alamat = $this->input->post('artikel');

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
	                          'judul'       => $judul,
                            'foto'       => $foto['file_name'],
	                          'artikel'     => $artikel,
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->artikel_model->update($data,$kondisi);
              redirect('');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "<script $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        });
        </script>";
	    }

  }


} // end class
