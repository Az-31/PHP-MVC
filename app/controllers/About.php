<?php 

class About extends Controller {
    public function index($nama="samsul", $desk='ningen')
    {
        $data['nama'] = $nama;
        $data['desk'] = $desk;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}

?>