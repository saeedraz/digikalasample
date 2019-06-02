
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
*
{
	font-family:yekan;
	font-size:22px;
}
body {
  margin: 0;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  direction: rtl;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="picture/video.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <p>برای توقف ویدیو دکمه توقف و برای رفتن به صفحه نخست دکمه بازگشت را کلیک کنید</p>
  <button id="myBtn" onclick="myFunction()">توقف</button>
  <button id="myBtn" onclick="location.href='index.php'">بازگشت</button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "توقف";
  } else {
    video.pause();
    btn.innerHTML = "اجرا";
  }
}
</script>

</body>
</html>

