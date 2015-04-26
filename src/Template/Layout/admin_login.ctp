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
  <?php echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
  <?php echo $this->Html->css('base.css') ?>
  <?php echo $this->Html->css('admin.css') ?>

  <?php echo $this->fetch('meta') ?>
  <?php echo $this->fetch('css') ?>
  <?php echo $this->fetch('script') ?>
</head>
<body class="login" style="background-image: url('<?= $image ?>')">
  <div class="login-box">
    <div class="wrapper">
      <?php echo $this->Flash->render() ?>
      <?php echo $this->fetch('content') ?>
    </div>
    <p class="login-copyright">&copy; Central de administração incrível</p>
  </div>
</body>
</html>