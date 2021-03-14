<?php

return new PDO("mysql:host=sqldb;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
