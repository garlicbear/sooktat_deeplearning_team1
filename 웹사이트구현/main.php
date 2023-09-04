
<!--왼쪽 소개창-->


<!--이름 입력 창-->
{% extends 'layout.php' %}
{% block content %}
<!--왼쪽 소개글-->
<div class="leftcolumn">
  <h2 style="text-align: left;">리뷰 보기!</h2>
  <p>가고 싶은 카페 이름을 검색해보세요.</p>
  <p>그 카페의 긍정적인 리뷰, 부정적인 리뷰 5개씩 볼 수 있어요.</p>
  <p><a href="/">뒤로가기</a></p>
</div>

<div class="rightcolumn">
  <form method="POST" action="/result1">
    <p>
        리뷰글을 보고 싶은 카페의 후기url을 입력해주세요:
        <input type="text" name="cafe" id="cafe">
        <input type="submit" value="리뷰 크롤링하기" onclick="explain()">
    </p>
  </form>
  <p id=explain></p>
</div>
<script>
  function explain(){
    alert("크롤링 시작..")
    var p=document.getElementById("explain");
    p.innerText="크롤링 중입니다. 10초~20초 이내로 완료되니, 조금만 기다려주세요.";
  }
</script>
<!--값 입력받기-->

  <?php
  #값 받기
  function is_array_empty($name_array) {/*비어있으면 true를 반환*/
      foreach($name_array as $elm) {
          if(empty($elm)) return True;
      }
      return False;
  }

  session_start();



   ?>
 {% endblock %}
