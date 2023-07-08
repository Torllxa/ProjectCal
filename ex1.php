<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container">
        <div>
            <p class="fs-1 bg bg-primary text-white mt-3 p-3">โปรแกรมคำนวณหาสี่เหลี่ยม</p>
        </div>

    <form action="Ex2.php" method="GET">
    <div  class="row">
        <div class="col-1">
            <label form="widht" class="form-label">ความกว้าง</label>
        </div>
        <div class="col-2">
            <input type="text" class=" form-control" id="widht" name="widht" value=""/>
        </div>
    </div>   

    
    <div  class="row mt-3">
        <div class="col-1">
            <label form="height" class="form-label">ความสูง</label>
        </div>
        <div class="col-2">
            <input type="text" class=" form-control" id="height" name="height" value=""/>
        </div>
    </div>

    <div  class="row mt-3">
        <div class="col-6">
            <input type="submit" class="btn btn-primary cal-3" id="cal" name="cal" value="คำนวณ"/>
        </div>
    </div>

    </div>
    </form>
</body>
</html>