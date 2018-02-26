# search-youtube.github.io
유튜브 검색기

## 해결하지 못한 이슈
"No 'Access-Control-Allow-Origin' header is present on the requested resource." 이슈만 고치면 되는데 못 고치고 있다....  



## 사용법  

몰론 "No 'Access-Control-Allow-Origin' header is present on the requested resource." 이슈가 해결되었다는 가정하에 사용이 가능하다.

https://seungyongson.github.io/search-youtube.github.io/?search=검색어

저 url에 자신이 원하는 검색어를 적고 들어가면 검색어에 맞는 유튜브 영상이 틀어진다.


php 버젼은 별문제 없다. 그냥 아파치 서버에 넣고, 도메인/search-youtube.php/?search=원하는검색어 이렇게 사용하면 된다.

