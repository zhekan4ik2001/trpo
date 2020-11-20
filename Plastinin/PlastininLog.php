<?php
namespace Plastinin;
use core\LogAbstract;
use core\LogInterface;
require_once "core\LogInterface.php";
require_once "core\LogAbstract.php";
class PlastininLog extends LogAbstract implements LogInterface{

    public static function log($str){
        PlastininLog::Instance()->_log($str);
    }
    public function _log($str){
        $this->log[]=$str;
    }

    public static function write(){
        PlastininLog::$i->_write();
    }

    public function _write(){
        foreach(PlastininLog::$i->log as $value){
            echo $value."\n\r";
        }
    }
}
