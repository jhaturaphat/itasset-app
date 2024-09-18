<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%maintenance_records}}".
 *
 * @property int $id หมายเลขอัตโนมัติ (Primary Key)
 * @property int $server_id หมายเลขอ้างอิงไปยังเครื่องแม่ข่าย (proxmox_servers)
 * @property string $maintenance_start_date วันที่ซ่อมบำรุง
 * @property string $maintenance_end_date วันที่ซ่อมบำรุงเสร็จ
 * @property string $maintenance_details รายละเอียดการซ่อมบำรุง
 * @property string $post_maintenance_status สถานะหลังการซ่อมบำรุง
 * @property string $last_usage_log บันทึกการใช้งานล่าสุด เช่น ปัญหาที่พบ
 * @property string $responsible_person ผู้รับผิดชอบในการดูแล
 * @property string|null $additional_notes หมายเหตุเพิ่มเติม
 */
class MaintenanceRecords extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%maintenance_records}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['server_id', 'maintenance_start_date', 'maintenance_end_date', 'maintenance_details', 'post_maintenance_status', 'last_usage_log', 'responsible_person'], 'required'],
            [['server_id'], 'integer'],
            [['maintenance_start_date', 'maintenance_end_date'], 'safe'],
            [['maintenance_details', 'post_maintenance_status', 'last_usage_log', 'additional_notes'], 'string'],
            [['responsible_person'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'หมายเลขอัตโนมัติ (Primary Key)',
            'server_id' => 'หมายเลขอ้างอิงไปยังเครื่องแม่ข่าย (proxmox_servers)',
            'maintenance_start_date' => 'วันที่ซ่อมบำรุง',
            'maintenance_end_date' => 'วันที่ซ่อมบำรุงเสร็จ',
            'maintenance_details' => 'รายละเอียดการซ่อมบำรุง',
            'post_maintenance_status' => 'สถานะหลังการซ่อมบำรุง',
            'last_usage_log' => 'บันทึกการใช้งานล่าสุด เช่น ปัญหาที่พบ',
            'responsible_person' => 'ผู้รับผิดชอบในการดูแล',
            'additional_notes' => 'หมายเหตุเพิ่มเติม',
        ];
    }
}
