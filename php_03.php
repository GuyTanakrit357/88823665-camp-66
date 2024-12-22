<!DOCTYPE html>
<html>
    <head>
        <!-- เชื่อมต่อ Bootstrap สำหรับใช้จัดรูปแบบหน้า -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <!-- แสดงผลตัวเลขที่ส่งมาจากฟอร์ม -->
            <h3>Number : 
                <?php 
                // ตรวจสอบว่ามีการส่งค่ามาและค่าที่ส่งมาเป็นตัวเลขหรือไม่
                if (isset($_POST['numberMultipy']) && is_numeric($_POST['numberMultipy'])) { 
                    // ใช้ htmlspecialchars เพื่อป้องกัน XSS
                    echo htmlspecialchars($_POST['numberMultipy']); 
                } else { 
                    echo "No number provided."; // แสดงข้อความเมื่อไม่มีค่าถูกส่งมา
                } 
                ?>
            </h3>

            <!-- ฟอร์มสำหรับกรอกตัวเลข -->
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Number to multiply</label>
                    <!-- อินพุตสำหรับกรอกตัวเลข -->
                    <input name="numberMultipy" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input Number here" required>
                </div>
                
                <?php 
                // ตรวจสอบว่ามีการส่งค่ามาและค่าที่ส่งมาเป็นตัวเลขหรือไม่
                if (isset($_POST['numberMultipy']) && is_numeric($_POST['numberMultipy'])) { 
                    $myvar = (int)$_POST['numberMultipy']; // แปลงค่าที่ส่งมาให้เป็นตัวเลขแบบ Integer
                    for ($i = 1; $i <= 12; $i++) { // วนลูปตั้งแต่ 1 ถึง 12 เพื่อแสดงผลตารางสูตรคูณ
                        $result = $myvar * $i; // คำนวณผลลัพธ์ของการคูณ
                ?>
                <div class="row">
                    <!-- แสดงข้อความสูตรคูณ เช่น "5 x 1 =" -->
                    <div class="h2 col text-end"><?php echo "$myvar x $i ="; ?></div>
                    <!-- แสดงผลลัพธ์ เช่น "5" -->
                    <div class="h2 col text-start"><?php echo $result; ?></div>
                </div>
                <?php 
                    }
                }
                ?>
                <!-- ปุ่มสำหรับส่งฟอร์ม -->
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </body>
</html>
