<?php
/* 
Во-первых. мы отделили нашу систему от деталей реализации. Мы можем 
добавлять или удалять любое количество кодирующих форматов в нашем примере,
не опасаясь каких-либо проблем.
-  Во-вторых, мы ввели в действие группировку функционально связанных 
элементов нашей системы. Поэтому при использовании  BloggsCommsManager  есть
гарантия, что мы будем работать только с классами, связанными с BloggsCal.
-  В-третьих, добавление новых продуктов может представлять проблему. Мы
должны будем не только создать конкретные реализации новых продуктов, но
и внести изменения в абстрактный класс создателя, а также создать каждый
конкретный реализатор. чтобы его поддержать.
*/
abstract class ApptEncoder {
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder {
    function encode() {
        return "Appointment data encoded in BloggsCal format\n";
    }
}

class MegaApptEncoder extends ApptEncoder {
    function encode() {
        return "Appointment data encoded in MegaCal format\n";
    }
}


abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getTtdEncoder();
    abstract function getContactEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {
    function getHeaderText() {
        return "BloggsCal header\n";
    }

    function getApptEncoder() {
        return new BloggsApptEncoder();
    }

    function getTtdEncoder() {
        return new BloggsTtdEncoder();
    }

    function getContactEncoder() {
        return new BloggsContactEncoder();
    }

    function getFooterText() {
        return "BloggsCal footer\n";
    }
    /*
    const APPT    = 1;
    const TTD     = 2;
    const CONTACT = 3;
function make( $flag_int ) {
        switch ( $flag_int ) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }
    */
}

class MegaCommsManager extends CommsManager {
    function getHeaderText() {
        return "MegaCal header\n";
    }

    function getApptEncoder() {
        return new MegaApptEncoder();
    }

    function getTtdEncoder() {
        return new MegaTtdEncoder();
    }

    function getContactEncoder() {
        return new MegaContactEncoder();
    }

    function getFooterText() {
        return "MegaCal footer\n";
    }
}

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();
?>
