{% extends 'layout.php' %}
{% block content %}
<div class="leftcolumn">
  <h2 style="text-align: left;">사이트 소개</h2>
  <p><a href="/">뒤로가기</a></p>
</div>


<div class="rightcolumn">

  <h3> Q. 어떤 사이트인가요? </h3>
  <p> A. 수많은 리뷰 중에서 가장 긍정적인 리뷰 5개, 가장 부정적인 리뷰 5개를 보여주는 사이트입니다. </p>

  <h3> Q. 어떻게 사용하나요? </h3>
  <p> A. 아주 쉽습니다! 원하는 가게의 카카오맵 사이트를 복사해서, 붙이면 끝! </p>
  <p> 그러면 해당 가게의 모든 후기를 크롤링한 후, 감성분석을 해서 가장 긍정적인 리뷰 5개, 가장 부정적인 리뷰 5개를 보여드립니다. </p>

  <h3> Q. 어머나! 어떻게 그게 가능하죠? </h3>
  <p> A. 서울시 10개 동의 카카오맵 리뷰를 사용해서 BERT 모델을 학습시켰습니다. </p>
</div>
{% endblock %}
