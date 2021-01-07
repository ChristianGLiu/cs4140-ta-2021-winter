var db=require('./database');
var args = process.argv.slice(2);
if(args.length!=1) {
    throw new Error("Please add extra 1 arguement to delete the record of partNo ")
}
var updateId = parseInt(args[0])
var sql = `DELETE FROM PartsEx WHERE partNo= ?`;
db.query(sql, [updateId], function (err, data) {
    if (err) throw err;
    console.log(data)
});
