<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Model');
        $this->load->library('pdf');
    }

    public function index()
    {
        $pdf = new FPDF('l', 'mm', 'A5');

        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 7, 'LAPORAN DATA PELAJAR SMK NIOMIC', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'TAHUN 2019', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(35, 6, 'NIS', 1, 0, 'C');
        $pdf->Cell(35, 6, 'NAMA SISWA', 1, 0, 'C');
        $pdf->Cell(35, 6, 'KELAS', 1, 0, 'C');
        $pdf->Cell(35, 6, 'JURUSAN', 1, 0, 'C');
        $pdf->Cell(35, 6, 'EMAIL', 1, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pelajar = $this->Model->get_pelajar()->result();
        foreach ($pelajar as $row) {
            $pdf->Cell(35, 6, $row->nis, 1, 0, 'C');
            $pdf->Cell(35, 6,  $row->nama_siswa, 1, 0, 'C');
            $pdf->Cell(35, 6,  $row->kelas, 1, 0, 'C');
            $pdf->Cell(35, 6,  $row->jurusan, 1, 0, 'C');
            $pdf->Cell(35, 6,  $row->email, 1, 1, 'C');
        }
        $pdf->Output();
    }

    public function cetak()
    {
    }
}
