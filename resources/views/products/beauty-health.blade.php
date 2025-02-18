<!DOCTYPE html>
<html lang="en">
<head>
    @include('component.head')  
    <title>Beauty & Health</title>
    <style>
        .content {
            margin: auto;
            width: 65%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .kotak {
            height: 210px;
            width: 260px;
            background-color: gray;
            border-radius: 5px;   
        }
        .list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin: 50px auto;
            justify-content: center;
            max-width: 900px;
        }
    </style>
</head>
<body>
    @include('component.header')
    <div class="content">
        <h1>Daftar Produk Kesehatan dan Kecantikan</h1>
        <div class="list">
            <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
              <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
              <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
              <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
              <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
              <div class="kotak">
                <div class="img"></div>
                <p></p>
              </div>
        </div>
    </div>
</body>
</html>
