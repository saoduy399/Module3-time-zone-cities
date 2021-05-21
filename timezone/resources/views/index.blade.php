<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Currently time on all around the world</h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option>Select city</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">HongKong</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</div>
    <script>
        document.getElementById("select-city").onchange = function () {
            ChooseCity()
        };

        function ChooseCity() {
            var time_zone = document.getElementById("select-city");
            window.location.href = time_zone.value;
        }
    </script>
</body>
</html>
