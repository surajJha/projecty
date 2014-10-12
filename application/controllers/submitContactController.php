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
    }

}
