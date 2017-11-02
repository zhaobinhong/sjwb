<template>

  <div>

    <div id="page">

      <header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner"
              style="background-image:url(static/images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <div class="display-t">
                <div class="display-tc">
                  <h1 id="ac" name="2" class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp">注册</h1>
                  <h2 class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp"></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


    </div>



    <div class="gtco-section">
      <div class="gtco-container">
        <div class="row row-pb-md">
          <div class="col-md-6 col-md-offset-3 animate-box fadeInUp animated-fast">
            <h3>注册四季无边账号</h3>
            <form action="#">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="userName">Name</label>
                  <input type="text" id="userName" class="form-control" placeholder="账号">
                </div>
                <li class="pageinputmsg" id="username_ts" style="display: none;">
                  <strong id="username_tss"></strong>
                </li>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="password">password</label>
                  <input type="password" id="password" class="form-control" placeholder="密码">
                </div>
                <li class="pageinputmsg" id="password_ts" style="display: none;">
                  <strong id="password_tss"></strong>
                </li>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="password2">password</label>
                  <input type="password" id="password2" onblur="bd_pass()" class="form-control" placeholder="确认密码">
                </div>
                <li class="pageinputmsg" id="password_qr_ts" style="display: none;">
                  <strong id="password_qr_tss"></strong>
                </li>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="name">真实姓名</label>
                  <input type="text" id="name" class="form-control" onblur="isname()" placeholder="真实姓名">
                </div>
                <li class="pageinputmsg" id="name_ts" style="display: none;">
                  <strong id="name_tss"></strong>
                </li>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="code">身份证号</label>
                  <input type="text" id="code" class="form-control" onblur="iscode()" placeholder="身份证号">
                </div>
                <li class="pageinputmsg" id="code_ts" style="display: none;">
                  <strong id="code_tss"></strong>
                </li>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="phone">手机号</label>
                  <input type="text" id="phone" class="form-control" onblur="isphone()" placeholder="手机号">
                </div>
                <li class="pageinputmsg" id="phone_ts" style="display: none;">
                  <strong id="phone_tss"></strong>
                </li>
              </div>

              <div class="form-group">
                <input type="submit" value="注册" class="btn btn-primary btn-lg">
              </div>

            </form>
          </div>

        </div>
      </div>

    </div>



  </div>


</template>

<script>
  export default {
    name: 'main',
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  body {
    overflow-x: -webkit-paged-y;
  }

  hr {
    color: #bbb;
  }

  h1, h2 {
    font-weight: normal;
  }

  ul.partnerQY {
    list-style-type: none;
    padding: 0;
  }

  .partnerQY li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }

  div.li {
    padding-top: 84px;
    padding-bottom: 84px;
    border-bottom: 1px solid #bbb;
  }

  .li img {
    display: inline-block;
    display: -webkit-inline-box;
  }

  .li h4 {
    color: #5895f1;
    font-size: 24px;
    line-height: 1;
    margin-top: 48px;
  }

  .li p {
    font-size: 18px;
    line-height: 26px;
  }

  div.end {
    border-bottom: none;
  }

  .hed {
    margin-top: 5rem;
  }

  .hed h3 {
    font-size: 24px;
    color: #000;
  }

  .hed p {
    font-size: 18px;
    color: #aaa;
  }

  .advList {
    overflow: hidden;
    display: inline-block;
    margin: 0 auto;
  }

  .advList li {
    margin: 2em 2em;
    cursor: pointer;
    border-radius: 8px;
    float: left;
    min-width: 200px;
    height: 260px;
    background: #f2f2f2;
    transition: all .6s;
  }

  .advList li:hover {
    transform: scale(1.1);
    box-shadow: 0px 5px 8.6px 1.4px rgba(67, 67, 67, 0.3);
  }

  .advList li img {
    padding: 22px 0;
    display: inline-block;
    margin: 0 auto;
  }

  .advList li h4 {
    font-size: 20px;
    font-weight: 600;
  }

  .advList li p {
    font-size: 16px;
    line-height: 20px;
  }

  .partnerQY {
    overflow: hidden;
  }

  .partnerQY img {
    width: 100%;
  }

  .partnerQY li {
    margin: 20px 0px;
    padding: 16px 20px;
  }

  .partnerQY li:hover {
    cursor: pointer;
    box-shadow: 5px 5px 8px rgba(67, 67, 67, 0.3) inset, -5px -5px 8px rgba(67, 67, 67, 0.3) inset;
  }

  .partnerQY li img {
    display: inline-block;
    margin: 0 auto;
  }

</style>
