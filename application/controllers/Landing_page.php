<?php
    class Landing_page extends CI_Controller {

     
        function __construct()
        {
            parent::__construct();
            $this->load->model("OlahragaModel");
            $this->load->model("BarangModel");

            $this->OlahragaModel->userAccessDashboard();

        }
       public function index() {
       

           $this->load->view('landing_page');           
       }

       public function get_nisn()
       {
                      if (!$this->input->is_ajax_request()) :
                      show_404();
         else :
                     $data = $this->OlahragaModel->getAllOlahraga();
     
           if ($data->num_rows() > 0) :
             $this->result['status'] = true;
             foreach ($data->result() as $key => $value) :
               $this->result['data'][$key]['nisn'] = $value->data;
             endforeach;
           endif;
     
           echo json_encode($this->result);
         endif;
       }

       public function get_siswa()
       {
         if (!$this->input->is_ajax_request()) :
           show_404();
         else :
           $nisn   = $this->input->get('nisn');
           $siswa = $this->OlahragaModel->getAllOlahraga();
           if ($siswa->num_rows() > 0) :
             $this->result['status'] = true;
             $this->result['data']   = $siswa->row_array();
           endif;
     
           echo json_encode($this->result);
         endif;
       }

       public function stokBarang(){

       
        $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
        //echo json_encode($data); mengetahui isi dari fungsi get all dapat atau tidak
        $this->load->view('stok', $data);
       }

       public function buttons(){
           
        $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
        //echo json_encode($data); mengetahui isi dari fungsi get all dapat atau tidak
        $this->load->view('stok', $data);
       }

       public function stok_material(){

        $data['data_stok'] = $this->OlahragaModel->getAllOlahraga();
        //echo json_encode($data); mengetahui isi dari fungsi get all dapat atau tidak
        $this->load->view('stok_material', $data);
        $this->load->view('tambah_StokBarang');

   }
       public function stok_kurang_material(){

        $data['data_stok'] = $this->OlahragaModel->getAllOlahraga();
        //echo json_encode($data); mengetahui isi dari fungsi get all dapat atau tidak
        $this->load->view('ambil_stok_material', $data);        
   }

   
  public function B_data_barang()
  {
    $data['Barang_Stok'] = $this->OlahragaModel->getAllOlahraga();
    //echo json_encode($data); mengetahui isi dari fungsi get all dapat atau tidak
    $this->load->view('bom_tambah_barang', $data); 
    $this->load->view('bom_tambah_barang'); 
 
  }

  public function print (){
    $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
    $this->load->view('print_stok', $data);
   }

   public function print_excel (){
    $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
    $this->load->view('print_stok_excel', $data);
   }


       
        public function insert_data() 
        {
            
            $id_barang = $this->input->post("id_barang");
            $kode_material= $this->input->post("kode_material");
            $nama_material= $this->input->post("nama_material");
            $kategori= $this->input->post("kategori");
            $jumlah= $this->input->post("jumlah");
            $total= $this->input->post('total');

            $data = array(
                "id_barang" => $id_barang,
                "kode_material" => $kode_material,
                "nama_material" => $nama_material,
                "kategori" => $kategori,
                "jumlah" => $jumlah,
                "total" => $total
            );
  
            $this->BarangModel->tambah_data_barang('data_barang', $data);
            redirect('landing_page/stokBarang');
      }

        public function tambah_barang(){
        $this->load->view('tambah_barang');
    }

    public function proses_hapus_barang($id_barang)
    {
    
        $data = array(
            "id_barang" => $id_barang
        );
  
        $this->BarangModel->hapus_data('data_barang', $data);
        redirect('landing_page/stokBarang');
      
    }

    public function edit_barang($id_barang){
        
    $id['id_barang'] = $id_barang;
    $data['barang'] = $this->BarangModel->get_data_barang($id)->result()[0];
        
    $this->load->view('edit_barang',$data);
    }

    function proses_edit_barang(){
        $id_barang = $this->input->post('id_barang');
        $kode_material = $this->input->post('kode_material');
        $nama_material = $this->input->post('nama_material');
        $kategori = $this->input->post('kategori');
        $jumlah = $this->input->post('jumlah');
        $total = $this->input->post('total');
     
        $data = array(
          
            'kode_material' => $kode_material,
            'nama_material' => $nama_material,
            'kategori' => $kategori,
            'jumlah' => $jumlah,
            'total' => $total
        );
     
     
        $this->BarangModel->update_data($id_barang, $data);
        redirect('landing_page/stokBarang');
    }
   

    public function proses_tambah_stok_barang()
    {
      $id_barang = $this->input->post('id_barang');
      $id['id_barang'] = $id_barang;
      $jumlah = $this->input->post('jumlah');
      $table = 'data_barang';
      $field['id_barang'] = $id_barang;
  
      $query = $this->BarangModel->get_where_data_table($table, $field)->result();
  
      foreach($query as $data) :
        $field1['jumlah'] = $jumlah + $data->jumlah;
        $field1['total'] = $jumlah + $data->total;
      endforeach;
  
      $this->BarangModel->update_data_table($table, $id, $field1);
  
      redirect('landing_page/stokBarang');
    }

    public function proses_kurang_stok_barang()
    {
      $id_barang = $this->input->post('id_barang');
      $id['id_barang'] = $id_barang;
      $jumlah = $this->input->post('jumlah');
      $table = 'data_barang';
      $field['id_barang'] = $id_barang;
  
      $query = $this->BarangModel->get_where_data_table($table, $field)->result();
  
      foreach($query as $data) :
        $field1['jumlah'] = $data->jumlah - $jumlah;
        $field1['total'] = $data->total - $jumlah;
      endforeach;
  
      $this->BarangModel->update_data_table($table, $id, $field1);
  
      redirect('landing_page/stokBarang');
    }
     
    public function bom_view(){
        $table = 'data_barang';
        $table2 = 'bom';
    
        $field = 'data_barang.kode_material = bom.kode_material';
    
        $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();
    
        $this->load->view('bom_view', $data);
    }

    public function bom_tambah_barang(){


        $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
        $this->load->view('bom_tambah_barang', $data);
    }

    public function proses_bom_tambah_barang(){
            $id_barang = $this->input->post("id_barang");
            $kode_material= $this->input->post("kode_material");
            $jenis_bom= $this->input->post("jenis_bom");
            $no_dokumen= $this->input->post("no_dokumen");
            $tanggal= $this->input->post("tanggal");
            $ambil_barang= $this->input->post("ambil_barang");

            $data = array(
                "id_barang" => $id_barang,
                "kode_material" => $kode_material,
                "jenis_bom" => $jenis_bom,
                "no_dokumen" => $no_dokumen,
                "tanggal" => $tanggal,
                "ambil_barang" => $ambil_barang
            );
        $this->BarangModel->tambah_data_barang('bom', $data);
        
        $field = array (
          "kode_material" => $kode_material
        );
        $barang = $this->BarangModel->get_where_data_table("data_barang" ,$field)->result_array()[0];
        
        $field1 = array(
          "jumlah" => $barang["jumlah"] - $ambil_barang, 
          "total" => $barang["total"] - $ambil_barang
        );
        $id = array(
          "kode_material" => $kode_material
        );
        $this->BarangModel->update_data_table("data_barang", $id, $field1);
        
        
        redirect('bom_view');
    }

    public function proses_hapus_bom($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('bom', $data);
    redirect('bom_view');
  
}

public function edit_bom($id_barang){
        
  $id['id_barang'] = $id_barang;
  $data['bom'] = $this->BarangModel->get_data_bom($id)->result()[0];
  
      
  $this->load->view('edit_bom',$data);
  }

  function proses_edit_bom(){
      $id_barang = $this->input->post('id_barang');
      $jenis_bom = $this->input->post('jenis_bom');
      $kode_material = $this->input->post('kode_material');
      $no_dokumen = $this->input->post('no_dokumen');
      $tanggal = $this->input->post('tanggal');
   
      $data = array(
        
          'kode_material' => $kode_material,
          'jenis_bom' => $jenis_bom,
          'no_dokumen' => $no_dokumen,
          'tanggal' => $tanggal
      );
   
   
      $this->BarangModel->update_data_bom($id_barang, $data);
      redirect('bom_view');
  }

  public function print_bom_pdf (){
    $table = 'data_barang';
    $table2 = 'bom';

    $field = 'data_barang.kode_material = bom.kode_material';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

    $this->load->view('print_bom_pdf', $data);
   }

   public function print_bom_excel (){
    $table = 'data_barang';
    $table2 = 'bom';

    $field = 'data_barang.kode_material = bom.kode_material';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

    $this->load->view('print_bom_excel', $data);
   }
 


    public function suplier_view(){
      $table = 'data_barang';
      $table2 = 'suplier';
      $table3 = 'suplier_user';

  
      $field = 'data_barang.kode_material = suplier.kode_material';
      $field2 = 'suplier.nama_suplier = suplier_user.nama_suplier'; 
  
      $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();
  
      $this->load->view('suplier_view', $data);
  }

    public function suplier_tambah_barang(){


      $data['ipb'] = $this->OlahragaModel->getAllOlahraga();
      $data['supplier'] = $this->OlahragaModel->getSupplierData();

      $this->load->view('suplier_tambah_barang', $data);
  }
  
    public function proses_suplier_tambah_barang(){
      $id_suplier = $this->input->post("id_suplier");
      $kode_material= $this->input->post("kode_material");
      $nama_suplier= $this->input->post("nama_suplier");
      $tanggal= $this->input->post("tanggal");
      $barang_masuk= $this->input->post("barang_masuk");

      $data = array(
                "id_suplier" => $id_suplier,
                "kode_material" => $kode_material,
                "nama_suplier" => $nama_suplier,
                "tanggal" => $tanggal,
                "barang_masuk" => $barang_masuk
            );
      $this->BarangModel->tambah_data_barang('suplier', $data);

      $field = array(
        "nama_suplier" => $nama_suplier
      );

      $barang = $this->BarangModel->get_where_data_table("suplier_user",$field)->result_array()[0];
  
      $field = array (
          "kode_material" => $kode_material
      );
        
      $barang = $this->BarangModel->get_where_data_table("data_barang" ,$field)->result_array()[0];
         
      $field1 = array(
          "jumlah" => $barang["jumlah"] + $barang_masuk, 
          "total" => $barang["total"] + $barang_masuk
        );

      $id = array(
          "kode_material" => $kode_material
        );
        
      $this->BarangModel->update_data_table("data_barang", $id, $field1);
        
        
      redirect('suplier_view');
    }

    public function proses_hapus_suplier($id_suplier)
    {
    
        $data = array(
            "id_suplier" => $id_suplier
        );
  
        $this->BarangModel->hapus_data('suplier', $data);
        redirect('suplier_view');
      
    }
    public function print_suplier_pdf(){
      $table = 'data_barang';
      $table2 = 'suplier';
      $table3 = 'suplier_user';

  
      $field = 'data_barang.kode_material = suplier.kode_material';
      $field2 = 'suplier.nama_suplier = suplier_user.nama_suplier'; 
  
      $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();
  
      $this->load->view('print_supplier_pdf', $data);
  }
  public function print_suplier_excel(){
    $table = 'data_barang';
    $table2 = 'suplier';
    $table3 = 'suplier_user';


    $field = 'data_barang.kode_material = suplier.kode_material';
    $field2 = 'suplier.nama_suplier = suplier_user.nama_suplier'; 

    $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();

    $this->load->view('print_supplier_excel', $data);
}
public function print_user_pdf(){
  
  
  $data['ipb'] = $this->OlahragaModel->getSupplierData();

  // echo json_encode($data); 
  $this->load->view('print_user_pdf', $data);
}
public function print_user_excel(){


  $data['ipb'] = $this->OlahragaModel->getSupplierData();

  // echo json_encode($data); 
  $this->load->view('print_user_excel', $data);
}
public function print_gudang_pdf(){
  $data['ipb'] = $this->OlahragaModel->getAllProduksi();
  $this->load->view('print_gudang_pdf', $data);
}
public function print_gudang_excel (){
  $data['ipb'] = $this->OlahragaModel->getAllProduksi();
  $this->load->view('print_gudang_excel', $data);
 }
 public function print_stok_gudang_pdf(){
  $table = 'produksi';
  $table2 = 'produksi_tambah';

  $field = 'produksi.kode_barang = produksi_tambah.kode_barang';

  $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

  $this->load->view('print_stok_gudang_pdf', $data);
}
public function print_stok_gudang_excel(){
  $table = 'produksi';
  $table2 = 'produksi_tambah';

  $field = 'produksi.kode_barang = produksi_tambah.kode_barang';

  $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

  $this->load->view('print_stok_gudang_excel', $data);
}    
    public function suplier_user_view(){
  
  
      $data['suplier'] = $this->OlahragaModel->getSupplierData();
  
      // echo json_encode($data); 
      $this->load->view('suplier_user_view', $data);
  }
  public function tambah_suplier_user_view(){
  
    $data['ipb'] = $this->OlahragaModel->getSupplierData();
    // echo json_encode($data);

    $this->load->view('tambah_suplier_user_view',$data);
}

public function proses_tambah_suplier_user_view() 
{
    
    $id_suplier2 = $this->input->post("id_suplier2");
    $nama_suplier= $this->input->post("nama_suplier");
    $alamat= $this->input->post("alamat");
    $no_telp= $this->input->post("no_telp");

    $data = array(
        "id_suplier2" => $id_suplier2,
        "nama_suplier" => $nama_suplier,
        "alamat" => $alamat,
        "no_telp" => $no_telp
    );

    $this->BarangModel->tambah_data_barang('suplier_user', $data);
    redirect('suplier_user_view');
}

public function proses_hapus_suplier_user($id_suplier2)
{

    $data = array(
        "id_suplier2" => $id_suplier2
    );

    $this->BarangModel->hapus_data('suplier_user', $data);
    redirect('suplier_user_view');
  
}

public function edit_suplier_user($id_suplier2){
        
  $id['id_suplier2'] = $id_suplier2;
  $data['ipb'] = $this->BarangModel->get_data_suplier_user($id)->result()[0];
      
  $this->load->view('edit_suplier_user',$data);
  }

  function proses_edit_suplier_user(){
      $id_suplier2 = $this->input->post('id_suplier2');
      $nama_suplier = $this->input->post('nama_suplier');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('no_telp');
   
      $data = array(
        
          'id_suplier2' => $id_suplier2,
          'nama_suplier' => $nama_suplier,
          'alamat' => $alamat,
          'no_telp' => $no_telp
      );
   
   
      $this->BarangModel->update_data_suplier_user($id_suplier2, $data);
      redirect('suplier_user_view');
  }
 
public function produksi_view(){
  
  
  $data['produksi'] = $this->OlahragaModel->getAllProduksi();

  // echo json_encode($data); 
  $this->load->view('produksi_view', $data);
}

public function tambah_produksi(){
  
  $data['produksi'] = $this->OlahragaModel->getAllProduksi();
  // echo json_encode($data);

  $this->load->view('tambah_produksi',$data);
}

public function proses_tambah_produksi() 
{
    
    $id_barang = $this->input->post("id_barang");
    $kode_barang = $this->input->post("kode_barang");
    $nama_barang = $this->input->post("nama_barang");
    $tanggal = $this->input->post("tanggal");
    $jumlah = $this->input->post("jumlah");
    $satuan = $this->input->post("satuan");

    $data = array(
        "id_barang" => $id_barang,
        "kode_barang" => $kode_barang,
        "nama_barang" => $nama_barang,
        "tanggal" => $tanggal,
        "jumlah" => $jumlah,
        "satuan" => $satuan
    );

    $this->BarangModel->tambah_data_barang('produksi', $data);
    redirect('produksi_view');
}

public function proses_hapus_produksi($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('produksi', $data);
    redirect('produksi_view');
  
}

public function edit_produksi($id_barang){
  $id['id_barang'] = $id_barang;
  $data['ipb'] = $this->BarangModel->get_data_produksi($id)->result()[0];
      
  $this->load->view('edit_produksi',$data);
  }

  function proses_edit_produksi(){
      $id_barang = $this->input->post('id_barang');
      $kode_barang = $this->input->post('kode_barang');
      $nama_barang = $this->input->post('nama_barang');
      $jumlah = $this->input->post('jumlah');
      $tanggal = $this->input->post('tanggal');
      $satuan = $this->input->post('satuan');
   
      $data = array(
        
          'id_barang' => $id_barang,
          'nama_barang' => $nama_barang,
          'kode_barang' => $kode_barang,
          'tanggal' => $tanggal,
          'jumlah' => $jumlah,
          'satuan' => $satuan
      );
   
   
      $this->BarangModel->update_data_produksi($id_barang, $data);
      redirect('produksi_view');
  }

  public function produksi_stok_view(){
    $table = 'produksi';
    $table2 = 'produksi_tambah';

    $field = 'produksi.kode_barang = produksi_tambah.kode_barang';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

    $this->load->view('produksi_stok_view', $data);
}

public function tambah_stok_produksi(){

  $data['ipb'] = $this->OlahragaModel->getAllProduksi();
  // echo json_encode($data);

  $this->load->view('tambah_stok_produksi',$data);
}

public function proses_tambah_stok_produksi(){
      $id_barang = $this->input->post("id_barang");
      $kode_barang= $this->input->post("kode_barang");
      $tanggal= $this->input->post("tanggal");
      $brg_msk= $this->input->post("brg_msk");

      $data = array(
          "id_barang" => $id_barang,
          "kode_barang" => $kode_barang,
          "tanggal" => $tanggal,
          "brg_msk" => $brg_msk
      );
  $this->BarangModel->tambah_data_barang('produksi_tambah', $data);
  
  $field = array (
    "kode_barang" => $kode_barang
  );
  $barang = $this->BarangModel->get_where_data_table("produksi" ,$field)->result_array()[0];
  
  $field1 = array(
    "jumlah" => $barang["jumlah"] + $brg_msk 
  );
  $id = array(
    "kode_barang" => $kode_barang
  );
  $this->BarangModel->update_data_table("produksi", $id, $field1);
  
  
  redirect('produksi_stok_view');
}

public function proses_hapus_stok_produksi($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('produksi_tambah', $data);
    redirect('produksi_stok_view');
  
}


public function edit_stok_produksi($id_barang){
  $id['id_barang'] = $id_barang;
  $data['ipb'] = $this->BarangModel->get_data_StokProduksi($id)->result()[0];

  $this->load->view('edit_stok_produksi',$data);
  }

  function proses_edit_stok_produksi(){
    $id_barang = $this->input->post('id_barang');
    $tanggal = $this->input->post('tanggal');
 
    $data = array(
      
        'id_barang' => $id_barang,
        'tanggal' => $tanggal
    );
 
   
      $this->BarangModel->update_data_StokProduksi($id_barang, $data);
      redirect('produksi_stok_view');
  }

  public function print_sortir_pdf(){
    $table = 'produksi';
    $table2 = 'produksi_sortir';

    $field = 'produksi.kode_barang = produksi_sortir.kode_barang';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();
    $this->load->view('print_sortir_pdf',$data);
    
}
public function print_sortir_excel(){
  $table = 'produksi';
  $table2 = 'produksi_sortir';

  $field = 'produksi.kode_barang = produksi_sortir.kode_barang';

  $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();
  $this->load->view('print_sortir_excel',$data);
  
}
  public function produksi_sortir_view(){
    $table = 'produksi';
    $table2 = 'produksi_sortir';

    $field = 'produksi.kode_barang = produksi_sortir.kode_barang';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();
    $this->load->view('produksi_sortir_view',$data);
    
}

public function tambah_sortir_produksi(){

  $data['ipb'] = $this->OlahragaModel->getAllProduksi();
  // echo json_encode($data);

  $this->load->view('tambah_sortir_produksi', $data);
}

public function proses_sortir_produksi(){
            $id_barang = $this->input->post("id_barang");
            $kode_barang= $this->input->post("kode_barang");
            $tanggal= $this->input->post("tanggal");
            $hasil= $this->input->post("hasil");
            $reject= $this->input->post("reject");

            $data = array(
                "id_barang" => $id_barang,
                "kode_barang" => $kode_barang,
                "tanggal" => $tanggal,
                "hasil" => $hasil,
                "reject" => $reject
            );
        $this->BarangModel->tambah_data_barang('produksi_sortir', $data);
        
        $field = array (
          "kode_barang" => $kode_barang
        );
        $sortir = $this->BarangModel->get_where_data_table("produksi" ,$field)->result_array()[0];

        
        $field2 = array(
          "jumlah" => $sortir["jumlah"] - $reject
        );
        $id = array(
          "kode_barang" => $kode_barang
        );
        $this->BarangModel->update_data_table2("produksi", $id, $field2);

        $field = array (
          "kode_barang" => $kode_barang
        );
        $sortir = $this->BarangModel->get_where_data_table("produksi" ,$field)->result_array()[0];


        $field1 = array(
          "jumlah" => $sortir["jumlah"] - $hasil
        );
        $id = array(
          "kode_barang" => $kode_barang
        );
        $this->BarangModel->update_data_table("produksi", $id, $field1);
        
        redirect('produksi_sortir_view');
}

public function proses_hapus_sortir_produksi($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('produksi_sortir', $data);
    redirect('produksi_sortir_view');
  
}

public function edit_sortir_produksi($id_barang){
  $id['id_barang'] = $id_barang;
  $data['ipb'] = $this->BarangModel->get_data_ProduksiSortir($id)->result()[0];

  $this->load->view('edit_sortir_produksi',$data);
  }

  function proses_edit_sortir_produksi(){
    $id_barang = $this->input->post('id_barang');
    $tanggal = $this->input->post('tanggal');
 
    $data = array(
      
        'id_barang' => $id_barang,
        'tanggal' => $tanggal
    );
 
   
      $this->BarangModel->update_data_ProduksiSortir($id_barang, $data);
      redirect('produksi_sortir_view');
  }
  public function print_InputBarangCo_pdf(){
  
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
  
    // echo json_encode($data); 
    $this->load->view('print_InputBarangCo_pdf',$data);
  }
  public function print_InputBarangCo_excel(){
  
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
  
    // echo json_encode($data); 
    $this->load->view('print_InputBarangCo_excel',$data);
  }
  public function co_view(){
  
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
  
    // echo json_encode($data); 
    $this->load->view('co_view',$data);
  }

  public function tambah_co(){
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
    // echo json_encode($data);
  
    $this->load->view('tambah_co',$data);
  }
  
  public function proses_tambah_co() 
  {
      
      $id_barang = $this->input->post("id_barang");
      $kode_barang = $this->input->post("kode_barang");
      $nama_barang = $this->input->post("nama_barang");
      $stok_order = $this->input->post("stok_order");
      $data = array(
          "id_barang" => $id_barang,
          "kode_barang" => $kode_barang,
          "nama_barang" => $nama_barang,
          "stok_order" => $stok_order
      );
  
      $this->BarangModel->tambah_data_barang('costumer_order', $data);
      redirect('co_view');
  }

  public function proses_hapus_co($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('costumer_order', $data);
    redirect('co_view');
  
}

public function edit_co($id_barang){
  $id['id_barang'] = $id_barang;
  $data['ipb'] = $this->BarangModel->get_data_CostumerOrder($id)->result()[0];
  
      
  $this->load->view('edit_co',$data);
  }

  function proses_edit_co(){
    $id_barang = $this->input->post("id_barang");
    $kode_barang = $this->input->post("kode_barang");
    $nama_barang = $this->input->post("nama_barang");
    $stok_order = $this->input->post("stok_order");
   
      $data = array(
        "id_barang" => $id_barang,
        "kode_barang" => $kode_barang,
        "nama_barang" => $nama_barang,
        "stok_order" => $stok_order
      );
   
   
      $this->BarangModel->update_data_CostumerOrder($id_barang, $data);
      redirect('co_view');
  }
  public function print_TambahStokCo_pdf(){

    $table = 'costumer_order';
    $table2 = 'co_stok';

    $field = 'costumer_order.kode_barang = co_stok.kode_barang';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

    $this->load->view('print_TambahStokCo_pdf', $data);
 }
 public function print_TambahStokCo_excel(){

  $table = 'costumer_order';
  $table2 = 'co_stok';

  $field = 'costumer_order.kode_barang = co_stok.kode_barang';

  $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

  $this->load->view('print_TambahStokCo_excel', $data);
}
  public function co_stok_view(){

    $table = 'costumer_order';
    $table2 = 'co_stok';

    $field = 'costumer_order.kode_barang = co_stok.kode_barang';

    $data['ipb'] = $this->BarangModel->get_join_data_table($table, $table2, $field)->result();

    $this->load->view('co_stok_view', $data);
 }
  
  public function tambah_stok_co(){

    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
    // echo json_encode($data);
  
    $this->load->view('tambah_stok_co',$data);
  }
  
  public function proses_tambah_stok_co(){
        $id_barang = $this->input->post("id_barang");
        $kode_barang= $this->input->post("kode_barang");
        $tanggal= $this->input->post("tanggal");
        $brg_msk= $this->input->post("brg_msk");
  
        $data = array(
            "id_barang" => $id_barang,
            "kode_barang" => $kode_barang,
            "tanggal" => $tanggal,
            "brg_msk" => $brg_msk
        );
    $this->BarangModel->tambah_data_barang('co_stok', $data);
    
    $field = array (
      "kode_barang" => $kode_barang
    );
    $barang = $this->BarangModel->get_where_data_table("costumer_order" ,$field)->result_array()[0];
    
    $field1 = array(
      "stok_order" => $barang["stok_order"] + $brg_msk 
    );
    $id = array(
      "kode_barang" => $kode_barang
    );
    $this->BarangModel->update_data_table("costumer_order", $id, $field1);
    
    
    redirect('co_stok_view');
  }

  public function proses_hapus_stok_co($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('co_stok', $data);
    redirect('co_stok_view');
  
}
public function print_co_keluar_pdf(){

  $table = 'costumer_order';
  $table2 = 'co_keluar';  
  $table3 = 'co_user';  

  $field = 'costumer_order.kode_barang = co_keluar.kode_barang';
  $field2 = 'co_keluar.nama_co = co_user.nama_co';

  $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();
 
  $this->load->view('print_co_keluar_pdf', $data);
}
public function print_co_keluar_excel(){

  $table = 'costumer_order';
  $table2 = 'co_keluar';  
  $table3 = 'co_user';  

  $field = 'costumer_order.kode_barang = co_keluar.kode_barang';
  $field2 = 'co_keluar.nama_co = co_user.nama_co';

  $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();
 
  $this->load->view('print_co_keluar_excel', $data);
}
public function co_keluar_view(){

  $table = 'costumer_order';
  $table2 = 'co_keluar';  
  $table3 = 'co_user';  

  $field = 'costumer_order.kode_barang = co_keluar.kode_barang';
  $field2 = 'co_keluar.nama_co = co_user.nama_co';

  $data['ipb'] = $this->BarangModel->get_join_data_table2($table, $table2,$table3, $field,$field2)->result();
 
  $this->load->view('co_keluar_view', $data);
}

public function tambah_co_keluar(){

  $data['ipb'] = $this->OlahragaModel->getAllCostumerOrder();
  
  $data['user'] = $this->OlahragaModel->getAllCostumerOrderUser();
  // echo json_encode($data);

  $this->load->view('tambah_co_keluar', $data);
}

public function proses_co_keluar(){
            $id_barang = $this->input->post("id_barang");
            $kode_barang = $this->input->post("kode_barang");
            $nama_co = $this->input->post("nama_co");
            $tgl_co = $this->input->post("tgl_co");
            $jml_co = $this->input->post("jml_co");

            $data = array(
                "id_barang" => $id_barang,
                "kode_barang" => $kode_barang,
                "nama_co" => $nama_co,
                "tgl_co" => $tgl_co,
                "jml_co" => $jml_co
            );
        $this->BarangModel->tambah_data_barang('co_keluar', $data);
        
        $field = array (
          "kode_barang" => $kode_barang
        );
        $barang = $this->BarangModel->get_where_data_table("costumer_order" ,$field)->result_array()[0];

        
        $field2 = array(
          "stok_order" => $barang["stok_order"] - $jml_co
        );
        $id = array(
          "kode_barang" => $kode_barang
        );
        $this->BarangModel->update_data_table2("costumer_order", $id, $field2);
        
        redirect('co_keluar_view');
}

public function proses_hapus_co_keluar($id_barang)
{

    $data = array(
        "id_barang" => $id_barang
    );

    $this->BarangModel->hapus_data('co_keluar', $data);
    redirect('co_keluar_view');
  
}

public function edit_co_keluar($id_barang){
  $id['id_barang'] = $id_barang;
  $data['ipb'] = $this->BarangModel->get_data_Co_keluar($id)->result()[0];
  $data['user'] = $this->OlahragaModel->getAllCostumerOrderUser();
    
  $this->load->view('edit_co_keluar',$data);
  }

  function proses_edit_co_keluar(){
    $id_barang = $this->input->post("id_barang");
    $nama_co = $this->input->post("nama_co");
    $tgl_co = $this->input->post("tgl_co");
   
      $data = array(
        "id_barang" => $id_barang,
        "nama_co" => $nama_co,
        "tgl_co" => $tgl_co
      );
   
   
      $this->BarangModel->update_data_Co_keluar($id_barang, $data);
      redirect('co_keluar_view');
  }
  public function print_co_user_pdf(){
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrderUser();
    // echo json_encode($data); 
    $this->load->view('print_co_user_pdf',$data);
  }
  public function print_co_user_excel(){
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrderUser();
    // echo json_encode($data); 
    $this->load->view('print_co_user_excel',$data);
  }
  public function co_user_view(){
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrderUser();
    // echo json_encode($data); 
    $this->load->view('co_user_view',$data);
  }

  public function tambah_co_user(){
  
    $data['ipb'] = $this->OlahragaModel->getAllCostumerOrderUser();
     //echo json_encode($data);
  
    $this->load->view('tambah_co_user',$data);
  }
  
  public function proses_tambah_co_user() 
  {
      
      $id_customer = $this->input->post("id_customer");
      $nama_co = $this->input->post("nama_co");
      $alamat = $this->input->post("alamat");
      $no_telp = $this->input->post("no_telp");
      $data = array(
          "id_customer" => $id_customer,
          "nama_co" => $nama_co,
          "alamat" => $alamat,
          "no_telp" => $no_telp
      );
  
      $this->BarangModel->tambah_data_barang('co_user', $data);
      redirect('co_user_view');
  }

  public function proses_hapus_co_user($id_customer)
  {
  
      $data = array(
          "id_customer" => $id_customer
      );
  
      $this->BarangModel->hapus_data('co_user', $data);
      redirect('co_user_view');
    
  }

  public function edit_co_user($id_customer){
    $id['id_customer'] = $id_customer;
    $data['ipb'] = $this->BarangModel->get_data_Co_user($id)->result()[0];
    // echo json_encode($data);    
    $this->load->view('edit_co_user',$data);
    }
  
    function proses_edit_co_user(){
      $id_customer = $this->input->post("id_customer");
      $nama_co = $this->input->post("nama_co");
      $alamat = $this->input->post("alamat");
      $no_telp = $this->input->post("no_telp");
     
        $data = array(
          "id_customer" => $id_customer,
          "nama_co" => $nama_co,
          "alamat" => $alamat,
          "no_telp" => $no_telp
        );
     
     
        $this->BarangModel->update_data_Co_user($id_customer, $data);
        redirect('co_user_view');
    }

    public function akun_view(){
  
      $data['ipb'] = $this->OlahragaModel->getAllAkun();
      // echo json_encode($data); 
      $this->load->view('akun_view',$data);
    }

    public function register(){
      $data['ipb'] = $this->OlahragaModel->getAllAkun();
      $this->load->view('register',$data);
    }
    public function proses_tambah_akun() 
  {
      
      $id_user = $this->input->post("id_user");
      $nama = $this->input->post("nama");
      $username = $this->input->post("username");
      $password = md5($this->input->post("password"));
      $level = $this->input->post("level");
      $data = array(
          "id_user" => $id_user,
          "nama" => $nama,
          "username" => $username,
          "password" => $password,
          "level" => $level
      );
  
      $this->BarangModel->tambah_data_barang('user', $data);
      redirect('akun_view');
  }
  public function proses_hapus_akun($id_user)
  {
  
      $data = array(
          "id_user" => $id_user
      );
  
      $this->BarangModel->hapus_data('user', $data);
      redirect('akun_view');
    
  }
  
  


    public function proses_pinjam_barang()
    {
  
      $table = 'bom';
      $field['id_pinjam'] = $this->input->post('id_pinjam');
      $field['peminjam'] = $this->input->post('peminjam');
      $field['jml_barang'] = $this->input->post('jml_barang');
      $field['id_barang'] = $this->input->post('id_barang');
      $field['tgl_pinjam'] = $this->input->post('tgl_pinjam');
      $field['tgl_kembali'] = $this->input->post('tgl_kembali');
      $field['kondisi'] = $this->input->post('kondisi');
      $field['lokasi'] = $this->input->post('lokasi');
      $field['status'] = 'pinjam';
  
      $this->M_dashboard->add_data_table($table, $field);
  
      $notifikasi['keterangan'] = 'Proses Berhasil,';
      $notifikasi['class'] = 'alert-success';
      $notifikasi['pesan'] = 'Anda Berhasil Meminjam Barang';
      $notifikasi['type'] = 'alert';
  
      $this->session->set_flashdata($notifikasi);
  
      redirect('pinjam-barang');
    }


        public function login_frontend() {
            $this->load->view('login');
        }

        public function login_backend()
        {
            // validasi form
            // $this->form_validation->set_rules('username','username','required');
            // $this->form_validation->set_rules('password', 'password', 'required');

            // validasi form
            // if($this->form_validation->run() == true) {
                $table = 'user';
                $payload['username'] = $this->input->post('username');
                $payload['password'] = md5($this->input->post('password'));
                
                $user_check = $this->Query->getDataWith($table, $payload);

                // if user exist

                if($user_check->num_rows() != 0) {

                    foreach($user_check->result() as $data) :

                        $data_account['id_user'] = $data->id_user;
                        $data_account['nama'] = $data->nama;
                        $data_account['username'] = $data->username;
                        $data_account['password'] = $data->password;
                        $data_account['level'] = $data->level;
                        $data_account['status'] = $data->status;
                        
                    endforeach;

                    $data_account['user_session'] = true;
                    $this->session->set_userdata($data_account);
                    $this->session->set_flashdata('alert', true);
                    $this->session->set_flashdata('alert-class', 'alert-success');
                    $this->session->set_flashdata('alert-message', 'Masuk sebagai '.$data_account['username']);
                    redirect('landing_page');
                }
                else {
                    $this->session->set_flashdata('alert', true);
                    $this->session->set_flashdata('alert-class', 'alert-danger');
                    $this->session->set_flashdata('alert-message', '<b>Nama pengguna</b> atau <b>Kata sandi</b> kurang tepat');
                    redirect('login');
                }


            // }

            // validasi form bila perlu

            // else {
            //     $this->session->set_flashdata('alert', true);
            //     $this->session->set_flashdata('alert-class', 'alert-primary');
            //     $this->session->set_flashdata('alert-message', 'Mohon lengkapi form pengisian');
            //     redirect('masuk');
            // }
        }
    


    }

    


       

     
        

        
    
 ?>