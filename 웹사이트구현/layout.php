
<style>

@import url('https://fonts.googleapis.com/css2?family=Hahmlet:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    box-sizing: border-box;
    font-family: 'Hahmlet', serif;
    text-decoration: none;
    z-index:2;
}
body {
    font-family: Arial;
    padding: 10px;
    background: #f6f0e8;
    font-weight: 300;
}
/* Header/Blog Title */
.header {
    padding: 20px;
    text-align: center;
    background: #45331b;
    font-weight: 500;
    color: #f6f0e8;
}
.header h1 {
    font-size: 50px;
    color: #f6f0e8;
}
/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #c19a6b;
}
/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f6f0e8;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background: #c0965f;
}
/* Change color on hover */
.topnav a:hover {
    background-color: #c19a6b;
    color:
}
/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
    width:20%;
    background-color: #e4d2ba;
    padding-right: 25px;
    padding-left: 25px;
}
/* Right column */
.rightcolumn {
  margin:20;
    float: left;
    width: 50%;
    padding-left: 25px;
}
h2{
  text-align:center;
}
.column {
    float: left;
    padding: 10px;
}
  /* Left and right column */
  .column.side {
      width: 20%;
      background: #d7ebc2;


  }
  /* Middle column */
  .column.middle {
      width: 40%;
      background: #660099;
      padding-left: 25px;
  }
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>

<div class="header">
  <a href="/"><h1>카페가 궁금해!</h1></a>
  <p>카페 리뷰글을 센스 있게 읽는 법</p>
</div>
<div class='topnav'>
    <a href='/introduce'> 사이트 소개</a>
    <a href='/main'> 상위, 하위 5개 리뷰 보기!</a>
</div>




  <!--Main content block-->
  {% block content %}{% endblock %}
