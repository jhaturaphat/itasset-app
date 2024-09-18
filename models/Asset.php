<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%asset}}".
 *
 * @property int $server_id หมายเลขอัตโนมัติ (Primary Key)
 * @property string $asset_code รหัสครุภัณฑ์
 * @property string $asset_name ชื่อครุภัณฑ์ เช่น เครื่องคอมพิวเตอร์แม่ข่าย
 * @property string $brand_model ยี่ห้อ / รุ่นของเครื่องแม่ข่าย
 * @property string $serial_number หมายเลขซีเรียล (Serial Number)
 * @property string $installation_location สถานที่ติดตั้ง เช่น ห้องเซิร์ฟเวอร์
 * @property string|null $purchase_date วันที่ซื้อครุภัณฑ์
 * @property string $entry_date วันที่รับครุภัณฑ์เข้าสู่ระบบ
 * @property float|null $asset_value มูลค่าครุภัณฑ์ (บาท)
 * @property string|null $supplier ชื่อผู้จัดจำหน่าย
 * @property string|null $order_number หมายเลขใบสั่งซื้อ
 * @property string|null $warranty_period ระยะเวลาการรับประกัน
 * @property string $status สถานะของครุภัณฑ์
 * @property string|null $comments ความคิดเห็นเพิ่มเติม
 * @property string $os ระบบปฏิบัติการ (OS): Proxmox VE (ระบุเวอร์ชัน)
 * @property string $cpu CPU (หน่วยประมวลผล): ระบุรุ่นและความเร็วของ CPU
 * @property string $ram RAM (หน่วยความจำ): ระบุขนาดหน่วยความจำ RAM
 * @property string $hard_disk_size ขนาด Hard Disk: ระบุขนาดของหน่วยจัดเก็บข้อมูลที่ใช้งาน
 * @property string $storage_type ประเภทการจัดเก็บข้อมูล: ระบุว่าใช้ SSD หรือ HDD
 * @property string $network เครือข่าย (Network): ระบุการเชื่อมต่อเครือข่าย เช่น Gigabit Ethernet
 * @property string|null $other_ports การเชื่อมต่ออื่นๆ: ระบุพอร์ตที่มี เช่น USB, HDMI
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%asset}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_code', 'asset_name', 'brand_model', 'serial_number', 'installation_location', 'entry_date', 'status', 'os', 'cpu', 'ram', 'hard_disk_size', 'storage_type', 'network'], 'required'],
            [['purchase_date', 'entry_date'], 'safe'],
            [['asset_value'], 'number'],
            [['status', 'comments'], 'string'],
            [['asset_code', 'order_number', 'warranty_period', 'network'], 'string', 'max' => 100],
            [['asset_name', 'brand_model', 'serial_number', 'installation_location', 'supplier', 'os', 'cpu', 'other_ports'], 'string', 'max' => 255],
            [['ram', 'hard_disk_size', 'storage_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'server_id' => 'หมายเลขอัตโนมัติ (Primary Key)',
            'asset_code' => 'รหัสครุภัณฑ์',
            'asset_name' => 'ชื่อครุภัณฑ์ เช่น เครื่องคอมพิวเตอร์แม่ข่าย',
            'brand_model' => 'ยี่ห้อ / รุ่นของเครื่องแม่ข่าย',
            'serial_number' => 'หมายเลขซีเรียล (Serial Number)',
            'installation_location' => 'สถานที่ติดตั้ง เช่น ห้องเซิร์ฟเวอร์',
            'purchase_date' => 'วันที่ซื้อครุภัณฑ์',
            'entry_date' => 'วันที่รับครุภัณฑ์เข้าสู่ระบบ',
            'asset_value' => 'มูลค่าครุภัณฑ์ (บาท)',
            'supplier' => 'ชื่อผู้จัดจำหน่าย',
            'order_number' => 'หมายเลขใบสั่งซื้อ',
            'warranty_period' => 'ระยะเวลาการรับประกัน',
            'status' => 'สถานะของครุภัณฑ์',
            'comments' => 'ความคิดเห็นเพิ่มเติม',
            'os' => 'ระบบปฏิบัติการ (OS)',
            'cpu' => 'CPU (หน่วยประมวลผล)',
            'ram' => 'RAM (หน่วยความจำ): ระบุขนาดหน่วยความจำ RAM',
            'hard_disk_size' => 'ขนาด Hard Disk',
            'storage_type' => 'ระบุว่าใช้ SSD หรือ HDD',
            'network' => 'เครือข่าย (Network): ระบุการเชื่อมต่อเครือข่าย เช่น Gigabit Ethernet',
            'other_ports' => 'การเชื่อมต่ออื่นๆ: ระบุพอร์ตที่มี เช่น USB, HDMI',
        ];
    }
}
