var mysql = require('mysql');

var con = mysql.createConnection({
  host: "www.azedpress.com",
  user: "azedpres_user",
  password: 'Azedpress@2022',
  database: 'azedpres_trackingdb'
});

con.connect(function (err) {
  if (err) throw err;
  con.query("SELECT * FROM tbltrackings", function (err, result) {
    if (err) throw err;

    setValue(result);

    function setValue(value) {
      someVar = value;
      console.log(someVar);
    }
  });
});

