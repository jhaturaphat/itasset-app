<?php

use yii\db\Migration;

/**
 * Class m240918_130658_create_table_asset_info
 */
class m240918_130658_create_table_asset_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%asset}}', [
            'server_id' => $this->primaryKey()->comment('หมายเลขอัตโนมัติ (Primary Key)'),
            'asset_code' => $this->string(100)->notNull()->comment('รหัสครุภัณฑ์'),
            'asset_name' => $this->string(255)->notNull()->comment('ชื่อครุภัณฑ์ เช่น เครื่องคอมพิวเตอร์แม่ข่าย'),
            'brand_model' => $this->string(255)->notNull()->comment('ยี่ห้อ / รุ่นของเครื่องแม่ข่าย'),
            'serial_number' => $this->string(255)->notNull()->comment('หมายเลขซีเรียล (Serial Number)'),
            'installation_location' => $this->string(255)->notNull()->comment('สถานที่ติดตั้ง เช่น ห้องเซิร์ฟเวอร์'),
            'purchase_date' => $this->date()->comment('วันที่ซื้อครุภัณฑ์'),
            'entry_date' => $this->date()->notNull()->comment('วันที่รับครุภัณฑ์เข้าสู่ระบบ'),
            'asset_value' => $this->decimal(15, 2)->comment('มูลค่าครุภัณฑ์ (บาท)'),
            'supplier' => $this->string(255)->comment('ชื่อผู้จัดจำหน่าย'),
            'order_number' => $this->string(100)->comment('หมายเลขใบสั่งซื้อ'),
            'warranty_period' => $this->string(100)->comment('ระยะเวลาการรับประกัน'),
            'status' => "ENUM('ใช้งาน', 'ซ่อมบำรุง', 'ปลดระวาง') NOT NULL COMMENT 'สถานะของครุภัณฑ์'",
            'comments' => $this->text()->comment('ความคิดเห็นเพิ่มเติม'),
            'os' => $this->string(255)->notNull()->comment('ระบบปฏิบัติการ (OS): Proxmox VE (ระบุเวอร์ชัน)'),
            'cpu' => $this->string(255)->notNull()->comment('CPU (หน่วยประมวลผล): ระบุรุ่นและความเร็วของ CPU'),
            'ram' => $this->string(50)->notNull()->comment('RAM (หน่วยความจำ): ระบุขนาดหน่วยความจำ RAM'),
            'hard_disk_size' => $this->string(50)->notNull()->comment('ขนาด Hard Disk: ระบุขนาดของหน่วยจัดเก็บข้อมูลที่ใช้งาน'),
            'storage_type' => $this->string(50)->notNull()->comment('ประเภทการจัดเก็บข้อมูล: ระบุว่าใช้ SSD หรือ HDD'),
            'network' => $this->string(100)->notNull()->comment('เครือข่าย (Network): ระบุการเชื่อมต่อเครือข่าย เช่น Gigabit Ethernet'),
            'other_ports' => $this->string(255)->comment('การเชื่อมต่ออื่นๆ: ระบุพอร์ตที่มี เช่น USB, HDMI'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%asset}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
       
    }

    public function down()
    {
        echo "m240918_130658_create_table_asset_info cannot be reverted.\n";

        return false;
    }
    */
}
