var mysql = require('mysql');
var conn = mysql.createConnection({
    host: 'db.cs.dal.ca',
    user: 'gang',
    password: '780309vY',
    database: 'gang'
});
conn.connect(function(err) {
    if (err) throw err;
    console.log('Database is connected successfully !');
});
module.exports = conn;
