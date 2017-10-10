<?php

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
}

?>

<h1>Welcome to our company</h1>

<form method="post">
    <p>First name</p>
    <input name="firstName" type="text" />
    <br><br>
    
    <p>Last name</p>
    <input name="lastName" type="text" />
    <br><br>
    
    <p>Middle name</p>
    <input name="middleName" type="text" />
    <br><br>
    
    <p>Email name</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Date of birth</p>
    <input name="dateOfBirth" type="date" />
    <br><br>
    
    <p>Start date</p>
    <input name="startDate" type="date" />
    <br><br>
    
    <p>City</p>
    <select name="city">
        <option>Dnipro</option>
        <option>Kyiw</option>
    </select>
    <br><br>
    
    <p>Position</p>
    <input name="position" type="text" />
    <br><br>
    
    <p>Identification Code</p>
    <input name="identificationCode" type="text" />
    <br><br>
    
    <input type="submit" />
</form>