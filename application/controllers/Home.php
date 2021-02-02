<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function index()
	{
		if(is_null($this->session->user))
		{
			redirect(site_url('login/index'));
		}
			$data['absen_lengkap'] = $this->user_model->get_absen_lengkap();
			$data['absen_harian'] = $this->user_model->get_absen_harian();
			$data['date'] = $this->format_date_long(date('Y-m-d'));
			$data['day'] = $this->get_day_name(date('Y-m-d'));

			$this->load->view('layout/head');
			$this->load->view('layout/header');
			$this->load->view('welcome_message', $data);
			$this->load->view('layout/footer');
	}

	public function register()
	{
		$this->load->view('layout/head');
		$this->load->view('register');
		$this->load->view('layout/footer');
	}

	

	function format_date_long($_date_) {
		$monthName = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September",
				"Oktober","Nopember","Desember");

		if ($_date_) {
			list ($_year_, $_month_, $_day_,) = explode ('-', $_date_);
			return $_day_." ".$monthName[intval($_month_)]." ".$_year_;
		} else {
			return "";
		}
	}

	function get_day_name($in_tgl)
	{
		$dayName = array("Minggu","Senin","Selasa","Rabu","Kamis", "Jumat", "Sabtu");
		$tanggal = explode("-",$in_tgl);
		$hari =  date("w",mktime(0,0,0,$tanggal[1],$tanggal[2],$tanggal[0]));
		return $dayName[$hari];
	}
}
