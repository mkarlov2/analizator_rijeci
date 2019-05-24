<?php

if (isset($_REQUEST['analyze'])){
    function word_validation($string){
        if (!empty($string)) {
            if (strlen ($string)>2 ) {
                if (preg_match('[^[A-zšđčćžŠĐČĆŽ]+$]', $string)) {
                    return ($string);
                }else {
                    return 'Regex nije prošao';
                }
            }  else {
                return 'Riječ mora sadržavati najmanje 3 slova';
            }    
        }else {
            return 'Upišite riječ u polje!';
        }

    }
    	function to_uppercase($string){

        }
        function separate_into_letters($string){
            
        }
        function vowels($string){
            
        }
        function consonants($string){
            
        }
        function cro_letters($string){
            
        }
        function print($string){
            
        }
}

?>
