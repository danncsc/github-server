<?php
//Project模型 選課資料表
class Project extends Eloquent{
  //指定資料表
  protected $table='project';
  //開放直接寫入的欄位
  protected $fillable = array('name', 'site','server','commit','clone');
}

