<?php

class Etech_Mydata_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {


        $this->loadLayout();
        $this->renderLayout();
    }

    public function insertAction() {


        $this->loadLayout();
        $this->renderLayout();

        $post = Mage::app()->getRequest()->getParams();
        $user_data = array('user_name' => $post['user_name']);

        if (!empty($post['user_name'])) {


            $profilermodel = Mage::getModel('mydata/profile');
            $usermodel = Mage::getModel('mydata/user')->firstData($user_data)->getId();


            //$insertId = $newmodel->save()->getId();

            if (!empty($usermodel)) {
                $profile_data = array('user_id' => $usermodel, 'first_name' => $post['first_name'], 'last_name' => $post['last_name']);
                $newid = $profilermodel->lastData($profile_data);

                // $insertId2 = $newid->save()->getId();
            }
            Mage::getSingleton('core/session')->addSuccess("Data Inserted Succesfully");
            $this->_redirect('mydata');
        }
    }

}
