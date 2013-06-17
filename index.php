<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  
  <title>Helder lunchen</title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  
  
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/app.css" />
  
  <script src="js/modernizr-transitions.js"></script>
  
  <!-- scripts at bottom of page -->

</head>
<body class="homepage ">

  <nav id="site-nav">
    <h1>Helder lunchen</h1>
    <img src="img/profiel.png">
    
    <h1>Vincent Stolk</h1>
    <table border="1">
      <tr>
        <td>Maisbrood</td>
        <td>x 4</td>
      </tr>
      <tr>
        <td>Bruinbrood</td>
        <td>x 1</td>
      </tr>
      <tr>
        <td>Honing</td>
        <td>x 1</td>
      </tr>
      <tr>
        <td>Geitenkaas</td>
        <td>x 1</td>
      </tr>
      <tr>
        <td>Kaas</td>
        <td>x 2</td>
      </tr>
      <tr>
        <td>Appel stroop</td>
        <td>x 1</td>
      </tr>      
    </table>

    <button>Opslaan</button>
  </nav> <!-- #site-nav -->
  
  <section id="content">

    <div id="container" class="transitions-enabled clearfix">

      <div class="item maisbrood col2">
        <img src="img/food_maisbrood.png">
        <section>
          <h1>Maisbrood</h1>
          <input type='number' value="0" min="0" max="9">          
        </section>
      </div>

      <div class="item ei col1">
        <img src="img/food_ei.png">
        <section>
          <h1>Ei</h1>
          <input type='number' value="0" min="0" max="9">          
        </section>
      </div>

      <div class="item geitenkaas col1">
        <img src="img/food_geitenkaas.png">
        <section>
          <h1>Geitenkaas</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>
      
      <div class="item bruinbrood col2">
        <img src="img/food_bruinbrood.png">
        <section>
          <h1>Bruinbrood</h1>
          <input type='number' value="0" min="0" max="9">          
        </section>
      </div>

      <div class="item appelstroop col2">
        <img src="img/food_appelstroop.png">
        <section>
          <h1>Appel stroop</h1>
          <input type='number' value="0" min="0" max="9">          
        </section>
      </div>

      <div class="item kaas col2">
        <img src="img/food_kaas.png">
        <section>
          <h1>Kaas</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item jam col1">
        <img src="img/food_jam.png">
        <section>
          <h1>Jam</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item avocado col1">
        <img src="img/food_avocado.png">
        <section>
          <h1>Avocado</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item eiersalade col1">
        <img src="img/food_eiersalade.png">
        <section>
          <h1>Eier salade</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item pindakaas col2">
        <img src="img/food_pindakaas.png">
        <section>
          <h1>Pindakaas</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item honing col1">
        <img src="img/food_honing.png">
        <section>
          <h1>Honing</h1>
          <input type='number' value="0" min="0" max="9">          
        </section>
      </div>

      <div class="item jam col1">
        <img src="img/food_jam.png">
        <section>
          <h1>Jam</h1>
          <input type='number' value="0" min="0" max="9">
          
        </section>
      </div>

      <div class="item ossenworst col1">
        <img src="img/food_ossenworst.png">
        <section>
          <h1>Ossenworst</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item makreel col1">
        <img src="img/food_makreel.png">
        <section>
          <h1>Makreel</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

      <div class="item mayo col1">
        <img src="img/food_mayo.png">
        <section>
          <h1>Mayo</h1>
          <input type='number' value="0" min="0" max="9">
        </section>
      </div>

    </div> <!-- #container -->


    <footer id="site-footer">
      Helder lunchen <img src="img/logo.png"><a href="http://mvaneijgen.nl"> mvaneijgen</a>
    </footer>


    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="jquery.masonry.min.js"></script>
    <script>
    $(function(){

      var $container = $('#container');

      $('#mini-container').masonry({
        columnWidth: 50
      });

      $container.masonry({
        itemSelector: '.item',
        columnWidth: 240,
        isAnimated: !Modernizr.csstransitions
      });

    // Sites using Masonry markup
    var $sites = $('#sites'),
    $loadingItem = $container.find('.loading');

    var ajaxError = function(){
      $loadingItem.text('Could not load examples :(');
    };
    

    
  });
    </script>
    <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '32786' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>    

  </section> <!-- #content -->

</body>
</html>