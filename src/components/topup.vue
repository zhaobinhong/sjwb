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
                  <h1 id="ac" name="2" class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp">
                    充值中心</h1>
                  <h2 class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp"></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


    </div>


    <div class="gtco-section border-bottom">
      <div class="gtco-container">
        <div class="row row-pb-md">
          <div class="col-md-12 animate-box fadeInUp animated-fast">
            <form action="#">
              <div class="denglu">
                <div class="zhanghao">

                  <div class="row  fadeInUp animated-fast">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                      <h4>充值账号</h4>
                      <input class="span3" type="text" placeholder="请输入充值账号" name="username" id="username">
                      <a href="#">[确定]</a>
                    </div>
                  </div>
                </div>
                <div class="game">

                  <div class="row  fadeInUp animated-fast">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                      <h4><a>*</a>选择游戏</h4>
                      <select class="span2" name="game" id="game">
                        <option value="">选择游戏</option>
                        <option value="创世战机">创世战机</option>
                        <option value="激战太平洋">激战太平洋</option>
                        <option value="僵尸前线">僵尸前线</option>
                      </select>
                      <select class="span2" name="server" id="server">
                        <option value="">选择服务器</option>
                        <option value="A大区01服">A大区01服</option>
                        <option value="A大区02服">A大区02服</option>
                        <option value="A大区03服">A大区03服</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="money">
                  <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h4><a>*</a>选择金额：</h4>
                    <ul style='display: inline-block'>
                      <li><label class="radio "><input type="radio" name="money" id="money1" value="10">10元</label></li>
                      <li><label class="radio "><input type="radio" name="money" id="money2" value="20"> 20元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money3" value="50"> 50元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money4" value="100">100元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money5" value="200"> 200元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money6" value="300">300元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money7" value="500">500元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money8" value="800"> 800元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money9" value="1000"> 1000元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money10" value="2000">2000元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money11" value="3000">
                        3000元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money12" value="5000">
                        5000元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money13" value="10000">
                        10000元</label></li>
                      <li><label class="radio "><input type="radio" name="money" id="money14"
                                                       value="20000">20000元</label>
                      </li>
                      <li><label class="radio "><input type="radio" name="money" id="money15" value="50000">
                        50000元</label></li>
                    </ul>
                    <div class="jine">
                      <h6>其他金额：</h6><input class="span2" type="text" placeholder="" name="othermoney" id="othermoney"
                                           oninput="remove_radio()">
                      <h6>获得游戏币：<a id="yuanbao">0 四季无边 豆</a>[兑换比例1：<a>10</a>]</h6>
                    </div>

                  </div>


                </div>
                <div class="bank">

                  <div class="col-md-12 text-center gtco-heading">
                    <h4><a>*</a>选择银行：</h4>
                    <ul style="display: inline-block">
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank1" value="GS">
                          <img src="/static/img/GS.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank2" value="JH">
                          <img src="/static/img/JH.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank3" value="NH">
                          <img src="/static/img/NH.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank4" value="ZS">
                          <img src="/static/img/ZS.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank5" value="ZG">
                          <img src="/static/img/ZG.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank6" value="BJ">
                          <img src="/static/img/BJ.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank7" value="JT">
                          <img src="/static/img/JT.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank8" value="XY">
                          <img src="/static/img/XY.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank9" value="NJ">
                          <img src="/static/img/NJ.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank10" value="MS">
                          <img src="/static/img/MS.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank11" value="GD">
                          <img src="/static/img/GD.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank12" value="PA">
                          <img src="/static/img/PA.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank13" value="BH">
                          <img src="/static/img/BH.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank14" value="DY">
                          <img src="/static/img/DY.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank15" value="NB">
                          <img src="/static/img/NB.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank16" value="ZX">
                          <img src="/static/img/ZX.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank17" value="SF">
                          <img src="/static/img/SF.jpg">
                        </label>
                      </li>
                      <li>
                        <label class="radio ">
                          <input type="radio" name="bank" id="bank18" value="GF">
                          <img src="/static/img/GF.jpg">
                        </label>
                      </li>
                    </ul>
                  </div>

                  <br>
                  <div class="anniu">
                    <button class="btn btn-primary btn-lg" type="button" id="submit1">确认充值</button>
                  </div>
                </div>
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

  h6 {
    float: left;
    margin-top: -2px;
  }

  li {
    list-style-type: none;
  }

  a:hover {
    text-decoration: none;
  }

  .zhanghao {
    margin: 20px auto;
    overflow: hidden;
  }

  .zhanghao label {
    float: left
  }

  .game select {
    margin-right: 30px;
  }

  .money {
    width: 900px;
    margin: 30px auto;
    overflow: hidden;
  }

  .money h6 {
    float: left;
    line-height: 30px;
    margin-top: -1px;
  }

  .money input {
    width: 150px;
    float: left;
  }

  .money li {
    padding: 5px;
    width: 170px;
    float: left;
  }

  .money ul {
    float: left;
    margin-left: -4px;
  }

  .jine {
    font-size: 14px;
    margin: 10px 0 0 60px;
    float: left;
  }


  .jine h6{

    font-size: 14px;
  }

  .bank {
    width: 900px;
    margin: 30px auto;
    overflow: hidden;
  }

  .bank h6 {
    float: left;
    width: 900px;
    padding-top: -4px;
  }

  .bank input {
    width: 150px;
    float: left;
    padding-top: 5px
  }

  .bank li {
    padding: 10px 0 5px 10px;
    width: 200px;
    float: left;
  }

  .bank ul {
    margin-left: -10px;
  }

  .bank img {
    width: 150px;
    height: 30px;
    padding-top: -5px;
  }

  .anniu {
    width: 250px;
    margin: 0 auto;
  }

  input[type="file"], input[type="image"], input[type="reset"], input[type="button"], input[type="radio"], input[type="checkbox"]
.radio input[type="radio"], .checkbox input[type="checkbox"] {
    width: auto;
    float: left;
    margin-left: -20px;
  }

  .succeed-box {
    width: 800px;
    height: auto;
    margin: 100px auto 10px;
    overflow: hidden;
  }

  .succeed-pic {
    width: 180px;
    float: left;
  }

  .succeed-pic img {
    display: block;
    width: 100%;
  }

  .succeed-box p {
    width: 500px;
    height: 180px;
    line-height: 180px;
    float: left;
    font-size: 36px;
    font-weight: bold;
    text-indent: 30px;
  }

  .gologin {
    width: 250px;
    height: 30px;
    display: block;
  }

  .gologin .username {
    height: 30px;
    margin: 0;
    display: inline-block;
  }
</style>
