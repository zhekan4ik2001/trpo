<?php
namespace Plastinin;
use core\LogAbstract;
use core\LogInterface;
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
