"use strict";
const mysql = require("mysql");
//local mysql db connection
const dbConn = mysql.createPool({
  host: "us-cdbr-east-04.cleardb.com",
  user: "b3bb53c302db49",
  password: "a635c1e8",
  database: "heroku_d496c577474afaf",
});

module.exports = dbConn;
