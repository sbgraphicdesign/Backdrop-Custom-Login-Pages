<div class="layout-login">
	
	<header class="header-login">
		<?php print $content['header']; ?>
	</header>

	<main class="main-login" role="main" aria-label="<?php print t('Main content'); ?>">
	   <div class="main-login-inner">
		 <h2 class="title"><?php print $title; ?></h2>
		<?php if ($messages): ?>
			<div class="main-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
		<?php print $messages; ?>
			</div>
		<?php endif; ?>
		  <div class="main-login-content">
			<?php print $content['main']; ?>
		  </div>
		</div>
	</main>

	<footer class="footer-login">
		<?php print $links; ?>
		<?php if ((current_path() == "user/login") || (current_path() == "user/register")): ?>
			<p class="password-link"><?php print l(t('Forgot your password?'), 'user/password'); ?></p>
		<?php endif; ?>
		<?php if ((current_path() == "user/register") || (current_path() == "user/password")): ?>
			<p class="login-link"><?php print l(t('Login to an existing account'), 'user/login'); ?></p>
		<?php endif; ?>
		<?php if ((current_path() == "user/login") || (current_path() == "user/password")): ?>
			<p class="register-link"><?php print l(t('Create a new account'), 'user/register'); ?></p>
		<?php endif; ?>
		<p class="homepage-link"><a href="<?php print url('<front>'); ?>">&larr; Back to home page</a></p>
	</footer>

</div>