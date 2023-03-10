const mysql = require("mysql");
  
let db_con  = mysql.createConnection({
    host: "www.azedpress.com",
    user: "azedpres_user",
    password: 'Azedpress@2022',
    database: 'azedpres_trackingdb'
});
  
db_con.connect((err) => {
    if (err) {
      console.log("Database Connection Failed !!!", err);
      return;
    }
  
    console.log("We are connected to www.azedpress.com mysql database");
  
    // Here is the query
    let query1 = "SELECT SUM(weight) AS airlbs FROM tbltrackings WHERE serviceid = 1";
  
    db_con.query(query1, (err, rows) => {
        if(err) throw err;
  
        console.log(rows);
    });

    let query2 = "SELECT SUM(weight) AS marlbs FROM tbltrackings WHERE serviceid = 2";
  
    db_con.query(query2, (err, rows) => {
        if(err) throw err;
  
        console.log(rows);
    });  
});
