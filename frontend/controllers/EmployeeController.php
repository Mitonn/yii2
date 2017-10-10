<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

use frontend\models\example\Human;
use frontend\models\example\Animal;

class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;
        
//        echo $employee1['salary'];
//        
//        foreach ($employee1 as $attribute => $vslue) {
//            echo "$attribute: $vslue <br>";
//        }
        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
        
        echo '<pre>';
        print_r($employee1->getAttributes());
        
        echo '<pre>';
        print_r($employee1->attributes);
        
        echo '<pre>';
        print_r($employee1->attributes());
        
    }
    
    public function actionTest()
    {
        $human1 = new Human();
        $animal1 = new Animal();
        
        $human1->walk();
        $animal1->walk();
    }
    
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
        
        return $this->render('register', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Updated!');
            }
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}