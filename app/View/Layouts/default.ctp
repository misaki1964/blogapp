<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>継続的インテグレーション開発サンプル:<?php echo $title_for_layout ?></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header class="page-header">
			<h1><?php echo $this->Html->link('継続的インテグレーション開発サンプル', ['action' => 'index']) ?></h1>
		</header>
		<article>
			<header>
				<?php echo $this->Session->flash(); ?>
			</header>
			<?php echo $this->fetch('content'); ?>
		</article>
		<footer></footer>
	</div>
	<div class="panel panel-default">
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
