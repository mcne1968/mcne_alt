//Window object
//show messag

import { createConnection } from 'mysql';

var con = createConnection({
  host: "db5000297056.hosting-data.io",
  user: "dbu513178",
  password: "2Nebras47#i",
  database: "dbs290275"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "INSERT INTO customer (Datum, Anzahl) VALUES ('2020.02.15',2)";
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log("1 record inserted");
    });
  });
