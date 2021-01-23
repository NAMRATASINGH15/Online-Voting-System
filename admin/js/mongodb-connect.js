const MongoClient = require('mongodb').MongoClient;

MongoClient.connect('mongodb://localhost:27017/OnlineVotingSystem', (err, db) => {

    if (err) {


        return console.log('Unable to connect');
    }

    console.log("Connected to database");


    db.collection('OnlineVotingSystem').insertOne({
        id: '2',
        name: 'Namrata Singh',
        aadharnumber: '358969495104',
        phonenumber: '9876544215',
        dateofbirth: '1990/11/15',
        gender: 'female'
    });
    db.collection('OnlineVotingSystem').insertOne({
        id: '3',
        name: 'Singh',
        aadharnumber: '118969735103',
        phonenumber: '9876573210',
        dateofbirth: '1991/11/15',
        gender: 'male'
    });
    db.collection('OnlineVotingSystem').insertOne({
        id: '4',
        name: 'Namrita',
        aadharnumber: '7789657995703',
        phonenumber: '9834543210',
        dateofbirth: '1992/11/15',
        gender: 'female'
    });



    db.close();


});

