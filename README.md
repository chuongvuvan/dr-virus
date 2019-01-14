# Checker Virus

1 wrapper đơn giản support cho việc online checker source dựa trên API của Virus Total

Có thể setup thành 1 service chạy giám sát hệ thống

Support đủ theo các tài liệu của Virus Total, kết hợp hoàn hảo nhất khi sử dụng với Premium Key của Virus Total

### Cài đặt

Cài đặt thông qua composer với dòng lệnh dưới đây

```shell
composer install nguyenanhung/dr-virus
```

### Quét File

Ví dụ về trường hợp quét file

```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';
$apiKey = '';
$file   = new \nguyenanhung\Tool\DrVirus\File($apiKey);
// Scan
$result = $file->scan('your_file.blahblah');
d($result);
// Perform a re-scan
d($file->rescan($result['resource']));
// Get Data Report
d($file->getReport($result['resource']));
```
và tận hưởng thành quả
```shell
 /Applications/XAMPP/xamppfiles/htdocs/Packages/dr-virus/example  php file.php                                                                    ✔  10004  20:55:03

┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
│ $result                                                                                                                                                               │
└───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
array (8) [
    'scan_id' => string (75) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6-1547474005"
    'sha1' => string (40) "60e4817454eea5d2e78e1426f0c63b6dab109916"
    'resource' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'response_code' => integer 1
    'sha256' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'permalink' => string (117) "https://www.virustotal.com/file/9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6/analysis/1547474005/"
    'md5' => string (32) "5c7a4ccfbfb7366b74951bc313c10a92"
    'verbose_msg' => string (64) "Scan request successfully queued, come back later for the report"
]
═════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
Called from <ROOT>/file.php:6 [d()]

┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
│ $file->rescan(...)                                                                                                                                                    │
└───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
array (5) [
    'permalink' => string (117) "https://www.virustotal.com/file/9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6/analysis/1547474005/"
    'response_code' => integer 1
    'sha256' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'resource' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'scan_id' => string (75) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6-1547474005"
]
═════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
Called from <ROOT>/file.php:8 [d()]

┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
│ $file->getReport(...)                                                                                                                                                 │
└───────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
array (12) [
    'scans' => array (58) [
        'Bkav' => array (4) [
            'detected' => boolean false
            'version' => string (10) "1.3.0.9899"
            'result' => null
            'update' => string (8) "20190108"
        ]
        'TotalDefense' => array (4) [
            'detected' => boolean false
            'version' => string (9) "37.1.62.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'MicroWorld-eScan' => array (4) [
            'detected' => boolean false
            'version' => string (10) "14.0.297.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'CMC' => array (4) [
            'detected' => boolean false
            'version' => string (9) "1.1.0.977"
            'result' => null
            'update' => string (8) "20190113"
        ]
        'CAT-QuickHeal' => array (4) [
            'detected' => boolean false
            'version' => string (5) "14.00"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'McAfee' => array (4) [
            'detected' => boolean false
            'version' => string (9) "6.0.6.653"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Malwarebytes' => array (4) [
            'detected' => boolean false
            'version' => string (10) "2.1.1.1115"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'VIPRE' => array (4) [
            'detected' => boolean false
            'version' => string (5) "72338"
            'result' => null
            'update' => string (8) "20190113"
        ]
        'SUPERAntiSpyware' => array (4) [
            'detected' => boolean false
            'version' => string (10) "5.6.0.1032"
            'result' => null
            'update' => string (8) "20190109"
        ]
        'TheHacker' => array (4) [
            'detected' => boolean false
            'version' => string (12) "6.8.0.5.3954"
            'result' => null
            'update' => string (8) "20190113"
        ]
        'K7GW' => array (4) [
            'detected' => boolean false
            'version' => string (11) "11.22.29663"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'K7AntiVirus' => array (4) [
            'detected' => boolean false
            'version' => string (11) "11.22.29661"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Baidu' => array (4) [
            'detected' => boolean false
            'version' => string (7) "1.0.0.2"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'NANO-Antivirus' => array (4) [
            'detected' => boolean false
            'version' => string (13) "1.0.134.24576"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'F-Prot' => array (4) [
            'detected' => boolean false
            'version' => string (9) "4.7.1.166"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Symantec' => array (4) [
            'detected' => boolean false
            'version' => string (7) "1.8.0.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'ESET-NOD32' => array (4) [
            'detected' => boolean false
            'version' => string (5) "18703"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'TrendMicro-HouseCall' => array (4) [
            'detected' => boolean false
            'version' => string (11) "10.0.0.1040"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Avast' => array (4) [
            'detected' => boolean false
            'version' => string (11) "18.4.3895.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'ClamAV' => array (4) [
            'detected' => boolean false
            'version' => string (9) "0.101.1.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Kaspersky' => array (4) [
            'detected' => boolean false
            'version' => string (9) "15.0.1.13"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'BitDefender' => array (4) [
            'detected' => boolean false
            'version' => string (3) "7.2"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Babable' => array (4) [
            'detected' => boolean false
            'version' => string (7) "9107201"
            'result' => null
            'update' => string (8) "20180918"
        ]
        'ViRobot' => array (4) [
            'detected' => boolean false
            'version' => string (11) "2014.3.20.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Rising' => array (4) [
            'detected' => boolean false
            'version' => string (9) "25.0.0.24"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Ad-Aware' => array (4) [
            'detected' => boolean false
            'version' => string (9) "3.0.5.370"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Emsisoft' => array (4) [
            'detected' => boolean false
            'version' => string (13) "2018.4.0.1029"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Comodo' => array (4) [
            'detected' => boolean false
            'version' => string (5) "30271"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'F-Secure' => array (4) [
            'detected' => boolean false
            'version' => string (13) "11.0.19100.45"
            'result' => null
            'update' => string (8) "20190111"
        ]
        'DrWeb' => array (4) [
            'detected' => boolean false
            'version' => string (12) "7.0.34.11020"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Zillya' => array (4) [
            'detected' => boolean false
            'version' => string (10) "2.0.0.3729"
            'result' => null
            'update' => string (8) "20190111"
        ]
        'TrendMicro' => array (4) [
            'detected' => boolean false
            'version' => string (11) "10.0.0.1040"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'McAfee-GW-Edition' => array (4) [
            'detected' => boolean false
            'version' => string (10) "v2017.3010"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Sophos' => array (4) [
            'detected' => boolean false
            'version' => string (6) "4.98.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Cyren' => array (4) [
            'detected' => boolean false
            'version' => string (7) "6.2.0.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Jiangmin' => array (4) [
            'detected' => boolean false
            'version' => string (8) "16.0.100"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Avira' => array (4) [
            'detected' => boolean false
            'version' => string (7) "8.3.3.8"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Fortinet' => array (4) [
            'detected' => boolean false
            'version' => string (9) "5.4.247.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Antiy-AVL' => array (4) [
            'detected' => boolean false
            'version' => string (7) "3.0.0.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Kingsoft' => array (4) [
            'detected' => boolean false
            'version' => string (13) "2013.8.14.323"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Arcabit' => array (4) [
            'detected' => boolean false
            'version' => string (9) "1.0.0.837"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'AegisLab' => array (4) [
            'detected' => boolean false
            'version' => string (3) "4.2"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'ZoneAlarm' => array (4) [
            'detected' => boolean false
            'version' => string (3) "1.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Avast-Mobile' => array (4) [
            'detected' => boolean false
            'version' => string (9) "190113-00"
            'result' => null
            'update' => string (8) "20190113"
        ]
        'Microsoft' => array (4) [
            'detected' => boolean false
            'version' => string (11) "1.1.15500.2"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'TACHYON' => array (4) [
            'detected' => boolean false
            'version' => string (13) "2019-01-14.02"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'AhnLab-V3' => array (4) [
            'detected' => boolean false
            'version' => string (12) "3.14.1.22785"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'VBA32' => array (4) [
            'detected' => boolean false
            'version' => string (6) "3.35.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'ALYac' => array (4) [
            'detected' => boolean false
            'version' => string (7) "1.1.1.5"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'MAX' => array (4) [
            'detected' => boolean false
            'version' => string (11) "2018.9.12.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Zoner' => array (4) [
            'detected' => boolean false
            'version' => string (3) "1.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Tencent' => array (4) [
            'detected' => boolean false
            'version' => string (7) "1.0.0.1"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Yandex' => array (4) [
            'detected' => boolean false
            'version' => string (7) "5.5.1.3"
            'result' => null
            'update' => string (8) "20190111"
        ]
        'Ikarus' => array (4) [
            'detected' => boolean false
            'version' => string (7) "0.1.5.2"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'GData' => array (4) [
            'detected' => boolean false
            'version' => string (20) "A:25.20177B:25.14138"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'AVG' => array (4) [
            'detected' => boolean false
            'version' => string (11) "18.4.3895.0"
            'result' => null
            'update' => string (8) "20190114"
        ]
        'Panda' => array (4) [
            'detected' => boolean false
            'version' => string (7) "4.6.4.2"
            'result' => null
            'update' => string (8) "20190113"
        ]
        'Qihoo-360' => array (4) [
            'detected' => boolean false
            'version' => string (10) "1.0.0.1120"
            'result' => null
            'update' => string (8) "20190114"
        ]
    ]
    'scan_id' => string (75) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6-1547474005"
    'sha1' => string (40) "60e4817454eea5d2e78e1426f0c63b6dab109916"
    'resource' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'response_code' => integer 1
    'scan_date' => string (19) "2019-01-14 13:53:25"
    'permalink' => string (117) "https://www.virustotal.com/file/9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6/analysis/1547474005/"
    'verbose_msg' => string (35) "Scan finished, information embedded"
    'total' => integer 58
    'positives' => integer 0
    'sha256' => string (64) "9981a56db98e722d04fe28af053449bf345c47980610418744f778adb0c6cfe6"
    'md5' => string (32) "5c7a4ccfbfb7366b74951bc313c10a92"
]
═════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════
Called from <ROOT>/file.php:9 [d()]
```
### Lưu ý
Đối với API key thường, hệ thống giới hạn số request được sử dụng, chi tiết tham khảo tại đây: https://developers.virustotal.com/v2.0/reference


### Liên hệ

Nếu có bất cứ thông tin nào cần trao đổi và tìm hiểu, vui lòng liên hệ theo thông tin sau

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3