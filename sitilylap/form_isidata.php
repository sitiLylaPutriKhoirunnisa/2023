<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    font-family: sans-serif;
    background-color: aqua;
}
.h2{
    text-align: center;
    font-weight: 300;
}
.login{
    width: 350px;
    background: white;
    margin: 80px auto;
    padding: 30px 20px;
}
label{
    font-size: 11pt;
}
.form_login{
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
.tombol{
    background: rgb(22, 139, 130);
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
   
    border-radius: 3px;
    padding: 10px 20px;
}


    </style>
</head>
<body>
    <div class="login">
        <form action="isidata.php" method="post">

            <h2>ISI DATA SISWA</h2>

            <label>
                NIS : 
            <input type="number" name="nis" id="" class="form_login" placeholder="nis">
            </label>
            <label>
                NAMA : 
            <input type="text" name="nama" id="" class="form_login" placeholder="nama">
            </label>
            <label>
                KELAS: 
            <input type="text" name="kelas" id="" class="form_login" placeholder="kelas">
            </label>

            <button type="submit" class="btn btn-danger">Save</button>
            
        </form>
    </div>
    
    
</body>
</html>