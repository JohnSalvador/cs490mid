<?php
/*
1) worry about front end 'mode'
2) logic... whether if else, or other switches
 branches if different user or database
3) output decode if vanessa encoded
 always encode
4) change test cases
5) comment back test cases when done
*/
/*
$_POST['mode']='login'; 
$_POST['username']='johnny'; 
$_POST['password']='pass'; 
$_POST['NJIT']=false; 
//{"answer":true} 
/*
$_POST['mode']='register';
$_POST['username']='JR';
$_POST['password']='pass2';
$_POST['NJIT']=''; 
//{"answer":true} 


$_POST['mode']='deregister';
$_POST['username']='JR';
$_POST['password']='pass2';
$_POST['NJIT']=''; 
{"answer":true}*/

/*$_POST['mode']='login';
$_POST['username']='johnny';
$_POST['password']='pass';
$_POST['accountType']='0';
//{"answer":true,"accountType":"0"; */

/*$_POST['mode']='login';
$_POST['username']='theo';
$_POST['password']='pass3';
$_POST['accountType']='1';
//{"answer":true,"accountType":"1";*/
/*
$_POST['mode']='submitQuestion';
$_POST['Question']='Example Multiple Choice';
$_POST['Choice1']='A';
$_POST['Choice2']='B';
$_POST['Choice3']='C';
$_POST['Choice4']='D';
$_POST['Choice5']='E';
$_POST['Feedback1']='A is correct';
$_POST['Feedback2']='B is incorrect';
$_POST['Feedback3']='C is incorrect';
$_POST['Feedback4']='D is incorrect';
$_POST['Feedback5']='E is incorrect';
$_POST['Answer']= 'A'; 
$_POST['QuestionType']= '1'; 
$_POST['CourseType']= 'CS100'; 
//{"answer":true,"QuestionID":"2"} */


//Test to read question, ID should be known
//$_POST['mode']='browseQuestion';
//$_POST['CourseType']='CS100'; 
//{"QuestionID":"1","Question":"True False Question","Choice1":"T","Choice2":"F","Choice3":"","Choice4":"","Choice5":"","Feedback1":"True is Correct","Feedback2":"False is Incorrect","Feedback3":"","Feedback4":"","Feedback5":"","Answer":"True","QuestionType":"2","CourseType":"CS100"}

/*Test delete question, ID should be known */ 
/*
$_POST['mode']= 'removeQuestion'; 
$_POST['ID']= '5'; */ 
//{"answer":true} 
//second time deleting: {"answer":false}  

//Test update a field, if blank leave the same, question ID should be known//
/*$_POST['mode']= 'changeQuestion'; 
$_POST['ID']= '1'; 
$_POST['Question']= 'Modified T/F Question'; 
$_POST['Choice1']= ''; 
$_POST['Choice2']= ''; 
$_POST['Choice3']= ''; 
$_POST['Choice4']= ''; 
$_POST['Choice5']= ''; 
$_POST['Feedback1']= 'T is incorrect'; 
$_POST['Feedback2']= 'F is Correct'; 
$_POST['Feedback3']= ''; 
$_POST['Feedback4']= ''; 
$_POST['Feedback5']= ''; 
$_POST['Answer']= 'False'; 
$_POST['QuestionType']= ''; 
$_POST['CourseType']= 'CS200'; */ 
//{"answer":true 
/*
$_POST['mode']='registerTest';
$_POST['TeacherID']='26';
$_POST['TestName']='Midterm1';
$_POST['NumberOfQuestions']='3';
$_POST['QuestionIDs']='{"Ques1": "1", "Ques2": "3", "Ques3": "4"}';*/
//{"answer":true,"TestID":"2"} 

