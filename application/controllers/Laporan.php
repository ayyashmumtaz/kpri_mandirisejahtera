<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Model_home');
    }

    public function index()
    {
      $this->load->view('_partials/header');
      $this->load->view('_partials/navbar');
      $this->load->view('laporan');
      $this->load->view('_partials/footer');
    }

    public function anggota(){
      $this->load->view('_partials/header');
      $this->load->view('_partials/navbar');
      $this->load->view('laporan');
      $this->load->view('_partials/footer');
    }

    public function sekolah(){
      $data['sekolah'] = $this->Model_home->getAllSekolah();
      $this->load->view('_partials/header');
      $this->load->view('_partials/navbar');
      $this->load->view('lp_sekolah', $data);
      $this->load->view('_partials/footer');
    }




    public function exportAnggota($tgl){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = [
          'font' => ['bold' => true], // Set font nya jadi bold
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ],
          'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
          ]
        ];
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
          'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ],
          'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
          ]
        ];
        $sheet->setCellValue('A1', "KPRI MANDIRI SEJAHTERA KLAPANUNGGAL"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->setCellValue('A2', "BULAN : $tgl"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1:A2')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $sheet->setCellValue('B3', "NIK"); // Set kolom B3 dengan tulisan "NIS"
        $sheet->setCellValue('C3', "Nama Anggota"); // Set kolom C3 dengan tulisan "NAMA"
        $sheet->setCellValue('D3', "Instansi"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $sheet->setCellValue('E3', "Simpanan Pokok"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $sheet->setCellValue('F3', "Simpanan Wajib"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('G3', "THR");
        $sheet->setCellValue('H3', "Pendidikan");
        $sheet->setCellValue('I3', "Rekreasi");
        $sheet->setCellValue('J3', "Angsuran Pokok");
        $sheet->setCellValue('K3', "Angsuran Barang");
        $sheet->setCellValue('L3', "Jasa");
        $sheet->setCellValue('M3', "Total");
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $spreadsheet->getActiveSheet()->getStyle('A4:Z70')->getNumberFormat()->setFormatCode('#,##');
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);
        $sheet->getStyle('F3')->applyFromArray($style_col);
        $sheet->getStyle('G3')->applyFromArray($style_col);
        $sheet->getStyle('H3')->applyFromArray($style_col);
        $sheet->getStyle('I3')->applyFromArray($style_col);
        $sheet->getStyle('J3')->applyFromArray($style_col);
        $sheet->getStyle('K3')->applyFromArray($style_col);
        $sheet->getStyle('L3')->applyFromArray($style_col);
        $sheet->getStyle('M3')->applyFromArray($style_col);
        $data = $this->Model_home->getAllData($tgl)->result();
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($data as $data){ // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A'.$numrow, $no);
            $sheet->setCellValue('B'.$numrow, $data->nik);
            $sheet->setCellValue('C'.$numrow, $data->nama_anggota);
            $sheet->setCellValue('D'.$numrow, $data->nama_sekolah);
            
            if (!isset($data->sim_pokok)) {
              $sheet->setCellValue('E'.$numrow, '0');
              $sheet->setCellValue('F'.$numrow, '0');
              $sheet->setCellValue('G'.$numrow, '0');
              $sheet->setCellValue('H'.$numrow, '0');
              $sheet->setCellValue('I'.$numrow, '0');
              $sheet->setCellValue('J'.$numrow, '0');
              $sheet->setCellValue('K'.$numrow, '0');
              $sheet->setCellValue('L'.$numrow, '0');
              $sheet->setCellValue('M'.$numrow, '0');
            } else {
              $sheet->setCellValue('E'.$numrow, $data->sim_pokok);
              $sheet->setCellValue('F'.$numrow, $data->sim_wajib);
              $sheet->setCellValue('G'.$numrow, $data->thr);
              $sheet->setCellValue('H'.$numrow, $data->pendidikan);
              $sheet->setCellValue('I'.$numrow, $data->rekreasi);
              $sheet->setCellValue('J'.$numrow, $data->angsuran);
              $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
              $sheet->setCellValue('L'.$numrow, $data->jasa);

              $sheet->setCellValue('M'.$numrow, $data->sim_pokok + $data->sim_wajib + $data->thr + $data->pendidikan + $data->rekreasi + $data->angsuran + $data->angsuran_barang + $data->jasa);


            }
              
            
           
            // $sheet->setCellValue('J'.$numrow, $data->jumlah_angsuran);
            // // $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
            // $sheet->setCellValue('L'.$numrow, $data->jasa);

            
       

          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);
            $sheet->getStyle('M'.$numrow)->applyFromArray($style_row);
          
          $no++; // Tambah 1 setiap kali looping
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $sheet->getColumnDimension('B')->setWidth(10); // Set width kolom B
        $sheet->getColumnDimension('C')->setWidth(30); // Set width kolom C
        $sheet->getColumnDimension('D')->setWidth(25); // Set width kolom D
        $sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $sheet->getColumnDimension('F')->setWidth(30); // Set width kolom F
        $sheet->getColumnDimension('G')->setWidth(30); // Set width kolom G
        $sheet->getColumnDimension('H')->setWidth(30); // Set width kolom H
        $sheet->getColumnDimension('I')->setWidth(30); // Set width kolom I
        $sheet->getColumnDimension('J')->setWidth(30); // Set width kolom J
        $sheet->getColumnDimension('K')->setWidth(30); // Set width kolom K
        $sheet->getColumnDimension('L')->setWidth(30); // Set width kolom L
        $sheet->getColumnDimension('M')->setWidth(30); // Set width kolom M
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("KPRI - DATA KEUANGAN ANGGOTA");
        // Proses file excel
        if(ob_get_length() > 0) {
          ob_clean();
      }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="('.$tgl.')DATA KEUANGAN ANGGOTA.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
      }

      //SEKOLAH

      public function exportSekolah(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = [
          'font' => ['bold' => true], // Set font nya jadi bold
          'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ],
          'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
          ]
        ];
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
          'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
          ],
          'borders' => [
            'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
            'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
            'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
            'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
          ]
        ];
        $sheet->setCellValue('A1', "POTONGAN KPRI MANDIRI SEJAHTERA KLAPANUNGGAL"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->setCellValue('A2', "Bulan : $tgl"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->setCellValue('A3', "Instansi : $tgl"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1:A2')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $sheet->setCellValue('B3', "NIK"); // Set kolom B3 dengan tulisan "NIS"
        $sheet->setCellValue('C3', "Nama Anggota"); // Set kolom C3 dengan tulisan "NAMA"
        $sheet->setCellValue('D3', "Total");
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);

     

        $sekolah = $this->input->post('sekolah');
        $tgl = $this->input->post('tgl');

        // $where = array('id_sekolah' => $sekolah,'tgl' => $tgl);

        $data = $this->Model_home->getAllData($sekolah,$tgl)->result();
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($data as $a){ // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A'.$numrow, $no);
            $sheet->setCellValue('B'.$numrow, $data->nik);
            $sheet->setCellValue('C'.$numrow, $data->nama_anggota);
            $sheet->setCellValue('D'.$numrow, $data->nama_sekolah);

            // $sheet->setCellValue('J'.$numrow, $data->jumlah_angsuran);
            // // $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
            // $sheet->setCellValue('L'.$numrow, $data->jasa);

            
       

          // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
          $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
          $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);

          
          $no++; // Tambah 1 setiap kali looping
          $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $sheet->getColumnDimension('B')->setWidth(10); // Set width kolom B
        $sheet->getColumnDimension('C')->setWidth(30); // Set width kolom C
        $sheet->getColumnDimension('D')->setWidth(25); // Set width kolom D


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("KPRI - DATA KEUANGAN ANGGOTA");
        // Proses file excel
        if(ob_get_length() > 0) {
          ob_clean();
      }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="('.$tgl.')DATA KEUANGAN ANGGOTA.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
      }

      public function instansi(){
    $data['anggota'] = $this->Model_home->getSekolah()->result();
	  $this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('lp_datasekolah', $data);
    $this->load->view('_partials/footer');
       
      }

      public function lihat_instansi()
	{
    $id = $this->uri->segment(3);
    $tgl = $this->uri->segment(4);
    $tahun = $this->uri->segment(5);
	  $data['anggota'] = $this->Model_home->getbyIdSekolah($id, $tgl, $tahun);
	  $data['user'] = $this->Model_home->getUserSekolah($id);
	  $this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('lp_lihatinstansi', $data);
    $this->load->view('_partials/footer');
	}


  public function rekap_instansi()
	{
    $tgl = $this->uri->segment(3);
	  $data['sekolah'] = $this->Model_home->getDataInstansi($tgl)->result();
	  $this->load->view('_partials/header');
    $this->load->view('_partials/navbar');
    $this->load->view('lp_instansi', $data);
    $this->load->view('_partials/footer');
	}

  public function rekap_anggota($tgl){
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = [
      'font' => ['bold' => true], // Set font nya jadi bold
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ]
    ];

    $namaa = [ 
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ]
    ];

    $biodata = [
      'font' => ['bold' => true], // Set font nya jadi bold
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ]
    ];
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = [
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ],
      'borders' => [
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
      ]
    ];

    $style_row2 = [
      'borders' => [
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
     
      ]
    ];
    $data = $this->Model_home->getAllData($tgl)->result();
    foreach($data as $data){
    $sheet->setCellValue('A1', "KOPERASI PEGAWAI REPUBLIK INDONESIA"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $sheet->setCellValue('A2', "MANDIRI SEJAHTERA"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $sheet->setCellValue('A3', "Kecamatan Klapanunggal Kabupaten Bogor"); 
    $sheet->setCellValue('A4', "BH. 9512A/PAD/BH/KDK.105/X/2004 Tgl 19/10/2004"); 
    $sheet->mergeCells('A1:C1'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->mergeCells('A2:C2'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->mergeCells('A3:C3'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->mergeCells('A4:C4'); 
    $sheet->mergeCells('A10:C10');// Set bold kolom A1
   
    $sheet->getStyle('A10')->getFont()->setBold(true); 
    // Buat header tabel nya pada baris ke 3
    $sheet->setCellValue('A5', "NIK");
    $sheet->setCellValue('A6', "NAMA");
    $sheet->setCellValue('A7', "INSTANSI");
    $sheet->setCellValue('A8', "BULAN");

    $sheet->setCellValue('B5', ":");
    $sheet->setCellValue('B6', ":");
    $sheet->setCellValue('B7', ":");
    $sheet->setCellValue('B8', ":");

    $sheet->setCellValue('C5', $data->nik);
    $sheet->setCellValue('C6', $data->nama_anggota);
    $sheet->setCellValue('C7', $data->nama_sekolah);
    $sheet->setCellValue('C8', $tgl);

    $sheet->setCellValue('A10', "KEADAAN BULAN LALU");

    $sheet->setCellValue('A12', "Simpanan Pokok");
    $sheet->setCellValue('A13', "Simpanan Wajib");
    $sheet->setCellValue('A14', "Tabungan Hari Raya");
    $sheet->setCellValue('A15', "Tabungan Pendidikan");
    $sheet->setCellValue('A16', "Tabungan Rekreasi");
    $sheet->setCellValue('A17', "Sisa Pinjaman");

    $sheet->setCellValue('B12', ":");
    $sheet->setCellValue('B13', ":");
    $sheet->setCellValue('B14', ":");
    $sheet->setCellValue('B15', ":");
    $sheet->setCellValue('B16', ":");
    $sheet->setCellValue('B17', ":");

    $sheet->setCellValue('A19', "KEADAAN BULAN INI");
    $sheet->setCellValue('A21', "Simpanan Pokok");
    $sheet->setCellValue('A22', "Simpanan Wajib");
    $sheet->setCellValue('A23', "Tabungan Hari Raya");
    $sheet->setCellValue('A24', "Tabungan Pendidikan");
    $sheet->setCellValue('A25', "Tabungan Rekreasi");
    $sheet->setCellValue('A26', "Angsuran Pokok");
    $sheet->setCellValue('A27', "Angsuran Barang");
    $sheet->setCellValue('A28', "Jasa");

    $sheet->setCellValue('B21', ":");
    $sheet->setCellValue('B22', ":");
    $sheet->setCellValue('B23', ":");
    $sheet->setCellValue('B24', ":");
    $sheet->setCellValue('B25', ":");
    $sheet->setCellValue('B26', ":");
    $sheet->setCellValue('B27', ":");
    $sheet->setCellValue('B28', ":");
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    // $spreadsheet->getActiveSheet()->getStyle('A4:Z70')->getNumberFormat()->setFormatCode('#,##');
    $sheet->getStyle('A1')->applyFromArray($style_col);
    $sheet->getStyle('A10:C10')->applyFromArray($style_row2);
    $sheet->getStyle('A2')->applyFromArray($namaa);
    $sheet->getStyle('A3')->applyFromArray($namaa);
    $sheet->getStyle('A4')->applyFromArray($namaa);

    $sheet->getStyle('C5:C8')->applyFromArray($biodata);
   
    
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    // Lakukan looping pada variabel siswa
    //     $sheet->setCellValue('A'.$numrow, $no);
    //     $sheet->setCellValue('B'.$numrow, $data->nik);
    //     $sheet->setCellValue('C'.$numrow, $data->nama_anggota);
    //     $sheet->setCellValue('D'.$numrow, $data->nama_sekolah);
        
    //     if (!isset($data->sim_pokok)) {
    //       $sheet->setCellValue('E'.$numrow, '0');
    //       $sheet->setCellValue('F'.$numrow, '0');
    //       $sheet->setCellValue('G'.$numrow, '0');
    //       $sheet->setCellValue('H'.$numrow, '0');
    //       $sheet->setCellValue('I'.$numrow, '0');
    //       $sheet->setCellValue('J'.$numrow, '0');
    //       $sheet->setCellValue('K'.$numrow, '0');
    //       $sheet->setCellValue('L'.$numrow, '0');
    //       $sheet->setCellValue('M'.$numrow, '0');
    //     } else {
    //       $sheet->setCellValue('E'.$numrow, $data->sim_pokok);
    //       $sheet->setCellValue('F'.$numrow, $data->sim_wajib);
    //       $sheet->setCellValue('G'.$numrow, $data->thr);
    //       $sheet->setCellValue('H'.$numrow, $data->pendidikan);
    //       $sheet->setCellValue('I'.$numrow, $data->rekreasi);
    //       $sheet->setCellValue('J'.$numrow, $data->angsuran);
    //       $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
    //       $sheet->setCellValue('L'.$numrow, $data->jasa);

    //       $sheet->setCellValue('M'.$numrow, $data->sim_pokok + $data->sim_wajib + $data->thr + $data->pendidikan + $data->rekreasi + $data->angsuran + $data->angsuran_barang + $data->jasa);


    //     }
          
        
       
        // $sheet->setCellValue('J'.$numrow, $data->jumlah_angsuran);
        // // $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
        // $sheet->setCellValue('L'.$numrow, $data->jasa);

        
   

      $sheet->getStyle('A'.$numrow)->getFont()->setSize(9);
      $sheet->getStyle('B'.$numrow)->getFont()->setSize(9);
      $sheet->getStyle('C'.$numrow)->getFont()->setSize(9);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
      // $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);
      // $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);
      //   $sheet->getStyle('M'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    
    // Set width kolom
    $sheet->getColumnDimension('A')->setWidth(21); // Set width kolom A
    $sheet->getColumnDimension('B')->setWidth(3); // Set width kolom B
    $sheet->getColumnDimension('C')->setWidth(20); // Set width kolom C
    $sheet->getColumnDimension('D')->setWidth(25); // Set width kolom D
  }
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $sheet->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_PORTRAIT);
    // Set judul file excel nya
    $sheet->setTitle("KPRI - DATA KEUANGAN ANGGOTA");
    // Proses file excel
    if(ob_get_length() > 0) {
      ob_clean();
  }
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="DATA KEUANGAN ANGGOTA.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
  }

}