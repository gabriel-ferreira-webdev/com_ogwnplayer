<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ogwnplayer
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<!-- Twitch player -->

<div class="player-title">
<div class="custom-ogwn-player">
<div class="live-player-container">
<div class="iframe-container">
  <iframe class="iframe" src="https://player.twitch.tv/?channel=onegreatworknetwork&amp;parent=onegreatworknetwork.com&amp;parent=www.onegreatworknetwork.com&muted=false&volume=1.0" frameborder="0" allowfullscreen="true" scrolling="no" width="100%" height="300px"></iframe>
</div>
<?php
$app = JFactory::getApplication();
if ($app->getMenu()->getActive()->home) {
?>
    <jdoc:include type="modules" name="live"/>
    <div style='padding-top: 12px;' class='live-title'>
      <span>Now Playing:</span>
      <span id="vlc-title">
        <?php include 'videoplayer/VLCPlaying.txt'; ?>
      </span>
      <script>
      const vlcTitle = document.getElementById('vlc-title');
      setInterval(function() {
        fetch('videoplayer/VLCPlaying.txt')
          .then(response => response.text())
          .then(text => vlcTitle.innerHTML = text);
      }, 1000 * 60);
      </script>
    </div>
<?php
}
?>
</div>
</div>
</div>
