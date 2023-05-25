<?php


class ProfileController extends Controller
{
    private $pageTemplate = '/templates/profile__template.php';

    public function __construct() {
        $this->model = new ProfileModel();
        $this->view = new View();
    }
    public function index() {
        if(!$_SESSION['login']){
            header('Location: /');
        }
        $this->pageData['title'] = "Личный кабинет";
        $this->pageData['currency'] = $this->model->getCurrencies();
        $this->view->render($this->pageTemplate, $this->pageData);
    }
    public function logout(){
        session_destroy();
        header('Location: /');
    }
}