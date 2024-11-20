<?php
$host = getenv('DATABASE_HOST') ?: 'mysql';
$port = getenv('DATABASE_PORT') ?: 3306;

echo "Waiting for MySQL on $host:$port...\n";
while (!@fsockopen($host, $port)) {
    echo "MySQL not ready yet...\n";
    sleep(2);
}
echo "MySQL is ready!\n";
