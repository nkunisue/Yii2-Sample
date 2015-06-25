<?php

use yii\db\Schema;
use yii\db\Migration;

class m150616_122717_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        /**
         * ユーザーテーブル
         */
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'email' => Schema::TYPE_STRING . ' NOT NULL COMMENT "メールアドレス"',
            'password_hash' => Schema::TYPE_STRING . '(64) NOT NULL COMMENT "パスワードハッシュ"',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL COMMENT "ログイン状態維持用認証キー"',
            'password_reset_token' => Schema::TYPE_STRING . ' COMMENT "パスワードリセットトークン"',

            'display_name' => Schema::TYPE_STRING. ' NOT NULL COMMENT "ユーザー名"',

            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL COMMENT "作成日時"',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL COMMENT "更新日時"',
        ], $tableOptions);

        $this->createIndex('unq_user_email', 'user', 'email', true);

    }

    public function down()
    {
        $this->dropTable('user');
    }
}
