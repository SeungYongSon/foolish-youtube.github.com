# search-youtube.github.io
유튜브 검색기

## 해결하지 못한 이슈
"No 'Access-Control-Allow-Origin' header is present on the requested resource." 이슈만 고치면 되는데 못 고치고 있다.... 

## 사용법  

몰론 "No 'Access-Control-Allow-Origin' header is present on the requested resource." 이슈가 해결되었다는 가정하에 사용이 가능하다.

https://seungyongson.github.io/search-youtube.github.io/?search=검색어

저 url에 자신이 원하는 검색어를 적고 들어가면 검색어에 맞는 유튜브 영상이 틀어진다.


php 버젼은 별문제 없다. 그냥 아파치 서버에 넣고, 도메인/search-youtube.php/?search=원하는검색어 이렇게 사용하면 된다.

# + 내용 추가  
저 이슈는 Cross Domain 문제였다. 현재 고칠려고 노력하고 있다. 

만약 정말 쓰고 싶다면 크롬 바로가기 속성에 대상에다가 --disable-web-security --user-data-dir="C:\chrome 을 추가해야한다.  
예를 들어 대상이 C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" 이면  
C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" --disable-web-security --user-data-dir="C:\chrome"  
이렇게 내용을 바꾸면된다.  

이제 바꾼 크롬 바로가기로 통해 크롬에 들어가서 위에 사용법대로 사용하면 된다.  