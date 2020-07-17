<?php 

/**
 * 
 */
class Blog extends CI_Controller
{
	public function index()
	{
		$blogs = [
			[
				'title' => 'Artikel Pertama'
				'content' => ''
			],
		];

		$this->load->view('blog');
	}
	
}

 ?>