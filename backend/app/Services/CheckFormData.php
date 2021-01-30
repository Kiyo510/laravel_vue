<?php

namespace App\Services;

class CheckFormData
{
  public static function CheckGender($formData)
  {
    if ($formData->gender === 0) {
      $gender = '男性';
    }

    if ($formData->gender === 1) {
      $gender = '女性';
    }
    return $gender;
  }

  public static function CheckAge($formData)
  {
    if ($formData->age === 1) {
      $age = '~19歳';
    }

    if ($formData->age === 2) {
      $age = '20~29歳';
    }
    if ($formData->age === 3) {
      $age = '30~39歳';
    }

    if ($formData->age === 4) {
      $age = '40~49歳';
    }

    if ($formData->age === 5) {
      $age = '50~59歳';
    }

    if ($formData->age === 6) {
      $age = '60~歳';
    }
    return $age;
  }
}