/*Test for readTest, TestID should be known */
//$_POST['mode']= 'takeTest'; 
//$_POST['TestID']= '8';  
//{"TestID":"8","TeacherID":"26","NumberofQuestion":"3","QuestionIDs":{"Ques1":"1","Ques2":"4","Ques3":"9"},"GradeReleased":"0","TestName":"Midterm1","0":{"QuestionID":"1","Question":"Modified T\/F Question","Choice1":"T","Choice2":"F","Choice3":"","Choice4":"","Choice5":"","Feedback1":"T is incorrect","Feedback2":"F is Correct","Feedback3":"","Feedback4":"","Feedback5":"","Answer":"False","QuestionType":"2","CourseType":"CS200"},"1":{"QuestionID":"4","Question":"Multiple Choice","Choice1":"A","Choice2":"B","Choice3":"C","Choice4":"D","Choice5":"E","Feedback1":"A is incorrect","Feedback2":"B is incorrect","Feedback3":"C is correct","Feedback4":"D is incorrect","Feedback5":"E is incorrect","Answer":"C","QuestionType":"1","CourseType":"CS100"},"2":{"QuestionID":"9","Question":"Example Multiple Choice","Choice1":"A","Choice2":"B","Choice3":"C","Choice4":"D","Choice5":"E","Feedback1":"A is correct.","Feedback2":"B is incorrect","Feedback3":"C is incorrect","Feedback4":"D is incorrect","Feedback5":"E is incorrect","Answer":"A","QuestionType":"1","CourseType":"CS100"}}
/*
$_POST['mode']= 'submitAnswer';
$_POST['StudentID']= '1'; 
$_POST['TestID']= '2'; 
$_POST['Answer']= '{"Ans1": "A", "Ans2": "D", "Ans3": "T"}'; */ 
 //{"answer":true,"AnswerID":"1"} 
/*
$_POST['mode']= 'getUngradedTest';
$_POST['TeacherID']= '25'; */
//["4","5"] 
/*
$_POST['mode'] = 'getUngradedAnswer';
$_POST['TestID']= '2'; */ 
//["2","4"] 
/*
$_POST['mode'] = 'fetchTestAnswer';
$_POST['TestID']= '8';  
//{"TestID":"8","TeacherID":"26","NumberofQuestion":"3","QuestionIDs":{"Ques1":"1","Ques2":"4","Ques3":"9"},"GradeReleased":"0","TestName":"Midterm1","0":{"QuestionID":"1","Question":"Modified T\/F Question","Choice1":"T","Choice2":"F","Choice3":"","Choice4":"","Choice5":"","Feedback1":"T is incorrect","Feedback2":"F is Correct","Feedback3":"","Feedback4":"","Feedback5":"","Answer":"False","QuestionType":"2","CourseType":"CS200"},"1":{"QuestionID":"4","Question":"Multiple Choice","Choice1":"A","Choice2":"B","Choice3":"C","Choice4":"D","Choice5":"E","Feedback1":"A is incorrect","Feedback2":"B is incorrect","Feedback3":"C is correct","Feedback4":"D is incorrect","Feedback5":"E is incorrect","Answer":"C","QuestionType":"1","CourseType":"CS100"},"2":{"QuestionID":"9","Question":"Example Multiple Choice","Choice1":"A","Choice2":"B","Choice3":"C","Choice4":"D","Choice5":"E","Feedback1":"A is correct.","Feedback2":"B is incorrect","Feedback3":"C is incorrect","Feedback4":"D is incorrect","Feedback5":"E is incorrect","Answer":"A","QuestionType":"1","CourseType":"CS100"}}
$_POST['AnswerID']= '2'; 
//{"AnswerID":"2","StudentID":"21","TestID":"2","Answer":{"Ans1":"D","Ans2":"T"},"Grade":null} 
*/
/*
$_POST['mode'] = 'submitCorrections';
$_POST['TestID'] = '8';
$_POST['AnswerID'] = '1';
$_POST['Grade'] = '85';
*/


/*
$_POST['mode'] = 'releaseGrade';
$_POST['TestID'] = '8';
*/
//{"answer":true,"TestName":"Midterm1"} 

/*test
$_POST['mode'] = 'seeAnswer';
$_POST['AnswerID'] = '1';
*/

/*
$_POST['mode'] = 'submitCorrections';
$_POST['TestID'] = '28';
$_POST['AnswerID'] = '23';
$_POST['Corrections'] = '{"TestID":"28","AnswerID":"23","StudentID":"1","Ans73":"","Ans74":"","Ans75":"","Ans76":"","Ans77":"","Ans78":"1"}';
*/
//{"answer":true} 

//ADDED
/*
$_POST['mode']='fetchAnswerFeedback';
$_POST['AnswerID']='22';
*/

include 'functions.php';
$output = array();

if(ob_get_length()) ob_clean();
//test

