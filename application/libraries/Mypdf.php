<?php 
defined('BASEPATH') OR exit ('no direct script access allowed')

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf
{
	protected function __construct(){
		$this->ci =& get_instance();
	}
	public function generate($view, $data = array(), $filename = 'print_data', $paper = 'A4',$orientation = 'portrait' )
	{
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
	$dompdf->setPaper($paper, $orientation);

	// Render the HTML as PDF
	$dompdf->render();
    ob_clean();
    $dompdf->stream($filename "pdf", array("Attachment" => FALSE));
	}
}