var db=require('./database');
var args = process.argv.slice(2);
if(args.length==0) {
    var sql = 'SELECT * FROM PartsEx';
    var inputData = args[0]
    db.query(sql, inputData,function (err, data) {
        if (err) throw err;
        console.log(data)
    });
} else if(args.length==1) {
    var sql = 'SELECT * FROM PartsEx from ?';
    const inputData= {
        partNo:     parseInt(args[0])
    };
    db.query(sql, inputData,function (err, data) {
        if (err) throw err;
        console.log(data)
    });
}

