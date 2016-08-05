<?php 
define("GET_USER_FROM_ID", "SELECT * FROM users WHERE id = :id");
define("VERIFY_USER", "SELECT * FROM users WHERE id = :id and password = :password");
define("REGISTER_USER", "INSERT INTO users (id, password, name, address) VALUES (:id, :password, :name, :address)");
define("SUBMIT_ORDER", "INSERT INTO orders (id, userId, serviceRequested, partnerId, requestTimestamp, qualityRating, priceRating, contactNumber, contactName, contactAddress, billedAmt, status) VALUES(:id, :userId, :serviceRequested, :partnerId, :requestTimestamp, :qualityRating, :priceRating, :contactNumber, :contactName, :contactAddress, :billedAmt, :status)");
define("GET_ORDER_INFO_FROM_ID", "SELECT * FROM orders WHERE id = :id");
define("GET_ALL_ORDERS_FOR_USER", "SELECT * FROM orders WHERE userId = :userId");




