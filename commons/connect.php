<?php
// connect CSDL
$host = DB_HOST;
$port = DB_PORT;
$dbname = DB_NAME;

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);
  // cai dat che do bao loi va xu ly ngoai le
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // cai dat che do tra du lieu
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e) {
  debug("Connection failed: " . $e->getMessage());
}
