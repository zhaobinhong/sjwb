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
                  <h1 id="ac" name="2" class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp">资讯中心</h1>
                  <h2 class="animate-box fadeInUp animated-fast" data-animate-effect="fadeInUp"></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


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
