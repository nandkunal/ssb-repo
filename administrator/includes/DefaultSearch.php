<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kunal
 * Date: 11/20/11
 * Time: 12:55 AM
 * To change this template use File | Settings | File Templates.
 */
 require_once("ADAO.php");
class DefaultSearch {
    private $status=0;
    private $priority=0;
    private $res=NULL;
    private $category=0;
    function  DefaultSearch($status,$priority,$category){
        $this->status=$status;
        $this->priority=$priority;
        $this->category=$category;
        $this->res=ADAO::getDefaultSearchList($this->status,$this->priority,$this->category);
        }
function getResult(){
    return $this->res;
}
}
