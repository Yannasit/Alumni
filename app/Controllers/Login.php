<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller{
    public function index(){
        //include helper form
        helper(['form']);
        
        echo view('login');
    }

    public function auth(){
        $session = session();
        $model = new UserModel();
        $studentID = $this->request->getVar('StudentID');
        $password = $this->request->getVar('Password');
        $data = $model->where('StudentID', $studentID)->first();
        if($data){
            $pass = $data['Password'];
            $verify_password = password_verify($password, $pass); 
            if($verify_password){
                $ses_data = [
                    'Firstname' =>$data['Firstname'],
                    'Lastname' =>$data['Lastname'],
                    'Province' =>$data['Province'],
                    'Sex' =>$data['Sex'],
                    'StudentID' =>$data['StudentID'],
                    'Section' =>$data['Section'],
                    'Major' =>$data['Major'],
                    'EducationYear' =>$data['EducationYear'],
                    'logged_in'=>TRUE,
                    'id' =>$data['UserID'],
                    'Address'=>$data['Address'],
                    'District'=>$data['District'],
                    'District2'=>$data['District2'],
                    'Work'=>$data['Work'],
                    'Workplace'=>$data['Workplace'],
                    'Phonenumber'=>$data['Phonenumber']
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'รหัสนักศึกษาไม่ถูกต้อง');
            return redirect()->to('/login');
        }

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}



?>