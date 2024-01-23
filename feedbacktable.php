<?php
class feedbacktable {
    private $msgID,$senderfName,$senderlName,$sendereMail,$senderfeedback;
    
    function __construct($msgID="", $senderfName="", $senderlName="", $sendereMail="", $senderfeedback="") {
        $this->msgID = $msgID;
        $this->senderfName = $senderfName;
        $this->senderlName = $senderlName;
        $this->sendereMail = $sendereMail;
        $this->senderfeedback = $senderfeedback;
    }
    
    // Getter et Setter pour msgID
    function getMsgID() {
        return $this->msgID;
    }
    
    function setMsgID($msgID) {
        $this->msgID = $msgID;
    }
    
    // Getter et Setter pour senderfName
    function getSenderfName() {
        return $this->senderfName;
    }
    
    function setSenderfName($senderfName) {
        $this->senderfName = $senderfName;
    }
    
    // Getter et Setter pour senderlName
    function getSenderlName() {
        return $this->senderlName;
    }
    
    function setSenderlName($senderlName) {
        $this->senderlName = $senderlName;
    }
    
    // Getter et Setter pour sendereMail
    function getSendereMail() {
        return $this->sendereMail;
    }
    
    function setSendereMail($sendereMail) {
        $this->sendereMail = $sendereMail;
    }
    
    // Getter et Setter pour senderfeedback
    function getSenderfeedback() {
        return $this->senderfeedback;
    }
    
    function setSenderfeedback($senderfeedback) {
        $this->senderfeedback = $senderfeedback;
    }
}

?>