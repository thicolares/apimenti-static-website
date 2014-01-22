<?php

class EmailValidator {

	// Check e-mail functions set
	// http://php.net/manual/en/function.preg-match.php
	function validLocalPart($local_part) { 
        if(preg_match("/[^a-zA-Z0-9-_@.!#$%&'*\/+=?^`{\|}~]/", $local_part)) { 
            return false; 
        } 
        else { 
            return true; 
        } 
    }

    function validDomainPart($domain_part) { 
        if(preg_match("/[^a-zA-Z0-9@#\[\].]/", $domain_part)) { 
            return false; 
        } 
        elseif(preg_match("/[@]/", $domain_part) && preg_match("/[#]/", $domain_part)) { 
            return false; 
        } 
        elseif(preg_match("/[\[]/", $domain_part) || preg_match("/[\]]/", $domain_part)) { 
            $dot_pos = strrpos($domain_part, "."); 
            if(($dot_pos < strrpos($domain_part, "]")) || (strrpos($domain_part, "]") < strrpos($domain_part, "["))) { 
                return true; 
            } 
            elseif(preg_match("/[^0-9.]/", $domain_part)) { 
                return false; 
            } 
            else { 
                return false; 
            } 
        } 
        else { 
            return true; 
        } 
    }

	
	function isValidEmail($temp_email) { 
        // trim() the entered E-Mail 
        $str_trimmed = trim($temp_email); 
        // find the @ position 
        $at_pos = strrpos($str_trimmed, "@"); 
        // find the . position 
        $dot_pos = strrpos($str_trimmed, "."); 
        // this will cut the local part and return it in $local_part 
        $local_part = substr($str_trimmed, 0, $at_pos); 
        // this will cut the domain part and return it in $domain_part 
        $domain_part = substr($str_trimmed, $at_pos); 
        if(!isset($str_trimmed) || is_null($str_trimmed) || empty($str_trimmed) || $str_trimmed == "") {
            return false; 
        } 
        elseif(!$this->validLocalPart($local_part)) { 
            return false; 
        } 
        elseif(!$this->validDomainPart($domain_part)) {  
            return false; 
        } 
        elseif($at_pos > $dot_pos) { 
            return false; 
        } 
        elseif(!$this->validLocalPart($local_part)) { 
            return false; 
        } 
        elseif(($str_trimmed[$at_pos + 1]) == ".") { 
            return false; 
        } 
        elseif(!preg_match("/[(@)]/", $str_trimmed) || !preg_match("/[(.)]/", $str_trimmed)) { 
            return false; 
        } 
        else { 
            return true; 
        } 
	}

}