<?php

namespace App\Controllers;

class User extends BaseController
{


    public function index(): string
    {
        $user_model = new \App\Models\UserModel();
        //dd($user_model -> findAll());
        $data['users'] =$user_model->where('is_deleted',0)->findAll();
        return view('user/index', $data);
    }

    public function add(){
        // Handle form submission to add an employee
        // Add validation rules here (e.g., for employee number, first name, last name, etc.)
        helper(['form']);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'employee_number' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'user_level' => 'required',
            'password' => 'required',
        ]))
        {
      
            // Hash the password using SHA1
            $hashedPassword = sha1($this->request->getPost('password'));

            // Insert data into the database
            $data = [
                'empno' => $this->request->getPost('employee_number'),
                'firstname' => $this->request->getPost('first_name'),
                'lastname' => $this->request->getPost('last_name'),
                'middlename' => $this->request->getPost('middle_name'),
                'userlevel' => $this->request->getPost('user_level'),
                'password' => $hashedPassword,
            ];
            
            $user_model = new \App\Models\UserModel();
            $user_model->insert($data);

            // Return a success message or redirect to a success page
            return redirect()->to('user/index')->with('success', 'Employee record added successfully.');
        } else {
            // Validation failed, return errors to the view
            return view('user/index');
        }
    }

    public function updateUser(){
        helper(['form']);
        $session = session();

        $validate = $this->validate([
            'employeeNumber' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'middleName' => 'required',
            'userLevel' => 'required',
        ]);
        
        if ($this->request->getMethod() === 'post' && $validate){
            $id = $this->request->getPost('id');
            $data = [
                'empno' => $this->request->getPost('employeeNumber'),
                'firstname' => $this->request->getPost('firstName'),
                'lastname' => $this->request->getPost('lastName'),
                'middlename' => $this->request->getPost('middleName'),
                'userlevel' => $this->request->getPost('userLevel')
            ];
    
            $user_model = new \App\Models\UserModel();
            $user_model->update($id,$data);
            
            $session->setFlashdata('alert','success');
            return redirect()->to('user/index')->with('msg', 'Employee record updated successfully.');
        }else{
            $session->setFlashdata('alert','danger');
            return redirect()->to('user/index')->with('msg', 'An error was encounter while trying to update user data.');
        }
    }


    public function deleteUser(){        
        $session = session();
        if ($this->request->getMethod() === 'post'){
            $user_model = new \App\Models\UserModel();
            $id = $this->request->getPost('user_id');
            $user_model->update($id,['is_deleted'=>1]);
            $session->setFlashdata('alert','success');
            $session->setFlashdata('msg','User deleted successfully.');
            echo json_encode(true);  
        }else{
            $session->setFlashdata('alert','danger');
            $session->setFlashdata('msg','An error was encountered while trying to delete user.');
            echo json_encode(false); 
        }      
    }


    public function getUserByID(){
        $user_model = new \App\Models\UserModel();
        $id = $_POST['user_id'];
        $user = $user_model->find($id);
        echo json_encode($user);  
    }


}
