<?php
if(isset($_POST['submit'])){    
    $errors = array();    
    // check the value is empty
    foreach($_POST as $key=>$value){
        if($key == 'submit'){
            continue; 
        }
        if(empty($value)){            
            $errors[$key] = "The $key is Empty";
        }else{                   
            if(($key == 'username') || ($key == 'pass') || ($key == 'name')){
                if(gettype($key['value']) != 'string'){
                    $errors[$key] = 'Not Matched datatype';
                }
            }elseif(($key == 'age')){
                if(gettype($key['value']) != 'int'){
                    $errors[$key] = "Not Matched datatype for $key";
                }
            }elseif(($key == 'salary')){
                if(gettype($key['value']) != 'double'){
                    $errors[$key] = "Not Matched datatype for $key";
                }
            }
        }  
    }    
}
?>
<?php
if(isset($errors)){
    foreach ($errors as $error){
        echo "<p style='color:red'>$error</p>"; 
    }
}
?>
<form action="validation.php" method="post">
    <p>Username : <input type="text" name="username"/></p>
    <p>Password : <input type="password" name="pass"/></p>
    <p>Age : <input type="text" name="age"/></p>
    <p>Birth : <input type="text" name="birth"/></p>
    <p>name : <input type="text" name="name"/></p>
    <p>Salary : <input type="text" name="salary"/></p>
    <input type="submit" name="submit" value="save"/>
</form>

<?php

if(isset($validData)){
    foreach ($validData as $data){
        echo "<p style='color:green'>$data</p>"; 
    }
}
?>