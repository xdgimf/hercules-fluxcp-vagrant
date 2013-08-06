<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php if ($session->isLoggedIn()): ?>
                        <h3 style="font-size: 2rem;">Logged in as: <?php echo htmlspecialchars($session->account->userid) ?><?php if (count($this->getServerNames()) > 1) echo " on ". htmlspecialchars($session->serverName); ?></h3>
                        <a href="<?php echo $this->url('account', 'view') ?>" title="View account">My account</a> | <a href="<?php echo $this->url('account', 'logout') ?>" onclick="return confirm('Are you sure you want to logout?')">Log out</a>

<?php endif ?>