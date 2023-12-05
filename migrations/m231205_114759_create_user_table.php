<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m231205_114759_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
     {
       $this->execute("
           CREATE TABLE `user` (
               `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
               `username` varchar(191) NOT NULL UNIQUE,
               `password_hash` varchar(255) NOT NULL,
               `auth_key` varchar(32),
               `created_at` int,
               `updated_at` int
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
       ");
     }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("DROP TABLE `user`;");
    }
}
