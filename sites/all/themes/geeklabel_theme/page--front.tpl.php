<body>
    <div id="carousel" class="clearfix">
       <div class="container-fluid">
         <div class="row">
            <div class="wrapper clearfix">
                  <div id="logo">
                       <?php if ($logo): ?>
                           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"  class="home-logo">

                           </a>
                       <?php endif; ?>
                </div>
                <?php print render($page['carousel']); ?>
            </div>
         </div>
       </div>
    </div>
    
    <div id="content-top" class="clearfix">
      <div class="container-fluid">
        <div class="row">
            <div class="wrapper clearfix">
                <?php print render($page['content-top']); ?>
            </div>
        </div>
       </div>
    </div>


     <div id="content-middle" class="clearfix">
          <div class="container-fluid">
            <div class="row">
                 <div class="wrapper clearfix">
                  <?php print render($page['content-middle']); ?>
                </div>
            </div>
         </div>
      </div>

  <div id="content-bottom" class="clearfix">
        <div class="container-fluid">
            <div class="row">


          <div class="wrapper clearfix">

                <?php print render($page['content-bottom']); ?>
                </div>

            </div>
        </div>
  </div>



      <div id="services" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                 <div class="wrapper clearfix">
                <?php print render($page['services']); ?>

                 </div>

            </div>

        </div>
    </div>

     <div id="clients" class="clearfix">
        <div class="container-fluid">
            <div class="row">
              <div class="wrapper clearfix">
                <?php print render($page['clients']); ?>

              </div>

            </div>

        </div>
    </div>


    <div id="find-us" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <?php print render($page['find-us']); ?>
            </div>

        </div>
    </div>

       <div id="contacts" class="clearfix">
        <div class="container-fluid">
            <div class="row">
               <div class="wrapper clearfix">
                <?php print render($page['contacts']); ?>
                </div>
            </div>

        </div>
    </div>
