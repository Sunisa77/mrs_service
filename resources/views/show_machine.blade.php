<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าแสดงรายการเครื่องจักร</title>
    <style>
        :root{
            --bg: #fbf7f3;
            --card: #fff8f2;
            --brown-900: #4a2d23;
            --brown-700: #7b4e3f;
            --brown-500: #b26f4a;
            --accent: #d9773b;
            --muted: #8f6e5a;
            --line: #ecdacc;
            --ok: #2e7d32;
            --warn: #f57c00;
            --bad: #b00020;
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, var(--bg), #fff);
            color: var(--brown-900);
            -webkit-font-smoothing:antialiased;
        }
        .container{
            max-width:1100px;
            margin:36px auto;
            background:var(--card);
            padding:22px;
            border-radius:12px;
            box-shadow:0 8px 26px rgba(74,45,35,0.06);
            border:1px solid var(--line);
        }
        .title{
            font-size:1.4rem;
            color:var(--brown-700);
            font-weight:700;
            margin-bottom:6px;
        }
        .subtitle{
            color:var(--muted);
            font-size:0.95rem;
            margin-bottom:18px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:8px;
            overflow:hidden;
            box-shadow:0 4px 12px rgba(74,45,35,0.04);
        }
        thead th{
            text-align:left;
            padding:12px 14px;
            background: linear-gradient(90deg, var(--brown-500), var(--brown-700));
            color: #fff;
            font-weight:700;
            font-size:0.95rem;
        }
        tbody td{
            padding:12px 14px;
            border-top:1px solid var(--line);
            font-size:0.95rem;
            color:var(--brown-900);
            vertical-align:middle;
        }
        tbody tr:nth-child(even){ background:#fffaf7 }
        .muted{ color:var(--muted); font-size:0.9rem }
        .badge{
            display:inline-block;
            padding:6px 10px;
            border-radius:999px;
            font-weight:700;
            color:#fff;
            font-size:0.85rem;
        }
        .badge.ok{ background:var(--ok) }
        .badge.warn{ background:var(--warn) }
        .badge.bad{ background:var(--bad) }
        .small{ font-size:0.85rem; color:var(--muted) }
        @media (max-width:900px){
            .container{ padding:14px }
            .title{ font-size:1.1rem }
            table, thead, tbody, th, td, tr{ display:block }
            thead{ display:none }
            tbody tr{ margin-bottom:12px; border-radius:8px; border:1px solid var(--line); overflow:hidden }
            tbody td{ display:flex; justify-content:space-between; padding:10px }
            tbody td:before{ content:attr(data-label); font-weight:700; color:var(--brown-700); margin-right:8px }
        }
    </style>
</head>
<body>
 <div class="container">
     <div class="title">หน้าแสดงรายการเครื่องจักร</div>
     <div class="subtitle">แสดงรายชื่อเครื่องจักรทั้งหมด (จากตาราง machines)</div>

    <table>
        <thead>
            <tr>
                <th>รหัสเครื่องจักร</th>
                <th>ชื่อเครื่องจักร</th>
                <th>ประเภท</th>
                <th>วันที่บำรุงล่าสุด</th>
                <th>สถานะปัจจุบัน</th>
                <th>รอบบำรุง</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($model as $item)
            <tr>
                <td data-label="รหัสเครื่องจักร">{{ $item->machine_id }}</td>
                <td data-label="ชื่อเครื่องจักร">
                    <div style="font-weight:700;color:var(--brown-700)">{{ $item->machine_name }}</div>
                    @if(!empty($item->code))
                        <div class="small">{{ $item->code }}</div>
                    @endif
                </td>
                <td data-label="ประเภท">{{ $item->machine_type ?? '-' }}</td>
                <td data-label="วันที่บำรุงล่าสุด" class="muted">{{ $item->last_maintenance ?? '-' }}</td>
                <td data-label="ประเภท">{{ $item->status ?? '-' }}</td>
                <td data-label="รอบบำรุง (วัน)">{{ $item->maintenance_cycle ?? '-' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center;padding:18px;color:var(--muted)">ไม่มีข้อมูลเครื่องจักร</td>
            </tr>
            @endforelse
        </tbody>
    </table>
 </div>
</body>
</html>