if(post('mode')) {
//echo 'test does this part run 1';
    switch(post('mode')){
        case 'login':
         //echo 'this part2';
            if(post('NJIT')) { 
                //NJIT login 
                //echo 'something2';
                $output = njit_curl(post('username'), post('password')); 
                njit_logout(); 
                $output==true ? $output = array('answer'=>true) : $output = array('answer'=>false); 
            } else { 
                //System login
                //echo 'something';
                $parray = array( 
                    'command' => 'verifyLogin', 
                    'username' => post('username'), 
                    'password' => post('password') 
                    ); 
                $output = curl($parray); 
                //echo $output;
                //print_r ($parray);
                $output = json_decode($output);
            } 
        break;
                    //}
            

        case 'register':
        
        $rarray = array(
                    'command' => 'addLogin',
                    'username' => post('username'),
                    'password' => post('password')
                    );
                $output = curl($rarray);
                $output = json_decode($output);
        break;
       
        
        case 'deregister':
        
        $darray = array(
                    'command' => 'deleteLogin',
                    'username' => post('username'),
                    'password' => post('password')
                    );
                $output = curl($darray);
                $output = json_decode($output);
        break;
    
        case 'submitQuestion':
        
        $qarray = array(
                    'command' => 'createQuestion',
                    'Question' => post('Question'),
                    'Choice1' => post('Choice1'),
                    'Choice2' => post('Choice2'),
                    'Choice3' => post('Choice3'),
                    'Choice4' => post('Choice4'),
                    'Choice5' => post('Choice5'),
                    'Feedback1' => post('Feedback1'),
                    'Feedback2' => post('Feedback2'),
                    'Feedback3' => post('Feedback3'),
                    'Feedback4' => post('Feedback4'),
                    'Feedback5' => post('Feedback5'),
                    'Answer' => post('Answer'),
                    'QuestionType' => post('QuestionType'),
                    'CourseType' => post('CourseType')
                    );
                    //}                    

                $output = curl($qarray);
                $output = json_decode($output);
        break;
        
        case 'browseQuestion':
        $barray = array(
                    'command' => 'fetchCourseQuestion',
                    'CourseType' => post('CourseType')
                    );
                
                $output = curl($barray);
                $output = json_decode($output);
        break;
        
        case 'registerTest':
        $xarray = array(
                    'command' => 'createTest',
                    'TeacherID' => post('TeacherID'),
                    'TestName' => post('TestName'),
                    'NumberOfQuestions'=> post('NumberOfQuestions'),
                    'QuestionIDs' => post('QuestionIDs')
                    );
                $output = curl($xarray);
                $output = json_decode($output);
        break;
        
        case 'takeTest':
        $larray = array(
                    'command' => 'readTest',
                    'TestID' => post('TestID')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        case 'removeQuestion':
        $larray = array(
                    'command' => 'deleteQuestion',
                    'ID' => post('ID')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        case 'changeQuestion':
        $larray = array(
                    'command' => 'updateQuestion',
                    'ID' => post('ID'),
                    'Question' => post('Question'),
                    'Choice1' => post('Choice1'),
                    'Choice2' => post('Choice2'),
                    'Choice3' => post('Choice3'),
                    'Choice4' => post('Choice4'),
                    'Choice5' => post('Choice5'),
                    'Feedback1'=> post('Feedback1'),
                    'Feedback2' => post('Feedback2'),
                    'Feedback3'=> post('Feedback3'),
                    'Feedback4' => post('Feedback4'),
                    'Feedback5' => post('Feedback5'),
                    'Answer' => post('Answer'),
                    'QuestionType' => post('QuestionType'),
                    'CourseType' => post('CourseType')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        case 'submitAnswer':
        $larray = array(
                    'command' => 'createAnswer',
                    'StudentID' => post('StudentID'),
                    'TestID' => post('TestID'),
                    'Answer' => post('Answer')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        case 'getUngradedTest':
        $larray = array(
                    'command' => 'getUnreleased',
                    'TeacherID' => post('TeacherID')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        case 'getUngradedAnswer':
        $larray = array(
                    'command' => 'fetchUngradedAnswer',
                    'TestID' => post('TestID')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;

        case 'getGradedAnswer':
        $larray = array(
                    'command' => 'fetchGradedAnswer',
                    'StudentID' => post('StudentID')
                    );
                $output = curl($larray);
                $output = json_decode($output);
        break;
        
        //CHANGED bugged
        case 'fetchTestAnswer':
        $arrayTest = array(
                    'command' => 'readTest',
                    'TestID' => post('TestID')
                    );
                $Testoutput = curl($arrayTest);
                $Testoutput = json_decode($Testoutput);
        $arrayAnswer = array(
                    'command' => 'readAnswer',
                    'AnswerID' => post('AnswerID')
                    );
                $Answeroutput=curl($arrayAnswer);
                $Answeroutput=json_decode($Answeroutput);

                $output=array($Testoutput, $Answeroutput);
        break;

        /*
        case 'submitCorrections':
        $arrayTest = array(
                    'command' => 'readTest',
                    'TestID' => post('TestID')
                    );
                $Testoutput = curl($arrayTest);
                $Testoutput = json_decode($Testoutput);
        $arrayAnswer = array(
                    'command' => 'readAnswer',
                    'AnswerID' => post('AnswerID')
                    );
                $Answeroutput=curl($arrayAnswer);
                $Answeroutput=json_decode($Answeroutput);
        $arrayupdateAnswer = array(
                    'command' => 'updateAnswer',
                    'AnswerID' => post('AnswerID'),
                    'Grade' => post('Grade')
                    );
                $updateAnswerouput = curl($arrayupdateAnswer);
                $updateAnswerouput = json_decode($updateAnswerouput);
                
                $output=array($Testoutput, $Answeroutput, $updateAnswerouput);
        
        break;
        */
        case 'submitCorrections':
        $arrayTest = array(
                    'command' => 'readTest',
                    'TestID' => post('TestID')
                    );
                $Testoutput = curl($arrayTest);
                $Testoutput = json_decode($Testoutput,true);
        $arrayAnswer = array(
                    'command' => 'readAnswer',
                    'AnswerID' => post('AnswerID')
                    );
                $Answeroutput=curl($arrayAnswer);
                $Answeroutput=json_decode($Answeroutput,true);
                $output=array('answer'=>true);
        $correction = post('Corrections');
                $correction=json_decode($correction,true);
        $correct=0;
        $total=0;
            foreach($Testoutput['QuestionIDs'] as $key=>$question) {
                switch($Testoutput[$key]['QuestionType']) {
                    case "1":
                        if($Answeroutput['Answer']['Ans'.$question]==$Testoutput[$key]['Answer']) {
                            $correct++;
                            echo "correct!<br>";
                        }
                        break;
                    case "2":
                        if($Answeroutput['Answer']['Ans'.$question]==$Testoutput[$key]['Answer']) {
                            $correct++;
                            echo "correct!<br>";
                        }
                        break;
                    case "3":
                        if($correction['Ans'.$question]) {
                            $correct++;
                            echo $correction['Ans'.$question].'<br.>';
                            echo "correct!<br>";
                        }
                        break;
                    case "4":
                        if($correction['Ans'.$question]) {
                            $correct++;
                            echo $correction['Ans'.$question].'<br.>';
                            echo "correct!<br>";
                        }
                        break;
                }
                $total++;
            }
            $grade=$correct/$total*100;
            array_push($Answeroutput,$correction);
            $answer=$Answeroutput['Answer'];
            array_push($answer, $correction);
            echo json_encode($answer);
        $arrayCorrection = array(
                    'command'=>'updateAnswer',
                    'AnswerID'=>post('AnswerID'),
                    'Grade'=>$grade,
                    'Answer'=>json_encode($answer)
                );
            //print_r($arrayCorrection);
            $output = curl($arrayCorrection);
            $output = json_decode($output);
        break;

        case 'releaseGrade':
        $larray = array(
                'command' => 'updateTest',
                'TestID' => post('TestID')
                );
            $output = curl($larray);
            $output = json_decode($output);
        break;

        /*test*/
        case 'seeAnswer':
        $larray = array(
                'command' => 'readAnswer',
                'AnswerID' => post('AnswerID')
                );
            break;
        
        //ADDED
        case 'fetchAnswerFeedback':
        $arrayAnswer = array(
                    'command' => 'readAnswer',
                    'AnswerID' => post('AnswerID')
                    );
                $Answeroutput=curl($arrayAnswer);
                $Answeroutput=json_decode($Answeroutput);
                //sleep(1000);
        $arrayTest = array(
                    'command' => 'readTest',
                    'TestID' => $Answeroutput->TestID
                    );
                $Testoutput=curl($arrayTest);
                $Testoutput=json_decode($Testoutput);
                //print_r($Answeroutput);
                //echo '<br><br>';
                //print_r($Testoutput);
                $output=array($Testoutput, $Answeroutput);
                //print_r($output);
        break;

    }

    header('Content-Type: application/json'); //ADDED
    echo json_encode($output);
}
?> 