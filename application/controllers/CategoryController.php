<?php
class CategoryController {

    public function __construct() {

        $category = new Category();

        $smarty = New Smarty();
        $smarty->template_dir = 'application/views/';
        $smarty->compile_dir = 'cache/smarty';

        $smarty->assign('category', 'category');
        $smarty->display('category.tpl');
    }

    /*public function view() {


            $smarty = New Smarty();
            $smarty->template_dir = 'application/views/';
            $smarty->compile_dir = 'cache/smarty';

            $smarty->assign('index', 'index');
            $smarty->display('index.tpl');
    }*/

    /*public function viewIndex() {

        if (isset($_REQUEST['id'])) {
            $index = new Category($_REQUEST['id']);

            $smarty = New Smarty();
            $smarty->template_dir = 'application/views/';
            $smarty->compile_dir = 'cache/smarty';

            $smarty->assign('index', 'index');
            $smarty->display('index.tpl');
        }
    }*/


}
?>