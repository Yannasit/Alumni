<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Dashboard extends Controller{
    public function index(){ 
        echo view('dashboard');
    }

    public function ShowEdit(){
        $session = session();
        echo view('edit');
    }

    public function Edit(){
        $session = session();
        $id = $session->get("id");
        $model = new UserModel();
        $data = [
            'Firstname' => $this->request->getVar('Firstname'),
            'Lastname'    => $this->request->getVar('Lastname'),
            'Province'    => $this->request->getVar('Province'),
            'Section'    => $this->request->getVar('Section'),
            'Major'    => $this->request->getVar('Major'),
            'EducationYear'    => $this->request->getVar('EducationYear'),
            'Address' => $this->request->getVar('Address'),
            'District' => $this->request->getVar('District'),
            'District2' => $this->request->getVar('District2'),
            'Work' => $this->request->getVar('Work'),
            'Workplace' => $this->request->getVar('Workplace'),
            'Phonenumber' => $this->request->getVar('Phonenumber')
        ];
        $model->update($id, $data);
        $session->set($data);
        return redirect()->to('dashboard');

    }



}



?>