<?php

namespace app\commands;

use yii\console\Controller;
use app\models\User;
use Yii;

class UserController extends Controller
{
    public function actionChangePassword($userId, $newPassword)
    {
        // Find the user model
        $user = User::findOne(['email' => $userId]);

        if ($user) {
            // Update the password
            $user->password_hash = Yii::$app->security->generatePasswordHash($newPassword);

            // Save the changes
            if ($user->save()) {
                echo "Password updated successfully.\n";
            } else {
                echo "Failed to update password.\n";
                print_r($user->errors); // Print errors for debugging
            }
        } else {
            echo "User not found.\n";
        }
    }
}
