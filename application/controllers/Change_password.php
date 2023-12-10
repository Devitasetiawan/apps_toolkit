<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Change_password extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Change Password';
        $this->load->view('layout/user/header', $data);
        $this->load->view('change_password', $data);
        $this->load->view('layout/user/footer');
    }

    public function process()
    {
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[8]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $user_id = $this->session->userdata('id_user');
            
            // Call the change_password method from the model
            $affected_rows = $this->model_pembayaran->change_password($user_id, $new_password);

            if ($affected_rows > 0) {
                $this->session->set_flashdata('success', 'Password changed successfully');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Unable to change password. Please try again.');
            }
        }

        $data['title'] = 'Change Password';
        $this->load->view('layout/user/header', $data);
        $this->load->view('change_password', $data);
        $this->load->view('layout/user/footer');
        
    }
}
