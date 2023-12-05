<?php
// controllers/UserController.php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionCreateUser()
    {
        $user = new User();

        // Set user attributes
        $user->username = 'jarircse16@gmail.com';
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash('xD123@xD');

        // Save the record to the database
        if ($user->save()) {
            return 'User record created successfully!';
        } else {
            return 'Failed to create user record. Errors: ' . json_encode($user->errors);
        }
    }
    public function actionChangePassword($userId, $newPassword)
    {
        // Find the user model
        $user = User::findOne($userId);

        if ($user) {
            // Update the password
            $user->password_hash = Yii::$app->security->generatePasswordHash($newPassword);

            // Save the changes
            if ($user->save()) {
                echo "Password updated successfully.\n";
            } else {
                echo "Failed to update password.\n";
            }
        } else {
            echo "User not found.\n";
        }
    }
}
