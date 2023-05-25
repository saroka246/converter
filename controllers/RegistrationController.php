<?php


class RegistrationController extends Controller
{
    private $pageTemplate = '/templates/registration__template.php';

    public function __construct() {
        $this->model = new RegistrationModel();
        $this->view = new View();
    }
    public function index() {
        $this->pageData['title'] = "Регистрация";
        if(isset($_SESSION['login'])){
            header('Location: /profile');
        }
        if(!empty($_POST)){
            $responce = $this->model->checkLogin($_POST['login'],$_POST['password']);
            if($responce == "success"){
                $_SESSION['login'] = $_POST['login'];
                header('Location: /profile');
            } else {
                $this->pageData['error'] = "Пользователь с таким логином уже существует";
            }
        }
        $this->view->render($this->pageTemplate, $this->pageData);
    }
}