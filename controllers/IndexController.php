<?php


class IndexController extends Controller {

    private $pageTemplate = '/templates/login__template.php';

    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }
    public function index() {
        $this->pageData['title'] = "Вход в личный кабинет";
        if(isset($_SESSION['login'])){
            header('Location: /profile');
        }

        if(!empty($_POST)){
            $responce = $this->model->checkUser($_POST['login'],$_POST['password']);
            if($responce == "success"){
                $_SESSION['login'] = $_POST['login'];
                header('Location: /profile');
            } else if($responce == "wrong password"){
                $this->pageData['error'] = "Неверный пароль";
            } else {
                $this->pageData['error'] = "Пользователь с таким логином не найден";
            }
        }
        $this->view->render($this->pageTemplate, $this->pageData);
    }
}