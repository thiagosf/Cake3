<!doctype html>
<html>
<head>
  <?php echo $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $this->fetch('title') ?>
  </title>
  <?php echo $this->Html->meta('icon') ?>

  <?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic') ?>
  <?php echo $this->Html->css('base.css') ?>
  <?php echo $this->Html->css('admin.css') ?>

  <?php echo $this->fetch('meta') ?>
  <?php echo $this->fetch('css') ?>
  <?php echo $this->fetch('script') ?>
</head>
<body>
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><?php echo $this->Html->link("Cake3", ['controller' => 'Dashboard']); ?></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>
      <section class="top-bar-section">
        <ul class="left">
          <li><?php echo $this->Html->link("Posts", ['controller' => 'Posts', 'prefix' => 'admin']); ?></li>
          <li><?php echo $this->Html->link("Categorias", ['controller' => 'Categories']); ?></li>
          <li><?php echo $this->Html->link("Contatos", ['controller' => 'Contacts']); ?></li>
        </ul>
      </section>
    </nav>
  </div>
  <div id="container">
    <div id="content">
      <?php echo $this->Flash->render() ?>
      <div class="row">
        <div class="column">
          <?php 

          if ( $this->request->controller !== 'Dashboard' ) {

            ?>
            <h1 class="main-title"><?php echo $this->fetch('title') ?></h1>
            <?php 

          } 

          ?>
          <?php echo $this->fetch('content') ?>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <blockquote>
            Com organização e tempo, acha-se o segredo de fazer tudo e bem feito.
            <cite>Pitágoras</cite>
          </blockquote>
        </div>
      </div>
    </div>
    <footer class="text-right">
      <div class="row">
        <div class="column">
          <hr>
          <p><em>Desenvolvido com o incrível CakePHP <strong>|=^)</strong></em></p>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>