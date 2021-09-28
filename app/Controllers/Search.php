<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Search extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);

        echo view('search');
    }

    
    public function searchStudentID()
    {
        $model = new UserModel();
        $data['student'] = $model->orderBy('StudentID', 'DESC')->findAll();
        return view('/search_studentid', $data);
    }

    public function searchFirstname()
    {
        $model = new UserModel();
        $data['student'] = $model->orderBy('StudentID', 'DESC')->findAll();
        return view('/search_firstname', $data);
    }

    public function searchEducationYear(){
        $model = new UserModel();
        $data['student'] = $model->orderBy('StudentID', 'DESC')->findAll();
        return view('/search_education', $data);
    }

    public function searchSection(){
        $model = new UserModel();
        $data['student'] = $model->orderBy('StudentID', 'DESC')->findAll();
        return view('/search_section', $data);
    }

    public function searchProvince(){
        $model = new UserModel();
        $data['student'] = $model->orderBy('StudentID', 'DESC')->findAll();
        return view('/search_province', $data);
    }


    public function viewStudent($id){
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('view_student', $data);
    }


    public function delete()
    {
        $session = session();
        $session->destroy();
        echo view('/search');
    }
}
