<?php
// commands/CreateUserController.php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\User;

class CreateUserController extends Controller
{
    public function actionIndex()
    {
        $user = new User();

        // Set user attributes
        $user->username = 'john_doe';
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash('password123');

        // Save the record to the database
        if ($user->save()) {
            echo 'User record created successfully!';
        } else {
            echo 'Failed to create user record. Errors: ' . json_encode($user->errors);
        }
    }
}
