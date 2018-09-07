<?php
// If on Pantheon, tell me a dad joke in my workflow logs

if (defined('PANTHEON_ENVIRONMENT') ) {
  
  passthru("curl https://icanhazdadjoke.com/ && echo ");
}
