{% extends 'layout.php' %}
{% block content %}

<!--왼쪽 소개글-->
<div class="leftcolumn">
  <h2 style="text-align: left;">리뷰 보기!</h2>
  <p>가고 싶은 카페 이름을 검색해보세요.</p>
  <p>그 카페의 긍정적인 리뷰, 부정적인 리뷰 5개씩 볼 수 있어요.</p>
  <p><a href="/">뒤로가기</a></p>
</div>


  <!--이름 입력 창-->
<div class="rightcolumn">
  <p> 리뷰 분석이 완료되었습니다 </p>
  <p><a href="/result_p">긍정적인 리뷰 보러 가기</a></p>
  <p><a href="/result_n">부정적인 리뷰 보러 가기</a></p>
  <p> 가장 부정적인 리뷰는 다음과 같습니다. </p>
    {% for table in tables %}
          {{ table|safe }}
    {% endfor %}


</div>
{%endblock%}
