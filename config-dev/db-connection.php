<?php

return new PDO("mysql:host=mysql-server;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
