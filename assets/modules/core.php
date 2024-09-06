<?php

define("is_dnt_enabled", isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] == 1)) // <-- Do not track https://support.google.com/chrome/answer/2790761?hl=en&co=GENIE.Platform%3DDesktop

?>