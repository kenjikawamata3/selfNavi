<style scoped>
@import "../../css/login.css";
</style>

<template>
  <div id="contents">
    <!-- TOP ------------>
    <div id="login_form_top">
      <h3>selfNavi LOGIN TOP</h3>
      <p>
        Email address and password are required
      </p>
    </div>
    <!-- INPUT AREA ------------>
    <div id="login_form_input_area">
      <!-- input email address and password -->
      <input type="text"     class="login_form_input_area" placeholder="Email Address" v-model="valueEmailAddress" />
      <p v-if="emailAddress.isError">wrong email address</p>
      <input type="password" class="login_form_input_area" placeholder="Password"      v-model="valuePassword"     />
      <p v-if="password.isError">wrong password</p>
    </div>
    <!-- BTN ------------>
    <div id="login_form_btn">
      <!-- show error message default empty-->
      <!-- 「ログイン」ボタン押下時にエラーがあった場合、またはAWS Cognitoエラーがあった場合に表示する -->
      <div id="message"></div>
      <input type="button" id="btn_login" name="btn_login" value="LOGIN" @click="processLogin()">
    </div>
  </div>
</template>

<script src="../../js/login.js"></script>
