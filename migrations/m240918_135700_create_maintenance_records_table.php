<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%maintenance_records}}`.
 */
class m240918_135700_create_maintenance_records_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%maintenance_records}}', [
            'id' => $this->primaryKey()->comment('หมายเลขอัตโนมัติ (Primary Key)'),
            'server_id' => $this->integer()->notNull()->comment('หมายเลขอ้างอิงไปยังเครื่องแม่ข่าย (proxmox_servers)'), // เชื่อมโยงกับเครื่องแม่ข่าย
            'maintenance_start_date' => $this->date()->notNull()->comment('วันที่ซ่อมบำรุง'),
            'maintenance_end_date' => $this->date()->notNull()->comment('วันที่ซ่อมบำรุงเสร็จ'),
            'maintenance_details' => $this->text()->notNull()->comment('รายละเอียดการซ่อมบำรุง'),
            'post_maintenance_status' => "ENUM('ใช้งานได้', 'ใช้งานไม่ได้') NOT NULL COMMENT 'สถานะหลังการซ่อมบำรุง'",
            'last_usage_log' => $this->text()->notNull()->comment('บันทึกการใช้งานล่าสุด เช่น ปัญหาที่พบ'),
            'responsible_person' => $this->string(255)->notNull()->comment('ผู้รับผิดชอบในการดูแล'),
            'additional_notes' => $this->text()->comment('หมายเหตุเพิ่มเติม'),
        ]);
    
        // สร้าง foreign key เชื่อมกับตาราง proxmox_servers
        /*$this->addForeignKey(
            'fk-maintenance-server_id',
            '{{%maintenance_records}}',
            'server_id',
            '{{%asset}}',
            'id',
            'CASCADE',
            'CASCADE'
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%maintenance_records}}');
    }
}
