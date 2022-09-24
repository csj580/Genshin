<?php
  include 'inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src = "common.js"></script>
        <style>
            div{
                padding: 10px;

            }
        </style>
    </head>
    <body>

        <div>
            <label for = "id"> 아이디 : </label>
            <input type= "id" name = "id" id = "id" >
        </div>
        <div>
            <label for = "password"> 비밀번호 : </label>
            <input type="password" name = "password" id = "password">
        </div>
        <div>
            <label for="passwordCheck"> 비밀번호 확인 : </label>
            <input type="password" id = "password-check">
        </div>
        <input type="button" value="계정생성" id="signup-button">
        <input type="button" value="뒤로가기" onclick="back();">
      </form>
      <script>
        const signupForm = document.querySelector("#signup-form");
        const signupButton = document.querySelector("#signup-button");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#password-check");
        signupButton.addEventListener("click", function(e) {
            if(password.value&& password.value === passwordCheck.value){

            signupForm.submit();
            }else{
                alert("비밀번호가 서로 일치하지 않습니다");
            }
        });
    </script>
  </body>
</html>
