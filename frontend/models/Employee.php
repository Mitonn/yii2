<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';


    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $dateOfBirth;
    public $startDate;
    public $city;
    public $position;
    public $identificationCode;


    public function scenarios() 
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 
                'dateOfBirth', 'startDate', 'city', 'position', 'identificationCode'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }
    
    public function rules() 
    {
        return [
            [['firstName', 'lastName', 'email', 'startDate', 'position', 'identificationCode'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['dateOfBirth', 'startDate'], 'string'],
            [['city'], 'string'],
            [['position'], 'string'],
            [['identificationCode'], 'string', 'min' => 10, 'max' => 10],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO employee (firstname, lastname, middlename, email, date_of_birth, start_date, city, position, identification_code)"
                . " VALUES ('$this->firstName', '$this->lastName', '$this->middleName', '$this->email', '$this->dateOfBirth', '$this->startDate', '$this->city', '$this->position', '$this->identificationCode')";
        
      
        return Yii::$app->db->createCommand($sql)->execute();
    }
    
    public static function find()
    {
        $sql = "SELECT * FROM employee";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
}