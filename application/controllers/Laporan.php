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
        $sheet->setCellValue('A1', "KPRI MANDIRI SEJAHTERA"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->setCellValue('A2', "Bulan : $tgl"); // Set kolom A1 dengan tulisan "DATA SISWA"
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
        // $sheet->setCellValue('K3', "Angsuran Barang");
        $sheet->setCellValue('L3', "Jasa");
        $sheet->setCellValue('M3', "Total");
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
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
          if (!isset($data)) {
            $sheet->setCellValue('E'.$numrow, '0');
            $sheet->setCellValue('F'.$numrow, '0');
            $sheet->setCellValue('G'.$numrow, '0');
            $sheet->setCellValue('H'.$numrow, '0');
            $sheet->setCellValue('I'.$numrow, '0');
            $sheet->setCellValue('J'.$numrow, '0');
            $sheet->setCellValue('K'.$numrow, '0');
            $sheet->setCellValue('L'.$numrow, '0');
            $sheet->setCellValue('M'.$numrow, '0');

          }
          $sheet->setCellValue('A'.$numrow, $no);
            $sheet->setCellValue('B'.$numrow, $data->nik);
            $sheet->setCellValue('C'.$numrow, $data->nama_anggota);
            $sheet->setCellValue('D'.$numrow, $data->nama_sekolah);
            $sheet->setCellValue('E'.$numrow, $data->sim_pokok);
            $sheet->setCellValue('F'.$numrow, $data->sim_wajib);
            $sheet->setCellValue('G'.$numrow, $data->thr);
            $sheet->setCellValue('H'.$numrow, $data->pendidikan);
            $sheet->setCellValue('I'.$numrow, $data->rekreasi);
            $sheet->setCellValue('J'.$numrow, $data->jumlah_angsuran);
            // $sheet->setCellValue('K'.$numrow, $data->angsuran_barang);
            $sheet->setCellValue('L'.$numrow, $data->jasa);

            
       

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
            // $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
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
        // $sheet->getColumnDimension('K')->setWidth(30); // Set width kolom K
        $sheet->getColumnDimension('L')->setWidth(30); // Set width kolom L
        $sheet->getColumnDimension('M')->setWidth(30); // Set width kolom M
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("KPRI - DATA KEUANGAN ANGGOTA");
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="['.$tgl.']DATA KEUANGAN ANGGOTA.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        $writer->save('php://output');
      }

}