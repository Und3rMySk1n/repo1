<?php
    require_once('include/common.inc.php');    
    error_reporting(E_ALL);
    
    $errorCode = ERR_OK;
    $userInfo = GetSurveyFromRequest($errorCode);
    if ($userInfo !== false)
    {
        SaveSurveyToFile($userInfo, $errorCode);
        if ($errorCode == ERR_OK)
        {
            $surveyName = GetSurveyName($errorCode);            
            echo '���� ' . $surveyName . ' ������� �������.';
        }
        else
        {
            PrintError($errorCode);
        }
    }
    else
    {
        PrintError($errorCode);
    }