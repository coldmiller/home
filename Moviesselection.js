var mysql = require('mysql');

var can = mysql.createConnection({
  host: "localhost",
  user: "coletmiller",
  password: "Roxanna/2021"
});

can.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  can.query("CREATE DATABASE MovieTable", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
}); 


