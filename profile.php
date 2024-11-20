<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว</title>
    <style>
        body {
            font-family: "Prompt", sans-serif;
            background-color: #FCEEE2; /* พื้นหลังนอก */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .profile-card {
            background-color: #ffffff;
            border-radius: 15px;
            border: 8px solid #F3EBD2; /* ขอบด้านนอก */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
            padding: 20px 30px;
            text-align: left;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .header h1 {
            font-size: 1.8em;
            color: #4a90e2;
            margin: 10px 0 5px;
        }
        p {
            margin: 5px 0;
        }
        .section-title {
            color: #4a90e2;
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ul li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="header">
            <img src="sky.jpg" alt="Profile Picture">
            <h1>ประวัติส่วนตัว</h1>
        </div>
        
        <p><strong>ชื่อ:</strong> นางสาวสุกัญญา จำปาแก้ว</p>
        <p><strong>วันเกิด:</strong> 27 กันยายน 2545</p>
        <p><strong>อายุ:</strong> 22 ปี</p>
        <p><strong>การศึกษา:</strong> สาขาวิชาการจัดการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ<br>
        คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</p>

        <h2 class="section-title">โครงการปัจจุบัน</h2>
        <p>ระบบดูแลและจัดแสดงแบบออนไลน์ของสวนสัตว์เขาสวนกวาง</p>

        <h2 class="section-title">เครื่องมือที่ใช้ในการพัฒนา</h2>
        <p><strong>Software:</strong></p>
        <ul>
            <li>โปรแกรมจัดการฐานข้อมูล: MySQL </li>
            <li>โปรแกรมที่ใช้ในการพัฒนา: Visual Studio Code</li>
            <li>ภาษาคอมพิวเตอร์ที่ใช้: HTML5, CSS, PHP</li>
            <li>โปรแกรมเว็บเซิร์ฟเวอร์: Apache Web Server</li>
        </ul>
        <p><strong>Hardware:</strong></p>
        <ul>
            <li>หน่วยประมวลผลกลาง (CPU) : Intel Core i5-1135G7</li>
            <li>หน่วยความจำหลัก : 16 GB</li>
            <li>หน่วยเก็บข้อมูล (Hard Disk) : 500 GB</li>
        </ul>
    </div>
</body>
</html>
