
var mysql = require(MySQL); 

var con = mysql.createConnection({
    host: "localhost",
    user: "cxm7682_User",
    password: "Roxanna/2021",
    database: "cxm7682_MovieTable"
}); 

con.connect(function(err) {
  if(err) throw err; 
  con.query("SELECT * FROM Moviesselection", function(err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
}); 
