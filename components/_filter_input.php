<?php
    function filter_data($inputData){
        $inputData = trim($inputData);
        $inputData = stripslashes($inputData);
        $inputData = htmlspecialchars($inputData);

        return  $inputData;
    }


?>