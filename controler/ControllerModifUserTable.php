<<<<<<< HEAD
<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerModifUserTable
{
    private $_userModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->modifTable();
    }

    public function modifTable()
    {

        $this->_userModel = new UserModel();
        $this->_view = new View('ModifUserTable');
        $this->_view->generate(array($this->_userModel));

    }
}


=======
<?php
require_once('view/View.php');
include('./model/User.php');
include ('./model/UserModel.php');
require_once ('./model/reCaptcha/autoload.php');

class ControllerModifUserTable
{
    private $_userModel;
    private $_view;
    public function __construct()
    {
        if(isset($url))
            throw new Exception('Page introuvable');
        else
            $this->modifTable();
    }

    public function modifTable()
    {

        $this->_userModel = new UserModel();
        $this->_view = new View('ModifUserTable');
        $this->_view->generate(array($this->_userModel));

    }
}


>>>>>>> 9ef997bd488d871ae5f16f72e2abfd1d6678e0b1
