<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%virtual_machines}}`.
 */
class m240918_133708_create_virtual_machines_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // สร้างตารางสำหรับข้อมูล VM
        $this->createTable('{{%virtual_machines}}', [
            'id' => $this->primaryKey()->comment('หมายเลขอัตโนมัติ (Primary Key)'),
            'server_id' => $this->integer()->notNull()->comment('หมายเลขอ้างอิงไปยังเครื่องแม่ข่าย (proxmox_servers)'), // เชื่อมโยงกับเครื่องแม่ข่าย
            'vm_name' => $this->string(255)->notNull()->comment('ชื่อ VM'),
            'vm_asset_code' => $this->string(100)->comment('รหัสครุภัณฑ์ของ VM (ถ้ามี)'),
            'os' => $this->string(255)->notNull()->comment('ระบบปฏิบัติการภายใน VM'),
            'allocated_cpu' => $this->integer()->notNull()->comment('จำนวน CPU ที่จัดสรรให้ VM'),
            'allocated_ram' => $this->string(50)->notNull()->comment('หน่วยความจำ RAM ที่จัดสรรให้ VM'),
            'allocated_hard_disk_size' => $this->string(50)->notNull()->comment('ขนาด Hard Disk ที่จัดสรรให้ VM'),
            'network_details' => $this->string(255)->notNull()->comment('เครือข่ายที่เชื่อมต่อ: เช่น IP Address, MAC Address'),
            'status' => "ENUM('กำลังใช้งาน', 'หยุดทำงาน', 'อื่นๆ') NOT NULL COMMENT 'สถานะของ VM'",
        ]);

        // สร้าง foreign key เพื่อเชื่อมกับ asset
        /*$this->addForeignKey(
            'fk-vm-server_id', // ชื่อของ foreign key
            '{{%virtual_machines}}', // ตารางที่กำหนด foreign key
            'server_id', // คอลัมน์ที่เป็น foreign key
            '{{%asset}}', // ตารางที่อ้างอิงถึง (asset)
            'id', // คอลัมน์ที่เป็น primary key ของ asset
            'CASCADE', // การลบข้อมูลจะ cascade ลบข้อมูลที่เกี่ยวข้อง
            'CASCADE'  // การอัปเดตข้อมูลจะ cascade อัปเดตข้อมูลที่เกี่ยวข้อง
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%virtual_machines}}');
    }
}
