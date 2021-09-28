<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'student';
    protected $allowedFields = ['Firstname','Lastname','Sex','Province','StudentID','Password','Section','Major','EducationYear','Address','District','District2','Work','Workplace','Phonenumber'];
    protected $primaryKey = 'UserID';
}




?>