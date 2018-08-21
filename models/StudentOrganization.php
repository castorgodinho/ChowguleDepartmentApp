<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_organization".
 *
 * @property int $student_organization_id
 * @property int $organization_id
 * @property int $student_id
 * @property string $date_of_joining
 * @property string $position
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Organization $organization
 * @property Student $student
 */
class StudentOrganization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_id', 'student_id'], 'integer'],
            [['date_of_joining', 'created_at', 'updated_at'], 'safe'],
            [['position'], 'string', 'max' => 25],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'organization_id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'student_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_organization_id' => 'Student Organization ID',
            'organization_id' => 'Organization ID',
            'student_id' => 'Student ID',
            'date_of_joining' => 'Date Of Joining',
            'position' => 'Position',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }
}
