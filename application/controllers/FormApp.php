<?php

class FormApp extends CI_Controller
{

    /* Sınıfın yapıcı metodu. Sınıf çağırıldığında otomatik çalışır. */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("formapp_model");
        $this->load->model("service_model");
    }

    /* Kayıt formunun ekrana basılması işlemidir. */
    public function index()
    {

        $items = $this->formapp_model->getAll();
        $services = $this->service_model->getAll();

        $viewData = array(
            "items" => $items,
            "services" => $services,
        );

        $this->load->view("form", $viewData);
    }
    public function insert()
    {

        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $service_id = $this->input->post("service");
        $budget = $this->input->post("budget");
        $message = $this->input->post("message");

        $insert = $this->formapp_model->insert(array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "service_id" => $service_id,
            "budget" => $budget,
            "message" => $message,
        ));

        if ($insert) {
            redirect(base_url("FormApp/getAll"));
        } else {
            redirect(base_url("/"));
        }
    }
    public function getAll()
    {

        $items = $this->formapp_model->getAll();
        $services = $this->service_model->getAll();

        $viewData = array(
            "items" => $items,
            "services" => $services,
        );

        $this->load->view("table", $viewData);
    }
}
