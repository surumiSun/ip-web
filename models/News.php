<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "news".
 *
 * @property int $id ID
 * @property string $title Заголовок
 * @property string $text Текст
 * @property string $onCreate Дата создания
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['title', 'text'], 'string'],
            [['onCreate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'onCreate' => 'Дата создания',
        ];
    }

    public function getSafeTitle()
    {
        return nl2br(Html::encode($this->title));
    }

    public function getSafeText()
    {
        return nl2br(Html::encode($this->text));
    }
}
