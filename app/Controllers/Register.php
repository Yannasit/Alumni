<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Register extends Controller{
    public function index(){
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
    
    

    public function save(){
        helper('form');

        $rules=[
            'Firstname' => 'required|min_length[3]|max_length[20]',
            'Lastname' => 'required|min_length[3]|max_length[20]',
            'Sex' => 'required',
            'Province' => 'required',
            'StudentID' => 'required|min_length[9]',
            'Password' => 'required|max_length[20]',
            'Section' => 'required',
            'Major' => 'required',
            'EducationYear' => 'required',
            'Address' => 'required',
                'District' => 'required',
                'District2' => 'required',
                'Work' => 'required',
                'Workplace' => 'required',
                'Phonenumber' => 'required'
        ];
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'Firstname' => $this->request->getVar('Firstname'),
                'Lastname' => $this->request->getVar('Lastname'),
                'Sex' => $this->request->getVar('Sex'),
                'Province' => $this->request->getVar('Province'),
                'StudentID' => $this->request->getVar('StudentID'),
                'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
                'Section' => $this->request->getVar('Section'),
                'Major' => $this->request->getVar('Major'),
                'EducationYear' => $this->request->getVar('EducationYear'),
                'Address' => $this->request->getVar('Address'),
                'District' => $this->request->getVar('District'),
                'District2' => $this->request->getVar('District2'),
                'Work' => $this->request->getVar('Work'),
                'Workplace' => $this->request->getVar('Workplace'),
                'Phonenumber' => $this->request->getVar('Phonenumber')
            ];
            $model->save($data);
            
            return  redirect()->to('/login');
        }else{
            $data['validation']= $this->validator;
            echo view('register', $data);
        }
    }
}



?>