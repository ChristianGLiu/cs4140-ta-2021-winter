var db=require('./database');
var args = process.argv.slice(2);
if(args.length!=3) {
    // console.log("Please add extra 3 arguements values for partName, partDescription and currentPrice. ")
    throw new Error("Please add extra 3 arguements values for partName, partDescription and currentPrice. ")
}
var sql = 'INSERT INTO PartsEx SET ?';
const inputData= {
    partName:     args[0],
    partDescription: args[1],
    currentPrice :  args[2]
};
db.query(sql, inputData,function (err, data) {
    if (err) throw err;
    console.log(data)
});
