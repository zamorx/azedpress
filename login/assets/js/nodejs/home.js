var mysql = require('mysql');

var con = mysql.createConnection({
    host: "www.azedpress.com",
    user: "azedpres_user",
    password: 'Azedpress@2022',
    database: 'azedpres_trackingdb'
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT COUNT(uid) as usuarios FROM tbllogins", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});

