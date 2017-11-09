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
                  <h1 id="ac" name="2" class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp">交易纠纷处理</h1>
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
        <div class="row">
          <div class="col-md-12">
            <div class="feature-left animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
              <div class="text-left">
                <p>北京四季无边科技有限公司（以下简称四季无边）在此特别提醒用户在注册、登陆本网络游戏前请务必仔细阅读本《纠纷处理方式》（未成年人应当在其法定监护人陪同下阅读）中的各个条款，以确保您在享受本网络游戏服务的同时维护自身合法权益： </p>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="feature-left animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
              <div class="text-left">
                <h4>用户之间纠纷处理方式</h4>
                <p>1．四季无边仅作为本网络游戏的运营商，如若本网络游戏用户之间发生纠纷且无法协商一致的，可向国家相关行政机关或司法机关寻求解决包括但不限于向公安机关报案、申请仲裁或向人民法院提起诉讼等。四季无边将会为实名注册用户提供必要的协助和支持，并根据有关行政机关和司法机关的要求承担一定的举证责任或采取必要措施。</p>
                <p>2．本网络游戏用户之间发生纠纷的，也可向四季无边客服人员投诉并举证。用户需提供与其账号注册信息一致的个人有效身份证件、必要的国家行政或司法机关文件和其他四季无边要求提供的相关证据。经四季无边审核确认后，可以给予必要的协助和支持。
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="feature-left animate-box fadeInLeft animated-fast" data-animate-effect="fadeInLeft">
              <div class="text-left">
                <h4>用户与四季无边之间纠纷处理方式 </h4>
                <p>1．如本网络游戏用户对四季无边的服务有任何异议的，可以向四季无边的客服人员投诉并举证。查证属实的，四季无边将立即更正并按照现行法律规定给予用户必要的补偿。 </p>
                <p>2．如本网络游戏用户对四季无边的服务有任何异议的，也可以向双方约定（具体参见《四季无边网络游戏使用协议》）的四季无边公司所在地人民法院提起诉讼。</p>
              </div>
            </div>
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

  h4{
    font-weight: bold;
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
