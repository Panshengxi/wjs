<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>微金所</title>
  <link rel="stylesheet" href="lib/css/bootstrap.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet/less" href="less/index.less">
  <script src="js/less.js"></script>
</head>
<body>
  <header id="header">
    <!-- 顶部通栏区域 -->
    <div class="topbar hidden-xs hidden-sm hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-2 text-center">
            <a href="#" class="mobile-link"><i class="icon-mobilephone"></i> 手机微金所 <i class="glyphicon glyphicon-chevron-down"></i> <img src="img/app-qrcode.jpg" height="136" width="120" alt=""></a>
          </div>
          <div class="col-md-5 text-center"> <i class="icon-telephone"></i> 4006-89-4006（服务时间：9:00-21:00）
          </div>
          <div class="col-md-2 text-center"><a href="#">常见问题</a> <a href="#" >财富登录</a></div>
          <div class="col-md-3 text-center">
            <a class="btn btn-danger btn-sm"><?php echo $_POST['name']?><span>, 欢迎来到微金所首页!</span></a>
            <a href="./index.html" class="btn btn-link" >退出</a>
          </div>
        </div>
      </div>
    </div>
    <!-- 导航条 -->
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="40" data-offset-bottom="200">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
              <i class="icon-icon"></i>
              <i class="icon-logo"></i>
            </a>  
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" class="white">我要投资</a></li>   
              <li><a href="#">我要借款</a></li>   
              <li><a href="#">平台介绍</a></li>   
              <li><a href="#">新手专区</a></li>   
              <li><a href="#">最新动态</a></li>   
              <li><a href="#">微论坛</a></li>   
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">个人中心</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- 轮播图滑块区域 -->
  <section id = "slide">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" data-large-iamge="img/slide_01_2000x410.jpg" data-small-iamge="img/slide_01_640x340.jpg">


        </div>
        <div class="item" data-large-iamge="img/slide_02_2000x410.jpg" data-small-iamge="img/slide_02_640x340.jpg">


        </div>
        <div class="item" data-large-iamge="img/slide_03_2000x410.jpg" data-small-iamge="img/slide_03_640x340.jpg">


        </div>
        <div class="item" data-large-iamge="img/slide_04_2000x410.jpg" data-small-iamge="img/slide_04_640x340.jpg">


        </div>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- 特色部分区域 -->
  <section id = "feature">
    <div class="container">
      <div class="row">
        <ul class="media-list">
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
          <li class="media col-md-4">
            <a href="#">
              <div class="media-left">
                <i class="icon-meiyuan"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">支付交易保障</h4>
                <p>银联支付全程保障财产安全</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- 预约部分区域 -->
  <section id="booking" class="hidden-xs">
    <div class="container">
      <div class="pull-left">
        <i class="icon-naozhong"></i>现在有<span class="text-danger">458</span>人在排队，累计预约交易成功<span class="text-danger">7409</span>次。 什么是预约投标？ <a href="#" class="text-danger">立即预约</a>
      </div>
      <div class="pull-right hidden-sm">
        <a href="#"> <i class="icon-video"></i>微金所企业宣传片</a>
      </div>
    </div>
  </section>
  <!-- 商品区域 -->
  <section id = "products">
    <div class="container">
      <!-- tab栏-->
      <ul class="ul-wapper">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#product1" aria-controls="product1" role="tab" data-toggle="tab">特别推荐</a></li>
          <li role="presentation"><a href="#product2" aria-controls="product2" role="tab" data-toggle="tab">微投资</a></li>
          <li role="presentation"><a href="#product3" aria-controls="product3" role="tab" data-toggle="tab">微小宝</a></li>
          <li role="presentation"><a href="#product4" aria-controls="product4" role="tab" data-toggle="tab">微消费</a></li>
          <li role="presentation"><a href="#product5" aria-controls="product5" role="tab" data-toggle="tab">微增利</a></li>
          <li role="presentation"><a href="#product6" aria-controls="product6" role="tab" data-toggle="tab">微金宝</a></li>
          <li role="presentation"><a href="#product7" aria-controls="product7" role="tab" data-toggle="tab">微转让</a></li>
        </ul>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="product1">
          <div class="row">
            <div class="col-md-4 col-sm-6 active">
              <div class="product-box active">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="product-box">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p class="tooltips">
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="北京市">京</a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="实名认证">实</a>
                  </p>
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="product-box">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="product-box">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="product-box">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="product-box">
                <div class="product-left">
                  <h4>新手体验标008期</h4>
                  <div class="row">
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                    <div class="col-xs-6">
                      <p>起步价</p>
                      <p><strong>1000.00</strong><sub>万</sub></p>
                    </div>
                  </div>
                </div>
                <div class="product-right">
                  <p><strong>8</strong><sub>%</sub></p>
                  <p>年率利</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="product2">2</div>
        <div role="tabpanel" class="tab-pane" id="product3">3</div>
        <div role="tabpanel" class="tab-pane" id="product4">4</div>
        <div role="tabpanel" class="tab-pane" id="product5">5</div>
        <div role="tabpanel" class="tab-pane" id="product6">6</div>
        <div role="tabpanel" class="tab-pane" id="product7">7</div>
      </div>
    </div>
  </section>
  <!-- 新闻模块 -->
  <section id = "news">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-md-offset-2">
          <h4>全部新闻</h4>
        </div>
        <div class="col-md-1">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
              <i class="icon-news01"></i>
            </a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
              <i class="icon-news02"></i>
            </a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
              <i class="icon-news03"></i>
            </a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
              <i class="icon-news04"></i>
            </a></li>
          </ul>
        </div>
        <div class="col-md-7">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <ul>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
                <li><a href="#">【微还款】一周还款公告2017年7月10日-2017年7月16日</a></li>
              </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">...</div>
            <div role="tabpanel" class="tab-pane" id="messages">...</div>
            <div role="tabpanel" class="tab-pane" id="settings">...</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 合作伙伴区域 -->
  <section id = "partner" class = "hidden-sm">
    <div class="container">
      <h3>合作伙伴</h3>
      <ul>
        <li><a href="#"><i class="icon-partner1"></i></a></li>
        <li><a href="#"><i class="icon-partner2"></i></a></li>
        <li><a href="#"><i class="icon-partner3"></i></a></li>
        <li><a href="#"><i class="icon-partner4"></i></a></li>
        <li><a href="#"><i class="icon-partner5"></i></a></li>
        <li><a href="#"><i class="icon-partner6"></i></a></li>
        <li><a href="#"><i class="icon-partner7"></i></a></li>
        <li><a href="#"><i class="icon-partner8"></i></a></li>
        <li><a href="#"><i class="icon-partner9"></i></a></li>
      </ul>
    </div>
  </section>

</div>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="lib/js/bootstrap.js"></script>
<script>
  $(function () {
    /*轮播图功能*/
    var items = $('.carousel-inner .item');
    $(window).on('resize', function() {
     var windowWidth = $(window).width();
     if (windowWidth > 640){
      items.each( function(index, value) {
        var largeImg = $(value).data('large-iamge');
        $(value).html('<a href="#" class="pcImg" style="background-image:url('+largeImg+')"></a>');
      });
    }else {
      items.each( function(index, value) {
        var smallImg = $(value).data('small-iamge');
        $(value).html('<a href="#" class="mobileImg"><img src="'+smallImg+'" alt="..."></a> ');
      });
    }
  }).trigger('resize');


  });
</script>
</body>
</html>