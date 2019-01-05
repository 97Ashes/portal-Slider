<?php

use yii\db\Migration;

/**
 * Class m190105_125045_tablo
 */
class m190105_125045_tablo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

          $TABLE_NAME = 'duyurupaneli';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'duyuruname' => $this->string(25)->notNull(),
            'senderid' => $this->integer()->notNull(),
            'sendername' => $this->string(20)->notNull()
           
        ], $tableOptions);


         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $TABLE_NAME = 'duyurugonder';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'sendername' => $this->string(20)->notNull(),
            'senderposition' => $this->string(20)->notNull(),
            'senderemail' => $this->string(128)->notNull(),
            'senderid'=>$this->integer()->notNull(),
            'senderdate'=>$this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
           
        ], $tableOptions);


         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


         $TABLE_NAME = 'scheduler';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'postdate' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'enddate' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'sendername' => $this->string(20)->notNull()

        ], $tableOptions);

        

         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $TABLE_NAME = 'slider';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'content' => $this->text()->notNull(),
            'file' => $this->string(64)->notNull(),
            'folder' => $this->integer()->notNull()

        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
         $TABLE_NAME = 'duyurupaneli';
        $this->dropTable($TABLE_NAME);

         $TABLE_NAME = 'duyurugonder';
        $this->dropTable($TABLE_NAME);

         $TABLE_NAME = 'scheduler';
        $this->dropTable($TABLE_NAME);

         $TABLE_NAME = 'slider';
        $this->dropTable($TABLE_NAME);

    }

   
}
