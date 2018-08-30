<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $name
 * @property string $roll_no
 * @property string $phone_no
 * @property string $created_at
 * @property string $updated_at
 * @property int $status
 *
 * @property ProgramStudent[] $programStudents
 * @property StudentOrganization[] $studentOrganizations
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'roll_no', 'phone_no'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'roll_no'], 'string', 'max' => 50],
            [['phone_no'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'name' => 'Name',
            'roll_no' => 'Roll No',
            'phone_no' => 'Phone No',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramStudents()
    {
        return $this->hasMany(ProgramStudent::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentOrganizations()
    {
        return $this->hasMany(StudentOrganization::className(), ['student_id' => 'student_id']);
    }
}