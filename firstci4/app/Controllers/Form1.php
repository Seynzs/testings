<?php namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = 
        [

        ];
        $data['categories'] = ['Student', 'Teacher', 'Principal'];

        if ($this->request->getMethod() == 'post') 
        {
            $rules = [
                /*'email' => [
                    'rules' => 'required|valid_email',
                    'label' => 'Email address',
                    'errors' => [
                        'required' => 'Email address must not be left blank',
                        'valid_email' => 'Use a valid Email address',
                    ]
                ],
                'password' => 'required|min_length[8]',
                'category' => 'in_list[Student, Teacher]|required',
                'date' => [
                    'rules' => 'required|check_date',
                    'label' => 'Date',
                    'errors' => [
                        'check_date' => 'Are you time traveling?',
                    ],
                ],*/
                'theFile' => [
                    'rules' => 'uploaded[theFile.0]|max_size[theFile, 1024]|is_image[theFile]',
                    'label' => 'The File',

                ]
            ];

            if($this->validate($rules))
            {
                /*$file = $this->request->getFile('theFile');
                if ($file->isValid() && !$file->hasMoved())
                {
                    $file->move('./uploads/images','testName.'.$file->getExtension()); 
                    //can also use getRandomName() instead of testName
                }*/

                $files = $this->request->getFiles();
                foreach($files['theFile'] as $file)
                {
                    if ($file->isValid() && !$file->hasMoved())
                        {
                            // $file->getName(). ' - Original Name <br>';
                            $file->move('./uploads/images/multiple'); 
                            // $file->getName(). ' - New Name <br>';
                        }
                }

                exit();
                return redirect()->to('/form/success');
            }
            else
            {
                $data['validation'] = $this->validator;
            }
        }
        return view('form', $data);
    }

    function success()
    {
        return 'You have successfully validated in.';
    }
    


}