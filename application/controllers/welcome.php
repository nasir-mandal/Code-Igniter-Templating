<?php
class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');

        $this->template->prepend_metadata('<link href="/codeigniter-templating/assets/css/style.css" rel="stylesheet" type="text/css">');
        $this->template->prepend_metadata('<script language="javascript" src="images/menu.js"></script>');

        $this->load->helper('url');
        
    }

    public function home()
    {
   	$this->template->title('Templating in Code Igniter');
        $this->template->build('home');
    }

    
}
