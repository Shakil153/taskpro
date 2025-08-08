<?php

namespace App\Services;

class UtilityService
{
    public static $numberOfMonthYear = '-5 month';
    public static $displayRecordPerPage = 5;
    public static $working_days = ['monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday', 'sunday' => 'Sunday'];
    public static $months = ['' => 'Select a Month', '1' => 'January', '2' => 'February', '3' => 'March', '4' => 'April', '5' => 'May', '6' => 'June', '7' => 'July', '8' => 'August', '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'];
    public static $shortMonths = [1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'];
    public static $displayRecordPerPageSelect = ['10' => 10, '20' => 20, '50' => 50, '100' => 100, 'all' => 'All'];
    public static $fileUploadPath = 'images/employee_doc';
    public static $taskUploadPath = 'images/tasks/';
    public static $login_method = 0; //0=email, 1=username
    public static $delete_method = 1; //0=no check, 1=auth check
    public static $yesNoStatus = [
        0 => 'No',
        1 => 'Yes'
    ];
    public static $package_condition_type_name = [
        'text',
        'select',
        'radio'
    ];
    public static $statusText = [
        0 => 'IN ACTIVE',
        1 => 'ACTIVE'
    ];

    public static $AdminRoleID = 1;
    public static $DriverRoleID = 2;
    public static $VendorRoleID = 3;
    public static $ClientsRoleID = 4;
    public static $EmployeeRoleID = 5;

    /**
     * @return array
     */
    public static function getYesNoStatus(): array
    {
        return self::$yesNoStatus;
    }

    /**
     * @param array $yesNoStatus
     */
    public static function setYesNoStatus(array $yesNoStatus): void
    {
        self::$yesNoStatus = $yesNoStatus;
    }

    /**
     * @return array
     */
    public static function getStatusText(): array
    {
        return self::$statusText;
    }

    /**
     * @param array $statusText
     */
    public static function setStatusText(array $statusText): void
    {
        self::$statusText = $statusText;
    }

    /**
     * @return array
     */
    public static function getPackageConditionTypeName(): array
    {
        return self::$package_condition_type_name;
    }

    /**
     * @param array $package_condition_type_name
     */
    public static function setPackageConditionTypeName(array $package_condition_type_name): void
    {
        self::$package_condition_type_name = $package_condition_type_name;
    }
}
