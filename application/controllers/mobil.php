<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mobil extends CI_Controller {

	public function warna(){
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>"; //uri segment	
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>"; //uri segment
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>"; //uri segment		
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>"; //uri segment		
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>"; //uri segment	
	}
}



//salsadkaskdasjkdsad
