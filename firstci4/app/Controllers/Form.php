<?php namespace App\Controllers;


class Form extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Principal',
        ];
        

      

        if ($this->request->getMethod() == 'post') { 
            $rules = [
                // 'email' => [
                //     'rules' => 'required|valid_email',
                //     'label' => 'Email address',
                //     'errors' => [
                //         'required' => 'Do not leave me blank',
                //         'valid_email' => 'You have got to be kidding me, please enter a valid email address'
                //     ],
                // ],
                // 'password' => 'required|min_length[8]',
                // 'category' => 'in_list[Student, Teacher]',
                // 'date' => [
                //     'rules' => 'required|check_date',
                //     'label' => 'required',
                //     'errors' => [
                //         'check_date' => 'Entering a date before the current date is not allowed'
                //     ]
                // ]

                'theFile' => [
                    'rules' => 'uploaded[theFile.0]|max_size[theFile, 1024]|is_image[theFile]',
                    'label' => 'The File',

                ]
            ];

            if($this->validate($rules)) {

                // $file = $this->request->getFile('theFile');
                // if($file->isValid() && !$file->hasMoved()){
                //     $file->move('./uploads/images/', $file->getRandomName());
                // }

                $files = $this->request->getFiles();
                foreach ($files['theFile'] as $file)
                {
                    if($file->isValid() && !$file->hasMoved()){
                        echo $file->getName().' - Real name<br> ';
                        $file->move('./uploads/images/multiple');
                        echo $file->getName().' - New name <br> <hr> ';
                    }
                }

                exit();
                return redirect()-> to('/form/success');
                
                // Do database insertion and Login User
                
            }
            else
            {
                $data['validation'] = $this->validator;
            }    
        
      
        }
        return view('form', $data);
    }
    

    function success(){
        return 'Login Complete';
    }
}

    

