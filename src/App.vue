<template>
  <div id="app">
    <nav class="gtco-nav" role="navigation">
      <div class="gtco-container">
        <div class="row">
          <div class="col-md-12 text-right gtco-contact">
            <ul class="">
              <li><a href="#"><i class="ti-mobile"></i> 010-56212504</a></li>
              <!--<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>-->
              <!--<li><a href="#"><i class="icon-mail2"></i></a></li>-->
              <!--<li><a href="#"><i class="ti-facebook"></i></a></li>-->
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div id="gtco-logo"><img src="static/img/pngicon64.png" alt=""><a href="/">四季无边</a></div>
          </div>
          <div class="col-xs-8 text-right menu-1">
            <ul id="navActive">
              <li class="">
                <a href="/">网站首页</a>
              </li>
              <li>
                <a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='#/products';
                  window.location.reload()
                },100)">产品中心</a>
              </li>
              <li class="">
                <a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='/php/news.php';
                },100)">公司资讯</a>
              </li>
              <li class="has-dropdown">
                <a style="cursor: pointer">协议与监护</a>
                <ul class="dropdown" style="display: none;">
                  <li><a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='#/protocol';
                  window.location.reload()
                },100)">服务协议</a></li>
                  <li><a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='#/guardianship';
                  window.location.reload()
                },100)">家长监护</a></li>
                </ul>
              </li>
              <li><a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='#/add';
                  window.location.reload()
                },100)">加入我们</a></li>
              <li><a style="cursor: pointer" onclick="setTimeout(function() {
                  window.location.href='#/to';
                  window.location.reload()
                },100)">关于</a></li>
            </ul>
          </div>
        </div>

      </div>
    </nav>

    <router-view/>

    <footer id="gtco-footer" role="contentinfo">
      <div class="gtco-container">
        <div class="row row-p	b-md">

          <div class="col-md-6">
            <div class="gtco-widget">
              <h3>地址</h3>
              <p>邮编：100080</p>
              <p>注册地址:北京市海淀区苏州街1号7层33A室</p>
              <p>办公地址：北京市朝阳区融科望京中心A座2107室</p>

            </div>
          </div>


          <div class="col-md-6">
            <div class="gtco-widget">
              <h3>联系方式</h3>
              <ul class="gtco-quick-contact">
                <li><a href="#"><i class="icon-phone"></i> 010-56212504</a></li>
                <li><a href="#"><i class="icon-mail2"></i> 1473685112@qq.com</a></li>
                <li><a href="#"><i class="icon-chat"></i> 1473685112</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row copyright">
          <div class="col-md-12">
            <p class="text-content">
              <small class="block">&copy; 2017 北京四季无边科技有限公司 版权所有</small>
              <small class="block">京ICP备14041262号-1</small>
            </p>
          </div>
        </div>

      </div>
    </footer>

    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'app',
    methods: {
      clickRouterLink () {
        if (typeof (Storage) !== 'undefined') {
          if (localStorage.selected) {
            // 存储
            localStorage.selected = this.selected
          } else {
            // 创建Web Storage
            localStorage.selected = 1
          }
        } else {
          console.log('抱歉！您的浏览器不支持 Web Storage ...')
        }
        // 页面刷新
        location.reload()
      }
    }
  }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
  }
</style>
