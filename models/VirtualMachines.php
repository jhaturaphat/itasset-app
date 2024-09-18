<?php

namespace app\models;

use Yii;
use app\models\Asset;

/**
 * This is the model class for table "{{%virtual_machines}}".
 *
 * @property int $id หมายเลขอัตโนมัติ (Primary Key)
 * @property int|null $server_id หมายเลขอ้างอิงไปยังเครื่องแม่ข่าย (proxmox_servers)
 * @property string $vm_name ชื่อ VM
 * @property string|null $vm_asset_code รหัสครุภัณฑ์ของ VM (ถ้ามี)
 * @property string $os ระบบปฏิบัติการภายใน VM
 * @property int $allocated_cpu จำนวน CPU ที่จัดสรรให้ VM
 * @property string $allocated_ram หน่วยความจำ RAM ที่จัดสรรให้ VM
 * @property string $allocated_hard_disk_size ขนาด Hard Disk ที่จัดสรรให้ VM
 * @property string $network_details เครือข่ายที่เชื่อมต่อ: เช่น IP Address, MAC Address
 * @property string $status สถานะของ VM
 */
class VirtualMachines extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%virtual_machines}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['server_id', 'allocated_cpu'], 'integer'],
            [['vm_name', 'os', 'allocated_cpu', 'allocated_ram', 'allocated_hard_disk_size', 'network_details', 'status'], 'required'],
            [['status'], 'string'],
            [['vm_name', 'os', 'network_details'], 'string', 'max' => 255],
            [['vm_asset_code'], 'string', 'max' => 100],
            [['allocated_ram', 'allocated_hard_disk_size'], 'string', 'max' => 50],
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
            'vm_name' => 'ชื่อ VM',
            'vm_asset_code' => 'รหัสครุภัณฑ์ของ VM (ถ้ามี)',
            'os' => 'ระบบปฏิบัติการภายใน VM',
            'allocated_cpu' => 'จำนวน CPU ที่จัดสรรให้ VM',
            'allocated_ram' => 'หน่วยความจำ RAM ที่จัดสรรให้ VM',
            'allocated_hard_disk_size' => 'ขนาด Hard Disk ที่จัดสรรให้ VM',
            'network_details' => 'เครือข่ายที่เชื่อมต่อ: เช่น IP Address, MAC Address',
            'status' => 'สถานะของ VM',
        ];
    }

    public function getServerId(){
        return yii\helpers\ArrayHelper::map(
            Asset::find()->select(['server_id', 'asset_name'])->all(),
            'server_id',   // ค่าที่จะใช้เป็น key
            'asset_name'   // ค่าที่จะใช้เป็น value
        );
    }
}
