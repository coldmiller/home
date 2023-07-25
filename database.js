var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "yourusername",
  password: "yourpassword",
  database: "MovieTable"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE customers (fname VARCHAR(255),lname VARCHAR(255), address VARCHAR(255)), DESCRIPTION(500)";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
});
