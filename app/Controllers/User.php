<?php

namespace App\Controllers;

class User extends BaseController
{


    public function index(): string
    {
        $user_model = new \App\Models\UserModel();
        //dd($user_model -> findAll());
        $data['users'] =$user_model -> findAll();
        return view('user/index', $data);
    }

    public function add()
    {
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


    public function view($id)
    {
            // Load the model
            $user_model = new \App\Models\UserModel();

            // Fetch user data based on the provided $id
            $user = $user_model->find($id);
            return $user;

            //return view('user/index');
    }


    public function delete()
    {

        return('delete');
    }


    public function getUserByID(){
        $user_model = new \App\Models\UserModel();
        $id = $_POST['user_id'];
        $user = $user_model->find($id);
        echo json_encode($user);  
    }


}
