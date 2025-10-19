<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-color: #f5e6d3;
  color: #4b2e05;
}

/* แถบเมนู */
.navbar {
  background-color: #8b5e34;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.navbar h1 {
  margin: 0;
}

.navbar nav a {
  color: white;
  text-decoration: none;
  margin-left: 1.5rem;
  font-weight: 500;
  transition: 0.3s;
}

.navbar nav a:hover,
.navbar nav a.active {
  text-decoration: underline;
}

/* ส่วนเนื้อหา Home */
.home-section {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
  text-align: center;
}

.home-section .content {
  max-width: 600px;
}

.home-section h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.home-section p {
  font-size: 1.1rem;
  margin-bottom: 2rem;
}

/* ปุ่มลิงก์ */
.btn {
  background-color: #a47148;
  color: white;
  text-decoration: none;
  padding: 0.8rem 1.5rem;
  border-radius: 8px;
  margin: 0.5rem;
  display: inline-block;
  transition: 0.3s;
}

.btn:hover {
  background-color: #8b5e34;
}

/* ส่วนท้าย */
footer {
  background-color: #8b5e34;
  color: white;
  text-align: center;
  padding: 1rem 0;
  position: fixed;
  bottom: 0;
  width: 100%;
}
    </style>
</head>
<body>
  <header class="navbar">
    <h1>Machine System</h1>
    <nav>
      
    </nav>
  </header>

  <section class="home-section">
    <div class="content">
      <h2>ยินดีต้อนรับเข้าสู่ระบบ Machine System</h2>
      <p>ระบบบริหารจัดการเครื่องจักร ที่ออกแบบมาเพื่อเพิ่มประสิทธิภาพ และความสะดวกในการใช้งาน</p>

      <div class="button-group">
        <a href=" {{ route('show_machine') }} " class="btn">ดูข้อมูลเครื่องจักร</a>
        <a href="{{ route('show_record') }}" class="btn">บันทึกการซ่อมบำรุง</a>
        <a href="{{ route('show_technician') }}" class="btn">รายชื่อช่าง</a>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 Machine System. All rights reserved.</p>
  </footer>
</body>
</html>