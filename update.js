var db=require('./database');
var args = process.argv.slice(2);
if(args.length!=4) {
    throw new Error("Please add extra 4 arguements to update record of partNo for the values of partName, partDescription and currentPrice ")
}
var updateId = parseInt(args[0])
const inputData= {
    partName:     args[1],
    partDescription: args[2],
    currentPrice :  args[3]
};
var sql = `UPDATE PartsEx SET ? WHERE partNo= ?`;
db.query(sql, [inputData, updateId], function (err, data) {
    if (err) throw err;
    console.log(data)
});
