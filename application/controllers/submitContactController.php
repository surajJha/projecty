<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SubmitContactController extends CI_Controller {

    public function submitContact() {
        $firstname = $_POST['first'];
        $lastname = $_POST['last'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'phone' => $phone,
            'email' => $email,
            'message' => $message
        );

        if ($this->db->insert('contacts', $data))
            echo 'success';


        //SEND EMAIL TO ITSELF
        $this->sendEmail($message, $firstname, $lastname, $email, $phone);
        echo "success";
    }

    public function sendEmail($message, $firstname,$lastname, $email, $phone) {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'admin@itechroute.com';
        $config['smtp_pass'] = 'makinguskilled';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      
        $this->email->initialize($config);
        $this->email->from('admin@itechroute.com', 'WebMaster iTechroute');
        $this->email->to('skj48817@gmail.com');


         $email_body = "Email from {$firstname}".' '."{$lastname }, "
                    . "{$message}"
                    . "contact details :"
                    . "Email ID - {$email}"
                    . "Phone Number - {$phone}";
                   
            $this->email->subject('Customer Enquiry via contact form');
            $this->email->message($email_body);
            // sending the email finally

            $this->email->send();
        }


}
