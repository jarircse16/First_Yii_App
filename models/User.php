<?php

// models/User.php

namespace app\models;
use Yii; // Correct the namespace
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
        /**
      * Validates a password.
      *
      * @param string $password the password to validate
      * @return bool whether the password is valid
      */
      public function validatePassword($password)
      {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
      }
    // Other attributes and methods in your User model
    /**
     * Finds an identity by the given username.
     *
     * @param string $username the username to be looked for
     * @return IdentityInterface|null the identity object that matches the given username.
     */
     public static function findByUsername($username)
     {
        return static::findOne(['username' => $username]);
     }
     /**
     * Gets the auth key for the user (used for cookie-based login).
     *
     * @return string|null the auth key
     */


    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */


    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Gets the ID of the user.
     *
     * @return string|int the ID of the user
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the auth key for the user (used for cookie-based login).
     *
     * @return string|null the auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Validates the auth key.
     *
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
