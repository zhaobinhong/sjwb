<template>
  <div id="app">
    <div id="page">
      <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-12 text-right gtco-contact">
              <ul class="">
                <li><a href="#"><i class="ti-mobile"></i> +86 010-56212504</a></li>
                <!--<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>-->
                <!--<li><a href="#"><i class="icon-mail2"></i></a></li>-->
                <!--<li><a href="#"><i class="ti-facebook"></i></a></li>-->
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <div id="gtco-logo"><img src="/static/img/pngicon64.png" alt=""><a href="index.html">四季无边</a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
              <ul>
                <li class="active">
                  <a href="index.html">网站首页</a>
                </li>
                <li>
                  <a href="about.html">产品中心</a>
                </li>
                <li class="has-dropdown">
                  <a href="services.html">公司资讯</a>
                </li>
                <!--<li class="has-dropdown">-->
                  <!--<a href="#">Dropdown</a>-->
                  <!--<ul class="dropdown">-->
                    <!--<li><a href="#">HTML5</a></li>-->
                    <!--<li><a href="#">CSS3</a></li>-->
                    <!--<li><a href="#">Sass</a></li>-->
                    <!--<li><a href="#">jQuery</a></li>-->
                  <!--</ul>-->
                <!--</li>-->
                <li><a href="portfolio.html">加入我们</a></li>
                <li><a href="contact.html">关于</a></li>
              </ul>
            </div>
          </div>

        </div>
      </nav>

      <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(/static/img/back.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
          <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
              <div class="display-t">
                <div class="display-tc">
                  <h1 class="animate-box" data-animate-effect="fadeInUp">游戏动漫一触即发</h1>
                  <h2 class="animate-box" data-animate-effect="fadeInUp">游戏发行、动漫发行、音乐发行、影视发行</h2>
                  <p class="animate-box" data-animate-effect="fadeInUp"><a href="#"
                                                                           class="btn btn-white btn-lg btn-outline">了解更多</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


    </div>


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
    name: 'app'
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
