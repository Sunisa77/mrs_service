<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สั่งอาหารไทยออนไลน์</title>
    <style>
        body {
            background: #fff8f1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #4b2e05;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff3e0;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(255, 152, 0, 0.08);
            padding: 32px 24px 40px 24px;
        }
        .header {
            text-align: center;
            margin-bottom: 32px;
        }
        .header h1 {
            color: #e65100;
            font-size: 2.5rem;
            margin-bottom: 8px;
        }
        .header p {
            color: #a1887f;
            font-size: 1.1rem;
        }
        .menu-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 28px;
        }
        .menu-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(255, 152, 0, 0.07);
            padding: 18px 14px 20px 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.15s;
        }
        .menu-card:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 6px 18px rgba(255, 152, 0, 0.13);
        }
        .menu-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #ffb74d;
            margin-bottom: 14px;
            background: #ffe0b2;
        }
        .menu-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #ff9800;
            margin-bottom: 6px;
            text-align: center;
        }
        .menu-desc {
            font-size: 0.98rem;
            color: #6d4c1b;
            text-align: center;
            margin-bottom: 10px;
        }
        .menu-price {
            font-size: 1.1rem;
            color: #e65100;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .order-btn {
            background: linear-gradient(90deg, #ffb74d 60%, #ffe0b2 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 22px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .order-btn:hover {
            background: linear-gradient(90deg, #ffa726 60%, #ffd180 100%);
        }
        @media (max-width: 600px) {
            .container {
                padding: 12px 2vw;
            }
            .header h1 {
                font-size: 1.5rem;
            }
            .menu-img {
                width: 90px;
                height: 90px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>สั่งอาหารไทยออนไลน์</h1>
            <p>เลือกเมนูโปรดของคุณ แล้วสั่งได้ทันที!</p>
        </div>
        <div class="menu-list">
            <div class="menu-card">
                <img class="menu-img" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=400&q=80" alt="ผัดไทย">
                <div class="menu-title">ผัดไทย</div>
                <div class="menu-desc">เส้นจันท์ผัดกับซอสสูตรพิเศษ โรยถั่วงอกและกุ้งสด</div>
                <div class="menu-price">60 บาท</div>
                <button class="order-btn">สั่งเลย</button>
            </div>
            <div class="menu-card">
                <img class="menu-img" src="https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80" alt="ต้มยำกุ้ง">
                <div class="menu-title">ต้มยำกุ้ง</div>
                <div class="menu-desc">ซุปเผ็ดเปรี้ยวรสจัดจ้าน พร้อมกุ้งตัวโต</div>
                <div class="menu-price">80 บาท</div>
                <button class="order-btn">สั่งเลย</button>
            </div>
            <div class="menu-card">
                <img class="menu-img" src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=crop&w=400&q=80" alt="ข้าวผัดปู">
                <div class="menu-title">ข้าวผัดปู</div>
                <div class="menu-desc">ข้าวผัดหอมๆ กับเนื้อปูสดใหม่ เสิร์ฟพร้อมมะนาว</div>
                <div class="menu-price">70 บาท</div>
                <button class="order-btn">สั่งเลย</button>
            </div>
            <div class="menu-card">
                <img class="menu-img" src="https://images.unsplash.com/photo-1464306076886-debca5e8a6b0?auto=format&fit=crop&w=400&q=80" alt="แกงเขียวหวานไก่">
                <div class="menu-title">แกงเขียวหวานไก่</div>
                <div class="menu-desc">แกงเขียวหวานเข้มข้น หอมกะทิและเครื่องแกงสด</div>
                <div class="menu-price">75 บาท</div>
                <button class="order-btn">สั่งเลย</button>
            </div>
        </div>
    </div>
</body>
</html>